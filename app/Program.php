<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Program extends Model
{    


    public function users() {
        return $this->belongsToMany(User::class);
    }

    public function faculty() {

        $faculty_data = collect();

        $this->users()->where('users.role', 'author')->pluck('sso_id')->each(function($item, $key) use ($faculty_data) {
            $faculty_data->push(DB::connection('mysql_main')->table('users')->select('first_name', 'last_name', 'image' ,'short_description', 'full_description')->where('id', $item)->get());
        });

        return $faculty_data;

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
