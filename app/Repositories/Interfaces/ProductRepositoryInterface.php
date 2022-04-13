<?php
namespace App\Repositories\Interfaces;

use App\Models\Product;
interface ProductRepositoryInterface
{
    public function all();


    public function getCategories(Product $id);
}