<?php

namespace App\Services;

use App\Models\Domain;
use Exception;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Storage;

class DomainService
{
    protected $domain;

    public function __construct(Domain $domain)
    {
        $this->domain = $domain;
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
}
