<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Footer;
use App\Models\FooterNew;
use App\Models\SgoNews;
use Illuminate\Http\Request;

class FooterController extends Controller
{

    public function index(){
        $title = "Quản lý nội dung hiện thị footer";
        $footers = Footer::all();
        // dd($footers[0]->new[0]->new);
        return view('admin.footer.index', compact('footers', 'title'));
    }

    public function add(){
        $title = "Thêm nội dung hiện thị footer";
        $news = SgoNews::get();
        return view('admin.footer.add', compact('news', 'title'));
    }

    public function store(Request $request){
        $footer = Footer::create($request->all());
        if(isset($request->new)){
            foreach($request->new as $item){
                FooterNew::create([
                    'footer_id' => $footer->id,
                    'new_id' => $item
                ]);
            }
        }

        return redirect()->route('admin.config.footer.index')->with('success', 'Thêm thành công!');
    }

    public function edit($id){
        $title = "Sửa nội dung hiện thị footer";
        $footer = Footer::find($id);
        $news = SgoNews::get();
        $newArray = FooterNew::where('footer_id', $id)->pluck('new_id');
        $newselect = $newArray->toArray();
        return view('admin.footer.edit', compact('footer', 'news', 'newselect', 'title'));
    }

    public function update(Request $request, $id){
        $footer = Footer::find($id);
        $footer->update($request->all());
        FooterNew::where('footer_id', $id)->delete();
        if(isset($request->new)){
            foreach($request->new as $item){
                FooterNew::create([
                    'footer_id' => $footer->id,
                    'new_id' => $item
                ]);
            }
        }
        return redirect()->route('admin.config.footer.index')->with('success', 'Cập nhật thành công!');
    }
    public function delete($id){
        Footer::find($id)->delete();
        FooterNew::where('footer_id', $id)->delete();
        return redirect()->route('admin.config.footer.index')->with('success', 'Xóa thành công!');
    }
}
