<?php

namespace App\Repositories;

use App\Interfaces\PermissionInterface;
use App\Models\Permission;
use Illuminate\Http\Request;

class PermissionsRepository implements PermissionInterface
{
    public function index() 
    {
        return Permission::all();
    }

    public function getPaginated($records, Request $request)
    {
        return Permission::paginate($records);
    }
}