<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Organization;
use Illuminate\Http\Request;

class OrganizationsController extends Controller
{

    public function get()
    {
        return Organization::orderBy('id', 'DESC')->get();
    }

    public function show(Organization $organization)
    {
        return $organization;
    }

}
