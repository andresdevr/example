<?php

namespace App\Models;

use App\Interfaces\PresenterInterface;
use Illuminate\Database\Eloquent\Model;

class Permission extends Model implements PresenterInterface
{
    protected $fillable = [];

    public function present()
    {

    }

    public function users()
    {
        return $this->belongsToMany(User::class);
    }
}
