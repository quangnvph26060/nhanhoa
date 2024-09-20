<?php

namespace App\Services;

use App\Mail\CloudBackupEmail;
use App\Mail\CloudPayEmail;
use App\Models\CloudBackup;
use App\Models\CloudBackupPay;
use Exception;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Mail;

class CloudBackupService
{
    protected $cloudBackup;
    protected $cloudBackupPay;

    public function __construct(CloudBackup $cloudBackup, CloudBackupPay $cloudBackupPay)
    {
        $this->cloudBackup = $cloudBackup;
        $this->cloudBackupPay = $cloudBackupPay;
    }

    // Lấy tất cả các gói Cloud Backup
    public function getAllBackups()
    {
        try {
            Log::info('Fetching all cloud backups');
            return $this->cloudBackup->all();
        } catch (Exception $e) {
            Log::error('Failed to fetch cloud backups: ' . $e->getMessage());
            throw new Exception('Failed to fetch cloud backups');
        }
    }

    public function getBackupsByType($id)
    {
        try {
            Log::info('Fetching all cloud backups');
            return $this->cloudBackup->where('backuptype', $id)->get();
        } catch (Exception $e) {
            Log::error('Failed to fetch cloud backups: ' . $e->getMessage());
            throw new Exception('Failed to fetch cloud backups');
        }
    }

    // Tạo gói Cloud Backup mới
    public function createBackup(array $data): CloudBackup
    {
        try {
            DB::beginTransaction();

            $newData = [
                'name' => $data['name'],
                'price' => $data['price'],
                'package_applied' => $data['package_applied'],
                'max_storage' => $data['max_storage'],
                'backup_time' => $data['backup_time'],
                'backup_count' => $data['backup_count'],
                'backuptype' => $data['backuptype'],
            ];
            // dd($newData);
            $backup = $this->cloudBackup->create($newData);
            DB::commit();

            return $backup;
        } catch (Exception $e) {
            DB::rollback();
            Log::error('Failed to create cloud backup: ' . $e->getMessage());
            throw new Exception('Failed to create cloud backup');
        }
    }

    // Cập nhật thông tin gói Cloud Backup
    public function updateBackup(array $data, $id): CloudBackup
    {
        try {
            DB::beginTransaction();

            $backup = $this->cloudBackup->find($id);
            if (!$backup) {
                throw new Exception('Cloud backup not found');
            }

            $newData = [
                'name' => $data['name'],
                'price' => $data['price'],
                'package_applied' => $data['package_applied'],
                'max_storage' => $data['max_storage'],
                'backup_time' => $data['backup_time'],
                'backup_count' => $data['backup_count'],
                'backuptype' => $data['backuptype'],
            ];

            $backup->update($newData);
            DB::commit();

            return $backup;
        } catch (Exception $e) {
            DB::rollback();
            Log::error('Failed to update cloud backup: ' . $e->getMessage());
            throw new Exception('Failed to update cloud backup');
        }
    }

    // Xóa gói Cloud Backup
    public function deleteBackup($id)
    {
        try {
            DB::beginTransaction();

            $backup = $this->cloudBackup->find($id);
            if (!$backup) {
                throw new Exception('Cloud backup not found');
            }

            $backup->delete();
            DB::commit();

            return $backup;
        } catch (Exception $e) {
            DB::rollback();
            Log::error('Failed to delete cloud backup: ' . $e->getMessage());
            throw new Exception('Failed to delete cloud backup');
        }
    }

    public function PayBackup(array $data): CloudBackupPay
    {
        try {
            DB::beginTransaction();
            // dd($newData);a
            $backuppay = $this->cloudBackupPay->create($data);
            DB::commit();
            $backup = $this->cloudBackup->find($data['cloudbackup_id']);

            if ($backup->backuptype == 1) {
                $backupname = 'Cloud Backup - Cloud VPS - ' . $backup->name;
            } elseif ($backup->backuptype == 2) {
                $backupname = 'Cloud Backup - Cloud Server - ' . $backup->name;
            }
            $dataemail = [
                'name' => $data['name'],
                'email' => $data['email'],
                'phone' => $data['phone'],
                'productname' => $backupname,
                'title' => 'Cloud Backup'

            ];
            Mail::to($data['email'])->send(new CloudBackupEmail($dataemail));
            $emailTo = env('MAIL_USERNAME');
            Mail::send('client.email.admin', $dataemail, function ($message) use ($emailTo) {
                $message->to($emailTo)
                    ->subject('Đăng ký tư vấn');
            });
            return $backuppay;
        } catch (Exception $e) {
            DB::rollback();
            Log::error('Failed to create cloud backup pay: ' . $e->getMessage());
            throw new Exception('Failed to create cloud backup pay');
        }
    }
}
