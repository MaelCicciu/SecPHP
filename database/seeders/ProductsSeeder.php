<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class ProductsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('products')->insert([
            [
                'name' => 'Baguette',
                'price' => 1,
                'stock' => 23,
                'category_id' => 2,
                'supplier_id' => 1,
            ],
            [
                'name' => 'Baguette traditionnelle',
                'price' => 2,
                'stock' => 18,
                'category_id' => 2,
                'supplier_id' => 1,
            ],
            [
                'name' => 'Tarte aux fruits',
                'price' => 4,
                'stock' => 8,
                'category_id' => 1,
                'supplier_id' => 1,
            ],
            [
                'name' => 'Eclair au chocolat',
                'price' => 2,
                'stock' => 13,
                'category_id' => 1,
                'supplier_id' => 1,
            ],
            [
                'name' => 'Jambon Beurre',
                'price' => 4,
                'stock' => 9,
                'category_id' => 3,
                'supplier_id' => 2,
            ],
            [
                'name' => 'Thon Mayo',
                'price' => 5,
                'stock' => 6,
                'category_id' => 3,
                'supplier_id' => 2,
            ],
        ]);
    }
}
