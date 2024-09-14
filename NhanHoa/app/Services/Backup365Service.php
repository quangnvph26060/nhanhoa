<?php

namespace App\Services;

use App\Mail\Backup365PayEmail;
use App\Models\Backup365;
use App\Models\Backup365Pay;
use Exception;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Mail;

/**
 * Summary of backup365Service
 */
class backup365Service
{
    protected $backup365;
    protected $backup365Pay;

    public function __construct(Backup365 $backup365, Backup365Pay $backup365Pay)
    {
        $this->backup365 = $backup365;
        $this->backup365Pay = $backup365Pay;
    }

    // Lấy tất cả bản ghi
    public function getAllBackup365s(){
        try {
            Log::info('Fetching all backup365');
            return $this->backup365->all();
        } catch (Exception $e) {
            Log::error('Failed to fetch backup365: ' . $e->getMessage());
            throw new Exception('Failed to fetch backup365');
        }
    }

    // Lấy backup theo ID
    public function getBackup365ById($id){
        try {
            Log::info('Fetching backup by ID');
            return $this->backup365->find($id);
        } catch (Exception $e) {
            Log::error('Failed to fetch backup365 by ID: ' . $e->getMessage());
            throw new Exception('Failed to fetch backup365 by ID');
        }
    }

    // Tạo bản ghi mới
    public function createBackup365(array $data): Backup365
    {
        try {
            DB::beginTransaction();

            $newBackup = [
                'name' => $data['name'],
                'storage' => $data['storage'],
                'price' => $data['price'],
                'agent' => $data['agent'],
                'data_encryption' => $data['data_encryption'],
                'data_compression' => $data['data_compression'],
                'schedule_backup' => $data['schedule_backup'],
                'auto_backup' => $data['auto_backup'],
            ];

            $backup = $this->backup365->create($newBackup);
            DB::commit();
            return $backup;
        } catch (Exception $e) {
            DB::rollback();
            Log::error('Failed to create backup365: ' . $e->getMessage());
            throw new Exception('Failed to create backup365');
        }
    }

    // Cập nhật bản ghi
    public function updateBackup365(array $data, $id): Backup365
    {
        try {
            DB::beginTransaction();
            $backupById = $this->backup365->find($id);
            $updatedBackup = [
                'name' => $data['name'],
                'storage' => $data['storage'],
                'price' => $data['price'],
                'agent' => $data['agent'],
                'data_encryption' => $data['data_encryption'],
                'data_compression' => $data['data_compression'],
                'schedule_backup' => $data['schedule_backup'],
                'auto_backup' => $data['auto_backup'],
            ];

            $backupById->update($updatedBackup);
            DB::commit();
            return $backupById;
        } catch (Exception $e) {
            DB::rollback();
            Log::error('Failed to update backup365: ' . $e->getMessage());
            throw new Exception('Failed to update backup365');
        }
    }

    // Xóa bản ghi
    public function deleteBackup365($id): Backup365
    {
        try {
            DB::beginTransaction();
            $backup = $this->backup365->find($id);
            $backup->delete();
            DB::commit();
            return $backup;
        } catch (Exception $e) {
            DB::rollback();
            Log::error('Failed to delete backup365: ' . $e->getMessage());
            throw new Exception('Failed to delete backup365');
        }
    }

    public function PayCloud(array $data)
    {
        try {
            DB::beginTransaction();
            $cloudPay = $this->backup365Pay->create($data);
            DB::commit();
            $backup = $this->backup365->find($data['backup365_id']);
            $dataemail = [
                'name' => $data['name'],
                'phone' => $data['phone'],
                'email' => $data['email'],
                'productname' => $backup->name,
            ];

            Mail::to($data['email'])->send(new Backup365PayEmail($dataemail));
            return $cloudPay;
        } catch (Exception $e) {
            DB::rollback();
            Log::error('Failed to create cloud: ' . $e->getMessage());
            throw new Exception('Failed to create cloud');
        }
    }
}
