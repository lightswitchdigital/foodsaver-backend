<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Command;
use Illuminate\Http\Request;

class CommandsController extends Controller
{

    public function get()
    {
        return Command::orderBy('id', 'DESC')->first();
    }
}
