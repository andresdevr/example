<?php

namespace Tests\Feature;

use App\Models\Product;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class SeeProductsTest extends TestCase
{
    use RefreshDatabase;
    /**
     * @test
     */
    public function authenticated_users_can_see_products()
    {
        factory(Product::class, 10)->create();
        $this->withoutExceptionHandling();

        $response = $this->get('/products');
        
        $response->assertStatus(200);

        
        $response->assertJsonCount(10, 'data');
    }
}
