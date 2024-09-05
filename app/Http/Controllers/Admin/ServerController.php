<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Server;
use App\Models\ServerPromotion;
use App\Services\PromotionService;
use App\Services\ServerService;
use Illuminate\Http\Request;

class ServerController extends Controller
{
    protected $serverService;
    protected $promotionService;
    public function __construct(ServerService $serverService, PromotionService $promotionService){
        $this->serverService = $serverService;
        $this->promotionService = $promotionService;
    }

    public function index(){
        $servers = $this->serverService->getServerAll();
        return view('admin.server.index', compact('servers'));
    }

    public function addform(){
        $promotion = $this->promotionService->getPromotionAll();
        return view('admin.server.add', compact('promotion'));
    }

    public function addsubmit(Request $request){
        $this->serverService->createServer($request->all());

        return redirect()->route('admin.server.index')->with('success', 'Thêm thành công máy chủ ! ');
    }

    public function delete($id){
        $this->serverService->deleteServer($id);
        return redirect()->route('admin.server.index')->with('success', 'Xóa thành công ! ');
    }

    public function editform($id){
        $server = Server::find($id);
        $promotion = $this->promotionService->getPromotionAll();
        $promotionselect = ServerPromotion::where('server_id', $id)->pluck('promotion_id')->toArray();
        return view('admin.server.edit', compact('server', 'promotion', 'promotionselect'));
    }

    public function editsubmit($id, Request $request){
        $server = $this->serverService->updateServer($request->all(), $id);
        return redirect()->route('admin.server.index')->with('success', 'Sửa thành công máy chủ ! ');
    }
}
