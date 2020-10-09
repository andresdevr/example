<?php


namespace App\Repositories;

use App\Models\Product;
use App\Interfaces\ModelInterface;
use Illuminate\Http\Request;

class ProductsRepository implements ModelInterface
{
    public function index()
    {

    }

    public function store(Request $request)
    {
        return Product::create([
            'name' => $request->name,
            'sku' => $request->sku,
            'price' => $request->price
        ]);
    }

    public function show($product)
    {

    }

    public function update(Request $request, $product)
    {

    }

    public function destroy($product)
    {
        
    }

}