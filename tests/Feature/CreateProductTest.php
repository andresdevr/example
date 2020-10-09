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
            'price' => 'productoprice'
        ];

        $response = $this->actingAs($user)->post('/products', $product);

        $response->assertStatus(200);

        $this->assertDatabaseHas('products', $product);
    }
}
