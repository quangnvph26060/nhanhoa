<?php

namespace App\Http\Controllers\Page;

use App\Http\Controllers\Controller;
use App\Models\Footer;
use App\Models\SgoNews;
use Illuminate\Http\Request;

class AffiliateController extends Controller
{
    public function index(){
        return view('client.pages.affiliate.index');
    }

    public function news(){
        $news = SgoNews::where('type', '!=', 5)->get();
        $new1 = SgoNews::where('type', 1)->get();
        $new2 = SgoNews::where('type', 2)->get();
        $new3 = SgoNews::where('type', 3)->get();
        $new4 = SgoNews::where('type', 4)->get();
        $thongbao = SgoNews::where('type', 2)->take(3)->get();
        $tuyendung = SgoNews::where('type', 3)->take(3)->get();
        $footers = Footer::get();
        return view('client.pages.news.index', compact('news', 'new1', 'new2', 'new3', 'new4', 'thongbao', 'tuyendung'));
    }

    public function contact(){
        return view('client.pages.contact.index');
    }

    public function newsDetail($slug, $id){
        $new = SgoNews::find($id);
        $new->update(['views' => $new->views + 1]);
        $thongbao = SgoNews::where('type', 2)->take(3)->get();
        $tuyendung = SgoNews::where('type', 3)->take(3)->get();
        $footers = Footer::get();
        return view('client.pages.affiliate.detail.detail', compact('id', 'new', 'thongbao', 'tuyendung'));
    }
    public function newsChild($id)
    {
        $footers = Footer::get();
        $news = SgoNews::where('type', $id)->paginate(12);
        $thongbao = SgoNews::where('type', 2)->take(3)->get();
        $tuyendung = SgoNews::where('type', 3)->take(3)->get();
        return view('client.pages.affiliate.detail.child', compact('news', 'id', 'thongbao', 'tuyendung'));
    }

}
