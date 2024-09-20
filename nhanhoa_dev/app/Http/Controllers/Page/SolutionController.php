<?php

namespace App\Http\Controllers\Page;

use App\Http\Controllers\Controller;
<<<<<<< Updated upstream
use App\Services\SolutionCustomerService;
=======
use App\Models\ContractEsoc;
use App\Services\CertificateService;
use App\Services\ElectronicInvoiceService;
use App\Services\UsbTokenService;
>>>>>>> Stashed changes
use Illuminate\Http\Request;
use App\Services\SolutionService;
use Exception;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Log;

class SolutionController extends Controller
{
<<<<<<< Updated upstream
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
=======
    protected $contractEsoc;
    protected $usbTokenService;
    protected $certificateService;
    protected $electronicInvoiceService;
    public function __construct(ContractEsoc $contractEsoc, UsbTokenService $usbTokenService , CertificateService $certificateService, ElectronicInvoiceService $electronicInvoiceService){
        $this->contractEsoc = $contractEsoc;
        $this->usbTokenService = $usbTokenService;
        $this->certificateService = $certificateService;
        $this->electronicInvoiceService = $electronicInvoiceService;
    }
    public function vfone(){
        return view('client.pages.solution-vivre.index');
    }

    public function esoc(){
        $esocs = $this->contractEsoc->take(3)->get();
        return view('client.pages.solution-electronic-contract.index', compact('esocs'));
    }
    public function electronicInvoice(){
        $electron = $this->electronicInvoiceService->getAllInvoices();
        return view('client.pages.solution-electronic-invoice.index', compact('electron'));
>>>>>>> Stashed changes
    }

    public function priceList()
    {
        return view('client.pages.solution-vivre.price-list');
    }

    public function priceListElectronicContract(){
        $esocs = $this->contractEsoc->get();
        $usbtoken = $this->usbTokenService->getAllUsbTokens();
        $certificate = $this->certificateService->getAllCertificates();
        return view('client.pages.solution-electronic-contract.price-list', compact('esocs', 'usbtoken','certificate' ));
    }

    public function priceListElectronicInvoice(){
        return view('client/pages/solution-electronic-invoice/price-list');
    }

    public function electronicContract(){
        return view('client.pages.solution-electronic-contract.contact');
    }
}
