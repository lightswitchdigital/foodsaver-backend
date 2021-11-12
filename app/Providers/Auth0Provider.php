<?php

namespace App\Providers;

use App\Repositories\CustomUserRepository;
use Auth0\Login\Contract\Auth0UserRepository;
use Illuminate\Support\ServiceProvider;

class Auth0Provider extends ServiceProvider
{

    public function register()
    {
        $this->app->bind(
            Auth0UserRepository::class,
            CustomUserRepository::class
        );
    }
}
