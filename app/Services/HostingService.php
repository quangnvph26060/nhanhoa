<?php

namespace App\Services;

use App\Models\Hosting;
use App\Models\SgoHostingPromotion;
use Exception;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Storage;

class HostingService
{
    protected $hosting;

    public function __construct(Hosting $hosting)
    {
        $this->hosting = $hosting;
    }

    public function getHostingAll(){
        try {
            Log::info('Fetching all hosting');
            return $this->hosting->all();
        } catch (Exception $e) {
            Log::error('Failed to fetch hosting: ' . $e->getMessage());
            throw new Exception('Failed to fetch hosting');
        }
    }

    public function createHosting(array $data)
    {
        try {
            DB::beginTransaction();

            $datanew = [
                'name' => $data['name'],
                'price' => $data['price'],
                'storage' =>$data['storage'] ,
                'bandwidth' => $data['bandwidth'],
                'cpu' => $data['cpu'],
                'ram' => $data['ram'],
                'mysql' => $data['mysql'],
                'ftp_account' => $data['ftp_account'],
                'subdomain' => $data['subdomain'],
                'alias_parked_domain' => $data['alias_parked_domain'],
                'email_account' => $data['email_account'],
                'hostingtype_id' => $data['hostingtype_id'],
            ];

            $hosting = $this->hosting->create($datanew);
            if(!empty($data['promotion'])){
                foreach ($data['promotion'] as $key => $item) {
                    SgoHostingPromotion::create([
                        'hosting_id' => $hosting->id,
                        'promotion_id' => $item
                    ]);
                }
            }

            DB::commit();
            return $hosting;
        } catch (Exception $e) {
            DB::rollback();
            Log::error('Failed to create hosting: ' . $e->getMessage());
            throw new Exception('Failed to create hosting');
        }
    }


    public function updateHosting(array $data, $id): hosting
    {
        try {
            DB::beginTransaction();
            DB::commit();
            $hosting = $this->hosting->find($id);
            $datanew = [
                'name' => $data['name'],
                'price' => $data['price'],
                'storage' =>$data['storage'] ,
                'bandwidth' => $data['bandwidth'],
                'cpu' => $data['cpu'],
                'ram' => $data['ram'],
                'mysql' => $data['mysql'],
                'ftp_account' => $data['ftp_account'],
                'subdomain' => $data['subdomain'],
                'alias_parked_domain' => $data['alias_parked_domain'],
                'email_account' => $data['email_account'],
                'hostingtype_id' => $data['hostingtype_id'],
            ];
            $hosting->update($datanew);
            if(!empty($data['promotion'])){
                foreach ($data['promotion'] as $key => $item) {
                    SgoHostingPromotion::create([
                        'hosting_id' => $id,
                        'promotion_id' => $item
                    ]);
                }
            }
            return $hosting;
        } catch (Exception $e) {
            DB::rollback();
            Log::error('Failed to update hosting: ' . $e->getMessage());
            throw new Exception('Failed to update hosting');
        }
    }
    public function deleteHosting($id): hosting
    {
        try {
            DB::beginTransaction();
            DB::commit();
            $hosting = $this->hosting->find($id);
            $hosting->delete();
            return $hosting;
        } catch (Exception $e) {
            DB::rollback();
            Log::error('Failed to update hosting: ' . $e->getMessage());
            throw new Exception('Failed to update hosting');
        }
    }
}
