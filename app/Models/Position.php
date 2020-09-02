<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Position extends Model
{


    public function members() {
        return $this->hasMany(Member::class);
    }

    public function organization() {
        return $this->belongsTo(Organization::class);
    }
}
