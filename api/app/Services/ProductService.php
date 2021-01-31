<?php 

namespace App\Services;
use api\app\Repository\ProductRepository;

// Classe utilizada para realizar implementações de regras de negócio necessárias
class ProductService {
    private $repository;

    public function __construct()
    {
        $this->repository = new ProductRepository();  
    }

}