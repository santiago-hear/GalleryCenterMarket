<?php

namespace App\States;

use App\Models\User;
use App\States\InactiveStatus;

class ActiveStatus implements State 
{
    private $user;

    public function __construct(User $user)
    {
        $this->user = $user;
    }

    public function handle()
    {
        $this->active();
    }

    public function active()
    {
        $this->user->updateStatus(InactiveStatus::class);
    }
}