<?php

namespace App\Decorators\Cache;

use App\Interfaces\ModelInterface;
use App\Interfaces\ProductsInterface;
use App\Repositories\ProductsRepository;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Cache;

class ProductsCacheDecorator implements ModelInterface, ProductsInterface
{
    protected $products;

    function __construct(ProductsRepository $products)
    {
        $this->products = $products;
    }
    public function index()
    {
        return Cache::tags('products')->rememberForever('products.index', function () {
            return $this->products->index();
        });
    }

    public function getPaginated($records, $request)
    {
        return Cache::tags('products')->rememberForever('products.paginate.' . $request->age ?? 1, function() use ($records, $request){
            return $this->products->getPaginated($records, $request);
        });
    }   

    public function store(Request $request)
    {
        $product = $this->products->store($request);
        Cache::tags('products')->flush();

        return $product;
    }

    public function show($model)
    {
        return $this->products->show($model);
    }

    public function update(Request $request, $product)
    {
        $product = $this->products->update($request, $product);
        Cache::tags('products')->flush();

        return $product;

    }

    public function destroy($product)
    {
        $product = $this->products->destroy($product);
        Cache::tags('products')->flush();
        return $product;
    }

    
}
