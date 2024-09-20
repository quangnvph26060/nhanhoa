<?php

namespace App\Services;

use App\Models\Solution;
use App\Models\SolutionCustomer;
use Exception;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;

class SolutionService
{
    protected $solution, $solutionCustomer;

    public function __construct(Solution $solution, SolutionCustomer $solutionCustomer)
    {
        $this->solution = $solution;
        $this->solutionCustomer = $solutionCustomer;
    }

    public function getPaginatedSolution()
    {
        try {
            return $this->solution->orderByDesc('created_at')->paginate(10);
        } catch (Exception $e) {
            Log::error('Failed to get paginated solution list: ' . $e->getMessage());
            throw new Exception('Failed to get paginated solution list');
        }
    }

    public function getAllSolutions()
    {
        try {
            return $this->solution->orderByDesc('created_at')->get();
        } catch (Exception $e) {
            Log::error('Failed to get solution list: ' . $e->getMessage());
            throw new Exception('Failed toi get solution list');
        }
    }

    public function getSolutionById($id)
    {
        try {
            return $this->solution->find($id);
        } catch (Exception $e) {
            Log::error('Failed to find this solution: ' . $e->getMessage());
            throw new Exception('Failed to find this solution');
        }
    }

    public function getSolutionByName($name)
    {
        try {
            return $this->solution->where('name', 'LIKE', '%' . $name . '%')->paginate(10);
        } catch (Exception $e) {
            Log::error('Failed to find this solution by name: ' . $e->getMessage());
            throw new Exception('Failed to find this solution by name');
        }
    }

    public function addNewSolution(array $data)
    {
        DB::beginTransaction();
        $initializationFee = preg_replace('/[^\d]/', '', $data['initialization_fee']);
        $fee = isset($data['fee']) ? preg_replace('/[^\d]/', '', $data['fee']) : null;
        $fee = $fee == 0 ? null : $fee;
        try {
            Log::info('Creating new solution');
            $solution = $this->solution->create([
                'name' => $data['name'],
                'fee' => $fee,
                'initialization_fee' => $initializationFee,
                'branch' => $data['branch'],
                'record_capacity' => $data['record_capacity'],
            ]);
            DB::commit();
            return $solution;
        } catch (Exception $e) {
            DB::rollBack();
            Log::error('Failed to create new solution: ' . $e->getMessage());
            throw new Exception('Failed to create new solution');
        }
    }

    public function updateSolution(array $data, $id)
    {
        DB::beginTransaction();
        try {
            $solution = $this->getSolutionById($id);
            if (!$solution) {
                throw new Exception('cannot find this solution');
            }
            $initializationFee = preg_replace('/[^\d]/', '', $data['initialization_fee']);
            $fee = isset($data['fee']) ? preg_replace('/[^\d]/', '', $data['fee']) : null;
            $fee = $fee == 0 ? null : $fee;
            $solution->update([
                'name' => $data['name'],
                'initialization_fee' => $initializationFee,
                'fee' => $fee,
                'branch' => $data['branch'],
                'record_capacity' => $data['record_capacity'],
            ]);
            DB::commit();
            return $solution;
        } catch (Exception $e) {
            DB::rollBack();
            Log::error('Failed to update this solution: ' . $e->getMessage());
            throw new Exception("Failed to update this solution");
        }
    }

    public function deleteSolution($id)
    {
        DB::beginTransaction();
        try {
            $solution = $this->getSolutionById($id);
            $solution->delete();
            DB::commit();
        } catch (Exception $e) {
            DB::rollBack();
            Log::error('Failed to delete this solution: ' . $e->getMessage());
            throw new Exception("Failed to delete this solution");
        }
    }
}
