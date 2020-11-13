<?php

namespace Ohooki\Omac;

use Illuminate\Support\ServiceProvider;

class Setup extends ServiceProvider
{

    public function boot() {

        $this->publishes([
            __DIR__ . 'config.php' => config_path('omac.php')
        ]);

    }

    public static function run() {

        return "Setuping OMAC";

    }

}