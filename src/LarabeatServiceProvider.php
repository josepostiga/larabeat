<?php

namespace JosePostiga\Larabeat;

use Illuminate\Support\ServiceProvider;

class LarabeatServiceProvider extends ServiceProvider
{
    public function boot(): void
    {
        $this->loadRoutesFrom(__DIR__ . '/../routes/api.php');
    }
}
