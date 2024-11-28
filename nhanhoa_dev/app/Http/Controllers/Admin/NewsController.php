<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\SgoNews;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;

class NewsController extends Controller
{
    public function index()
    {
        $title = "Tin tức";
        $news = SgoNews::all();

        return view('admin.news.index', compact('news', 'title'));
    }

    // Hiển thị form tạo mới bài báo
    public function create()
    {
        $title = "Thêm mới Tin tức";
        return view('admin.news.add', compact('title'));
    }

    // Lưu bài báo mới vào cơ sở dữ liệu
    public function store(Request $request)
    {
        $user = Auth::user();
        $slug = Str::slug($request->title, '-');
        $validatedData =  [
            'title' => $request->title,
            'author_id' => $user->id,
            'slug' => $slug,
            'type' => $request->type,
            'content' => $request->content,
        ];

        if (isset($request->logo)) {

            $directoryPath = 'public/new';
            // Storage::deleteDirectory($directoryPath);
            // Storage::makeDirectory($directoryPath);
            $logo = $request->logo;
            $logoFileName = 'image_' . $logo->getClientOriginalName();
            $logoFilePath = 'storage/new/' . $logoFileName;
            Storage::putFileAs('public/new', $logo, $logoFileName);
            $validatedData['logo'] = $logoFilePath;
        }

        SgoNews::create($validatedData);

        return redirect()->route('admin.new.index')->with('success', 'Bài viết đã được tạo thành công!');
    }

    // Hiển thị thông tin chi tiết của một bài báo
    public function show($slug, $id)
    {
        $title = "Thay đổi Tin Tức";
        $new = SgoNews::find($id);
        return view('admin.news.edit', compact('new', 'title'));
    }

    public function update(Request $request, $slug, $id)
    {
        $slug = Str::slug($request->title, '-');
        $validatedData =  [
            'title' => $request->title,
            'content' => $request->content,
            'slug' => $slug,
            'type' => $request->type,
        ];
        if (isset($request->logo)) {

            $directoryPath = 'public/new';
            // Storage::deleteDirectory($directoryPath);
            // Storage::makeDirectory($directoryPath);
            $logo = $request->logo;
            $logoFileName = 'image_' . $logo->getClientOriginalName();
            $logoFilePath = 'storage/new/' . $logoFileName;
            Storage::putFileAs('public/new', $logo, $logoFileName);
            $validatedData['logo'] = $logoFilePath;
        }
        $sgoNews = SgoNews::find($id);
        $sgoNews->update($validatedData);

        return redirect()->route('admin.new.index')->with('success', 'Bài viết đã được cập nhật thành công!');
    }

    // Xóa bài báo khỏi cơ sở dữ liệu
    public function destroy($id)
    {
        $sgoNews = SgoNews::find($id);
        $sgoNews->delete();

        return redirect()->route('admin.new.index')->with('success', 'Bài viết đã được xóa thành công!');
    }
}
