<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\CloudBackup;
use App\Services\CloudBackupService;
use Illuminate\Http\Request;

class CloudBackUpController extends Controller
{
    protected $cloudBackupService;

    public function __construct(CloudBackupService $cloudBackupService)
    {
        $this->cloudBackupService = $cloudBackupService;
    }

    public function index()
    {
        $title = 'Cloud Backup';
        $backups = $this->cloudBackupService->getAllBackups();
        return view('admin.cloudbackup.index', compact('backups', 'title'));
    }

    public function addForm(){
        $title = 'Thêm mới Cloud Backup';
        return view('admin.cloudbackup.add', compact('title'));
    }

    public function addSubmit(Request $request)
    {
        $backup = $this->cloudBackupService->createBackup($request->all());
        return redirect()->route('admin.cloudbackup.index');
    }
    public function editForm($id){
        $title = 'Cập nhật Cloud Backup';
        $backup = CloudBackup::find($id);
        return view('admin.cloudbackup.edit', compact('backup', 'title'));
    }


    public function editSubmit(Request $request, $id)
    {
        $backup = $this->cloudBackupService->updateBackup($request->all(), $id);
        return redirect()->route('admin.cloudbackup.index');
    }

    public function delete($id)
    {
        $this->cloudBackupService->deleteBackup($id);
        return redirect()->route('admin.cloudbackup.index');
    }
}
