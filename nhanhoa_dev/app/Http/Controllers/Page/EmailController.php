<?php

namespace App\Http\Controllers\Page;

use App\Http\Controllers\Controller;
use App\Models\EmailServer;
use App\Services\EmailServerService;
use App\Services\GoogleWorkspaceService;
use Illuminate\Http\Request;

class EmailController extends Controller
{
    protected $emailServerService;
    protected $googleWorkspaceService;
    public function __construct(EmailServerService $emailServerService, GoogleWorkspaceService $googleWorkspaceService){
        $this->emailServerService = $emailServerService;
        $this->googleWorkspaceService = $googleWorkspaceService;
    }

    public function emailServer(){
        $emailServer = $this->emailServerService->getAllEmailServers();
        return view('client.pages.email-server.index', compact('emailServer'));
    }


    public function emailServerPay(Request $request){

        $emailserverPay = $this->emailServerService->PayEmailServer($request->all());
        return redirect()->back()->with('success', 'Thông báo thành công!');
    }

    public function googleWorkspace(){
        $googleWorkspaceEducation = $this->googleWorkspaceService->getAllGoogleWorkspaceEducation();
        $googleWorkspaceBusiness = $this->googleWorkspaceService->getAllGoogleWorkspaceBusiness();
        // dd($googleWorkspaceEducation);
        return view('client.pages.google-workspace.index', compact('googleWorkspaceEducation', 'googleWorkspaceBusiness'));
    }

    public function googleWorkspaceEducationPay(Request $request){

        $googleWorkspaceEducationPay = $this->googleWorkspaceService->PayGoogleWorkspaceEducation($request->all());
        return redirect()->back()->with('success', 'Thông báo thành công!');
    }


    public function googleWorkspaceBusinessPay(Request $request){

        $googleWorkspaceBusinessPay = $this->googleWorkspaceService->PayGoogleWorkspaceBusiness($request->all());
        return redirect()->back()->with('success', 'Thông báo thành công!');
    }
}
