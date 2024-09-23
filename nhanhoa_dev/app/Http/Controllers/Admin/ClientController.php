<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Client;
use Carbon\Carbon;
use Illuminate\Http\Request;

class ClientController extends Controller
{
    //
    public function index()
    {
        return view('admin.client.index');
    }
    public function listclient()
    {
        $perPage = 6;
        $client = Client::orderBy('created_at', 'desc')->paginate($perPage);
        $data = [];
        foreach ($client as $key => $item) {
            $data[] = [
                'code' => $item->code,
                'name' => $item->name,
                'phone' => $item->phone,
                'email' => $item->email,
                'id' => $item->id,
                'created_at' => $this->formatDate($item->created_at),
                'package_name' => $item->package_name
            ];
        }

        return response()->json([
            'data' => $data,
            'current_page' => $client->currentPage(),
            'last_page' => $client->lastPage(),
            'per_page' => $client->perPage(),
            'total' => $client->total()
        ]);
    }

    public function delete($id)
    {
        $client = Client::find($id);
        if ($client) {
            $client->delete();
            return response()->json(['success' => true, 'message' => 'Đã xóa khách hàng thành công!']);
        } else {
            return response()->json(['success' => false, 'message' => 'Không tìm thấy khách hàng!']);
        }
    }


    function formatDate($dateString)
    {
        // Chuyển đổi chuỗi ngày thành đối tượng Carbon
        $date = Carbon::parse($dateString);
        $today = Carbon::today();

        if ($date->isToday()) {
            return 'Hôm nay';
        } elseif ($date->isYesterday()) {
            return 'Hôm qua';
        } else {
            return $date->format('d-m-Y');
        }
    }
}
