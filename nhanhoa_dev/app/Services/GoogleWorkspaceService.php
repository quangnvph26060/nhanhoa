<?php

namespace App\Services;

use App\Mail\GoogleWorkspaceBusinessEmail;
use App\Mail\GoogleWorkspaceEducationEmail;
use App\Models\GoogleWorkspace;
use App\Models\GoogleWorkspaceBusinessPay;
use App\Models\GoogleWorkspaceEducation;
use App\Models\GoogleWorkspaceEducationPay;
use Exception;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Mail;

/**
 * Summary of GoogleWorkspaceService
 */
class GoogleWorkspaceService
{
    protected $googleWorkspacebusiness;
    protected $googleWorkspaceeducation;
    protected $googleWorkspaceBusinessPay;
    protected $googleWorkspaceEducationPay;
    protected $clientService;

    public function __construct(GoogleWorkspace $googleWorkspacebusiness, GoogleWorkspaceEducation $googleWorkspaceeducation , GoogleWorkspaceBusinessPay $googleWorkspaceBusinessPay, GoogleWorkspaceEducationPay $googleWorkspaceEducationPay, ClientService $clientService)
    {
        $this->googleWorkspacebusiness = $googleWorkspacebusiness;
        $this->googleWorkspaceeducation = $googleWorkspaceeducation;
        $this->googleWorkspaceBusinessPay = $googleWorkspaceBusinessPay;
        $this->googleWorkspaceEducationPay = $googleWorkspaceEducationPay;
        $this->clientService = $clientService;
    }

    // Lấy tất cả các Google Workspace
    public function getAllGoogleWorkspaceBusiness()
    {
        try {
            Log::info('Fetching all Google Workspaces');
            return $this->googleWorkspacebusiness->all();
        } catch (Exception $e) {
            Log::error('Failed to fetch Google Workspaces: ' . $e->getMessage());
            throw new Exception('Failed to fetch Google Workspaces');
        }
    }

    // Lấy Google Workspace theo ID
    public function getGoogleWorkspaceBusinessById($id)
    {
        try {
            Log::info('Fetching Google Workspace by ID');
            return $this->googleWorkspacebusiness->find($id);
        } catch (Exception $e) {
            Log::error('Failed to fetch Google Workspace: ' . $e->getMessage());
            throw new Exception('Failed to fetch Google Workspace');
        }
    }

    // Tạo Google Workspace mới
    public function createGoogleWorkspaceBusiness(array $data): GoogleWorkspace
    {
        try {
            DB::beginTransaction();

            $newData = [
                'name' => $data['name'],
                'price_per_month' => $data['price_per_month'],
                'storage_capacity' => $data['storage_capacity'],
                'price_first_20_users' => $data['price_first_20_users'],
                'price_after_20_users' => $data['price_after_20_users'],
                'renewal_price' => $data['renewal_price'],
                'user_limit' => $data['user_limit'],
                'promotion_id' => $data['promotion_id'] ?? null, // Có thể là nullable
            ];

            $googleWorkspace = $this->googleWorkspacebusiness->create($newData);
            DB::commit();
            return $googleWorkspace;
        } catch (Exception $e) {
            DB::rollback();
            Log::error('Failed to create Google Workspace: ' . $e->getMessage());
            throw new Exception('Failed to create Google Workspace');
        }
    }

    // Cập nhật Google Workspace theo ID
    public function updateGoogleWorkspaceBusiness(array $data, $id): GoogleWorkspace
    {
        try {
            DB::beginTransaction();

            $googleWorkspace = $this->googleWorkspacebusiness->find($id);
            $updatedData = [
                'name' => $data['name'],
                'price_per_month' => $data['price_per_month'],
                'storage_capacity' => $data['storage_capacity'],
                'price_first_20_users' => $data['price_first_20_users'],
                'price_after_20_users' => $data['price_after_20_users'],
                'renewal_price' => $data['renewal_price'],
                'user_limit' => $data['user_limit'],
                'promotion_id' => $data['promotion_id'] ?? null, // Có thể là nullable
            ];

            $googleWorkspace->update($updatedData);
            DB::commit();
            return $googleWorkspace;
        } catch (Exception $e) {
            DB::rollback();
            Log::error('Failed to update Google Workspace: ' . $e->getMessage());
            throw new Exception('Failed to update Google Workspace');
        }
    }

    // Xóa Google Workspace theo ID
    public function deleteGoogleWorkspaceBusiness($id)
    {
        try {
            DB::beginTransaction();
            $googleWorkspace = $this->googleWorkspacebusiness->find($id);
            $googleWorkspace->delete();
            DB::commit();
            return $googleWorkspace;
        } catch (Exception $e) {
            DB::rollback();
            Log::error('Failed to delete Google Workspace: ' . $e->getMessage());
            throw new Exception('Failed to delete Google Workspace');
        }
    }

    public function PayGoogleWorkspaceBusiness(array $data)
    {
        try {
            DB::beginTransaction();
             $googleWorkspacebusiness = $this->googleWorkspaceBusinessPay->create($data);
            DB::commit();
            $googleworkspace = $this->googleWorkspacebusiness->find($data['googleworkspace_id']);
            $dataemail = [
                'name' => $data['name'],
                'phone' => $data['phone'],
                'email' => $data['email'],
                'productname' => $googleworkspace->name,
                'package_name' => 'Google Workspace Business - '.$googleworkspace->name,
                'title' => 'Google Workspace Business'
            ];
            $this->clientService->createClient($dataemail);
             Mail::to($data['email'])->send(new GoogleWorkspaceBusinessEmail($dataemail));
             $emailTo = env('MAIL_USERNAME');
             Mail::send('client.email.admin', $dataemail, function ($message) use ($emailTo) {
                 $message->to($emailTo)
                     ->subject('Đăng ký tư vấn');
             });
             return $googleWorkspacebusiness;
        } catch (Exception $e) {
            DB::rollback();
            Log::error('Failed to create googleWorkspacebusiness pay: ' . $e->getMessage());
            throw new Exception('Failed to create googleWorkspacebusiness pay');
        }
    }


    // ------------------------------------------ education ---------------------------------------

    public function getAllGoogleWorkspaceEducation()
    {
        try {
            Log::info('Fetching all Google Workspace Education plans');
            return $this->googleWorkspaceeducation->all();
        } catch (Exception $e) {
            Log::error('Failed to fetch Google Workspace Education plans: ' . $e->getMessage());
            throw new Exception('Failed to fetch Google Workspace Education plans');
        }
    }


    public function createGoogleWorkspaceEducation(array $data)
    {
        try {
            DB::beginTransaction();

            $datanew = [
                'name' => $data['name'],
                'price' => $data['price'],
                'storage' => $data['storage'],
                'describe' => $data['describe'],
            ];

            $googleWorkspace = $this->googleWorkspaceeducation->create($datanew);

            DB::commit();
            return $googleWorkspace;
        } catch (Exception $e) {
            DB::rollback();
            Log::error('Failed to create Google Workspace Education: ' . $e->getMessage());
            throw new Exception('Failed to create Google Workspace Education');
        }
    }

    public function updateGoogleWorkspaceEducation(array $data, $id)
    {
        try {
            DB::beginTransaction();

            $googleWorkspace = $this->googleWorkspaceeducation->find($id);

            $datanew = [
                'name' => $data['name'],
                'price' => $data['price'],
                'storage' => $data['storage'],
                'describe' => $data['describe'],
            ];

            $googleWorkspace->update($datanew);

            DB::commit();
            return $googleWorkspace;
        } catch (Exception $e) {
            DB::rollback();
            Log::error('Failed to update Google Workspace Education: ' . $e->getMessage());
            throw new Exception('Failed to update Google Workspace Education');
        }
    }

    public function deleteGoogleWorkspaceEducation($id)
    {
        try {
            DB::beginTransaction();

            $googleWorkspace = $this->googleWorkspaceeducation->find($id);
            $googleWorkspace->delete();

            DB::commit();
            return $googleWorkspace;
        } catch (Exception $e) {
            DB::rollback();
            Log::error('Failed to delete Google Workspace Education: ' . $e->getMessage());
            throw new Exception('Failed to delete Google Workspace Education');
        }
    }


    public function PayGoogleWorkspaceEducation(array $data)
    {
        try {
            DB::beginTransaction();
             $googleWorkspaceeducation = $this->googleWorkspaceEducationPay->create($data);
            DB::commit();
            $googleworkspace = $this->googleWorkspaceeducation->find($data['googleworkspace_id']);
            $dataemail = [
                'name' => $data['name'],
                'phone' => $data['phone'],
                'email' => $data['email'],
                'productname' => $googleworkspace->name,
                'package_name' => 'Google Workspace Education - '.$googleworkspace->name,
                'title' => 'Google Workspace Education'
            ];
            $this->clientService->createClient($dataemail);
             Mail::to($data['email'])->send(new GoogleWorkspaceEducationEmail($dataemail));
             $emailTo = env('MAIL_USERNAME');
             Mail::send('client.email.admin', $dataemail, function ($message) use ($emailTo) {
                 $message->to($emailTo)
                     ->subject('Đăng ký tư vấn');
             });
             return $googleWorkspaceeducation;
        } catch (Exception $e) {
            DB::rollback();
            Log::error('Failed to create cloud: ' . $e->getMessage());
            throw new Exception('Failed to create cloud');
        }
    }
}
