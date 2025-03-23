<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Candidate extends Model {
    protected $fillable = ['election_id', 'name', 'description', 'votes'];

    public function election() {
        return $this->belongsTo(Election::class);
    }
}
