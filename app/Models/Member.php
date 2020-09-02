<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Member extends Model
{
    public function organization() {
        return $this->belongsTo(Organization::class);
    }

    public function position() {
        return $this->belongsTo(Position::class);
    }

    public function qualifications() {
        return $this->belongsToMany(Qualification::class);
    }

    public function highestQualification($type = null) {
        return $this->orderedQualifications($type)->first();
    }

    public function orderedQualifications($type = null) {
        $qualifications = $this->qualifications;

        if($type !== null) {
            $qualifications = $qualifications->where('qualification_type_id', $type);
        }

        return $qualifications->sortBy('priority');
    }
}
