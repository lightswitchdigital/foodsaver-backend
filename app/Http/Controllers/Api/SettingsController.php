<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class SettingsController extends Controller
{

    public function get()
    {

    }

    public function update(Request $request)
    {

    }

    public function updateAvatar(Request $request)
    {
        $user = Auth::user();


    }
}
