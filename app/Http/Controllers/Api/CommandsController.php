<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Command;
use App\Models\User;
use Illuminate\Http\Request;

class CommandsController extends Controller
{

    public function get()
    {
        return User::first()->commands()->with('members')->get();
    }
}
