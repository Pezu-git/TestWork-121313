<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;
use App\Repositories\Interfaces\ProductRepositoryInterface;

class ProductController extends Controller
{
    private $productRepository;

    public function __construct(ProductRepositoryInterface $productRepository)
    {
        $this->productRepository = $productRepository;
    }

    public function getAllProduct()
    {
        $allProd = $this->productRepository->all();
        return $allProd;
    }



    public function productCategories($id)
    {
        $product = $this->productRepository->getCategories($id);
        return $product;
    }

    public function sortByCatId(Request $request)
    {
        $allProd = $this->productRepository->all();
        $arr = [];

        foreach ($allProd as $key => $prod) {
            $pivotArr = [];
            for ($i = 0; $i < count($prod->categories); $i++) {
                $findCatPivot = $prod->categories[$i]->id;
                array_push($pivotArr, $findCatPivot);
            }
            if (count($prod->categories) === count($request->name)) {
                $result = array_diff($pivotArr, $request->name);
                if (count($result) === 0) {
                    array_push($arr, $prod);
                }
            }
            if (count($prod->categories) > count($request->name)) {
                $result = array_diff($request->name, $pivotArr);
                if (count($result) === 0) {
                    array_push($arr, $prod);
                }
            }
        }
        return $arr;
    }

    public function sortByPrice(Request $request)
    {
        $reqPrice = $request->price;
        $allProd = $this->productRepository->all();
        $arr = [];
        foreach ($allProd as $key => $prod) {
            if ($reqPrice['min'] <= $prod->price && $prod->price <= $reqPrice['max']) {
                array_push($arr, $prod);
            }
        }
        return $arr;
    }

    public function setPivot()
    {
        $allProd = $this->productRepository->all();

        $categories0 = Category::find([1, 5]);
        $allProd[1]->categories()->attach($categories0);
        $allProd[2]->categories()->attach($categories0);
        $allProd[6]->categories()->attach($categories0);

        $categories1 = Category::find([2]);
        $allProd[7]->categories()->attach($categories1);

        $categories2 = Category::find([1, 4, 3]);
        $allProd[5]->categories()->attach($categories2);

        $categories3 = Category::find([3, 4]);
        $allProd[0]->categories()->attach($categories3);

        $categories4 = Category::find([3, 5]);
        $allProd[3]->categories()->attach($categories4);
        $allProd[4]->categories()->attach($categories4);
    }
}
