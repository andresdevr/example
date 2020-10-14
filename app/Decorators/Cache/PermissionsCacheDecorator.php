<?php

namespace App\Decorators\Cache;

use App\Interfaces\PermissionInterface;
use App\Repositories\PermissionsRepository;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Cache;

class PermissionsCacheDecorator implements PermissionInterface
{
    protected $permissions;

    public function __construct(PermissionsRepository $permissions)
    {
        $this->permissions = $permissions;
    }

    public function index() 
    {
        return Cache::tags('permissions')->rememberForever('permissions.index', function() {
            return $this->permissions->index();
        });
    }

    public function getPaginated($records, Request $request)
    {
        return Cache::tags('permissions')->rememberForever('permissions.paginate.' . $request->page, function () use ($records, $request) {
            return $this->permissions->getPaginated($records, $request);
        });
    }
}