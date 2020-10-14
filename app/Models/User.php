<?php

namespace App\Models;

use App\Interfaces\PresenterInterface;
use App\Presenters\UserPresenter;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable implements PresenterInterface, MustVerifyEmail
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password', 'avatar'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    /**
     * The relatinsships preloaded
     * 
     * @var array
     */
    protected $with = [
        'permissions', 'sessions'
    ];

    public function present()
    {
        return new UserPresenter($this);
    }

    public function permissions()
    {
        return $this->belongsToMany(Permission::class);
    }

    public function sessions()
    {
        return $this->hasMany(Session::class);
    }
}
