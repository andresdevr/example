<?php

namespace App\Models;

use App\Interfaces\PresenterInterface;
use Illuminate\Database\Eloquent\Model;

class Test extends Model implements PresenterInterface
{
    protected $fillable = [];
}
