<?php

namespace App\Services;

use App\Models\Backup365;
use App\Models\Backup365Pay;
use App\Models\CloudBackupPay;
use App\Models\EmailServerPay;
use App\Models\GoogleWorkspace;
use App\Models\GoogleWorkspaceBusinessPay;
use App\Models\GoogleWorkspaceEducationPay;
use App\Models\ServerLocation;
use Exception;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;

class PromotionService
{
    protected $backup365Pay;
    protected $cloudBackupPay;
    protected $emailServerPay;
    protected $googleWorkspaceBusinessPay;
    protected $googleWorkspaceEducationPay;
    protected $serverLocation;

    public function __construct(Backup365Pay $backup365Pay, CloudBackupPay $cloudBackupPay,
    EmailServerPay $emailServerPay, GoogleWorkspaceBusinessPay $googleWorkspaceBusinessPay, GoogleWorkspaceEducationPay $googleWorkspaceEducationPay, ServerLocation $serverLocation )
    {
        $this->backup365Pay = $backup365Pay;
        $this->cloudBackupPay = $cloudBackupPay;
        $this->emailServerPay = $emailServerPay;
        $this->googleWorkspaceBusinessPay = $googleWorkspaceBusinessPay;
        $this->googleWorkspaceEducationPay = $googleWorkspaceEducationPay;
        $this->serverLocation = $serverLocation;
    }

    public function backup365RegisterAll(){

        try {
            DB::beginTransaction();
            $backup365 = $this->backup365Pay->simplePaginate(10);
            DB::commit();
            return $backup365;
        } catch (Exception $e) {
            Log::error('Failed to all backup365 pay: ' . $e->getMessage());
            throw new Exception('Failed to all backup365 pay');
        }
    }

    public function cloudBackupRegisterAll(){

        try {
            DB::beginTransaction();
            $cloudBackup = $this->cloudBackupPay->simplePaginate(10);
            DB::commit();
            return $cloudBackup;
        } catch (Exception $e) {
            Log::error('Failed to all cloudBackup pay: ' . $e->getMessage());
            throw new Exception('Failed to all cloudBackup pay');
        }
    }


}
