<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Program extends Model
{    
    public function users() {
        return $this->hasMany(User::class);
    }

    public function cme_sections() {
        return $this->hasMany(CME_Section::class);
    }

    public function home_sections() {
        return $this->hasMany(Home_Section::class);
    }
}
