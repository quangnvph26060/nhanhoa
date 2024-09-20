<?php

namespace App\Services;

use App\Mail\EmailServerPayEmail;
use App\Models\EmailServer;
use App\Models\EmailServerPay;
use App\Models\EmailServerPromotion;
use Exception;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Mail;

/**
 * Summary of EmailServerService
 */
class EmailServerService
{
    protected $emailServer;

    protected $emailServerPay;

    public function __construct(EmailServer $emailServer, EmailServerPay $emailServerPay)
    {
        $this->emailServer = $emailServer;
        $this->emailServerPay = $emailServerPay;
    }

    // Lấy tất cả các email server
    public function getAllEmailServers()
    {
        try {
            Log::info('Fetching all email servers');
            return $this->emailServer->all();
        } catch (Exception $e) {
            Log::error('Failed to fetch email servers: ' . $e->getMessage());
            throw new Exception('Failed to fetch email servers');
        }
    }

    // Lấy email server theo ID
    public function getEmailServerById($id)
    {
        try {
            Log::info('Fetching email server by ID');
            return $this->emailServer->find($id);
        } catch (Exception $e) {
            Log::error('Failed to fetch email server: ' . $e->getMessage());
            throw new Exception('Failed to fetch email server');
        }
    }

    // Tạo email server mới
    public function createEmailServer(array $data): EmailServer
    {
        try {
            DB::beginTransaction();

            $newData = [
                'name' => $data['name'],
                'price' => $data['price'],
                'inbox_rate' => $data['inbox_rate'],
                'storage_capacity' => $data['storage_capacity'],
                'unlimited_email_addresses' => $data['unlimited_email_addresses'],
                'unlimited_email_forwarder' => $data['unlimited_email_forwarder'],
                'unlimited_email_list' => $data['unlimited_email_list'],
                'unlimited_email_domain' => $data['unlimited_email_domain'],
                'ip_address' => $data['ip_address'],
                'promotion_id' => $data['promotion_id']
            ];

            $emailServer = $this->emailServer->create($newData);
            DB::commit();
            return $emailServer;
        } catch (Exception $e) {
            DB::rollback();
            Log::error('Failed to create email server: ' . $e->getMessage());
            throw new Exception('Failed to create email server');
        }
    }

    // Cập nhật email server theo ID
    public function updateEmailServer(array $data, $id): EmailServer
    {
        try {
            DB::beginTransaction();

            $emailServer = $this->emailServer->find($id);
            $updatedData = [
                'name' => $data['name'],
                'price' => $data['price'],
                'inbox_rate' => $data['inbox_rate'],
                'storage_capacity' => $data['storage_capacity'],
                'unlimited_email_addresses' => $data['unlimited_email_addresses'],
                'unlimited_email_forwarder' => $data['unlimited_email_forwarder'],
                'unlimited_email_list' => $data['unlimited_email_list'],
                'unlimited_email_domain' => $data['unlimited_email_domain'],
                'ip_address' => $data['ip_address'],
                'promotion_id' => $data['promotion_id']
            ];

            $emailServer->update($updatedData);
            DB::commit();
            return $emailServer;
        } catch (Exception $e) {
            DB::rollback();
            Log::error('Failed to update email server: ' . $e->getMessage());
            throw new Exception('Failed to update email server');
        }
    }

    // Xóa email server theo ID
    public function deleteEmailServer($id)
    {
        try {
            DB::beginTransaction();
            $emailServer = $this->emailServer->find($id);
            $emailServer->delete();
            DB::commit();
            return $emailServer;
        } catch (Exception $e) {
            DB::rollback();
            Log::error('Failed to delete email server: ' . $e->getMessage());
            throw new Exception('Failed to delete email server');
        }
    }

    public function PayEmailServer(array $data)
    {
        try {
            DB::beginTransaction();
            $emailserverpay = $this->emailServerPay->create($data);
            DB::commit();
            $emailServer = $this->emailServer->find($data['emailServer_id']);
            $dataemail = [
                'name' => $data['name'],
                'phone' => $data['phone'],
                'email' => $data['email'],
                'productname' => $emailServer->name,
                'title' => 'Email Server'
            ];

            Mail::to($data['email'])->send(new EmailServerPayEmail($dataemail));
            $emailTo = env('MAIL_USERNAME');
            Mail::send('client.email.admin', $dataemail, function ($message) use ($emailTo) {
                $message->to($emailTo)
                    ->subject('Đăng ký tư vấn');
            });
            return $emailserverpay;
        } catch (Exception $e) {
            DB::rollback();
            Log::error('Failed to create cloud: ' . $e->getMessage());
            throw new Exception('Failed to create cloud');
        }
    }


}
