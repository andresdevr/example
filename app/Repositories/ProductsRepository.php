<?php


namespace App\Repositories;

use App\Models\Product;
use App\Interfaces\ProductsInterface;

class ProductsRepository implements ProductsInterface
{

    public function create($request)
    {
        return Product::create([
            'name' => $request->name,
            'sku' => $request->sku,
            'price' => $request->price
        ]);
    }
}