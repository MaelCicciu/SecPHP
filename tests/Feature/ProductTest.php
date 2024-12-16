<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Laravel\Prompts\Output\ConsoleOutput;
use Tests\TestCase;
use App\Http\Controllers\ProductController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;


class ProductTest extends TestCase
{
    public function test_show_products()
    {
        $product = new ProductController();

        $result = $product->index();

        $this->assertNotEmpty($result);
    }

    public function test_store_products()
    {
        $request = new Request;
        $expected = new Request;
        $product = new ProductController();

        $request["name"] = "Pain au raisin";
        $request["price"] = 3;
        $request["stock"] = 18;
        $request["category_id.value"] = 1;
        $request["supplier_id.value"] = 1;

        $expected["name"] = "Pain au raisin";
        $expected["price"] = 3;
        $expected["stock"] = 18;
        $expected["category_id.value"] = 1;
        $expected["supplier_id.value"] = 1;

        $result = $product->store($request);

        $this->assertEquals($expected["attributes"], $result["attributes"]);
    }
}