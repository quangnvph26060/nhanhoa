<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\EmailServer;
use App\Models\Promotion;
use App\Services\EmailServerService;
use App\Services\GoogleWorkspaceService;
use Illuminate\Http\Request;

class EmailServerController extends Controller
{
    //
    protected $emailServerService;
    public function __construct(EmailServerService $emailServerService){
        $this->emailServerService = $emailServerService;
    }

    public function index()
    {
        $email = $this->emailServerService->getAllEmailServers();
        return view('admin.email.index', compact('email'));
    }

    public function addForm(){
        $promotion = Promotion::all();
        return view('admin.email.add', compact('promotion'));
    }

    public function addSubmit(Request $request)
    {
        // dd($request->all());
        $email = $this->emailServerService->createEmailServer($request->all());
        return redirect()->route('admin.email.index');
    }
    public function editForm($id){
        $email = EmailServer::find($id);
        return view('admin.cloubbackup.edit', compact('backup'));
    }


    public function editSubmit(Request $request, $id)
    {
        $email = $this->emailServerService->updateEmailServer($request->all(), $id);
        return redirect()->route('admin.email.index');
    }

    public function delete($id)
    {
        $this->emailServerService->deleteEmailServer($id);
        return redirect()->route('admin.email.index');
    }
}
