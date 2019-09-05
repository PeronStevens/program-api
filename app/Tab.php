<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tab extends Model
{
    public function programs() {
        return $this->belongsToMany(Program::class);
    }

    public function homeContent() {
        return $this->hasManyThrough('App\Home_Section', 'App\Program_Tab');
    }
}
