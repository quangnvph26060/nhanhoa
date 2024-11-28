<?php

namespace App\Services;

use App\Models\ContractEsoc;
use Exception;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;

class ContractEsocService
{
    protected $contract;

    public function __construct(ContractEsoc $contract)
    {
        $this->contract = $contract;
    }

    // Lấy tất cả các hợp đồng
    public function getAllContracts()
    {
        try {
            Log::info('Fetching all contracts');
            return $this->contract->all();
        } catch (Exception $e) {
            Log::error('Failed to fetch contracts: ' . $e->getMessage());
            throw new Exception('Failed to fetch contracts');
        }
    }

    // Lấy hợp đồng theo ID
    public function getContractById($id)
    {
        try {
            Log::info('Fetching contract by id');
            return $this->contract->findOrFail($id);
        } catch (Exception $e) {
            Log::error('Failed to fetch contract by id: ' . $e->getMessage());
            throw new Exception('Failed to fetch contract by id');
        }
    }

    // Tạo hợp đồng mới
    public function createContract(array $data)
    {
        try {
            DB::beginTransaction();

            $newContract = [
                'contract_number' => $data['contract_number'],
                'price' => $data['price'],
                'storage_duration' => $data['storage_duration'] .' '. $data['storage_duration_unit'],
                'usage_duration' => $data['usage_duration'],
                'storage_type' => $data['storage_type'],
                'storage_system' => $data['storage_system'],
                'maintenance_fee' => $data['maintenance_fee'],
            ];

            $contract = $this->contract->create($newContract);
            DB::commit();
            return $contract;
        } catch (Exception $e) {
            DB::rollback();
            Log::error('Failed to create contract: ' . $e->getMessage());
            throw new Exception('Failed to create contract');
        }
    }

    // Cập nhật hợp đồng
    public function updateContract(array $data, $id)
    {
        try {
            DB::beginTransaction();

            $contract = $this->contract->findOrFail($id);
            $updatedData = [
                'contract_number' => $data['contract_number'],
                'price' => $data['price'],
                'storage_duration' => $data['storage_duration'] .' '. $data['storage_duration_unit'],
                'usage_duration' => $data['usage_duration'],
                'storage_type' => $data['storage_type'],
                'storage_system' => $data['storage_system'],
                'maintenance_fee' => $data['maintenance_fee'],
            ];

            $contract->update($updatedData);
            DB::commit();
            return $contract;
        } catch (Exception $e) {
            DB::rollback();
            Log::error('Failed to update contract: ' . $e->getMessage());
            throw new Exception('Failed to update contract');
        }
    }

    // Xóa hợp đồng
    public function deleteContract($id)
    {
        try {
            DB::beginTransaction();

            $contract = $this->contract->findOrFail($id);
            $contract->delete();

            DB::commit();
            return $contract;
        } catch (Exception $e) {
            DB::rollback();
            Log::error('Failed to delete contract: ' . $e->getMessage());
            throw new Exception('Failed to delete contract');
        }
    }
}
