<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Home_Section extends Model
{
    protected $table = 'home_sections';

    public function program() {
        return $this->belongsTo(Program::class);
    }
}
