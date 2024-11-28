<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Services\SolutionCustomerService;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;

class VfoneCustomerController extends Controller
{
    protected $solutionCustomerService;

    public function __construct(SolutionCustomerService $solutionCustomerService)
    {
        $this->solutionCustomerService = $solutionCustomerService;
    }

    public function index(Request $request)
    {
        try {
            $solutionCustomers = $this->solutionCustomerService->getPaginatedSolutionCustomer();

            if ($request->ajax()) {
                return response()->json([
                    'html' => view('admin.customer.vfone.table', compact('solutionCustomers'))->render(),
                    'pagination' => $solutionCustomers->links('pagination::custom')->toHtml(),
                ]);
            }

            return view('admin.customer.vfone.index', compact('solutionCustomers'));
        } catch (Exception $e) {
            Log::error('Failed to get paginated vfone Customer list: ' . $e->getMessage());
            return response()->json(['error' => 'Failed to get paginated vfone Customer list']);
        }
    }

    public function search(Request $request)
    {
        try {
            $query = $request->input('query');
            $solutionCustomers = $this->solutionCustomerService->searchSolutionCustomer($query);

            if ($request->ajax()) {
                $html = view('admin.customer.vfone.table', compact('solutionCustomers'))->render();
                $pagination = $solutionCustomers->appends(['query' => $query])->links('pagination::custom')->render();
                return response()->json([
                    'html' => $html,
                    'pagination' => $pagination
                ]);

                return view('admin.customer.vfone.index', compact('solutionCustomers', 'query'));
            }
        } catch (Exception $e) {
            Log::error(('Failed to search for Vfone Customer: ' . $e->getMessage()));
            return response()->json(['error' => 'Failed to search for Vfone customer'], 500);
        }
    }
}
