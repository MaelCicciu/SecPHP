<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ajouter un produit</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
</head>
<body>
    <div class="container mt-5">
        <h1>Ajouter un Produit</h1>
        <form action="" method="POST">
            @csrf
            <div class="mb-3">
                <label for="name" class="form-label">Nom du produit</label>
                <input type="text" class="form-control" id="name" name="name" placeholder="Entrez le nom du produit" required>
            </div>

            <div class="mb-3">
                <label for="price" class="form-label">Prix</label>
                <input type="number" class="form-control" id="price" name="price" step="0.01" placeholder="Entrez le prix" required>
            </div>

            <div class="mb-3">
                <label for="stock" class="form-label">Quantité en stock</label>
                <input type="number" class="form-control" id="stock" name="stock" placeholder="Entrez la quantité en stock" required>
            </div>

            <div class="mb-3">
                <label for="category_id" class="form-label">Catégorie</label>
                <select class="form-select" id="category_id" name="category_id" required>
                    <option value="" disabled selected>Sélectionnez une catégorie</option>
                    @foreach($categories as $category)
                        <option value={{$category->id}}>{{$category->name}}</option>
                    @endforeach
                </select>
            </div>

            <div class="mb-3">
                <label for="supplier_id" class="form-label">Fournisseur</label>
                <select class="form-select" id="supplier_id" name="supplier_id" required>
                    <option value="" disabled selected>Sélectionnez un fournisseur</option>
                    @foreach($suppliers as $supplier)
                        <option value={{$supplier->id}}>{{$supplier->name}}</option>
                    @endforeach
                </select>
            </div>

            <button type="submit" class="btn btn-success">Ajouter le produit</button>
        </form>
    </div>
</body>