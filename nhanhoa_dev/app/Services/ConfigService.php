<?php

namespace App\Services;

use App\Models\Bank;
use App\Models\Config;
use Exception;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Storage;

class ConfigService
{
    protected $config;

    public function __construct(Config $config)
    {
        $this->config = $config;
    }

    public function getConfig(){
        try {
            Log::info('Fetching all config');
            return $this->config->first();
        } catch (Exception $e) {
            Log::error('Failed to fetch config: ' . $e->getMessage());
            throw new Exception('Failed to fetch config');
        }
    }


    public function updateConfig(array $data): Config
    {
        try {
            // dd($data);
            DB::beginTransaction();

            $config = Config::first();

            // Cập nhật giá trị cho cột receiver
            $config->receiver = $data['receiver'];

            // Update user details
            $config->store_name = $data['store_name'];
            $config->phone = $data['phone'];
            $config->email = $data['email'];
            $config->address = $data['address'];
            $config->title = $data['title'];
            $config->mota = $data['mota'];
            $config->save();
            
            // Thiết lập các cột khác
            $config->bank_account = $data['bank_account'];
            $config->bank_id = $data['bank'];

            if (!empty($data['bank_account']) && !empty($data['bank'])) {
                $bank = Bank::find($data['bank'])->code;
                $bank_account = $data['bank_account'];
                $config->qr = "https://img.vietqr.io/image/{$bank}-{$bank_account}-compact.jpg";
            }

            if (isset($data['logo'])) {

                $directoryPath = 'public/config';
                Storage::deleteDirectory($directoryPath);
                Storage::makeDirectory($directoryPath);
                $logo = $data['logo'];
                $logoFileName = 'image_' . $logo->getClientOriginalName();
                $logoFilePath = 'storage/config/' . $logoFileName;
                Storage::putFileAs('public/config', $logo, $logoFileName);
                $config->logo = $logoFilePath;
            }

            if (isset($data['icon'])) {

                $directoryPathIcon = 'public/icon';
                Storage::deleteDirectory($directoryPathIcon);
                Storage::makeDirectory($directoryPathIcon);
                $icon = $data['icon'];
                $logoFileNameIcon = 'image_' . $icon->getClientOriginalName();
                $logoFilePathIcon = 'storage/icon/' . $logoFileNameIcon;
                Storage::putFileAs('public/icon', $icon, $logoFileNameIcon);
                $config->icon = $logoFilePathIcon;
            }

            $config->save();

            DB::commit();

            return $config;
        } catch (Exception $e) {
            DB::rollback();
            Log::error('Failed to update configuration: ' . $e->getMessage());
            throw new Exception('Failed to update configuration');
        }
    }
}
