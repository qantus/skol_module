<?php

namespace Modules\Skol\Admin;

use Mindy\Base\Mindy;
use Modules\Admin\Components\ModelAdmin;
use Modules\Skol\Models\Request;

class RequestsAdmin extends ModelAdmin
{
    public function getColumns()
    {
        return ['name', 'phone'];
    }

    public function getSearchFields()
    {
        return ['name', 'phone'];
    }

    public function getModel()
    {
        return new Request;
    }
}
