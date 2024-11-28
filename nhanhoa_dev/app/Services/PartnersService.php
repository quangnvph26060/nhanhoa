<?php

namespace App\Services;

use App\Models\Partner;
use Exception;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Storage;

class PartnersService
{
    protected $partner;

    public function __construct(Partner $partner)
    {
        $this->partner = $partner;
    }

    // Lấy tất cả các mục trong bảng sgo_home
    public function getAllPartners()
    {
        try {
            Log::info('Fetching all Partners');
            return $this->partner->all();
        } catch (Exception $e) {
            Log::error('Failed to fetch Partners: ' . $e->getMessage());
            throw new Exception('Failed to fetch Partners');
        }
    }

    // Tạo mới một mục trong bảng
    public function createPartner(array $data)
    {
        try {
            DB ::beginTransaction();

            $logo = $data['logo'];
            $directoryPath = 'public/partner';
            $logoFileName = 'home_' . $logo->getClientOriginalName();
            $logoFilePath = 'storage/partner/' . $logoFileName;

            Storage::putFileAs($directoryPath, $logo, $logoFileName);

            $partnersData = [
                'name' => $data['name'],
                'contact_person' => $data['contact_person'],
                'phone' => $data['phone'],
                'email' => $data['email'],
                'address' => $data['address'],
                'logo' => $logoFilePath,
            ];

            $partner = $this->partner->create($partnersData);

            DB::commit();
            return $partner;
        } catch (Exception $e) {
            DB::rollback();
            Log::error('Failed to create partner: ' . $e->getMessage());
            throw new Exception('Failed to create partner');
        }
    }

    // Cập nhật mục trong bảng sgo_home
    public function updatePartiner(array $data, $id)
    {
        try {
            DB::beginTransaction();

            $partner = $this->partner->find($id);
            $partnersData = [
                'name' => $data['name'],
                'contact_person' => $data['contact_person'],
                'phone' => $data['phone'],
                'email' => $data['email'],
                'address' => $data['address'],
            ];

            if (isset($data['logo'])) {
                $directoryPath = 'public/partner';
                $logo = $data['logo'];
                $logoFileName = 'home_' . $logo->getClientOriginalName();
                $logoFilePath = 'storage/partner/' . $logoFileName;

                Storage::putFileAs($directoryPath, $logo, $logoFileName);
                $partnersData['logo'] = $logoFilePath;
            }

            $partner->update($partnersData);
            DB::commit();
            return $partner;
        } catch (Exception $e) {
            DB::rollback();
            Log::error('Failed to update partner: ' . $e->getMessage());
            throw new Exception('Failed to update partner');
        }
    }

    // Xóa mục trong bảng sgo_home
    public function deletePartner($id)
    {
        try {
            DB::beginTransaction();

            $partner = $this->partner->find($id);
            $partner->delete();

            DB::commit();
            return $partner;
        } catch (Exception $e) {
            DB::rollback();
            Log::error('Failed to delete partner: ' . $e->getMessage());
            throw new Exception('Failed to delete partner');
        }
    }

    // Lấy danh sách Partners theo loại hoặc tiêu chí nào đó (tuỳ thuộc vào yêu cầu của bạn)
    public function getPartnersByType($type)
    {
        try {
            Log::info('Fetching Partners by type');
            return $this->partner->where('type', $type)->get();
        } catch (Exception $e) {
            Log::error('Failed to fetch Partners by type: ' . $e->getMessage());
            throw new Exception('Failed to fetch Partners by type');
        }
    }
}
