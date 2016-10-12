<?php

namespace app\models;

use Yii;
use yii\base\Model;
use yii\easyii\modules\text\api\Text;

/**
 * ContactForm is the model behind the contact form.
 */
class ContactForm extends Model
{
    public $name;
    public $email;
    public $area ;
    public $phone;
    public $subject;
    public $body;
    public $verifyCode;
    public $city;
    public $prof;
    public $company;
    public $first;
    public $code;
    public $model;
    public $floor;
    public $square;
    public $material ;
    public $type;
    public $captcha;
    public $message;




    /**
     * @return array the validation rules.
     */
    public function rules()
    {
        return [
            ['captcha', 'captcha'],
            ['captcha', 'required'],
//            ['email', 'email'],
            [['name',  'phone','area' ], 'string'],
            // verifyCode needs to be entered correctly

        ];
    }

    /**
     * @return array customized attribute labels
     */


    /**
     * Sends an email to the specified email address using the information collected by this model.
     * @param  string  $email the target email address
     * @return boolean whether the model passes validation
     */


    public function contact()
    {
        die('fdsafsda');
        $email = Text::get('block-12-email');
        $headers = "From: $this->name <$this->email>\r\n".
            "MIME-Version: 1.0" . "\r\n" .
            "Content-type: text/html; charset=UTF-8" . "\r\n";

        $city = isset($this->city) ? $this->city : 'не указан';
        $prof = isset($this->prof) ? $this->prof : 'не указан';
        $company = isset($this->company) ? $this->company : 'не указан';

        $body = '<b>Имя: </b>'.$this->name.
            '<br><b> Телефон: </b>'.$this->phone.
            '<br><b> Е-mail: </b>'.$this->email.
            '<br><b> Сообщение: </b>'.$this->body.
            '<br><b> Город: </b>'.$city.
            '<br><b> Профессия: </b>'.$prof.
            '<br><b> Компания: </b>'.$company;

        if ($this->validate()) {
            mail($email, 'Обратная связь со страницы "Контакты"/"Архитекторам"/"Частным клиентам"', $body, $headers);

            return true;
        } else {
            return false;
        }
    }
}
