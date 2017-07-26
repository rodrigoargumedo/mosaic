<?php

namespace Tests\Feature\Product;

use Tests\TestCase;
use Mosaic\Product;
use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\DatabaseTransactions;

class ProductTest extends TestCase
{
  use DatabaseTransactions;
  
  public function testMainProductPage()
  {
    $response = $this->get('/product'); // Expects to visits the /product page.
    
    $response->assertSee("Welcome to MOSAIC Storefront!"); // Looks for a text that says it.
  }
  
  public function testNewProductPage()
  {
    $response = $this->get('/product/new');
    
    $response->assertStatus(200);
    
  }
}