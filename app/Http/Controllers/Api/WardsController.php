<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Ward;
use Illuminate\Http\Request;

class WardsController extends Controller
{

    public function get()
    {
        return Ward::orderBy('id')->get();
    }

    public function show(Ward $ward)
    {
        return $ward;
    }

}
