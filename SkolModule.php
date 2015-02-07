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
 * @date 12/06/14.06.2014 19:43
 */

namespace Modules\Skol;


use Mindy\Base\Mindy;
use Mindy\Base\Module;

class SkolModule extends Module
{

    public static function preConfigure()
    {
        Mindy::app()->template->addHelper('get_actions', ['\Modules\Skol\Helpers\SkolHelper', 'getActions']);
        Mindy::app()->template->addHelper('get_products', ['\Modules\Skol\Helpers\SkolHelper', 'getProducts']);
    }

    public function getMenu()
    {
        return [
            'name' => $this->getName(),
            'items' => [
                [
                    'name' => 'Заявки',
                    'adminClass' => 'RequestsAdmin',
                ],
                [
                    'name' => 'Акции',
                    'adminClass' => 'ActionAdmin',
                ],
                [
                    'name' => 'Категории товаров',
                    'adminClass' => 'CategoryAdmin',
                ],
                [
                    'name' => 'Товары',
                    'adminClass' => 'ProductAdmin',
                ],
                [
                    'name' => 'Клиенты',
                    'adminClass' => 'ClientAdmin',
                ]
            ]
        ];
    }
}
