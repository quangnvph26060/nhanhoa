<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\ServicePricing;
use App\Services\ServicePricingService;
use Illuminate\Http\Request;

class ServicePricingController extends Controller
{
    //
    protected $servicePricingService;
    public function __construct(ServicePricingService $servicePricingService){
        $this->servicePricingService = $servicePricingService;
    }

    public function index(){
        $service = $this->servicePricingService->getServicePricingAll();
        return view('admin.serviceserver.index', compact('service'));
    }

    public function add(){
        return view('admin.serviceserver.add');
    }

    public function addsubmit(Request $request){
        $this->servicePricingService->createServicePricing($request->all());
        return redirect()->route('admin.service.index')->with('success', 'Thêm thành công!');
    }

    public function edit($id){
        $service = ServicePricing::find($id);
        return view('admin.serviceserver.edit', compact('service'));
    }

    public function editsubmit(Request $request, $id){
        $this->servicePricingService->updateServicePricing($request->all(), $id);
        return redirect()->route('admin.service.index')->with('success', 'Sửa thành công!');
    }

    public function delete($id){
        $this->servicePricingService->deleteServicePricing($id);
        return redirect()->route('admin.service.index')->with('success', 'Xóa thành công!');
    }
}
