<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class QualificationType extends Model
{
    public const MEDICAL = 1;
    public const TACTICAL = 2;
    public const LICENSE = 3;

    public function qualifications() {
        return $this->hasMany(Qualification::class);
    }
}
