<?php

namespace App\Services;

use App\Models\Certificate;
use App\Models\CertificateEsoc;
use Exception;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;

class CertificateService
{
    protected$certificate;

    public function __construct(Certificate$certificate)
    {
        $this->certificate =$certificate;
    }

    // Lấy tất cả các hợp đồng
    public function getAllCertificates()
    {
        try {
            Log::info('Fetching all Certificates');
            return $this->certificate->all();
        } catch (Exception $e) {
            Log::error('Failed to fetch Certificates: ' . $e->getMessage());
            throw new Exception('Failed to fetch Certificates');
        }
    }

    // Lấy hợp đồng theo ID
    public function getCertificateById($id)
    {
        try {
            Log::info('Fetching Certificate by id');
            return $this->certificate->findOrFail($id);
        } catch (Exception $e) {
            Log::error('Failed to fetch Certificate by id: ' . $e->getMessage());
            throw new Exception('Failed to fetch Certificate by id');
        }
    }

    // Tạo hợp đồng mới
    public function createCertificate(array $data)
    {
        try {
            DB::beginTransaction();

            $newCertificate = [
                'package_name' => $data['package_name'],
                'package_price' => $data['package_price'],
                'duration' => $data['duration'],
                'service_fee' => $data['service_fee'],
                'usage_duration' => $data['usage_duration'],
                'storage_type' => $data['storage_type'],
                'storage_system' => $data['storage_system'],
                'maintenance_fee' => $data['maintenance_fee'],
            ];

           $certificate = $this->certificate->create($newCertificate);
            DB::commit();
            return$certificate;
        } catch (Exception $e) {
            DB::rollback();
            Log::error('Failed to create Certificate: ' . $e->getMessage());
            throw new Exception('Failed to create Certificate');
        }
    }

    // Cập nhật hợp đồng
    public function updateCertificate(array $data, $id)
    {
        try {
            DB::beginTransaction();

           $certificate = $this->certificate->findOrFail($id);
            $updatedData = [
                'Certificate_number' => $data['Certificate_number'],
                'package_name' => $data['package_name'],
                'price' => $data['price'],
                'storage_duration' => $data['storage_duration'],
                'usage_duration' => $data['usage_duration'],
                'storage_type' => $data['storage_type'],
                'storage_system' => $data['storage_system'],
                'maintenance_fee' => $data['maintenance_fee'],
            ];

           $certificate->update($updatedData);
            DB::commit();
            return$certificate;
        } catch (Exception $e) {
            DB::rollback();
            Log::error('Failed to update Certificate: ' . $e->getMessage());
            throw new Exception('Failed to update Certificate');
        }
    }

    // Xóa hợp đồng
    public function deleteCertificate($id)
    {
        try {
            DB::beginTransaction();

            $certificate = $this->certificate->findOrFail($id);
            $certificate->delete();

            DB::commit();
            return$certificate;
        } catch (Exception $e) {
            DB::rollback();
            Log::error('Failed to delete Certificate: ' . $e->getMessage());
            throw new Exception('Failed to delete Certificate');
        }
    }
}
