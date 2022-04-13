<?php
namespace App\Repositories;
use App\Models\Product;
use App\Repositories\Interfaces\ProductRepositoryInterface;
class ProductRepository implements ProductRepositoryInterface
{
    public function all()
    {
        return Product::all();
    }
    public function getCategories($id)
    {
        $product = Product::find($id)->categories;
        return $product;
    }
}