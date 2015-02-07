<?php

namespace Modules\Skol\Controllers;

use Mindy\Base\Mindy;
use Modules\Core\Controllers\CoreController;
use Modules\Skol\Models\Client;

class ClientsController extends CoreController {
    
    public function actionIndex()
    {
        $clients = Client::objects()->all();
        echo $this->render('skol/clients.html', [
            'clients' => $clients
        ]);
    }
}