<?php


namespace App\Repositories;

use App\Models\Product;
use App\Interfaces\ModelInterface;
use App\Interfaces\ProductsInterface;
use Illuminate\Http\Request;

class ProductsRepository implements ModelInterface, ProductsInterface
{
    public function index()
    {
        return Product::all();
    }

    public function getPaginated($records, Request $request)
    {
        return Product::paginate($records);
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
        return $product;
    }

    public function update(Request $request, $product)
    {
        $product->name = $request->name;
        $product->sku = $request->sku;
        $product->price = $request->price;
        $product->save();
        return $product;
    }

    public function destroy($product)
    {
        $product->delete();
        return $product;
    }

}