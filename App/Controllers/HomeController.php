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
}