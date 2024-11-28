<?php

namespace App\Services;

use App\Mail\PricingPayNotification;
use App\Mail\ServerPayEmail;
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
    protected $clientService;


    public function __construct(ServicePricing $servicePricing, ClientService $clientService)
    {
        $this->servicePricing = $servicePricing;
        $this->clientService = $clientService;
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
                'name' => $data['name'],
                'category_implementation' => $data['category_implementation'] ?? '',
                'server_optimization' => $data['server_optimization'] ?? false,
                'server_security' => $data['server_security'] ?? false,
                'backup_configuration' => $data['backup_configuration'] ?? false,
                'website_data_migration' => $data['website_data_migration'] ?? false,
                'basic_monitoring' => $data['basic_monitoring'] ?? false,
                'advanced_monitoring' => $data['advanced_monitoring'] ?? false,
                'incident_reporting' => $data['incident_reporting'] ?? false,
                'periodic_reporting_by_email' => $data['periodic_reporting_by_email'] ?? false,
                'price' => $data['price'],
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
            //  dd($data);
            DB::beginTransaction();

            $ServicePricingbyId = $this->servicePricing->find($id);

            $datanew = [
                'name' => $data['name'],
                'category_implementation' => $data['category_implementation'] ?? '',
                'server_optimization' => $data['server_optimization'] ?? false,
                'server_security' => $data['server_security'] ?? false,
                'backup_configuration' => $data['backup_configuration'] ?? false,
                'website_data_migration' => $data['website_data_migration'] ?? false,
                'basic_monitoring' => $data['basic_monitoring'] ?? false,
                'advanced_monitoring' => $data['advanced_monitoring'] ?? false,
                'incident_reporting' => $data['incident_reporting'] ?? false,
                'periodic_reporting_by_email' => $data['periodic_reporting_by_email'] ?? false,
                'price' => $data['price'],
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

    public function PayService(array $data)
    {
        try {
            DB::beginTransaction();
            DB::commit();
            $service = $this->servicePricing->find($data['service_id']);
            $dataemail = [
                'name' => $data['name'],
                'phone' => $data['phone'],
                'email' => $data['email'],
                'productname' => $service->name,
                'package_name' => 'Dịch vụ quản trị máy chủ - ' . $service->name,
                'title' => 'Dịch vụ quản trị máy chủ'
            ];
            $client = $this->clientService->createClient($dataemail);
            Mail::to($data['email'])->send(new PricingPayNotification($dataemail));
            $emailTo = env('MAIL_USERNAME');
            Mail::send('client.email.admin', $dataemail, function ($message) use ($emailTo) {
                $message->to($emailTo)
                    ->subject('Đăng ký tư vấn');
            });
            return $client;
        } catch (Exception $e) {
            DB::rollback();
            Log::error('Failed to create server: ' . $e->getMessage());
            throw new Exception('Failed to create server');
        }
    }
}
