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
class cloudService
{
    protected $cloud;
    protected $cloudPay;

    public function __construct(Cloud $cloud, CloudPay $cloudPay)
    {
        $this->cloud = $cloud;
        $this->cloudPay = $cloudPay;
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
            ];

            Mail::to($data['email'])->send(new CloudPayEmail($dataemail));
            return $cloudPay;
        } catch (Exception $e) {
            DB::rollback();
            Log::error('Failed to create cloud: ' . $e->getMessage());
            throw new Exception('Failed to create cloud');
        }
    }
}
