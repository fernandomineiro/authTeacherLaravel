<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class ProductTest extends TestCase
{
    /**
     * A basic feature test example.
     *
     * @return void
     */
    public function ProductList()
    {
        $response = $this->get('/products');

        $response->assertStatus(200);
    }

    public function ProductListID($id = 4)
    {
        $response = $this->get('/products/$id');

        $response->assertStatus(200);
    }
 
}