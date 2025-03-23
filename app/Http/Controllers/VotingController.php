<?php

namespace App\Http\Controllers;

use App\Models\Candidate;
use Illuminate\Http\Request;

class VotingController extends Controller {
    public function vote(Request $request, Candidate $candidate) {
        $candidate->increment('votes');
        return redirect()->back()->with('success', 'Vote cast successfully!');
    }
}
