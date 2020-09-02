<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Qualification extends Model
{


    public function type() {
        return $this->belongsTo(QualificationType::class);
    }

    public function organization() {
        return $this->belongsTo(Organization::class);
    }

    public function members() {
        return $this->belongsToMany(Member::class);
    }

}
