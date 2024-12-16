<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class SuppliersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('suppliers')->insert([
            [
                'name' => 'Boulange2000',
                'email' => 'boulangesupplier@boul.com',
                'phone' => '254-265-5446'
            ],
            [
                'name' => 'SandwichCorp',
                'email' => 'sandwichsupplier@sand.com',
                'phone' => '656-763-5521'
            ]
        ]);
    }
}
