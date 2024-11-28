<?php

namespace App\Http\Controllers\Page;

use App\Http\Controllers\Controller;
use App\Models\ContractEsoc;
use App\Services\CertificateService;
use App\Services\ElectronicInvoiceService;
use App\Services\UsbTokenService;
use Illuminate\Http\Request;
use App\Services\SolutionService;
use Exception;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Log;

class SolutionController extends Controller
{
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
