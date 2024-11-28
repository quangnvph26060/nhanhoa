<?php

namespace App\Services;

use App\Models\Hosting;
use App\Models\SgoUsbToken;
use App\Models\UsbToken;
use Exception;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;

class UsbTokenService
{
    protected $usbToken;

    public function __construct(UsbToken $usbToken)
    {
        $this->usbToken = $usbToken;
    }

    // Lấy tất cả các gói USB Token
    public function getAllUsbTokens()
    {
        try {
            Log::info('Fetching all USB tokens');
            return $this->usbToken->all();
        } catch (Exception $e) {
            Log::error('Failed to fetch USB tokens: ' . $e->getMessage());
            throw new Exception('Failed to fetch USB tokens');
        }
    }

    // Lấy gói USB Token theo ID
    public function getUsbTokenById($id)
    {
        try {
            Log::info('Fetching USB token by id');
            return $this->usbToken->findOrFail($id);
        } catch (Exception $e) {
            Log::error('Failed to fetch USB token by id: ' . $e->getMessage());
            throw new Exception('Failed to fetch USB token by id');
        }
    }

    // Tạo gói USB Token mới
    public function createUsbToken(array $data)
    {
        try {
            DB::beginTransaction();

            $newUsbToken = [
                'package_name' => $data['package_name'],
                'package_price' => $data['package_price'],
                'duration' => $data['duration'],
                'service_fee' => $data['service_fee'],
                'usb_token_price' => $data['usb_token_price'],
            ];

            $usbToken = $this->usbToken->create($newUsbToken);
            DB::commit();
            return $usbToken;
        } catch (Exception $e) {
            DB::rollback();
            Log::error('Failed to create USB token: ' . $e->getMessage());
            throw new Exception('Failed to create USB token');
        }
    }

    // Cập nhật gói USB Token
    public function updateUsbToken(array $data, $id)
    {
        try {
            DB::beginTransaction();

            $usbToken = $this->usbToken->findOrFail($id);
            $updatedData = [
                'package_name' => $data['package_name'],
                'package_price' => $data['package_price'],
                'duration' => $data['duration'],
                'service_fee' => $data['service_fee'],
                'usb_token_price' => $data['usb_token_price'],
            ];

            $usbToken->update($updatedData);
            DB::commit();
            return $usbToken;
        } catch (Exception $e) {
            DB::rollback();
            Log::error('Failed to update USB token: ' . $e->getMessage());
            throw new Exception('Failed to update USB token');
        }
    }

    // Xóa gói USB Token
    public function deleteUsbToken($id)
    {
        try {
            DB::beginTransaction();

            $usbToken = $this->usbToken->findOrFail($id);
            $usbToken->delete();

            DB::commit();
            return $usbToken;
        } catch (Exception $e) {
            DB::rollback();
            Log::error('Failed to delete USB token: ' . $e->getMessage());
            throw new Exception('Failed to delete USB token');
        }
    }
}
