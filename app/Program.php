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

        $author_collection = $this->users()->wherePivot('role','author')->get();

        $author_collection->each(function($item) {

            $item->first_name        = $item->first_name;
            $item->last_name         = $item->last_name;
            $item->short_description = $item->short_description;
            $item->full_description  = $item->full_description;

        });

        return $author_collection;
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
    public function tabs() {
        return $this->hasMany(Tab::class);
    }
}
