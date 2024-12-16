<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class ProductQueries extends Model
{
    public static function getProducts() {
        $req = "
            SELECT [products].[name], [products].[price], [products].[stock], [categories].[name] AS category, [suppliers].[name] AS supplier
            FROM products
            INNER JOIN categories ON [categories].[id] = [products].[category_id]
            INNER JOIN suppliers ON [suppliers].[id] = [products].[supplier_id]
        ";
        $result = DB::select($req);
        return $result;
    }

    public static function createProduct($name, $price, $stock, $category_id, $supplier_id) {
        $req = "
            INSERT INTO products (name, price, stock, category_id, supplier_id) 
            VALUES (?, ?, ?, ?, ?)
        ";
        $result = DB::insert($req, [$name, $price, $stock, $category_id, $supplier_id]);
        return $result;
    }

    public static function updateProduct($name, $price, $stock, $category_id, $supplier_id) {
        $req = "
            UPDATE products (name, price, stock, category_id, supplier_id) 
            VALUES (?, ?, ?, ?, ?)
        ";
        $result = DB::update($req, [$name, $price, $stock, $category_id, $supplier_id]);
        return $result;
    }

    public static function deleteProduct($id) {
        $req = "
            DELETE FROM products
            WHERE id = ?
        ";
        DB::delete($req, $id);
    }
}
