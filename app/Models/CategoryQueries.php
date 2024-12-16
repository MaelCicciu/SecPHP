<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class CategoryQueries extends Model
{
    public static function getCategories() {
        $req = "
            SELECT [categories].[id], [categories].[name]
            FROM categories
        ";
        $result = DB::select($req);
        return $result;
    }

    public static function createCategory($name) {
        $req = "
            INSERT INTO categories (name) 
            VALUES (?)
        ";
        $result = DB::insert($req, $name);
        return $result;
    }

    public static function updateCategory($name) {
        $req = "
            UPDATE categories (name) 
            VALUES (?)
        ";
        $result = DB::update($req, $name);
        return $result;
    }

    public static function deleteCategory($id) {
        $req = "
            DELETE FROM categories
            WHERE id = ?
        ";
        $result = DB::delete($req, $id);
        return $result;
    }
}
