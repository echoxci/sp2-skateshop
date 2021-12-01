<?php

namespace App\Helpers;

use App\Models\CategoryModel;

class CategoriesHelper
{
    public static function mergeCategories(array $data)
    {
        return array_merge(
            ["data" => $data],
            ['categories' => CategoryModel::getAll()]
        );
    }
}