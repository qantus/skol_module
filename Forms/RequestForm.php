<?php
/**
 * 
 *
 * All rights reserved.
 * 
 * @author Falaleev Maxim
 * @email max@studio107.ru
 * @version 1.0
 * @company Studio107
 * @site http://studio107.ru
 * @date 15/09/14.09.2014 17:51
 */

namespace Modules\Skol\Forms;

use Mindy\Form\Fields\CharField;
use Mindy\Form\ModelForm;
use Modules\Skol\Models\Request;

class RequestForm extends ModelForm
{
    public function getModel()
    {
        return new Request;
    }

    public function getFields()
    {
        return [
            'name' => [
                'class' => CharField::className(),
                'required' => true,
                'html' => [
                    'placeholder' => 'Ваше имя'
                ]
            ],
            'phone' => [
                'class' => CharField::className(),
                'required' => true,
                'html' => [
                    'placeholder' => 'Ваш телефон'
                ]
            ],
        ];
    }

    public function save()
    {
        $saved = parent::save();
        if ($saved) {
            $this->sendSms();
        }
    }

    public function sendSms()
    {
        $ch = curl_init("http://sms.ru/sms/send");
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
        curl_setopt($ch, CURLOPT_TIMEOUT, 30);
        curl_setopt($ch, CURLOPT_POSTFIELDS, array(
            "api_id" =>	"a22bdb3d-8b60-b0f4-b58b-eb0fa64aea9a",
            "to" =>	"79128214441",
            "text" => "Заявка: {$this->phone->value}, {$this->name->value}"
        ));
        $body = curl_exec($ch);
        curl_close($ch);
    }

}
