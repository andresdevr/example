<?php

namespace Tests\Feature;

use App\Models\User;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class CreateProductTest extends TestCase
{
    use RefreshDatabase;
    /**
     * @test
     */
    public function authtenticated_users_can_create_products()
    {
        $user = factory(User::class)->create();
        
        $product = [
            'name' => 'productname',
            'sku' => 'productsku',
            'price' => 5
        ];

        $response = $this->actingAs($user)->postJson('/products', $product);

        $response->assertStatus(201);

        $this->assertDatabaseHas('products', $product);
    }
}
