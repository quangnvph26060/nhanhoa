<?php

namespace App\Services;

use App\Models\SgoHome;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\DB;
use Exception;

class HomeService
{
    /**
     * Lấy cấu hình SgoHome.
     *
     * @return SgoHome|null
     */
    public function getConfig()
    {

        try {
            Log::info('Fetching all SgoHome data');
            return SgoHome::first();
        } catch (Exception $e) {
            Log::error('Failed to fetch SgoHome data: ' . $e->getMessage());
            throw new Exception('Failed to fetch SgoHome data');
        }
    }

    /**
     * Cập nhật cấu hình SgoHome.
     *
     * @param  array  $data
     * @return SgoHome
     * @throws Exception
     */
    public function updateConfig(array $data)
    {
        try {
            // dd($data);
            DB::beginTransaction();

            $config = SgoHome::first();

            if (!$config) {
                // Nếu không có bản ghi nào trong bảng, tạo mới
                $config = SgoHome::create($data);
            } else {
                $config->update($data);
            }

            DB::commit();

            return $config;
        } catch (Exception $e) {
            DB::rollback();
            Log::error('Failed to update SgoHome data: ' . $e->getMessage());
            throw new Exception('Failed to update SgoHome data');
        }
    }
}
