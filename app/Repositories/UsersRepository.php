<?php


namespace App\Repositories;

use App\Interfaces\ModelInterface;
use App\Interfaces\UsersInterface;
use App\Models\User;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class UsersRepository implements ModelInterface, UsersInterface
{
    public function index()
    {
        return User::all();
    }

    public function getPaginated($records, Request $request)
    {
        return User::paginate($records);
    }

    public function store(Request $request)
    {
        return User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password)
        ]);
    }

    public function show($user)
    {
        return $user;
    }

    public function update(Request $request, $user)
    {
        $user->name = $request->name;
        $user->email = $request->email;
        $user->password = $request->password;
        $user->avatar = $request->avatar;
        $user->save();
        return $user;
    }

    public function destroy($user)
    {
        $user->delete();
        return $user;
    }
}
