<?php

namespace App\Repositories\Interfaces;

use App\Models\Product;
use Illuminate\Http\Request;

interface ProductRepositoryInterface
{
    public function all();

    public function getCategories(Product $id);
}
