<?php

namespace App\Models;

use App\Interfaces\PresenterInterface;
use App\Presenters\ProductPresenter;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Product extends Model implements PresenterInterface
{
    use SoftDeletes;
    protected $fillable = ['name', 'price', 'sku'];

    public function present()
    {
        return new ProductPresenter($this);   
    }
}
