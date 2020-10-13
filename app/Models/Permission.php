<?php

namespace App\Models;

use App\Interfaces\PresenterInterface;
use App\Presenters\PermissionPresenter;
use Illuminate\Database\Eloquent\Model;

class Permission extends Model implements PresenterInterface
{
    protected $fillable = [];

    public function present()
    {
        return new PermissionPresenter($this);
    }

    public function users()
    {
        return $this->belongsToMany(User::class);
    }
}
