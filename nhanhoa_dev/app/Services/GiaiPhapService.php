<?php

namespace App\Services;

use App\Models\SgoGiaiphap;
use Illuminate\Support\Str;

class GiaiPhapService
{

    public function getAllGiaiPhap()
    {
        return SgoGiaiphap::all();
    }

    // Thêm một giải pháp
    public function createGiaiPhap($data)
    {
        return SgoGiaiphap::create([
            'title' => $data['title'],
            'slug' => Str::slug($data['title']),
            'content' => $data['content'],
        ]);
    }

    // Cập nhật một giải pháp
    public function updateGiaiPhap($id, $data)
    {
        $giaiphap = SgoGiaiphap::findOrFail($id);
        $giaiphap->update([
            'title' => $data['title'],
            'slug' => Str::slug($data['title']),
            'content' => $data['content'],
        ]);

        return $giaiphap;
    }

    // Xóa một giải pháp
    public function deleteGiaiPhap($id)
    {
        $giaiphap = SgoGiaiphap::findOrFail($id);
        return $giaiphap->delete();
    }
}

