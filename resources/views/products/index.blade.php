<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Liste des Produits</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
</head>
<body>
    <div class="container mt-5">
        <h1>Liste des Produits</h1>
        <table class="table table-striped">
            <thead>
                <tr>
                    <th>Nom</th>
                    <th>Prix</th>
                    <th>Stock</th>
                    <th>Catégorie</th>
                    <th>Fournisseur</th>
                    <th>Modifier/Supprimer</th>
                </tr>
            </thead>
            <tbody>
                @foreach($products as $product)
                    <tr>
                        <td>{{ $product->name }}</td>
                        <td>{{ $product->price }}</td>
                        <td>{{ $product->stock }}</td>
                        <td>{{ $product->category }}</td>
                        <td>{{ $product->supplier }}</td>
                        <td><button value="edit" class="btn btn-primary">Modifier</button> <button value="delete" class="btn btn-danger">Supprimer</button></td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</body>
</html>
