<?php

namespace App\Http\Controllers\Page;

use App\Http\Controllers\Controller;
use App\Models\CustomerReview;
use App\Models\EmailServer;
use App\Models\Footer;
use App\Services\ClientService;
use App\Services\EmailServerService;
use App\Services\GoogleWorkspaceService;
use Illuminate\Http\Request;

class EmailController extends Controller
{
    protected $emailServerService;
    protected $googleWorkspaceService;

    protected $clientService;
    public function __construct(EmailServerService $emailServerService, GoogleWorkspaceService $googleWorkspaceService, ClientService $clientService){
        $this->emailServerService = $emailServerService;
        $this->googleWorkspaceService = $googleWorkspaceService;
        $this->clientService = $clientService;
    }

    public function emailServer(){
        $emailServer = $this->emailServerService->getAllEmailServers();
        $title = "Email Server";
        $customerreivew  = CustomerReview::get();
        $footers = Footer::get();
        return view('client.pages.email-server.index', compact('emailServer', 'title', 'customerreivew', 'footers'));
    }


    public function emailServerPay(Request $request){

        $emailserverPay = $this->emailServerService->PayEmailServer($request->all());
        return redirect()->back()->with('success', 'Thông báo thành công!');
    }

    public function googleWorkspace(){
        $googleWorkspaceEducation = $this->googleWorkspaceService->getAllGoogleWorkspaceEducation();
        $googleWorkspaceBusiness = $this->googleWorkspaceService->getAllGoogleWorkspaceBusiness();
        $title = "Google Workspace";
        $customerreivew  = CustomerReview::get();
        $footers = Footer::get();
        return view('client.pages.google-workspace.index', compact('googleWorkspaceEducation', 'googleWorkspaceBusiness', 'title', 'customerreivew', 'footers'));
    }

    public function googleWorkspaceEducationPay(Request $request){
        // $client = $this->clientService->createClient($request->all());
        $googleWorkspaceEducationPay = $this->googleWorkspaceService->PayGoogleWorkspaceEducation($request->all());
        return redirect()->back()->with('success', 'Thông báo thành công!');
    }


    public function googleWorkspaceBusinessPay(Request $request){

        $googleWorkspaceBusinessPay = $this->googleWorkspaceService->PayGoogleWorkspaceBusiness($request->all());
        // $client = $this->clientService->createClient($request->all());
        return redirect()->back()->with('success', 'Thông báo thành công!');
    }
}
