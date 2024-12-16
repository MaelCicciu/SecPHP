<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class SupplierQueries extends Model
{
    public static function getSuppliers() {
        $req = "
            SELECT [suppliers].[id], [suppliers].[name]
            FROM suppliers
        ";
        $result = DB::select($req);
        return $result;
    }
}
