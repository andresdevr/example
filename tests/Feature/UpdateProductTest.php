<?php

namespace Tests\Feature;

use App\Models\Product;
use App\Models\User;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class UpdateProductTest extends TestCase
{
    use RefreshDatabase;
    /**
     * @test
     */
    public function authenticated_users_can_update_products()
    {

        $user = factory(User::class)->create();
        $product = factory(Product::class)->create();

        $new = [
            'name' => 'new name',
            'sku' => 'new sku',
            'price' => 'new price'
        ];

        $response = $this->actingAs($user)->put('/products/' . $product->id, $new);

        $response->assertJson(['data' => [
            'id' => $product->id,
            'name' => $new['name'],
            'sku' => $new['sku']
        ]]);

        $response->assertStatus(200);
    }
}
