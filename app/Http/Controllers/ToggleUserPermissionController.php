<?php

namespace App\Http\Controllers;

use App\Interfaces\UserPermissionInterface;
use App\Models\User;
use Illuminate\Http\Request;

class ToggleUserPermissionController extends Controller
{
    /**
     * Handle the incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function __invoke(UserPermissionInterface $userPermission, User $user, Request $request)
    {
        $user = $userPermission->toggle($user, $request->permission);
    }
}
