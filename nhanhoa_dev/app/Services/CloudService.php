<?php

namespace App\Services;

use App\Mail\CloudPayEmail;
use App\Models\Cloud;
use App\Models\CloudPay;
use App\Models\CloudPromotion;
use Exception;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Storage;

/**
 * Summary of cloudService
 */
class CloudService
{
    protected $cloud;
    protected $cloudPay;
    protected $clientService;

    public function __construct(Cloud $cloud, CloudPay $cloudPay, ClientService $clientService)
    {
        $this->cloud = $cloud;
        $this->cloudPay = $cloudPay;
        $this->clientService = $clientService;
    }

    public function getcloudAll(){
        try {
            Log::info('Fetching all cloud');
            return $this->cloud->all();
        } catch (Exception $e) {
            Log::error('Failed to fetch cloud: ' . $e->getMessage());
            throw new Exception('Failed to fetch cloud');
        }
    }

    public function getcloudByType($id){
        try {
            Log::info('Fetching all cloud by type');
            return $this->cloud->where('cloudtypes_id', $id)->get();
        } catch (Exception $e) {
            Log::error('Failed to fetch cloud by type: ' . $e->getMessage());
            throw new Exception('Failed to fetch cloud by type');
        }
    }

    public function createCloud(array $data): Cloud
    {
        try {
            DB::beginTransaction();

            $logo = $data['logo'];
            $directoryPath = 'public/cloud';

            $logoFileName = 'image_' . $logo->getClientOriginalName();
            $logoFilePath = 'storage/cloud/' . $logoFileName;

            Storage::putFileAs($directoryPath, $logo, $logoFileName);
            // $data['logo'] = $logoFilePath;

            $datanew = [
                'name' => $data['name'],
                'price' => $data['price'],
                'cpu' => $data['cpu'],
                'core' => $data['core'],
                'ssd' => $data['ssd'],
                'ram' => $data['ram'],
                'ip' => $data['ip'],
                'bandwidth' => $data['bandwidth'],
                'cloudtypes_id' => $data['cloudtypes_id'],
                'logo' =>  $logoFilePath,
            ];


            $cloud = $this->cloud->create($datanew);
            if (!empty($data['promotion'])) {
                foreach ($data['promotion'] as $key => $item) {
                    CloudPromotion::create([
                        'cloud_id' => $cloud->id,
                        'promotion_id' => $item
                    ]);
                }
            }
            DB::commit();
            return $cloud;
        } catch (Exception $e) {
            DB::rollback();
            Log::error('Failed to create cloud: ' . $e->getMessage());
            throw new Exception('Failed to create cloud');
        }
    }



    public function updateCloud(array $data, $id): Cloud
    {
        try {
            DB::beginTransaction();
            $cloudbyId = $this->cloud->find($id);
            $datanew = [
                'name' => $data['name'],
                'price' => $data['price'],
                'cpu' => $data['cpu'],
                'core' => $data['core'],
                'ssd' => $data['ssd'],
                'ram' => $data['ram'],
                'ip' => $data['ip'],
                'bandwidth' => $data['bandwidth'],
                'cloudtypes_id' => $data['cloudtypes_id']
            ];
            if (isset($data['logo'])) {

                $directoryPath = 'public/logocloud';
                // Storage::deleteDirectory($directoryPath);
                // Storage::makeDirectory($directoryPath);
                $logo = $data['logo'];
                $logoFileName = 'image_' . $logo->getClientOriginalName();
                $logoFilePath = 'storage/logocloud/' . $logoFileName;
                Storage::putFileAs('public/logocloud', $logo, $logoFileName);
                $datanew['logo'] = $logoFilePath;
            }
            CloudPromotion::where('cloud_id', $id)->delete();
            $cloudbyId->update($datanew);
            if (!empty($data['promotion'])) {
                foreach ($data['promotion'] as $key => $item) {
                    CloudPromotion::create([
                        'cloud_id' => $id,
                        'promotion_id' => $item
                    ]);
                }
            }
            DB::commit();
            return $cloudbyId;
        } catch (Exception $e) {
            DB::rollback();
            Log::error('Failed to update cloud: ' . $e->getMessage());
            throw new Exception('Failed to update cloud');
        }
    }

    public function deleteCloud($id): Cloud
    {
        try {
            DB::beginTransaction();
            DB::commit();
            $cloud = $this->cloud->find($id);
            $cloud->delete();
            return $cloud;
        } catch (Exception $e) {
            DB::rollback();
            Log::error('Failed to update cloud: ' . $e->getMessage());
            throw new Exception('Failed to update cloud');
        }
    }

    public function PayCloud(array $data)
    {
        try {
            DB::beginTransaction();
            $cloudPay = $this->cloudPay->create($data);
            DB::commit();
            $cloud = $this->cloud->find($data['cloud_id']);
            $dataemail = [
                'name' => $data['name'],
                'phone' => $data['phone'],
                'email' => $data['email'],
                'productname' => $cloud->name,
                'package_name' => 'Cloud Backup - '.$cloud->name,
                'title' => 'Cloud Backup'
            ];
            // $dataclient =  [
            //     'name' => $data['name'],
            //     'phone' => $data['phone'],
            //     'email' => $data['email'],
            //     'package_name' => 'Cloud Backup - '.$cloud->name,
            // ];
            $this->clientService->createClient($dataemail);
            Mail::to($data['email'])->send(new CloudPayEmail($dataemail));
            $emailTo = env('MAIL_USERNAME');
            Mail::send('client.email.admin', $dataemail, function ($message) use ($emailTo) {
                $message->to($emailTo)
                    ->subject('Đăng ký tư vấn');
            });
            return $cloudPay;
        } catch (Exception $e) {
            DB::rollback();
            Log::error('Failed to create cloud: ' . $e->getMessage());
            throw new Exception('Failed to create cloud');
        }
    }
}
