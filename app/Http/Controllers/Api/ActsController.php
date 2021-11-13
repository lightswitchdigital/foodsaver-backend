<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Act;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

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
        $user = User::first();

        $path = $request['file']->store('public', 'usercontent/acts');

        $user->acts()->create([
            'file' => $path
        ]);

        return [
            'success' => true,
            'url' => Storage::disk('public')->url($path)
        ];
    }
}
