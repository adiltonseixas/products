<?php 

namespace App\Services;
use api\app\Repository\CategoryRepository;

// Classe utilizada para realizar implementações de regras de negócio necessárias
class CategoryService {
    private $repository;

    public function __construct()
    {
        $this->repository = new CategoryRepository();  
    }

}