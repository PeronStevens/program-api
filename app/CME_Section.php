<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class CME_Section extends Model
{
    protected $table = 'cme_sections';

    public function program() {
        return $this->belongsTo(Program::class);
    }
}
