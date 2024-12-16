<?php

namespace App\Http\Controllers;

use App\Models\ProductQueries;
use App\Models\CategoryQueries;
use App\Models\SupplierQueries;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    // classe index() pour afficher la liste des produits
    public function index() {
        $products = ProductQueries::getProducts();
        return view('products.index', compact('products'));
    }

    // classe create() pour afficher le formulaire de création d'un produit
    public function create() {
        $categories = CategoryQueries::getCategories();
        $suppliers = SupplierQueries::getSuppliers();
        return view('products.create', compact('categories', 'suppliers'));
    }

    // classe store(Request $request) pour enregistrer un nouveau produit dans la bdd
    public function store(Request $request) {
        $name = $request["name"];
        $price = $request["price"];
        $stock = $request["stock"];
        $category_id = $request["category_id"];
        $supplier_id = $request["supplier_id"];

        ProductQueries::createProduct($name, $price, $stock, $category_id, $supplier_id);
        
        return redirect()->route('products.store');
    }

    // classe edit($id) pour afficher le formulaire de modification d'un produit
    public function edit($id) {
        return view('products.edit');
    }

    // classe update(Request $request, $id) pour mettre a jour un produit existant
    public function update(Request $request, $id) {
        $name = $request["name"];
        $price = $request["price"];
        $stock = $request["stock"];
        $category_id = $request["category_id.value"];
        $supplier_id = $request["supplier_id.value"];

        ProductQueries::updateProduct($name, $price, $stock, $category_id, $supplier_id);

        return redirect()->route('products.update');
    }

    // classe destroy($id) pour supprimer un produit de la bdd
    public function destroy($id) {
        ProductQueries::deleteProduct($id);

        return redirect()->route('/products/index');
    }
}
