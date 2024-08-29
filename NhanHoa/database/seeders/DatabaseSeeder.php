<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\Bank;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        Model::unguard();

        if (Bank::query()->first())
            return;

        $file_path = resource_path('sql/bank.json');
        $data      = json_decode(file_get_contents($file_path));
        foreach ($data->RECORDS as $item) {
            $cities[] = [
                'id'         => $item->id,
                'name'       => $item->name,
                'code'       => $item->code,
                'bin'        => $item->bin,
                'shortName'  => $item->shortName
            ];
        }
        Bank::query()->insert($cities ?? []);
    }
}
