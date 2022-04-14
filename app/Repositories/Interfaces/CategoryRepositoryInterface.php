<?php

namespace App\Repositories\Interfaces;

use App\Models\Category;

interface CategoryRepositoryInterface
{
  public function all();

  public function getProducts(Category $id);
}
