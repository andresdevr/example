<?php

namespace App\Models;

use App\Interfaces\PresenterInterface;
use App\Presenters\SessionPresenter;
use Illuminate\Database\Eloquent\Model;

class Session extends Model implements PresenterInterface
{
    protected $fillable = [];

    protected $hidden = ['payload'];

    public function present()
    {
        return new SessionPresenter($this);
    }

    public function user() 
    {
        return $this->belongsTo(User::class);
    }
}
