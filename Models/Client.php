<?php

namespace Modules\Skol\Models;

use Mindy\Orm\Fields\ImageField;
use Mindy\Orm\Fields\CharField;
use Mindy\Orm\Fields\IntField;
use Mindy\Orm\Model;

class Client extends Model
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
            'image' => [
                'class' => ImageField::className(),
                'verboseName' => 'Изображение',
                'sizes' => [
                    'preview' => [
                        220, 180,
                        'method' => 'adaptiveResize'
                    ]
                ]
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
}
