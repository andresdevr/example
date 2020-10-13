<?php

namespace App\Presenters;

use App\Models\Product;

class ProductPresenter extends ModelPresenter
{
    public function custom()
    {
        return $this->model->name . ' - ' . $this->model->sku;
    }
}
