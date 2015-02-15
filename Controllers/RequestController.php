<?php

namespace Modules\Skol\Controllers;

use Mindy\Base\Mindy;
use Modules\Core\Controllers\CoreController;
use Modules\Skol\Forms\RequestForm;

class RequestController extends CoreController
{
    
    public function actionIndex()
    {
        $form = new RequestForm();
        if ($this->r->isPost && $form->populate($_POST)->isValid()) {
            $form->save();

            if ($this->r->isAjax) {
                echo $this->render('skol/success.html');
                Mindy::app()->end();
            } else {
                $this->r->flash->success('Ваша заявка принята! С вами свяжется наш менежер!');
                $this->redirect('/');
                Mindy::app()->end();
            }

        }
        echo $this->render('skol/request.html', [
            'form' => $form,
            'sostav' => isset($_GET['sostav'])
        ]);
    }
}