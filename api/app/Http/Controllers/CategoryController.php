<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;
use App\Http\Traits\ApiControllerTrait;

class CategoryController extends Controller
{
    use ApiControllerTrait;
    protected $model;
    
    protected $rules = [
        'name' => 'required|min:3'
    ];
    
    protected $relationships = ["products"];

    protected $messages = [
        'required' => ':attribute é obrigatório',
        'min' => ':attribute precisa de pelo menos :min caracteres'
    ];

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct(Category $model)
    {
      $this->model = $model;
      
    }
}
