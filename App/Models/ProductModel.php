<?php

namespace App\Models;

use App\Core\Model;

class ProductModel extends Model
{

    static public function setDbColumns()
    {
        return ['id', 'name', 'description', 'price', 'img_path', 'category_id'];
    }

    static public function setTableName()
    {
        return 'products';
    }
}