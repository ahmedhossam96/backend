<?php


namespace App\Repository\Category;


use App\Category;

interface CategoryRepositoryInterface
{
    public function paginate($request);

    public function create($request);

    public function update($request, Category $category);

    public function all();
}
