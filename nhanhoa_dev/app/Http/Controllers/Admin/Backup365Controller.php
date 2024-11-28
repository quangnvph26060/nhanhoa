<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Backup365;
use App\Services\Backup365Service;
use Illuminate\Http\Request;

class Backup365Controller extends Controller
{
    protected $backup365Service;

    public function __construct(Backup365Service $backup365Service)
    {
        $this->backup365Service = $backup365Service;
    }

    public function index()
    {
        $title = 'Backup365';
        $backups = $this->backup365Service->getAllBackup365s();
        return view('admin.backup365.index', compact('backups', 'title'));
    }

    public function addForm(){
        $title = 'Thêm mới Backup365';
        return view('admin.backup365.add', compact('title'));
    }

    public function addSubmit(Request $request)
    {
        $backup = $this->backup365Service->createBackup365($request->all());
        return redirect()->route('admin.backup365.index')->with('success', 'Thêm thành công  ! ');;
    }
    public function editForm($id){
        $title = 'Cập nhật Backup365';
        $backup = Backup365::find($id);
        // dd($backup);
        return view('admin.backup365.edit', compact('backup', 'title'));
    }


    public function editSubmit(Request $request, $id)
    {
        // dd($request->all());
        $backup = $this->backup365Service->updateBackup365($request->all(), $id);
        return redirect()->route('admin.backup365.index')->with('success', 'Sửa thành công  ! ');
    }

    public function delete($id)
    {
        $this->backup365Service->deleteBackup365($id);
        return redirect()->route('admin.backup365.index')->with('success', 'Xóa thành công  ! ');
    }
}
