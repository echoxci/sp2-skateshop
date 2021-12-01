<?php

namespace App\Controllers;

use App\Core\AControllerBase;
use App\Helpers\CategoriesHelper;
use App\Models\CategoryModel;
use App\Models\ProductModel;

/**
 * Class HomeController
 * Example of simple controller
 * @package App\Controllers
 */
class HomeController extends AControllerBase
{
    public function index()
    {
        return $this->html(CategoriesHelper::mergeCategories(
            []
        ));
    }

    public function product()
    {
        $categoryId = $this->request()->getGet()['category_id'];

        return $this->html(
            CategoriesHelper::mergeCategories(
                [
                    'products' => ProductModel::getAll( "category_id = ?", [$categoryId]),
                    'category' => CategoryModel::getOne($categoryId),
                ],
            )
        );

    }

    public function addproduct()
    {
        return $this->html([]);
    }

//    public function skateboards()
//    {
//        return $this->html(CategoriesHelper::mergeCategories(SkateboardModel::getAll()));
//    }
//
//    public function boards()
//    {
//        return $this->html(BoardModel::getAll());
//    }
//
//    public function trucks()
//    {
//        return $this->html(TrucksModel::getAll());
//    }
//
//    public function wheels()
//    {
//        return $this->html(WheelsModel::getAll());
//    }
//
//    public function bearings()
//    {
//        return $this->html(BearingsModel::getAll());
//    }
//
//    public function addProduct()
//    {

//    }
//
//    public function deleteProduct()
//    {
//        $id = $this->request()->getGet()['id'] ?? null;
//
//        if ($id) {
//            try {
//                SkateboardModel::getOne($id)->delete();
//            } catch (\Exception $e) {}
//        }
//
//        header('location:/?c=home&a=skateboards');
//    }
}