<?php

namespace App\Providers;

use Illuminate\Foundation\Support\Providers\AuthServiceProvider as ServiceProvider;
use App\Models\ProblemFCT;
use App\Policies\ProblemFCTPolicy;

class AuthServiceProvider extends ServiceProvider
{
    protected $policies = [
        ProblemFCT::class => ProblemFCTPolicy::class,
    ];

    public function boot(): void
    {
        $this->registerPolicies();
    }
}