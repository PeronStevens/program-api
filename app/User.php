<?php

namespace App;

use DKBmed\SSO\Traits\SSOUser;

use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable, SSOUser;

    public function programs() {
        return $this->belongsToMany(Program::class);
    }
}
