<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Election extends Model {
    protected $fillable = ['name', 'start_time', 'end_time'];

    public function candidates() {
        return $this->hasMany(Candidate::class);
    }
}
