<?php

namespace Tests\Feature;

use App\Models\Product;
use App\Models\User;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class SeeProductTest extends TestCase
{
    use RefreshDatabase;
    /**
     * @test
     */
    public function authenticated_users_can_see_x_product()
    {
        $user = factory(User::class)->create();
        $product = factory(Product::class)->create();

        $response = $this->actingAs($user)->getJson(route('products.show', ['product' => $product->id]));

        $response->assertStatus(200);

        $response->assertJson(['data' => [
            'id' => $product->id,
            'name' => $product->name,
            'sku' => $product->sku
        ]]);
    }
}
