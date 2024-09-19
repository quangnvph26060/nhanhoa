<?php

namespace App\Services;

use App\Mail\Backup365PayEmail;
use App\Models\Backup365;
use App\Models\Backup365Pay;
use App\Models\Client;
use Exception;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Mail;

/**
 * Summary of backup365Service
 */
class ClientService
{
    protected $client;

    public function __construct(Client $client)
    {
        $this->client = $client;
    }

    public function createClient(array $data): Client
    {
        try {
            DB::beginTransaction();

            $newBackup = [
                'name' => $data['name'],
                'phone' => $data['phone'],
                'email' => $data['email'],
            ];
            $client = Client::where('email', $data['email'])->first();
            if(!$client){
                $this->client->create($newBackup);
            }

            DB::commit();
            return $client;
        } catch (Exception $e) {
            DB::rollback();
            Log::error('Failed to create client: ' . $e->getMessage());
            throw new Exception('Failed to create client');
        }
    }

    public function getClientAll(){
        try {
            DB::beginTransaction();
            $clients = $this->client->orderBy('created_at', 'desc')->get();
            DB::commit();
            return $clients;
        } catch (Exception $e) {
            DB::rollback();
            Log::error('Failed to  client all: ' . $e->getMessage());
            throw new Exception('Failed to client all');
        }
    }
}
