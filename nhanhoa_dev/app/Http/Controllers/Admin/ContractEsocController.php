<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Services\ContractEsocService;
use Illuminate\Http\Request;

class ContractEsocController extends Controller
{
    protected $contractEsocService;
    public function __construct(ContractEsocService $contractEsocService){
        $this->contractEsocService = $contractEsocService;

    }

    public function index(){
        $contracts = $this->contractEsocService->getAllContracts();
        return view('admin.giaiphap.contract.index', compact('contracts'));
    }

    public function addform(){
        return view('admin.giaiphap.contract.add');
    }

    public function addsubmit(Request $request){
        $this->contractEsocService->createContract($request->all());

        return redirect()->route('admin.giaiphap.contractesoc.index')->with('success', 'Thêm thành công ! ');
    }

    public function delete($id){
        $this->contractEsocService->deleteContract($id);
        return redirect()->route('admin.giaiphap.contractesoc.index')->with('success', 'Xóa thành công ! ');
    }

    public function editform($id){
        $contract = $this->contractEsocService->getContractById($id);
        return view('admin.giaiphap.contract.edit', compact('contract'));
    }

    public function editsubmit($id, Request $request){
        $contract = $this->contractEsocService->updateContract($request->all(), $id);
        return redirect()->route('admin.giaiphap.contractesoc.index')->with('success', 'Sửa thành công ! ');
    }
}
