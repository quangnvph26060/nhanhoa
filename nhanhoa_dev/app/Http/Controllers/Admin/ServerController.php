<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Server;
use App\Models\ServerLocation;
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
        $title = 'Server';
        $servers = $this->serverService->getServerAll();
        return view('admin.server.index', compact('servers', 'title'));
    }

    public function addform(){
        $title = 'Thêm Server';
        $promotion = $this->promotionService->getPromotionAll();
        return view('admin.server.add', compact('promotion', 'title'));
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
        $title = 'Thay đổi Server';
        $server = Server::find($id);
        $promotion = $this->promotionService->getPromotionAll();
        $promotionselect = ServerPromotion::where('server_id', $id)->pluck('promotion_id')->toArray();
        return view('admin.server.edit', compact('server', 'promotion', 'promotionselect', 'title'));
    }

    public function editsubmit($id, Request $request){
        $server = $this->serverService->updateServer($request->all(), $id);
        return redirect()->route('admin.server.index')->with('success', 'Sửa thành công máy chủ ! ');
    }

    public function indexlocation(){
        $servers = $this->serverService->getServerLocationAll();
        return view('admin.server.indexlocation', compact('servers'));
    }
    public function addformlocation(){
        $promotion = $this->promotionService->getPromotionAll();
        return view('admin.server.addserverlocation', compact('promotion'));
    }

    public function addsubmitlocation(Request $request){
        $this->serverService->createServerLocation($request->all());
        return redirect()->route('admin.server.indexlocation')->with('success', 'Thêm thành công vị trí máy chủ ! ');
    }

    public function deletelocation($id){
        $this->serverService->deleteServerLocation($id);
        return redirect()->route('admin.server.indexlocation')->with('success', 'Xóa thành công ! ');
    }

    public function editformlocation($id){
        $serverlocation = ServerLocation::find($id);
        // dd($serverlocation);
        $promotion = $this->promotionService->getPromotionAll();
        return view('admin.server.editserverlocation', compact('serverlocation', 'promotion'));
    }

    public function editsubmitlocation($id, Request $request){
        $server = $this->serverService->updateServerLocation($request->all(), $id);
        return redirect()->route('admin.server.index')->with('success', 'Sửa thành công vị trí máy chủ ! ');
    }
}
