<?php

namespace App\Services;

use App\Mail\SslPaySuccessMail;
use App\Models\Ssl;
use App\Models\SslPay;
use Exception;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Storage;

class SslService
{
    protected $sslPay;
    protected $ssl;
    protected $clientService;

    public function __construct(Ssl $ssl, SslPay $sslPay, ClientService $clientService)
    {
        $this->ssl = $ssl;
        $this->sslPay = $sslPay;
        $this->clientService = $clientService;
    }

    public function getSslAll(){
        try {
            Log::info('Fetching all ssl');
            return $this->ssl->all();
        } catch (Exception $e) {
            Log::error('Failed to fetch ssl: ' . $e->getMessage());
            throw new Exception('Failed to fetch ssl');
        }
    }

    public function createsSsl(array $data)
    {
        try {
            DB::beginTransaction();
            $logo = $data['logo'];
            $directoryPath = 'public/logossl';

            $logoFileName = 'image_' . $logo->getClientOriginalName();
            $logoFilePath = 'storage/logossl/' . $logoFileName;

            Storage::putFileAs($directoryPath, $logo, $logoFileName);
            $datanew = [
                'name' => $data['name'],
                'price' => $data['price'],
                'maintainfee' =>$data['maintainfee'] ,
                'encoding' => $data['encoding'],
                'certification' => $data['certification'],
                'numberdomain' => $data['numberdomain'],
                'sansupport' => $data['sansupport'],
                'addressbar' => $data['addressbar'],
                'insurance' => $data['insurance'],
                'level' => $data['level'],
                'time' => $data['time'],
                'ssltype' => $data['ssltype'],
                'logo' =>  $logoFilePath,
            ];

            $ssl = $this->ssl->create($datanew);
            DB::commit();
            return $ssl;
        } catch (Exception $e) {
            DB::rollback();
            Log::error('Failed to create ssl: ' . $e->getMessage());
            throw new Exception('Failed to create ssl');
        }
    }


    public function updateSsl(array $data, $id): Ssl
    {
        try {
            DB::beginTransaction();

            $ssl = $this->ssl->find($id);
            $datanew = [
                'name' => $data['name'],
                'price' => $data['price'],
                'maintainfee' =>$data['maintainfee'] ,
                'encoding' => $data['encoding'],
                'certification' => $data['certification'],
                'numberdomain' => $data['numberdomain'],
                'sansupport' => $data['sansupport'],
                'addressbar' => $data['addressbar'],
                'insurance' => $data['insurance'],
                'level' => $data['level'],
                'time' => $data['time'],
                'ssltype' => $data['ssltype'],
            ];
            if (isset($data['logo'])) {

                $directoryPath = 'public/logossl';
                Storage::deleteDirectory($directoryPath);
                Storage::makeDirectory($directoryPath);
                $logo = $data['logo'];
                $logoFileName = 'image_' . $logo->getClientOriginalName();
                $logoFilePath = 'storage/logossl/' . $logoFileName;
                Storage::putFileAs('public/logossl', $logo, $logoFileName);
                $datanew['logo'] = $logoFilePath;
            }
            $ssl->update($datanew);
            DB::commit();
            return $ssl;
        } catch (Exception $e) {
            DB::rollback();
            Log::error('Failed to update ssl: ' . $e->getMessage());
            throw new Exception('Failed to update ssl');
        }
    }
    public function deleteSsl($id): Ssl
    {
        try {
            DB::beginTransaction();
            DB::commit();
            $ssl = $this->ssl->find($id);
            $ssl->delete();
            return $ssl;
        } catch (Exception $e) {
            DB::rollback();
            Log::error('Failed to update ssl: ' . $e->getMessage());
            throw new Exception('Failed to update ssl');
        }
    }

    public function getSslByType($id){
        try {
            Log::info('Fetching ssl by type');
            return $this->ssl->where('ssltype', $id)->get();
        } catch (Exception $e) {
            Log::error('Failed by type: ' . $e->getMessage());
            throw new Exception('Failed by type');
        }
    }

    public function PaySsl(array $data){
        try {
            DB::beginTransaction();
            $datanew = [
                'name' => $data['name'],
                'phone' => $data['phone'],
                'email' =>$data['email'] ,
                'sslid' => $data['sslid'],
            ];

            $ssl = $this->sslPay->create($datanew);
            DB::commit();

            $ssl = $this->ssl->find($data['sslid']);

            if ($ssl->ssltype == 1) {
                $sslname = 'Comodo SSL - ' . $ssl->name;
            } elseif ($ssl->ssltype == 2) {
                $sslname = 'Geotrust SSL - ' . $ssl->name;
            } elseif ($ssl->ssltype == 3) {
                $sslname = 'Digicert SSL - ' . $ssl->name;
            }
            // Tạo mảng dữ liệu email
            $dataemail = [
                'name' => $data['name'],
                'phone' => $data['phone'],
                'email' => $data['email'],
                'productname' => $sslname,
                'package_name' => 'SSL - '.$sslname,
                'title' => 'SSL'
            ];
            $this->clientService->createClient($dataemail);
            Mail::to($data['email'])->send(new SslPaySuccessMail($dataemail));
            $emailTo = env('MAIL_USERNAME');
            Mail::send('client.email.admin', $dataemail, function ($message) use ($emailTo) {
                $message->to($emailTo)
                    ->subject('Đăng ký tư vấn');
            });
            return $ssl;
        } catch (Exception $e) {
            DB::rollback();
            Log::error('Failed to create ssl: pay ' . $e->getMessage());
            throw new Exception('Failed to create ssl pay');
        }
    }
}
