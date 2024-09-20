<?php

namespace App\Http\Controllers\Page;

use App\Http\Controllers\Controller;
use App\Services\SolutionCustomerService;
use Illuminate\Http\Request;
use App\Services\SolutionService;
use Exception;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Log;

class SolutionController extends Controller
{
    protected $solutionService, $solutionCustomerService;

    public function __construct(SolutionService $solutionService, SolutionCustomerService $solutionCustomerService)
    {
        $this->solutionService = $solutionService;
        $this->solutionCustomerService = $solutionCustomerService;
    }

    public function vfone()
    {
        $solutions = $this->solutionService->getAllSolutions();
        return view('client.pages.solution-vivre.index', compact('solutions'));
    }

    public function solutionRegister(Request $request)
    {
        try {
            $newSolutionCustomer = $this->solutionCustomerService->createNewSolutionCustomer($request->all());
            session()->flash('success', 'Đăng ký VFONE thành công');
            return redirect()->back();
        } catch (Exception $e) {
            Log::error("Failed to register new vfone customer: " . $e->getMessage());
            return response()->json([
                'error' => 'Đăng ký VFONE thất bại'
            ], 500);
        }
    }

    public function esoc()
    {
        return view('client.pages.solution-electronic-contract.index');
    }
    public function electronicInvoice()
    {
        return view('client.pages.solution-electronic-invoice.index');
    }

    public function priceList()
    {
        return view('client.pages.solution-vivre.price-list');
    }

    public function priceListElectronicContract(){
        return view('client.pages.solution-electronic-contract.price-list');
    }

    public function priceListElectronicInvoice(){
        return view('client/pages/solution-electronic-invoice/price-list');
    }
}
