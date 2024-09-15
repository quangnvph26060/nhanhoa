<?php

namespace App\Services;

use App\Models\Promotion;
use Exception;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Storage;

class PromotionService
{
    protected $promotion;

    public function __construct(Promotion $promotion)
    {
        $this->promotion = $promotion;
    }

    public function getPromotionAll(){
        try {
            Log::info('Fetching all promotion');
            return $this->promotion->all();
        } catch (Exception $e) {
            Log::error('Failed to fetch promotion: ' . $e->getMessage());
            throw new Exception('Failed to fetch promotion');
        }
    }

    public function createspromotion(array $data)
    {
        try {
            DB::beginTransaction();
            DB::commit();
            $datanew = [
                'name' => $data['name'],
                'description' => $data['description']
            ];
            $promotion = $this->promotion->create($datanew);
            return $promotion;
        } catch (Exception $e) {
            DB::rollback();
            Log::error('Failed to create promotion: ' . $e->getMessage());
            throw new Exception('Failed to create promotion');
        }
    }


    public function updatePromotion(array $data, $id): Promotion
    {
        try {
            DB::beginTransaction();
            DB::commit();
            $promotion = $this->promotion->find($id);
            $datanew = [
                'name' => $data['name'],
                'description' => $data['description']
            ];
            $promotion->update($datanew);
            return $promotion;
        } catch (Exception $e) {
            DB::rollback();
            Log::error('Failed to update promotion: ' . $e->getMessage());
            throw new Exception('Failed to update promotion');
        }
    }
    public function deletePromotion($id): Promotion
    {
        try {
            DB::beginTransaction();
            DB::commit();
            $promotion = $this->promotion->find($id);
            $promotion->delete();
            return $promotion;
        } catch (Exception $e) {
            DB::rollback();
            Log::error('Failed to update promotion: ' . $e->getMessage());
            throw new Exception('Failed to update promotion');
        }
    }
}
