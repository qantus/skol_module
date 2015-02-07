<?php

namespace Modules\Skol\Models;

use Mindy\Orm\Fields\CharField;
use Mindy\Orm\Fields\HasManyField;
use Mindy\Orm\Fields\IntField;
use Mindy\Orm\Model;
use Modules\Skol\Models\Product;

class Category extends Model
{
    public static function getFields()
    {
        return [
            'name' => [
                'class' => CharField::className(),
                'verboseName' => 'Наименование'
            ],
            'position' => [
                'class' => IntField::className(),
                'null' => true,
                'editable' => false
            ],
            'products' => [
                'class' => HasManyField::className(),
                'editable' => false,
                'modelClass' => Product::className(),
                'to' => 'category_id'
            ]
        ];
    }

    public function __toString()
    {
        return (string) $this->name;
    }
}
