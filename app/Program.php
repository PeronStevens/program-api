<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Program extends Model
{    
    public function users() {
        return $this->belongsToMany(User::class);
    }

    public function faculty() {

        return $this->users()->where('users.role', 'author')->pluck('sso_id');
    }

    public function cme_sections() {
        return $this->hasMany(CME_Section::class);
    }

    public function home_sections() {
        return $this->hasMany(Home_Section::class);
    }

    public function monograph_sections() {
        return $this->hasMany(Monograph_Section::class);
    }

}

