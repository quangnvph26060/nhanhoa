<?php

namespace App\Services;

use App\Mail\ServicePricingPayEmail;
use App\Models\ServicePricing;
use App\Models\ServicePricingPay;
use App\Models\ServicePricingPromotion;
use Exception;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Storage;

class ServicePricingService
{
    protected $servicePricing;


    public function __construct(ServicePricing $servicePricing)
    {
        $this->servicePricing = $servicePricing;
    }

    public function getServicePricingAll()
    {
        try {
            Log::info('Fetching all ServicePricing');
            return $this->servicePricing->all();
        } catch (Exception $e) {
            Log::error('Failed to fetch ServicePricing: ' . $e->getMessage());
            throw new Exception('Failed to fetch ServicePricing');
        }
    }

    public function getServicePricingByType($id)
    {
        try {
            Log::info('Fetching all ServicePricing by type');
            return $this->servicePricing->where('ServicePricingtypes_id', $id)->get();
        } catch (Exception $e) {
            Log::error('Failed to fetch ServicePricing by type: ' . $e->getMessage());
            throw new Exception('Failed to fetch ServicePricing by type');
        }
    }

    public function createServicePricing(array $data): ServicePricing
    {
        try {
            DB::beginTransaction();

            $datanew = [
                'category_implementation' => $data['category_implementation'] ?? null,
                'server_optimization' => $data['server_optimization'] ?? null,
                'server_security' => $data['server_security'] ?? null,
                'backup_configuration' => $data['backup_configuration'] ?? null,
                'website_data_migration' => $data['website_data_migration'] ?? null,
                'basic_monitoring' => $data['basic_monitoring'] ?? null,
                'advanced_monitoring' => $data['advanced_monitoring'] ?? null,
                'incident_reporting' => $data['incident_reporting'] ?? null,
                'periodic_reporting_by_email' => $data['periodic_reporting_by_email'] ?? null,
            ];

            $ServicePricing = $this->servicePricing->create($datanew);

            DB::commit();
            return $ServicePricing;
        } catch (Exception $e) {
            DB::rollback();
            Log::error('Failed to create ServicePricing: ' . $e->getMessage());
            throw new Exception('Failed to create ServicePricing');
        }
    }

    public function updateServicePricing(array $data, $id): ServicePricing
    {
        try {
            DB::beginTransaction();

            $ServicePricingbyId = $this->servicePricing->find($id);

            $datanew = [
                'category_implementation' => $data['category_implementation'] ?? null,
                'server_optimization' => $data['server_optimization'] ?? null,
                'server_security' => $data['server_security'] ?? null,
                'backup_configuration' => $data['backup_configuration'] ?? null,
                'website_data_migration' => $data['website_data_migration'] ?? null,
                'basic_monitoring' => $data['basic_monitoring'] ?? null,
                'advanced_monitoring' => $data['advanced_monitoring'] ?? null,
                'incident_reporting' => $data['incident_reporting'] ?? null,
                'periodic_reporting_by_email' => $data['periodic_reporting_by_email'] ?? null,
            ];

            $ServicePricingbyId->update($datanew);
            DB::commit();
            return $ServicePricingbyId;
        } catch (Exception $e) {
            DB::rollback();
            Log::error('Failed to update ServicePricing: ' . $e->getMessage());
            throw new Exception('Failed to update ServicePricing');
        }
    }

    public function deleteServicePricing($id): ServicePricing
    {
        try {
            DB::beginTransaction();
            $ServicePricing = $this->servicePricing->find($id);
            $ServicePricing->delete();
            DB::commit();
            return $ServicePricing;
        } catch (Exception $e) {
            DB::rollback();
            Log::error('Failed to delete ServicePricing: ' . $e->getMessage());
            throw new Exception('Failed to delete ServicePricing');
        }
    }

    // public function payServicePricing(array $data)
    // {
    //     try {
    //         DB::beginTransaction();


    //         $ServicePricing = $this->servicePricing->find($data['ServicePricing_id']);

    //         $dataemail = [
    //             'name' => $data['name'],
    //             'phone' => $data['phone'],
    //             'email' => $data['email'],
    //             'productname' => $ServicePricing->name,
    //             'package_name' => 'ServicePricing Backup - ' . $ServicePricing->name,
    //             'title' => 'ServicePricing Backup'
    //         ];

    //         $this->clientService->createClient($dataemail);

    //         Mail::to($data['email'])->send(new ServicePricingPayEmail($dataemail));

    //         $emailTo = env('MAIL_USERNAME');
    //         Mail::send('client.email.admin', $dataemail, function ($message) use ($emailTo) {
    //             $message->to($emailTo)
    //                 ->subject('Đăng ký tư vấn');
    //         });
    //         DB::commit();
    //         return $ServicePricingPay;
    //     } catch (Exception $e) {
    //         DB::rollback();
    //         Log::error('Failed to pay for ServicePricing: ' . $e->getMessage());
    //         throw new Exception('Failed to pay for ServicePricing');
    //     }
    // }
}
