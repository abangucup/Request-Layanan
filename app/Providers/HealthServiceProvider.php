<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Spatie\Health\Facades\Health;
use Spatie\Health\Checks\Checks\PingCheck;

class HealthServiceProvider extends ServiceProvider
{
    public function register()
    {
        Health::checks([
            PingCheck::new()->url('layanan.bonebolangoka.go.id'),
        ]);

        
    }
}
