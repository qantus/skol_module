<?php

namespace Modules\Skol\Models;

use Mindy\Orm\Fields\ImageField;
use Mindy\Orm\Fields\CharField;
use Mindy\Orm\Fields\IntField;
use Mindy\Orm\Fields\TextField;
use Mindy\Orm\Model;

class Action extends Model
{
    public static function getFields()
    {
        return [
            'name' => [
                'class' => CharField::className(),
                'verboseName' => 'Наименование'
            ],
            'info' => [
                'class' => TextField::className(),
                'verboseName' => 'Подробное описание'
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
                        222, 160,
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
}
