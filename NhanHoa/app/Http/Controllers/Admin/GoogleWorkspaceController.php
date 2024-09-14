<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\GoogleWorkspaceEducation;
use App\Services\GoogleWorkspaceService;
use Illuminate\Http\Request;

class GoogleWorkspaceController extends Controller
{
    protected $googleWorkspaceService;
    public function __construct(GoogleWorkspaceService $googleWorkspaceService){
        $this->googleWorkspaceService = $googleWorkspaceService;
    }

    public function index()
    {
        $backups = $this->googleWorkspaceService->getAllGoogleWorkspaceBusiness();
        $backups = $this->googleWorkspaceService->getAllGoogleWorkspaceEducation();
        return view('admin.cloubbackup.index', compact('backups'));
    }

    public function addForm(){
        return view('admin.cloubbackup.add');
    }

    public function addSubmitEducation(Request $request)
    {
        $backup = $this->googleWorkspaceService->createGoogleWorkspaceEducation($request->all());
        return redirect()->route('admin.cloubbackup.index');
    }
    public function editFormEducation($id){
        $backup = GoogleWorkspaceEducation::find($id);
        return view('admin.cloubbackup.edit', compact('backup'));
    }


    public function editSubmitEducation(Request $request, $id)
    {
        $backup = $this->googleWorkspaceService->updateGoogleWorkspaceEducation($request->all(), $id);
        return redirect()->route('admin.cloudbackup.index');
    }

    public function deleteEducation($id)
    {
        $this->googleWorkspaceService->deleteGoogleWorkspaceEducation($id);
        return redirect()->route('admin.cloudbackup.index');
    }


/// Business
    public function addSubmitBusiness(Request $request)
    {
        $backup = $this->googleWorkspaceService->createGoogleWorkspaceBusiness($request->all());
        return redirect()->route('admin.cloubbackup.index');
    }
    public function editFormBusiness($id){
        $backup = GoogleWorkspaceEducation::find($id);
        return view('admin.cloubbackup.edit', compact('backup'));
    }


    public function editSubmitBusiness(Request $request, $id)
    {
        $backup = $this->googleWorkspaceService->updateGoogleWorkspaceBusiness($request->all(), $id);
        return redirect()->route('admin.cloudbackup.index');
    }

    public function deleteBusiness($id)
    {
        $this->googleWorkspaceService->deleteGoogleWorkspaceBusiness($id);
        return redirect()->route('admin.cloudbackup.index');
    }
}
