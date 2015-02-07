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
 * @date 15/09/14.09.2014 17:51
 */

namespace Modules\Skol\Forms;

use Mindy\Form\Fields\CharField;
use Mindy\Form\ModelForm;
use Modules\Skol\Models\Request;

class RequestForm extends ModelForm
{
    public function getModel()
    {
        return new Request;
    }

    public function getFields()
    {
        return [
            'name' => [
                'class' => CharField::className(),
                'required' => true,
                'html' => [
                    'placeholder' => 'Ваше имя'
                ]
            ],
            'phone' => [
                'class' => CharField::className(),
                'required' => true,
                'html' => [
                    'placeholder' => 'Ваш телефон'
                ]
            ],
        ];
    }

}
