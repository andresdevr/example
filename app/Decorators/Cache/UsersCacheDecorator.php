<?php

namespace App\Decorators\Cache;

use App\Interfaces\ModelInterface;
use App\Interfaces\UsersInterface;
use App\Repositories\UsersRepository;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Cache;

class UsersCacheDecorator implements ModelInterface, UsersInterface
{
    protected $users;

    function __construct(UsersRepository $users)
    {
        $this->users = $users;
    }

    public function index()
    {
        return Cache::tags('users')->rememberForever('users.index', function () {
            return $this->users->index();
        });
    }

    public function getPaginated($records, Request $request)
    {
        return Cache::tags('users')->rememberForever('users.paginate.' . $request->page ?? 1, function () use ($records, $request){
            return $this->users->getPaginated($records, $request);
        });
    }

    public function store(Request $request)
    {
        $users = $this->users->store($request);
        Cache::tags('users')->flush();

        return $users;
    }

    public function show($product)
    {
        return $this->users->show($product);
    }

    public function update(Request $request, $user)
    {
        $user = $this->users->update($request, $user);
        Cache::tags('users')->flush();

        return $user;
    }

    public function destroy($user)
    {
        $user = $this->users->destroy($user);
        Cache::tags('users')->fush();

        return $user;
    }
}
