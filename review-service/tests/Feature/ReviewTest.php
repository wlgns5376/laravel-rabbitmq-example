<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;
use App\Models\Review;

class ReviewTest extends TestCase
{
    use RefreshDatabase;
    /**
     * Get review list
     *
     * @return void
     */
    public function test_review_list()
    {
        $response = $this->getJson('/api/reviews');

        $response->assertStatus(200);
    }

    /**
     * Register review test
     * 
     * @return void
     */
    public function test_register_review()
    {
        $review = Review::factory()->make();

        $response = $this->postJson('/api/reviews', [
            'product_id' => $review->product_id,
            'name' => $review->name,
            'description' => $review->description,
        ]);

        $response->assertStatus(201)
            ->assertJsonPath('product_id', $review->product_id);
    }
}
