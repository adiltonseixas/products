<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;
use App\Models\Product;
use database\factories\ProductFactory;

class ProductTest extends TestCase
{
    /**
     * A basic feature test example.
     *
     * @return void
     */
    public function test_insert()
    {
        $product = Product::factory()->make();

        $params = ['name' => $product->name,
        'description' => $product->description,
        'category_id' => $product->category_id,
        'price' => $product->price];

        $response = $this->post('/api/products/', $params);
        $response->assertStatus(200);
    }

    public function test_validate()
    {
        $product = Product::factory()->make();

        $params = ['name' => $product->name,
        'description' => $product->description,
        'price' => $product->price];

        $response = $this->post('/api/products/', $params);
        $response->assertStatus(302);
    }

    public function test_error()
    {
        $product = Product::factory()->make();

        $params = ['name' => $product->name,
        'description' => $product->description,
        'category_id' => 500,
        'price' => $product->price];

        $response = $this->post('/api/products/', $params);
        $response->assertStatus(500);
    }
    
    public function test_update()
    {
        $product = Product::factory()->create();

        $params = [
        'name' => 'Produto Modificado',
        'description' => $product->description,
        'category_id' => $product->category_id,
        'price' => $product->price];

        $response = $this->put('/api/products/'.$product->id, $params);
        $response->assertStatus(200);
    }

    public function test_delete()
    {
        $product = Product::factory()->create();     

        $response = $this->delete('/api/products/'.$product->id);
        $response->assertStatus(200);
    }

    public function test_getAll()
    {       
        $response = $this->get('/api/products/');
        $response->assertStatus(200);
    }

    public function test_getOne()
    {   
        $product = Product::factory()->create();     

        $response = $this->get('/api/products/'.$product->id);
        $response->assertStatus(200);
    }
}
