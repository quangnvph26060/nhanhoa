<?php

namespace App\Services;

use App\Models\Solution;
use App\Models\SolutionCustomer;
use Exception;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;

use function PHPSTORM_META\map;

class SolutionCustomerService
{
    protected $solution, $solutionCustomer;

    public function __construct(Solution $solution, SolutionCustomer $solutionCustomer)
    {
        $this->solution = $solution;
        $this->solutionCustomer = $solutionCustomer;
    }

    public function getPaginatedSolutionCustomer()
    {
        try {
            return  $this->solutionCustomer->orderByDesc('created_at')->paginate(10);
        } catch (Exception $e) {
            Log::error('Failed to get paginated solution customer list: ' . $e->getMessage());
            throw new Exception('Failed to get paginated solution customer list');
        }
    }

    public function getAllSolutionCustomers()
    {
        try {
            return $this->solutionCustomer->orderByDesc('created_at')->get();
        } catch (Exception $e) {
            Log::error('Failed to get solution customer list: ' . $e->getMessage());
            throw new Exception('Failed to get solution customer list');
        }
    }

    public function getSolutionCustmerById($id)
    {
        try {
            return $this->solutionCustomer->find($id);
        } catch (Exception $e) {
            Log::error('Failed to find this solution customer: ' . $e->getMessage());
            throw new Exception('Failed to find this solution customer');
        }
    }

    public function searchSolutionCustomer($input)
    {
        try {
            return $this->solutionCustomer->where('name', 'LIKE', '%' . $input . '%')
                ->orWhere('phone', 'LIKE', '%' . $input . '%')
                ->paginate(10);
        } catch (Exception $e) {
            Log::error('Failed to find this solution customer by phone or name: ' . $e->getMessage());
            throw new Exception('Failed to find this solution customer by phone or name');
        }
    }

    public function createNewSolutionCustomer(array $data)
    {
        DB::beginTransaction();
        try {
            Log::info('Creating new solution customer');
            $solutionCustomer = $this->solutionCustomer->create([
                'solution_id' => $data['solution_id'],
                'name' => $data['name'],
                'phone' => $data['phone'],
                'email' => $data['email'],
            ]);
            Log::info('New solution customer created successfully');
            DB::commit();
            return $solutionCustomer;
        } catch (Exception $e) {
            DB::rollBack();
            Log::error('Failed to create new solution customer: ' . $e->getMessage());
            throw new Exception('Failed to create new solution customer');
        }
    }

    public function updateSolutionCustomer(array $data, $id)
    {
        DB::beginTransaction();
        try {
            $solutionCustomer = $this->getSolutionCustmerById($id);
            if (!$solutionCustomer) {
                throw new Exception('Cannot find this solution customer');
            }

            $solutionCustomer->update([
                'name' => $data['name'],
                'phone' => $data['phone'],
                'email' => $data['email']
            ]);

            Log::info("Solution Customer's profile updated successfully");
            DB::commit();
            return $solutionCustomer;
        } catch (Exception $e) {
            DB::rollBack();
            Log::error('Failed to update this solution customer profile: ' . $e->getMessage());
            throw new Exception("Failed to update this solution customer's profile");
        }
    }

    public function deleteSolutionCustomer($id)
    {
        DB::beginTransaction();
        try {
            $solutionCustomer = $this->getSolutionCustmerById($id);
            $solutionCustomer->delete();
            Log::info("Solution customer's deleted successfully");
            DB::commit();
        } catch (Exception $e) {
            DB::rollBack();
            Log::error('Failed to delete this solution customer profile: ' . $e->getMessage());
            throw new Exception("Failed to delete this solution customer's profile");
        }
    }
}
