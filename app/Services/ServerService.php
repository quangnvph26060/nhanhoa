<?php

namespace App\Services;

use App\Models\Server;
use App\Models\ServerPromotion;
use Exception;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Storage;

class ServerService
{
    protected $server;

    public function __construct(Server $server)
    {
        $this->server = $server;
    }

    public function getServerAll()
    {
        try {
            Log::info('Fetching all server');
            return $this->server->all();
        } catch (Exception $e) {
            Log::error('Failed to fetch server: ' . $e->getMessage());
            throw new Exception('Failed to fetch server');
        }
    }

    public function createServer(array $data)
    {
        try {
            DB::beginTransaction();

            $datanew = [
                'name' => $data['name'],
                'price' => $data['price'],
                'cpu' => $data['cpu'],
                'ssd' => $data['ssd'],
                'ram' => $data['ram'],
                'data' => $data['data'],
                'ip' => $data['ip'],
                'domestic' => $data['domestic'],
                'international' => $data['international']
            ];

            $server = $this->server->create($datanew);
            if (!empty($data['promotion'])) {
                foreach ($data['promotion'] as $key => $item) {
                    ServerPromotion::create([
                        'server_id' => $server->id,
                        'promotion_id' => $item
                    ]);
                }
            }
            DB::commit();
            return $server;
        } catch (Exception $e) {
            DB::rollback();
            Log::error('Failed to create server: ' . $e->getMessage());
            throw new Exception('Failed to create server');
        }
    }


    public function updateServer(array $data, $id): Server
    {
        try {
            DB::beginTransaction();

            $server = Server::find($id);
            $datanew = [
                'name' => $data['name'],
                'price' => $data['price'],
                'cpu' => $data['cpu'],
                'ssd' => $data['ssd'],
                'ram' => $data['ram'],
                'data' => $data['data'],
                'ip' => $data['ip'],
                'domestic' => $data['domestic'],
                'international' => $data['international']
            ];
            ServerPromotion::where('server_id', $id)->delete();
            if (!empty($data['promotion'])) {
                foreach ($data['promotion'] as $key => $item) {
                    ServerPromotion::create([
                        'server_id' => $server->id,
                        'promotion_id' => $item
                    ]);
                }
            }
            $server->update($datanew);
            DB::commit();
            return $server;
        } catch (Exception $e) {
            DB::rollback();
            Log::error('Failed to update server: ' . $e->getMessage());
            throw new Exception('Failed to update server');
        }
    }
    public function deleteServer($id): Server
    {
        try {
            DB::beginTransaction();
            DB::commit();
            $server = Server::find($id);
            $server->delete();
            return $server;
        } catch (Exception $e) {
            DB::rollback();
            Log::error('Failed to update server: ' . $e->getMessage());
            throw new Exception('Failed to update server');
        }
    }
}
