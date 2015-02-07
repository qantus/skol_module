<?php

namespace Modules\Skol\Admin;

use Mindy\Base\Mindy;
use Modules\Admin\Components\ModelAdmin;
use Modules\Skol\Models\Client;

class ClientAdmin extends ModelAdmin
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

    public function getModel()
    {
        return new Client;
    }
}
