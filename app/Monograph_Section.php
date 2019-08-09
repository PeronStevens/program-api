<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Monograph_Section extends Model
{
    protected $table = 'monograph_sections';

    public function program() {
        return $this->belongsTo(Program::class);
    }
}
