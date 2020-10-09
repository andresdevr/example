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

    public function getPaginated($records)
    {

    }   

    public function store(Request $request)
    {
        
    }

    public function show($model)
    {

    }

    public function update(Request $request, $product)
    {

    }

    public function destroy($product)
    {
        
    }

    
}
