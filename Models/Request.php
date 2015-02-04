<?php
/**
 * 
 *
 * All rights reserved.
 * 
 * @author Falaleev Maxim
 * @email max@studio107.ru
 * @version 1.0
 * @company Studio107
 * @site http://studio107.ru
 * @date 12/06/14.06.2014 19:48
 */

namespace Modules\Skol\Models;

use Mindy\Orm\Fields\CharField;
use Mindy\Orm\Model;

class Request extends Model
{
    public static function getFields()
    {
        return [
            'name' => [
                'class' => CharField::className(),
                'verboseName' => 'Ваше имя'
            ],
            'phone' => [
                'class' => CharField::className(),
                'verboseName' => 'Ваш телефон'
            ]
        ];
    }

    public function __toString()
    {
        return (string) $this->name;
    }
}
