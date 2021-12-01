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

        $imgPathBool = false;

        if (filter_var($imgPath, FILTER_VALIDATE_URL)) {
            $imgPathBool = true;
        }

        $success = false;

        $validData = $name && $description && $price > 0 && $imgPathBool && $categoryId;

        if (!empty($postData) && $validData) {
            $productModel = new ProductModel();
            $productModel->name = $name;
            $productModel->description = $description;
            $productModel->price = $price;
            $productModel->img_path = $imgPath;
            $productModel->category_id = $categoryId;
            try {
                $productModel->save();
                $success = true;
            } catch (\Exception $e) {}
        }

        return $this->html(CategoriesHelper::mergeCategories(
            [
                'alert' => [
                    'message' => 'Podarilo sa!',
                    'isVisible' => $success
                ],
            ]
        ));
    }

    public function edit()
    {
        $postData = $this->request()->getPost();
        $getData = $this->request()->getGet();

        $productId = $getData["id"];

        $success = false;

        $name = $postData['name'] ?? null;
        $description = $postData['description'] ?? null;
        $price = $postData['price'] ?? null;
        $imgPath = $postData['img_path'] ?? null;

        $imgPathBool = false;

        if (filter_var($imgPath, FILTER_VALIDATE_URL)) {
            $imgPathBool = true;
        }

        $validData = $name && $description && $price && $imgPathBool;

        if (!empty($postData) && $validData) {
            $productModel = ProductModel::getOne($productId);
            $productModel->name = $name;
            $productModel->description = $description;
            $productModel->price = $price;
            $productModel->img_path = $imgPath;
            $productModel->save();
            try {
                $productModel->save();
                $success = true;
            } catch (\Exception $e) {}
        }

        return $this->html(CategoriesHelper::mergeCategories(
            [
                'product' => ProductModel::getOne($productId),
                'alert' =>
                    [
                        'message' => 'Podarilo sa!',
                        'isVisible' => $success
                    ]
            ]
        ));
    }

    public function delete()
    {
        $id = $this->request()->getGet()['id'] ?? null;

        $product = ProductModel::getOne($id);

        if ($id) {
            try {
                ProductModel::getOne($id)->delete();
            } catch (\Exception $e) {}
        }

        header('location:/?c=home&a=product&category_id=' . $product->category_id);
    }
}