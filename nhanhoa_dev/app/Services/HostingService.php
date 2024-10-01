<?php

namespace App\Services;

use App\Mail\HostingPayment;
use App\Models\Hosting;
use App\Models\HostingPay;
use App\Models\SgoHostingPromotion;
use Exception;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Storage;

class HostingService
{
    protected $hosting;
    protected $hostingPay;

    protected $clientService;
    public function __construct(Hosting $hosting, HostingPay $hostingPay, ClientService $clientService)
    {
        $this->hosting = $hosting;
        $this->hostingPay = $hostingPay;
        $this->clientService = $clientService;
    }

    public function getHostingAll(){
        try {
            Log::info('Fetching all hosting');
            return $this->hosting->all();
        } catch (Exception $e) {
            Log::error('Failed to fetch hosting: ' . $e->getMessage());
            throw new Exception('Failed to fetch hosting');
        }
    }

    public function getHostingByType($id){
        try {
            Log::info('Fetching hosting by type');
            return $this->hosting->where('hostingtype_id', $id)->get();
        } catch (Exception $e) {
            Log::error('Failed to fetch hosting by type: ' . $e->getMessage());
            throw new Exception('Failed to fetch hosting by type');
        }
    }

    public function createHosting(array $data)
    {
        try {
            DB::beginTransaction();
                $logo = $data['logo'];
                $directoryPath = 'public/hosting';

                $logoFileName = 'image_' . $logo->getClientOriginalName();
                $logoFilePath = 'storage/hosting/' . $logoFileName;

                Storage::putFileAs($directoryPath, $logo, $logoFileName);
            $datanew = [
                'name' => $data['name'],
                'price' => $data['price'],
                'storage' =>$data['storage'] ,
                'bandwidth' => $data['bandwidth'],
                'cpu' => $data['cpu'],
                'ram' => $data['ram'],
                'mysql' => $data['mysql'],
                'ftp_account' => $data['ftp_account'],
                'domain' => $data['domain'],
                'subdomain' => $data['subdomain'],
                'alias_parked_domain' => $data['alias_parked_domain'],
                'email_account' => $data['email_account'],
                'hostingtype_id' => $data['hostingtype_id'],
                'logo' =>  $logoFilePath,
            ];

            $hosting = $this->hosting->create($datanew);
            if(!empty($data['promotion'])){
                foreach ($data['promotion'] as $key => $item) {
                    SgoHostingPromotion::create([
                        'hosting_id' => $hosting->id,
                        'promotion_id' => $item
                    ]);
                }
            }

            DB::commit();
            return $hosting;
        } catch (Exception $e) {
            DB::rollback();
            Log::error('Failed to create hosting: ' . $e->getMessage());
            throw new Exception('Failed to create hosting');
        }
    }


    public function updateHosting(array $data, $id): hosting
    {
        try {
            DB::beginTransaction();
            DB::commit();
            $hosting = $this->hosting->find($id);
            $datanew = [
                'name' => $data['name'],
                'price' => $data['price'],
                'storage' =>$data['storage'] ,
                'bandwidth' => $data['bandwidth'],
                'cpu' => $data['cpu'],
                'ram' => $data['ram'],
                'mysql' => $data['mysql'],
                'ftp_account' => $data['ftp_account'],
                'domain' => $data['domain'],
                'subdomain' => $data['subdomain'],
                'alias_parked_domain' => $data['alias_parked_domain'],
                'email_account' => $data['email_account'],
                'hostingtype_id' => $data['hostingtype_id'],
            ];
            if (isset($data['logo'])) {

                $directoryPath = 'public/logohosting';
                // Storage::deleteDirectory($directoryPath);
                // Storage::makeDirectory($directoryPath);
                $logo = $data['logo'];
                $logoFileName = 'image_' . $logo->getClientOriginalName();
                $logoFilePath = 'storage/logohosting/' . $logoFileName;
                Storage::putFileAs('public/logohosting', $logo, $logoFileName);
                $datanew['logo'] = $logoFilePath;
            }
            $hosting->update($datanew);
            SgoHostingPromotion::where('hosting_id', $id)->delete();
            if(!empty($data['promotion'])){
                foreach ($data['promotion'] as $key => $item) {
                    SgoHostingPromotion::create([
                        'hosting_id' => $id,
                        'promotion_id' => $item
                    ]);
                }
            }
            return $hosting;
        } catch (Exception $e) {
            DB::rollback();
            Log::error('Failed to update hosting: ' . $e->getMessage());
            throw new Exception('Failed to update hosting');
        }
    }
    public function deleteHosting($id): hosting
    {
        try {
            DB::beginTransaction();
            DB::commit();
            $hosting = $this->hosting->find($id);
            $hosting->delete();
            return $hosting;
        } catch (Exception $e) {
            DB::rollback();
            Log::error('Failed to update hosting: ' . $e->getMessage());
            throw new Exception('Failed to update hosting');
        }
    }

    public function payHosting(array $data){
        try {
            // dd($data);
            DB::beginTransaction();
            // dd($data);
            $datanew = [
                'name' => $data['name'],
                'phone' => $data['phone'],
                'email' =>$data['email'] ,
                'hostingid' => $data['hostingid'],
            ];
            $hostingpay = $this->hostingPay->create($datanew);
            DB::commit();
            $hosting = $this->hosting->find($data['hostingid']);

            if ($hosting->hostingtype_id == 1) {
                $hostingname = 'Windows Hosting - ' . $hosting->name;
            } elseif ($hosting->hostingtype_id == 2) {
                $hostingname = 'Linux Hosting - ' . $hosting->name;
            }
            // Tạo mảng dữ liệu email
            $dataemail = [
                'name' => $data['name'],
                'phone' => $data['phone'],
                'email' => $data['email'],
                'productname' => $hostingname,
                'package_name' => $hostingname,
                'title' => 'Hosting'
            ];
            $this->clientService->createClient($dataemail);
            Mail::to($data['email'])->send(new HostingPayment($dataemail));
            $emailTo = env('MAIL_USERNAME');
            Mail::send('client.email.admin', $dataemail, function ($message) use ($emailTo) {
                $message->to($emailTo)
                    ->subject('Đăng ký tư vấn');
            });
            return $hostingpay;
        } catch (Exception $e) {
            DB::rollback();
            Log::error('Failed to create hosting: ' . $e->getMessage());
            throw new Exception('Failed to create hosting');
        }
    }
}
