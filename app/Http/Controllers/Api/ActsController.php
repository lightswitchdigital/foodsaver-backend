<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Act;
use Illuminate\Http\Request;

class ActsController extends Controller
{

    public function get()
    {
        return Act::orderBy('id', 'DESC')->get();
    }

    public function show(Act $act)
    {
        return $act;
    }

    public function upload(Request $request)
    {

    }
}
