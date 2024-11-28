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
        $title = 'Email Server';
        $email = $this->emailServerService->getAllEmailServers();
        return view('admin.email.index', compact('email', 'title'));
    }

    public function addForm(){
        $title = 'Thêm Email Server';
        $promotion = Promotion::all();
        return view('admin.email.add', compact('promotion', 'title'));
    }

    public function addSubmit(Request $request)
    {
        // dd($request->all());
        $email = $this->emailServerService->createEmailServer($request->all());
        return redirect()->route('admin.email.index');
    }
    public function editForm($id){
        $title = 'Thay đổi Email Server';
        $email = EmailServer::find($id);
        $promotion = Promotion::all();
        return view('admin.email.edit', compact('email', 'promotion', 'title'));
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
