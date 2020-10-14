<?php

namespace App\Http\Controllers;

use App\Http\Resources\PermissionResource;
use App\Interfaces\PermissionInterface;
use Illuminate\Http\Request;

class PermissionController extends Controller
{
    /**
     * Handle the incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function __invoke(PermissionInterface $permissions, Request $request)
    {
        $permissions = $this->permissions->index();
        return PermissionResource::collection($permissions);
    }
}
