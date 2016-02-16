<?php
namespace frontend\controllers;

use yii\web\Controller;

class TestController extends Controller
{
    public function actionIndex($msg = '')
    {
        echo 'Say '.$msg;
    }

    public function actionPostComment()
    {
        echo 'post comment';
    }
}