<?php

namespace App\Http\Controllers;

use App\Http\Resources\UserResource;
use App\Interfaces\UsersInterface;
use App\Models\User;
use Illuminate\Http\Request;

class UsersInterfaceController extends Controller
{

    protected $users;

    public function __construct(UsersInterface $users)
    {
        $this->users = $users;
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $users = $this->users->index();
        return UserResource::collection($users);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $user = $this->users->store($request);
        return UserResource::make($user);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\UsersInterface  $usersInterface
     * @return \Illuminate\Http\Response
     */
    public function show(User $user)
    {
        $user = $this->users->show($user);
        return UserResource::make($user);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\UsersInterface  $usersInterface
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, User $user)
    {
        $user = $this->users->update($request, $user);
        return UserResource::make($user);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    public function destroy(User $user)
    {
        $user = $this->users->destroy($user);
        return UserResource::make($user);
    }
}
