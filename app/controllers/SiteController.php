<?php

namespace app\controllers;

use Yii;
use yii\web\Controller;
use app\models\ContactForm;
use yii\easyii\modules\text\api\Text;

class SiteController extends Controller
{
    public function actions()
    {
        return [
            'error' => [
                'class' => 'yii\web\ErrorAction',
            ],
        ];
    }

    public function actionIndex()
    {

        $countProjectsInfo=explode(" ", Text::get('count-projects-info'));
        $countExperienceInfo = explode(" ", Text::get('count-experience-info'));
        $countClientsInfo = explode(" ", Text::get('count-clients-info'));

        $countProjects = str_split($countProjectsInfo[0]);   /// return first string(number), then delete it from array and return text
        unset($countProjectsInfo[0]);
        $projectsTitle = $countProjectsInfo;

        $countExperienceYear = str_split($countExperienceInfo[0]);
        unset($countExperienceInfo[0]);
        $experienceTitle = $countExperienceInfo;

        $countClients = str_split($countClientsInfo[0]);
        unset($countClientsInfo[0]);
        $clientsTitle = $countClientsInfo;


//        $pages = Page::getAllPages();


        return $this->render('index',[
            'countProjects'=>$countProjects,
            'projectsTitle'=>$projectsTitle,
            'countExperienceYear'=>$countExperienceYear,
            'experienceTitle'=>$experienceTitle,
            'countClients'=>$countClients,
            'clientsTitle'=>$clientsTitle,
//            'pages'=>$pages,

        ]);
    }

    public function actionContacts()
    {
        $contactForm = new ContactForm();
        return $this->render('contacts', [
            'contactForm' => $contactForm
//            'documents'=>$documents,
        ]);
    }

    public function actionContact()
    {
//        die('fdasf');
        $otvt = Yii::$app->request->get();
        $name = $otvt['name'];
        $email = $otvt['email'];
        $phone = $otvt['phone'];
        $message = $otvt['message'];

        $headers = "From: 'no-reply@gmail.com'\r\n" .
            "MIME-Version: 1.0" . "\r\n" .
            "Content-type: text/html; charset=UTF-8" . "\r\n";

        $body = '<b>Тема: Обратная связь <br>' .
            '<b>Имя: </b>' . $name . '<br>' .
            '<b>Телефон: </b>' . $phone . '<br>' .
            '<b>Email: </b>' . $email . '<br>' .
            '<b>Email: </b>' . $message . '<br>';

        if (mail(Text::get('main-email'), 'Обратная связь', $body, $headers)) {
            $result = 'ok';
        } else {
            $result = "error";
        }
        return $result;
    }
}