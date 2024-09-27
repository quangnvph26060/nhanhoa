<?php

namespace App\Services;

use App\Mail\ServerLoactionPayEmail;
use App\Mail\ServerPayEmail;
use App\Models\Server;
use App\Models\ServerLocation;
use App\Models\ServerLocationPay;
use App\Models\ServerPay;
use App\Models\ServerPromotion;
use Exception;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Storage;
use League\OAuth1\Client\Credentials\ClientCredentialsInterface;

class ServerService
{
    protected $server;
    protected $serverPay;
    protected $serverLocation;
    protected $serverLocationPay;
    protected $clientService;

    public function __construct(Server $server, ServerPay $serverPay, ServerLocation $serverLocation, ServerLocationPay $serverLocationPay, ClientService $clientService)
    {
        $this->server = $server;
        $this->serverPay = $serverPay;
        $this->serverLocation = $serverLocation;
        $this->serverLocationPay = $serverLocationPay;
        $this->clientService = $clientService;
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
            ServerPromotion::where('server_id', $id)->delete();
            $server->delete();
            return $server;
        } catch (Exception $e) {
            DB::rollback();
            Log::error('Failed to update server: ' . $e->getMessage());
            throw new Exception('Failed to update server');
        }
    }

    public function PayServer(array $data)
    {
        try {
            DB::beginTransaction();
            $serverpay = $this->serverPay->create($data);
            DB::commit();
            $server = $this->server->find($data['server_id']);
            $dataemail = [
                'name' => $data['name'],
                'phone' => $data['phone'],
                'email' => $data['email'],
                'productname' => $server->name,
                'package_name' => 'Server - '.$server->name,
                'title' => 'Server'
            ];
            $this->clientService->createClient($dataemail);
            Mail::to($data['email'])->send(new ServerPayEmail($dataemail));
            $emailTo = env('MAIL_USERNAME');
            Mail::send('client.email.admin', $dataemail, function ($message) use ($emailTo) {
                $message->to($emailTo)
                    ->subject('Đăng ký tư vấn');
            });
            return $serverpay;
        } catch (Exception $e) {
            DB::rollback();
            Log::error('Failed to create server: ' . $e->getMessage());
            throw new Exception('Failed to create server');
        }
    }
// ---------------------------- vị trí máy chủ
    public function getServerLocationAll()
    {
        try {
            Log::info('Fetching all server');
            return $this->serverLocation->all();
        } catch (Exception $e) {
            Log::error('Failed to fetch server location: ' . $e->getMessage());
            throw new Exception('Failed to fetch server location');
        }
    }



    public function createServerLocation(array $data)
    {
        try {
            DB::beginTransaction();

            $datanew = [
                'name' => $data['name'],
                'price' => $data['price'],
                'bw_in_country' => $data['bw_in_country'], // Băng thông trong nước
                'bw_international' => $data['bw_international'], // Băng thông quốc tế
                'data_transfer' => $data['data_transfer'], // Dữ liệu truyền
                'rack_space' => $data['rack_space'], // Không gian rack
                'power_capacity' => $data['power_capacity'], // Công suất nguồn
                'ups_backup' => $data['ups_backup'], // UPS/Máy điện dự phòng
                'air_conditioning' => $data['air_conditioning'], // Điều hoà nhiệt độ
                'network_socket' => $data['network_socket'], // Ổ cắm mạng
                'ip_address' => $data['ip_address'], // Địa chỉ IP
                'promotion_id' => $data['promotion'] // Khuyến mãi
            ];

            $serverlocation = $this->serverLocation->create($datanew);
            DB::commit();
            return $serverlocation;
        } catch (Exception $e) {
            DB::rollback();
            Log::error('Failed to create serverlocation: ' . $e->getMessage());
            throw new Exception('Failed to create serverlocation');
        }
    }


    public function updateServerLocation(array $data, $id): ServerLocation
    {
        try {
            DB::beginTransaction();

            $serverlocation = ServerLocation::find($id);
            $datanew = [
                'name' => $data['name'],
                'price' => $data['price'],
                'bw_in_country' => $data['bw_in_country'], // Băng thông trong nước
                'bw_international' => $data['bw_international'], // Băng thông quốc tế
                'data_transfer' => $data['data_transfer'], // Dữ liệu truyền
                'rack_space' => $data['rack_space'], // Không gian rack
                'power_capacity' => $data['power_capacity'], // Công suất nguồn
                'ups_backup' => $data['ups_backup'], // UPS/Máy điện dự phòng
                'air_conditioning' => $data['air_conditioning'], // Điều hoà nhiệt độ
                'network_socket' => $data['network_socket'], // Ổ cắm mạng
                'ip_address' => $data['ip_address'], // Địa chỉ IP
                'promotion_id' => $data['promotion'] // Khuyến mãi
            ];
            $serverlocation->update($datanew);
            DB::commit();
            return $serverlocation;
        } catch (Exception $e) {
            DB::rollback();
            Log::error('Failed to update serverlocation: ' . $e->getMessage());
            throw new Exception('Failed to update serverlocation');
        }
    }
    public function deleteServerLocation($id): ServerLocation
    {
        try {
            DB::beginTransaction();
            DB::commit();
            $serverlocation = ServerLocation::find($id);
            $serverlocation->delete();
            return $serverlocation;
        } catch (Exception $e) {
            DB::rollback();
            Log::error('Failed to update serverlocation: ' . $e->getMessage());
            throw new Exception('Failed to update serverlocation');
        }
    }

    public function PayServerLocation(array $data)
    {
        try {
            DB::beginTransaction();
            $serverpay = $this->serverLocationPay->create($data);
            DB::commit();
            $server = $this->serverLocation->find($data['serverlocation_id']);
            $dataemail = [
                'name' => $data['name'],
                'phone' => $data['phone'],
                'email' => $data['email'],
                'productname' => $server->name,
                'package_name' => 'Server Location - '.$server->name,
                'title' => 'Server Location'
            ];
            $this->clientService->createClient($dataemail);
            Mail::to($data['email'])->send(new ServerLoactionPayEmail($dataemail));
            $emailTo = env('MAIL_USERNAME');
            Mail::send('client.email.admin', $dataemail, function ($message) use ($emailTo) {
                $message->to($emailTo)
                    ->subject('Đăng ký tư vấn');
            });
            return $serverpay;
        } catch (Exception $e) {
            DB::rollback();
            Log::error('Failed to create server: ' . $e->getMessage());
            throw new Exception('Failed to create server');
        }
    }
}
