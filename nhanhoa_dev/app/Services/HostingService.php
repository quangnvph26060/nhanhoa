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

    public function __construct(Hosting $hosting, HostingPay $hostingPay)
    {
        $this->hosting = $hosting;
        $this->hostingPay = $hostingPay;
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
            DB::beginTransaction();

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
                'hostingname' => $hostingname,
            ];

            Mail::to($data['email'])->send(new HostingPayment($dataemail));
            return $hostingpay;
        } catch (Exception $e) {
            DB::rollback();
            Log::error('Failed to create hosting: ' . $e->getMessage());
            throw new Exception('Failed to create hosting');
        }
    }
}
