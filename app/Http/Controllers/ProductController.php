<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\Product;
use App\Repositories\Interfaces\ProductRepositoryInterface;

class ProductController extends Controller
{
    private $productRepository;

    public function __construct(ProductRepositoryInterface $productRepository)
    {
        $this->productRepository = $productRepository;
    }

    public function index() {
        // $blogs = $this->productRepository->all();
        // return $blogs;
        // $category = Category::find(2);
        // return $category->products;
        // $product = Product::create([
        //     'name'  =>  'Home Brixton Faux Leather Armchair',
        //     'price' =>  199.99,
        // ]);
        // $categories = Category::find([2,3]); // Modren Chairs, Home Chairs
        // $product->categories()->attach($categories);

        
        // $p = $category->products;
        // $product = Product::find(2);
        // $c = $product->category;
        // $all = Product::all();
        // dd($category->products); 

        $prod = Product::find(1);
        foreach ($prod->categories as $role) {
            return $role->pivot;
        }
    }

    

    public function productCategories($id) {
        $cat = $this->productRepository->getCategories($id);
        return $cat;
    }
}
