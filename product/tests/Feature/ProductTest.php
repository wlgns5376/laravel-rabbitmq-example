<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;
use App\Models\Product;

class ProductTest extends TestCase
{
    use RefreshDatabase;
    /**
     * Get product list
     *
     * @return void
     */
    public function test_product_list()
    {
        $response = $this->getJson('/api/products');
        $response->assertStatus(200);
    }

    public function test_register_product()
    {
        $product = Product::factory()->make();

        $response = $this->postJson('/api/products', [
            'name' => $product->name,
            'price' => $product->price,
        ]);

        $response->assertStatus(201)
                ->assertJsonPath('name', $product->name);
    }

    /**
     * Delete product
     * 
     * @return void
     */
    public function test_product_destroy()
    {
        $product = Product::factory()->create();
        $response = $this->deleteJson('/api/products/'.$product->id);

        $response->assertStatus(200);
    }
}
