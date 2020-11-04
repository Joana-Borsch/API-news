<?php

namespace App\Providers;

use Illuminate\Foundation\Support\Providers\AuthServiceProvider as ServiceProvider;
use Illuminate\Support\Facades\Gate;
use App\Models\News;
use App\Policies\NewsPolicy;

class AuthServiceProvider extends ServiceProvider
{

    protected $policies = [
        News::class => NewsPolicy::class,
    ];


    public function boot()
    {
        $this->registerPolicies();

        //
    }
}
