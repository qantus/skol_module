<?php

namespace Modules\Skol\Controllers;

use Mindy\Base\Mindy;
use Modules\Core\Controllers\CoreController;
use Modules\Skol\Models\Category;
use Modules\Skol\Models\Product;

class CatalogController extends CoreController {
    
    public function actionIndex()
    {
        $categories = Category::objects()->order(['position'])->all();

        echo $this->render('catalog/index.html',[
            'categories' => $categories
        ]);
    }

    public function actionView($slug)
    {
        $product = $this->getOr404(new Product(), ['slug' => $slug]);
        $this->breadcrumbs = [
            [
                'name' => 'Каталог',
                'url' => '/catalog/'
            ],
            [
                'name' => $product->name
            ]
        ];
        $this->title = [$product->name];
        echo $this->render('catalog/view.html',[
            'product' => $product
        ]);
    }
}