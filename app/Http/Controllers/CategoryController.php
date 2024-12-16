<?php

namespace App\Http\Controllers;

use App\Models\CategoryQueries;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    // classe index() pour afficher la liste des produits
    public function index() {
        $products = CategoryQueries::getCategories();
        return view('categories.index', compact('categories'));
    }

    // classe create() pour afficher le formulaire de création d'un produit
    public function create() {
        return view('categories.create');
    }

    // classe store(Request $request) pour enregistrer un nouveau produit dans la bdd
    public function store(Request $request) {
        $name = $request["name"];

        CategoryQueries::createCategory($name);
        
        return redirect()->route('/categories/index');
    }

    // classe edit($id) pour afficher le formulaire de modification d'un produit
    public function edit($id) {
        return view('categories.edit');
    }

    // classe update(Request $request, $id) pour mettre a jour un produit existant
    public function update(Request $request, $id) {
        $name = $request["name"];

        CategoryQueries::updateCategory($name);

        return redirect()->route('/categories/index');
    }

    // classe destroy($id) pour supprimer un produit de la bdd
    public function destroy($id) {
        CategoryQueries::deleteCategory($id);

        return redirect()->route('/categories/index');
    }
}
