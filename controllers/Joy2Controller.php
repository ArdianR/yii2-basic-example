<?php

namespace app\controllers;

use Yii;
use yii\filters\AccessControl;
use yii\web\Controller;
use yii\web\Response;
use yii\filters\VerbFilter;
use app\models\LoginForm;
use app\models\ContactForm;

class Joy1Controller extends Controller
{
    /**
     * {@inheritdoc}
     */
   
    public function actionTest1()
    {

        echo "hello 2";
    }
}

