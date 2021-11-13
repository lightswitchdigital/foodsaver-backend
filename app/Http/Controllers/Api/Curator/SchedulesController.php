<?php

namespace App\Http\Controllers\Api\Curator;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;

class SchedulesController extends Controller
{
    public function get(User $user)
    {
        return json_encode($user->work_schedule);
    }

    public function update(Request $request, User $user)
    {

        $user->update([
            'work_schedule' => $request['work_schedule']
        ]);

        return [
            'success' => true
        ];
    }
}
