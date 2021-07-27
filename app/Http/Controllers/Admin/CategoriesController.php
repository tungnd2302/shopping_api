<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Repositories\CategoriesRepository\CategoriesRepository;

class CategoriesController 
{
    public $_categoriesRepository;
    public function __construct(
        CategoriesRepository $categoriesRepository
    ) 
    {
        $this->_categoriesRepository = $categoriesRepository;
    }

    public function index(Request $request)
    {   
        $items = $this->_categoriesRepository->getItems();
        return response()->json([
            'status' => true,
            'items' => $items,
            'message' => 'index',
        ]);
    }

    public function Create(Request $request) 
    {
        
    }
}
