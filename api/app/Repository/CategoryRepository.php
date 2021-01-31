<?php 

namespace App\Repository;
use App\Models\Category;

// Classe utilizada para realizar implementações de banco necessárias de forma a diminuir a complexidade do model
class CategoryRepository {
    /**
     * Método responsável por buscar a categoria pelo ID
     */
    public function get($id) {
        return Category::find($id);
    }
}