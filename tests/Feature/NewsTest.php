<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class NewsTest extends TestCase
{
    /**
     * A basic feature test example.
     *
     * @return void
     */
    public function test_HomeAvaliable()
    {
        $response = $this->get('/');

        $response->assertStatus(200);
    }

    public function test_CategoriesAvaliable()
    {
        $response = $this->get('/categories');

        $response->assertStatus(200);
    }

    public function test_AdminAvaliable()
    {
        $response = $this->get('/admin');

        $response->assertStatus(200);
    }

    public function test_CategoryAvaliable()
    {
        $response = $this->get('/admin/categories');

        $response->assertStatus(200);
    }

    public function test_AdminNewsAvaliable()
    {
        $response = $this->get('/admin/news');

        $response->assertStatus(200);
    }

    public function test_AdminNewsCreateAvaliable()
    {
        $response = $this->get('/admin/news/create');

        $response->assertStatus(200);
    }

    public function test_AdminCategoryCreateAvaliable()
    {
        $response = $this->get('/admin/categories/create');

        $response->assertStatus(200);
    }

    public function test_OneCategoryAvaliable()
    {
        $response = $this->get('/categories/economics');

        $response->assertStatus(200);
    }

    public function test_OneNewsAvaliable()
    {
        $response = $this->get('/categories/economics/2');

        $response->assertStatus(200);
    }
}
