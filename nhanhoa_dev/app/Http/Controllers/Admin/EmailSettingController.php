<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\EmailSetting;
use Illuminate\Http\Request;

class EmailSettingController extends Controller
{

    public function showForm()
    {
        $title = 'Cấu hình Email';
        $emailSetting = EmailSetting::first();
        return view('admin.config.email', compact('emailSetting', 'title'));
    }
    public function update(Request $request)
    {
        // dd($request->all());
        $request->validate([
            // 'mail_host' => 'required|string',
            'mail_username' => 'required|string',
            'mail_password' => 'required|string',
            // 'mail_encryption' => 'required|string',
        ]);

        // Tìm bản ghi đầu tiên hoặc tạo mới nếu chưa có
        $emailSetting = EmailSetting::firstOrNew(['id' => 1]);

        // Cập nhật cấu hình email
        $emailSetting->fill($request->all());
        $emailSetting->save();

        // Cập nhật vào file .env
        $this->updateEnv([
            // 'MAIL_HOST' => $request->mail_host,
            // 'MAIL_PORT' => $request->mail_port,
            'MAIL_USERNAME' => $request->mail_username,
            'MAIL_PASSWORD' => $request->mail_password,
            // 'MAIL_ENCRYPTION' => $request->mail_encryption,
        ]);

        return redirect()->back()->with('success', 'Cấu hình email đã được cập nhật!');
    }

    // Hàm để cập nhật file .env
    protected function updateEnv($data)
    {
        $envPath = base_path('.env');

        foreach ($data as $key => $value) {
            file_put_contents($envPath, preg_replace(
                "/^{$key}=.*/m",
                "{$key}={$value}",
                file_get_contents($envPath)
            ));
        }
    }


}
