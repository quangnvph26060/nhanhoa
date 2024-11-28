<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\SgoGiaiphap;
use App\Services\GiaiPhapService;
use Illuminate\Http\Request;

class GiaiPhapController extends Controller
{
    protected $giaiPhapService;

    public function __construct(GiaiPhapService $giaiPhapService)
    {
        $this->giaiPhapService = $giaiPhapService;
    }

    public function index()
    {
        $giaiphap = $this->giaiPhapService->getAllGiaiPhap();
        return view('admin.giaiphap.index', compact ('giaiphap'));
    }
    public function create(){
        $title = "Thêm giải pháp";
        return view('admin.giaiphap.add');
    }

    // Thêm mới giải pháp
    public function store(Request $request)
    {
        $data = $request->only('title', 'content');
        $this->giaiPhapService->createGiaiPhap($data);

       return redirect()->route('admin.giaiphap.index')->with('success', 'Thêm giải pháp thành công !');
    }

    public function show($slug, $id){
        $title = "Sửa giải pháp";
        $giaiphap = SgoGiaiphap::find($id);
        return view('admin.giaiphap.edit', compact('title', 'giaiphap'));
    }

    // Cập nhật giải pháp
    public function update(Request $request, $slug, $id)
    {
        $data = $request->only('title', 'content');
        $giaiphap = $this->giaiPhapService->updateGiaiPhap($id, $data);

        return redirect()->route('admin.giaiphap.addform')->with('success', 'Thêm giải pháp thành công !');
    }

    // Xóa giải pháp
    public function destroy($id)
    {
        $sgoGiaiphap = SgoGiaiphap::find($id);
        $sgoGiaiphap->delete();

        return redirect()->route('admin.giaiphap.index')->with('success', 'Giải pháp đã được xóa thành công!');
    }
}
