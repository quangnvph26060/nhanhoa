<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\GoogleWorkspace;
use App\Models\GoogleWorkspaceEducation;
use App\Services\GoogleWorkspaceService;
use App\Services\PromotionService;
use Illuminate\Http\Request;

class GoogleWorkspaceController extends Controller
{
    protected $googleWorkspaceService;
    protected $promotionService;
    public function __construct(GoogleWorkspaceService $googleWorkspaceService, PromotionService $promotionService){
        $this->googleWorkspaceService = $googleWorkspaceService;
        $this->promotionService = $promotionService;
    }

    public function index()
    {
        $business = $this->googleWorkspaceService->getAllGoogleWorkspaceBusiness();
        $educations = $this->googleWorkspaceService->getAllGoogleWorkspaceEducation();
        return view('admin.googleworkspace.index', compact('business', 'educations'));
    }

    public function addForm(){
        $promotion = $this->promotionService->getPromotionAll();
        return view('admin.googleworkspace.add', compact('promotion'));
    }

    public function addSubmitEducation(Request $request)
    {
        $education = $this->googleWorkspaceService->createGoogleWorkspaceEducation($request->all());
        return redirect()->route('admin.googleworkspace.index');
    }
    public function editFormEducation($id){
        $education = GoogleWorkspaceEducation::find($id);
        return view('admin.googleworkspace.editeducation', compact('education'));
    }


    public function editSubmitEducation(Request $request, $id)
    {
        $education = $this->googleWorkspaceService->updateGoogleWorkspaceEducation($request->all(), $id);
        session()->flash('displaybusiness', 'none');
        session()->flash('displayeducation', 'block');
        return redirect()->route('admin.googleworkspace.index');
    }

    public function deleteEducation($id)
    {
        $this->googleWorkspaceService->deleteGoogleWorkspaceEducation($id);
        session()->flash('displaybusiness', 'none');
        session()->flash('displayeducation', 'block');
        return redirect()->route('admin.googleworkspace.index');
    }



    public function addSubmitBusiness(Request $request)
    {
        $business = $this->googleWorkspaceService->createGoogleWorkspaceBusiness($request->all());

        return redirect()->route('admin.googleworkspace.index');
    }

    public function editFormBusiness($id){
        $business = GoogleWorkspace::find($id);
        $promotion = $this->promotionService->getPromotionAll();
        return view('admin.googleworkspace.editbusiness', compact('business', 'promotion'));
    }


    public function editSubmitBusiness(Request $request, $id)
    {
        $business = $this->googleWorkspaceService->updateGoogleWorkspaceBusiness($request->all(), $id);
        session()->flash('displaybusiness', 'block');
        session()->flash('displayeducation', 'none');
        return redirect()->route('admin.googleworkspace.index');
    }

    public function deleteBusiness($id)
    {
        $this->googleWorkspaceService->deleteGoogleWorkspaceBusiness($id);
        session()->flash('displaybusiness', 'block');
        session()->flash('displayeducation', 'none');
        return redirect()->route('admin.googleworkspace.index');
    }
}
