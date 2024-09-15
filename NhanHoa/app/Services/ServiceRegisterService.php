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


}
