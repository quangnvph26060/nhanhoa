<?php

namespace App\Services;

use App\Models\Cloud;
use Exception;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Storage;

class cloudService
{
    protected $cloud;

    public function __construct(Cloud $cloud)
    {
        $this->cloud = $cloud;
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

    public function createcloud(array $data): Cloud
    {
        try {
            DB::beginTransaction();
            $cloud = Cloud::create($data);
            return $cloud;
        } catch (Exception $e) {
            DB::rollback();
            Log::error('Failed to create cloud: ' . $e->getMessage());
            throw new Exception('Failed to create cloud');
        }
    }


    public function updatecloud(array $data, $id): cloud
    {
        try {
            DB::beginTransaction();
            $cloud = cloud::find($id);
            $cloud->update($data);
            return $cloud;
        } catch (Exception $e) {
            DB::rollback();
            Log::error('Failed to update cloud: ' . $e->getMessage());
            throw new Exception('Failed to update cloud');
        }
    }
}
