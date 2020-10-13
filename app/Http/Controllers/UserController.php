<?php

namespace App\Http\Controllers;

use App\Interfaces\UsersInterface as InterfacesUsersInterface;
use App\Interfaces\UsersInterface;
use Illuminate\Http\Request;

class UsersInterfaceController extends Controller
{

    protected $usersInterfaces;

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\UsersInterface  $usersInterface
     * @return \Illuminate\Http\Response
     */
    public function show(UsersInterface $users)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\UsersInterface  $usersInterface
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, UsersInterface $users)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\UsersInterface  $usersInterface
     * @return \Illuminate\Http\Response
     */
    public function destroy(UsersInterface $user)
    {
        //
    }
}
