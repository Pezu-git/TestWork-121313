<?php

namespace App\Http\Controllers;

use App\Repositories\Interfaces\CategoryRepositoryInterface;

class CategoryController extends Controller
{
    private $categoryRepository;

    public function __construct(CategoryRepositoryInterface $categoryRepository)
    {
        $this->categoryRepository = $categoryRepository;
    }

    public function getAllCategory()
    {
        $allCat = $this->categoryRepository->all();
        return $allCat;
    }

    public function productCategories($id)
    {
        $product = $this->categoryRepository->getProducts($id);
        return $product;
    }
}
