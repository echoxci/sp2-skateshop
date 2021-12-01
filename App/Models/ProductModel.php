<?php

namespace App\Models;

use App\Core\Model;

class ProductModel extends Model
{
    public int $id = 0;

    public string $name = '';

    public string $description = '';

    public float|int $price = 0;

    public string $img_path = '';

    public int $category_id = 0;

    static public function setDbColumns()
    {
        return ['id', 'name', 'description', 'price', 'img_path', 'category_id'];
    }

    static public function setTableName()
    {
        return 'products';
    }
}