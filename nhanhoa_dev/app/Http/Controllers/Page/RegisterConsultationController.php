<?php

namespace App\Http\Controllers\Page;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class RegisterConsultationController extends Controller
{
    public function register(Request $request){
        $emailTo = env('MAIL_USERNAME');
        $data = [
            'name' => $request->request_fullname,
            'phone' => $request->request_phone,
            'email' => $request->request_email,
            'content' => $request->request_content,
            'location' => $request->request_locationx,
        ];


        Mail::send('client.email.notification', $data, function ($message) use ($emailTo) {
            $message->to($emailTo)
                ->subject('Đăng ký tư vấn');
        });

        return back()->with('success', 'Email đã được gửi thành công!');
    }
}
