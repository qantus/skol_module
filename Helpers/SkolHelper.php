<?php
/**
 * Created by JetBrains PhpStorm.
 * User: anna
 * Date: 20150205
 * Time: 22:18
 * To change this template use File | Settings | File Templates.
 */

namespace Modules\Skol\Helpers;

use Modules\Skol\Models\Action;

class SkolHelper
{
    public static function getActions()
    {
        return Action::objects()->order(['position'])->all();
    }
}