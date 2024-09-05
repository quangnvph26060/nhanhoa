<?php

namespace App\Services;

use App\Models\Ssl;
use Exception;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Storage;

class SslService
{
    protected $ssl;

    public function __construct(Ssl $ssl)
    {
        $this->ssl = $ssl;
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
            DB::commit();
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

            // dd($datanew);
            $ssl = $this->ssl->create($datanew);
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
            DB::commit();
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
            $ssl->update($datanew);
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
}
