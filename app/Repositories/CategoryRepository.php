<?php

namespace App\Repositories;

use App\Models\Category;
use App\Repositories\Interfaces\CategoryRepositoryInterface;

class CategoryRepository implements CategoryRepositoryInterface
{
  public function all()
  {
    return Category::all();
  }
  public function getProducts($id)
  {
    $product = Category::find($id)->products;
    return $product;
  }
}
