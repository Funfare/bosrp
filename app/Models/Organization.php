<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Organization extends Model
{


    public function users() {
        return $this->belongsToMany(User::class);
    }

    public function positions() {
        return $this->hasMany(Position::class);
    }

    public function qualifications() {
        return $this->hasMany(Qualification::class);
    }

    public function members() {
        return $this->hasMany(Member::class);
    }
}
