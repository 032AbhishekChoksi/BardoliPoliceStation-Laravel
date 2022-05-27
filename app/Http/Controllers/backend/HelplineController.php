<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use App\Models\Helpline;
use Illuminate\Http\Request;

class HelplineController extends Controller
{
    public function index()
    {
        $helpline = Helpline::all();
        prx($helpline->toarray());
    }
}
