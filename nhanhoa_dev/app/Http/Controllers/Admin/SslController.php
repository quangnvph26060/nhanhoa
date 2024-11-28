<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Ssl;
use App\Services\SslService;
use Illuminate\Http\Request;

class SslController extends Controller
{
    protected $sslService;

    public function __construct(SslService $sslService){
        $this->sslService = $sslService;
    }
    public function index(){
        $title = "SSL";
        $ssl = $this->sslService->getSslAll();
        return view('admin.ssl.index', compact('ssl', 'title'));
    }

    public function addform(){
        $title = "Thêm SSL";
        return view('admin.ssl.add', compact('title'));
    }

    public function addsubmit(Request $request){
        $ssl = $this->sslService->createsSsl($request->all());
        return redirect()->route('admin.ssl.index')->with('success', 'Thêm thành công ! ');
    }

    public function editform($id){
        $title = "Thay đổi SSL";
        $ssl = Ssl::find($id);
        return view('admin.ssl.edit', compact('ssl', 'title'));
    }

    public function editsubmit(Request $request, $id){
        $ssl = $this->sslService->updateSsl($request->all(), $id);
        return redirect()->route('admin.ssl.index')->with('success', 'Thay đổi thành công ! ');
    }

    public function delete($id){
        $this->sslService->deleteSsl($id);
        return redirect()->route('admin.ssl.index')->with('success', 'Xóa thành công ! ');
    }
}
