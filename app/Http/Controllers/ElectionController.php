<?php

namespace App\Http\Controllers;

use App\Models\Election;
use Illuminate\Http\Request;

class ElectionController extends Controller {
    public function index() {
        $elections = Election::with('candidates')->get();
        return view('elections.index', compact('elections'));
    }
}
