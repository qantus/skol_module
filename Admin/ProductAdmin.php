<?php

namespace Modules\Skol\Admin;

use Mindy\Base\Mindy;
use Modules\Admin\Components\ModelAdmin;
use Modules\Skol\Forms\ProductForm;
use Modules\Skol\Models\Product;

class ProductAdmin extends ModelAdmin
{
    public $sortingColumn = 'position';

    public function getColumns()
    {
        return ['name'];
    }

    public function getSearchFields()
    {
        return ['name'];
    }

    public function getCreateForm()
    {
        return ProductForm::className();
    }

    public function getModel()
    {
        return new Product;
    }
}
