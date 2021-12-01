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
class ProductController extends AControllerBase
{
    public function index()
    {
        return $this->html(CategoriesHelper::mergeCategories(
            []
        ));
    }

    public function add()
    {
        return $this->html(CategoriesHelper::mergeCategories(
            []
        ));
    }

//    public function add()
//    {
//
//        $postData = $this->request()->getPost();
//
//        $name = $postData['name'];
//        $description = $postData['description'];
//        $price = $postData['price'];
//        $imgPath = $postData['img_path'];
//
//        $validData = $name && $description && $price && $imgPath;
//
//        if (!empty($postData) && $validData) {
//
//            $productModel = new ProductModel();
//            $productModel
//                ->setName($name)
//                ->setDescription($description)
//                ->setPrice($price)
//                ->setImgPath($imgPath)
//                ->save();
//        }
//
//        header('location:/?c=home&a=skateboards');
//    }
//
//    public function index()
//    {
//        return $this->html(($this->)
//
//        );
//    }



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
//        $postData = $this->request()->getPost();
//
//        $name = $postData['name'];
//        $description = $postData['description'];
//        $price = $postData['price'];
//        $imgPath = $postData['img_path'];
//
//        $validData = $name && $description && $price && $imgPath;
//
//        if (!empty($postData) && $validData) {
//
//            $skateboardModel = new SkateboardModel();
//            $skateboardModel
//                ->setName($name)
//                ->setDescription($description)
//                ->setPrice($price)
//                ->setImgPath($imgPath)
//                ->save();
//        }
//
//        header('location:/?c=home&a=skateboards');
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