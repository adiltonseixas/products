<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;
use App\Models\Category;
use database\factories\CategoryFactory;

class CategoryTest extends TestCase
{
    /**
     * A basic feature test example.
     *
     * @return void
     */
    public function test_insert()
    {
        $category = Category::factory()->make();

        $params = ['name' => $category->name];

        $response = $this->post('/api/category/', $params);
        $response->assertStatus(200);
    }
    
    public function test_update()
    {
        $category = Category::factory()->create();

        $params = ['name' => 'Categoria Modificada'];

        $response = $this->put('/api/category/'.$category->id, $params);
        $response->assertStatus(200);
    }

    public function test_delete()
    {
        $category = Category::factory()->create();     

        $response = $this->delete('/api/category/'.$category->id);
        $response->assertStatus(200);
    }

    public function test_getAll()
    {       
        $response = $this->get('/api/category/');
        $response->assertStatus(200);
    }

    public function test_getOne()
    {   
        $category = Category::factory()->create();     

        $response = $this->get('/api/category/'.$category->id);
        $response->assertStatus(200);
    }
}
