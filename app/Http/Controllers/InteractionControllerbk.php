<?php

namespace App\Http\Controllers;

use App\Models\Interaction;
use Illuminate\Http\Request;

class InteractionController extends Controller
{
    public function index()
    {
        $interactions = Interaction::all();
        return view('interactions.index', compact('interactions'));
    }
}
