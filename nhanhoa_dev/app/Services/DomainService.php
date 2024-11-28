<?php

namespace App\Services;

use App\Mail\DomainPayEmail;
use App\Mail\HostingPayment;
use App\Models\Domain;
use Exception;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Storage;

class DomainService
{
    protected $domain;
    protected $clientService;

    public function __construct(Domain $domain, ClientService $clientService )
    {
        $this->domain = $domain;
        $this->clientService = $clientService;
    }

    public function getDomainAll()
    {
        try {
            Log::info('Fetching all domain');
            return $this->domain->all();
        } catch (Exception $e) {
            Log::error('Failed to fetch domain: ' . $e->getMessage());
            throw new Exception('Failed to fetch domain');
        }
    }

    public function getDomainByType($id)
    {
        try {
            Log::info('Fetching all domain');
            return $this->domain->where('domaintype_id', $id)->get();
        } catch (Exception $e) {
            Log::error('Failed to fetch domain: ' . $e->getMessage());
            throw new Exception('Failed to fetch domain');
        }
    }
    public function getDomainByTypeTake($id)
    {
        try {
            Log::info('Fetching first 2 domains');
            return $this->domain->where('domaintype_id', $id)->take(2)->get();
        } catch (Exception $e) {
            Log::error('Failed to fetch domain: ' . $e->getMessage());
            throw new Exception('Failed to fetch domain');
        }
    }


    public function createDomain(array $data)
    {
        try {
            DB::beginTransaction();
            DB::commit();
            $domain = $this->domain->create($data);
            return $domain;
        } catch (Exception $e) {
            DB::rollback();
            Log::error('Failed to create domain: ' . $e->getMessage());
            throw new Exception('Failed to create domain');
        }
    }


    public function updateDomain(array $data, $id): Domain
    {
        try {
            DB::beginTransaction();
            DB::commit();
            $domain = $this->domain->find($id);
            // dd($domain);
            $domain->update($data);
            return $domain;
        } catch (Exception $e) {
            DB::rollback();
            Log::error('Failed to update domain: ' . $e->getMessage());
            throw new Exception('Failed to update domain');
        }
    }
    public function deleteDomain($id): Domain
    {
        try {
            DB::beginTransaction();
            DB::commit();
            $domain = $this->domain->find($id);
            $domain->delete();
            return $domain;
        } catch (Exception $e) {
            DB::rollback();
            Log::error('Failed to update domain: ' . $e->getMessage());
            throw new Exception('Failed to update domain');
        }
    }

    public function payDomain(array $data){
        try {
            // dd($data);
            DB::beginTransaction();
            // dd($data);
            $datanew = [
                'name' => $data['name'],
                'phone' => $data['phone'],
                'email' =>$data['email'] ,
                'domain_id' => $data['domain_id'],
            ];
            DB::commit();
            $domain = $this->domain->find($data['domain_id']);

            if ($domain->domaintype_id == 1) {
                $hostingname = 'Tên miền quốc tế - ' . $domain->name;
            } elseif ($domain->domaintype_id == 2) {
                $hostingname = 'Tên miền quốc gia - ' . $domain->name;
            }
            // Tạo mảng dữ liệu email
            $dataemail = [
                'name' => $data['name'],
                'phone' => $data['phone'],
                'email' => $data['email'],
                'productname' => $hostingname,
                'package_name' => $hostingname,
                'title' => 'Tên miền'
            ];
            $client = $this->clientService->createClient($dataemail);
            Mail::to($data['email'])->send(new DomainPayEmail($dataemail));
            $emailTo = env('MAIL_USERNAME');
            Mail::send('client.email.admin', $dataemail, function ($message) use ($emailTo) {
                $message->to($emailTo)
                    ->subject('Đăng ký tư vấn');
            });
            return $client;
        } catch (Exception $e) {
            DB::rollback();
            Log::error('Failed to create client: ' . $e->getMessage());
            throw new Exception('Failed to create client');
        }
    }
}
