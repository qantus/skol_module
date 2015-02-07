<?php

namespace Modules\Skol\Forms;

use Mindy\Form\Fields\TinymceField;
use Mindy\Form\ModelForm;
use Modules\Skol\Models\Product;

class ProductForm extends ModelForm
{
    public function getModel()
    {
        return new Product;
    }

    public function getFields()
    {
        return [
            'description' => [
                'class' => TinymceField::className(),
                'label' => 'Описание'
            ]
        ];
    }

}
