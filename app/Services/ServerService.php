<?php

namespace App\Services;

use App\Models\Server;
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

    public function getServerAll(){
        try {
            Log::info('Fetching all server');
            return $this->server->all();
        } catch (Exception $e) {
            Log::error('Failed to fetch server: ' . $e->getMessage());
            throw new Exception('Failed to fetch server');
        }
    }

    public function createServer(array $data): Server
    {
        try {
            DB::beginTransaction();
            $server = Server::create($data);
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
            $server->update($data);
            return $server;
        } catch (Exception $e) {
            DB::rollback();
            Log::error('Failed to update server: ' . $e->getMessage());
            throw new Exception('Failed to update server');
        }
    }
}
