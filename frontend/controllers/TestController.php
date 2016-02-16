<?php
namespace frontend\controllers;

use yii\web\Controller;

class TestController extends Controller
{
    //public $layout = false;

    public function actionIndex($msg = '')
    {
        return $this->render('say', ['message' => $msg]);
    }
}