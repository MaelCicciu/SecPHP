<?php

namespace Tests\Unit;

use PHPUnit\Framework\TestCase;
use App\Http\Controllers\ProductController;

class ProductTest extends TestCase
{
    public function test_shows_products()
    {
        $product = new ProductController();

        $result = $product->index();

        $this->assertNotEmpty($result);
    }

    // public function test_store_products()
    // {
    //     $products = new ProductController();

    //     $result = $products->store();
    // }
}
