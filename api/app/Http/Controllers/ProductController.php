<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;
use App\Http\Traits\ApiControllerTrait;

class ProductController extends Controller
{
    use ApiControllerTrait;
    protected $model;
    protected $rules = [
        'name' => 'required|min:3',
        'description' => 'required|min:3',
        'category_id' => 'required',
        'price' => 'required'
    ];

    protected $relationships = ["category"];

    protected $messages = [
        'required' => ':attribute é obrigatório',
        'min' => ':attribute precisa de pelo menos :min caracteres'
    ];

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct(Product $model)
    {
      $this->model = $model;      
    }
}
