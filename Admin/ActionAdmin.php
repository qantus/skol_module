<?php

namespace Modules\Skol\Admin;

use Modules\Admin\Components\ModelAdmin;
use Modules\Skol\Models\Action;

class ActionAdmin extends ModelAdmin
{
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
        return new Action;
    }
}
