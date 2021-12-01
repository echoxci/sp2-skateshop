<?php

namespace App\Models;

use App\Core\Model;

class CategoryModel extends Model
{

    static public function setDbColumns()
    {
        return ['id', 'name'];
    }

    static public function setTableName()
    {
        return 'categories';
    }
}