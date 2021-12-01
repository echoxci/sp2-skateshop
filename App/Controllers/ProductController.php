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
        $postData = $this->request()->getPost();
        $getData = $this->request()->getGet();

        $name = $postData['name'] ?? null;
        $description = $postData['description'] ?? null;
        $price = $postData['price'] ?? null;
        $imgPath = $postData['img_path'] ?? null;
        $categoryId = $getData["category_id"] ?? null;

        $validData = $name && $description && $price && $imgPath && $categoryId;

        if (!empty($postData) && $validData) {
            $skateboardModel = new ProductModel();
            $skateboardModel->name = $name;
            $skateboardModel->description = $description;
            $skateboardModel->price = $price;
            $skateboardModel->img_path = $imgPath;
            $skateboardModel->category_id = $categoryId;
            $skateboardModel->save();
        }

        return $this->html(CategoriesHelper::mergeCategories(
            []
        ));
    }

    public function delete()
    {
        $id = $this->request()->getGet()['id'] ?? null;
        $categoryId = $this->request()->getGet()['category_id'] ?? null;

        if ($id) {
            try {
                ProductModel::getOne($id)->delete();
            } catch (\Exception $e) {}
        }

        header('location:/?c=home&a=product&category_id=' . $categoryId);
    }
}