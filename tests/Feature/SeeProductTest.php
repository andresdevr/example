<?php

namespace Tests\Feature;

use App\Models\Product;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class SeeProductTest extends TestCase
{
    use RefreshDatabase;
    /**
     * @test
     */
    public function test_example()
    {
        $product = factory(Product::class)->create();

        $response = $this->get('/products/' . $product->id);

        $response->assertStatus(200);

        $response->assertJson(['data' => [
            'id' => $product->id,
            'name' => $product->name,
            'sku' => $product->sku
        ]]);
    }
}
