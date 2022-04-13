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

    public function index()
    {

        $allProd = $this->productRepository->all();
        return $allProd;
        // $categories = Category::find([3, 5]);
        // $allProd[4]->categories()->attach($categories);
        // return $category->products;
        // $product = Product::create([
        //     'name'  =>  'Home Brixton Faux Leather Armchair',
        //     'price' =>  199.99,
        // ]);
        // $categories = Category::find([2,3]); // Modren Chairs, Home Chairs
        // $product->categories()->attach($categories);


        // $prod = $this->productRepository->all()->find(1);

        // foreach ($prod->categories as $role) {
        //     return $role->pivot;
        // }
    }



    public function productCategories($id)
    {
        $product = $this->productRepository->getCategories($id);
        return $product;
    }

    public function sortByName(Request $request)
    {
        $a = $request->all();

        $product = $this->productRepository->getName($a);
        return $product;
    }
}
