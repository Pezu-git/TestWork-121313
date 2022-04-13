<?php

namespace App\Repositories;

use App\Models\Product;
use App\Repositories\Interfaces\ProductRepositoryInterface;
use Illuminate\Support\Str;
use Illuminate\Http\Request;

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

    public function getName($request)
    {
        $products = Product::all();
        $arr = [];

        foreach ($products as $key => $prod) {
            $pivotArr = [];
            for ($i = 0; $i < count($prod->categories); $i++) {
                $findCatPivot = $prod->categories[$i]->id;
                array_push($pivotArr, $findCatPivot);
            }
            if (count($prod->categories) >= count($request)) {
                $result = array_diff($pivotArr, $request);
                if (count($result) === 0) {
                    array_push($arr, $prod);
                }
            }
        }
        return $arr;
    }
}
