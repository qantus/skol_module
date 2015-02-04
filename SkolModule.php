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


use Mindy\Base\Module;

class SkolModule extends Module
{

    public function getMenu()
    {
        return [
            'name' => $this->getName(),
            'items' => [
                [
                    'name' => 'Заявки',
                    'adminClass' => 'RequestsAdmin',
                ]
            ]
        ];
    }
}
