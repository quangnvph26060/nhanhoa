<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Storage;

class UserController extends Controller
{
    //
    public function index()
    {
        $users = User::get();
        return view('admin.user.index', compact('users'));
    }

    public function add()
    {
        return view('admin.user.add');
    }

    public function store(Request $request)
    {
        $data = [
            "name" => $request->name,
            "email" => $request->email,
            "phone" => $request->phone,
            "password" => Hash::make($request->password),
            "address" => $request->address,
            "role_id" => $request->role_id,
            "is_active" => $request->is_active,
        ];

        if ($request->hasFile('avatar')) {
            $logo = $request->file('avatar'); // Lấy file avatar từ request
            $directoryPath = 'public/avataruser'; // Đường dẫn lưu trữ

            // Tạo tên file với định dạng image_ + tên file gốc
            $logoFileName = 'image_' . time() . '_' . $logo->getClientOriginalName();
            $logoFilePath = 'storage/avataruser/' . $logoFileName; // Đường dẫn lưu trữ file

            // Lưu file vào thư mục đã chỉ định
            $logo->storeAs($directoryPath, $logoFileName); // Sử dụng storeAs để lưu file với tên cụ thể
            $data['avatar'] = $logoFilePath;
        }



        User::create($data);
        return redirect()->route('admin.user.index')->with('success', 'Thêm mới người dùng thành công');
    }

    public function edit($id)
    {
        $user = User::find($id);
        return view('admin.user.edit', compact('user'));
    }
    public function update(Request $request, $id)
    {
        $user = User::find($id);
        // Tạo mảng dữ liệu để cập nhật
        $data = [
            "name" => $request->name,
            "email" => $request->email,
            "phone" => $request->phone,
            "address" => $request->address,
            "role_id" => $request->role_id,
            "is_active" => $request->is_active,
        ];

        // Kiểm tra xem email có trùng với người dùng khác không
        $existingUser = User::where('email', $request->email)
            ->where('id', '!=', $id) // Bỏ qua người dùng hiện tại
            ->first();

        if ($existingUser) {
            return back()->withErrors(['email' => 'Email đã được sử dụng bởi tài khoản khác.']);
        }

        // Kiểm tra xem có file avatar không
        if ($request->hasFile('avatar')) {
            $logo = $request->file('avatar'); // Lấy file avatar từ request
            $directoryPath = 'public/avataruser'; // Đường dẫn lưu trữ

            // Tạo tên file với định dạng image_ + tên file gốc
            $logoFileName = 'image_' . time() . '_' . $logo->getClientOriginalName();
            $logoFilePath = 'storage/avataruser/' . $logoFileName; // Đường dẫn lưu trữ file

            // Lưu file vào thư mục đã chỉ định
            $logo->storeAs($directoryPath, $logoFileName); // Sử dụng storeAs để lưu file với tên cụ thể
            $data['avatar'] = $logoFilePath;
        }

        // Kiểm tra và cập nhật mật khẩu
        if ($request->password && $request->password_new) {
            if (!Hash::check($request->password, $user->password)) {
                return back()->withErrors(['current_password' => 'Mật khẩu hiện tại không chính xác.']);
            } else {
                $data['password'] = Hash::make($request->password_new);
            }
        }

        // Cập nhật dữ liệu người dùng
        $user->update($data);

        return redirect()->route('admin.user.index')->with('success', 'Thông tin người dùng đã được cập nhật.');
    }

    public function updateuser(Request $request){
        $user_id = Auth::user()->id;
        $data = [
            "name" => $request->name,
            "email" => $request->email,
            "phone" => $request->phone,
            "address" => $request->address,
        ];
        if ($request->hasFile('avatar')) {
            $logo = $request->file('avatar'); // Lấy file avatar từ request
            $directoryPath = 'public/avataruser'; // Đường dẫn lưu trữ

            // Tạo tên file với định dạng image_ + tên file gốc
            $logoFileName = 'image_' . time() . '_' . $logo->getClientOriginalName();
            $logoFilePath = 'storage/avataruser/' . $logoFileName; // Đường dẫn lưu trữ file

            // Lưu file vào thư mục đã chỉ định
            $logo->storeAs($directoryPath, $logoFileName); // Sử dụng storeAs để lưu file với tên cụ thể
            $data['avatar'] = $logoFilePath;
        }
        $user = User::find($user_id);
        $user->update($data);

        return redirect()->back()->with('success', 'Thông tin người dùng đã được cập nhật.');
    }

    public function delete($id){
        $user = User::find($id);
        $user->delete();
        return redirect()->route('admin.user.index')->with('success', 'Xóa người dùng thành công.');
    }
}
