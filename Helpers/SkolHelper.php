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
use Modules\Skol\Models\Product;

class SkolHelper
{
    public static function getActions()
    {
        return Action::objects()->order(['position'])->all();
    }

    public static function getProducts()
    {
        return Product::objects()->order(['position'])->limit(4)->all();
    }
}