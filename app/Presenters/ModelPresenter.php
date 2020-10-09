<?php

namespace App\Presenters;

use Illuminate\Database\Eloquent\Model;

abstract class ModelPresenter
{
    protected $model;

    function __construct(Model $model)
    {
        $this->model = $model;    
    }
}
