<?php 

namespace App\Repository;
use App\Models\Product;

// Classe utilizada para realizar implementações de banco necessárias de forma a diminuir a complexidade do model
class ProductRepository {
    /**
     * Método responsável por buscar a categoria pelo ID
     */
    public function get($id) {
        return Product::find($id);
    }
}