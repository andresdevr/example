<?php

namespace Tests\Feature;

use App\Models\Product;
use App\Models\User;
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
        $user = factory(User::class)->create();
        factory(Product::class, 10)->create();

        $response = $this->actingAs($user)->getJson(route('products.index'));
        
        $response->assertStatus(200);

        
        $response->assertJsonCount(10, 'data');
    }
}
