<?php

namespace Modules\Skol\Models;

use Mindy\Orm\Fields\ImageField;
use Mindy\Orm\Fields\CharField;
use Mindy\Orm\Fields\ForeignField;
use Mindy\Orm\Fields\IntField;
use Mindy\Orm\Fields\SlugField;
use Mindy\Orm\Fields\TextField;
use Mindy\Orm\Model;

class Product extends Model
{
    public static function getFields()
    {
        return [
            'name' => [
                'class' => CharField::className(),
                'verboseName' => 'Наименование'
            ],
            'slug' => [
                'class' => SlugField::className(),
                'verboseName' => 'Url'
            ],
            'category' => [
                'class' => ForeignField::className(),
                'verboseName' => 'Категория',
                'modelClass' => Category::className()
            ],
            'position' => [
                'class' => IntField::className(),
                'null' => true,
                'editable' => false
            ],
            'image' => [
                'class' => ImageField::className(),
                'verboseName' => 'Изображение',
                'sizes' => [
                    'preview' => [
                        220, 180,
                        'method' => 'adaptiveResize'
                    ]
                ]
            ],
            'description' => [
                'class' => TextField::className(),
                'null' => true
            ]
        ];
    }

    public function __toString()
    {
        return (string) $this->name;
    }

    public static function objectsManager($instance = null)
    {
        $manager = parent::objectsManager($instance);
        return $manager->order(['position']);
    }

    public function getAbsoluteUrl()
    {
        return $this->reverse('catalog:view', ['slug' => $this->slug]);
    }
}
