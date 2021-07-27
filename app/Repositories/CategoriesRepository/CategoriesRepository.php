<?php
namespace App\Repositories\CategoriesRepository;

use App\Repositories\EloquentRepository;
use App\Repositories\CategoriesRepository\CategoriesRepositoryInterface;

class CategoriesRepository extends EloquentRepository implements CategoriesRepositoryInterface
{
    //lấy model tương ứng
    public function getModel()
    {
        return \App\Models\Backend\Categories::class;
    }

    public function getItems() 
    {
        return $this->model->paginate(5);
    }

}
