<?php
namespace frontend\controllers

use Yii;
use yii\web\Controller;

class TestController extends Controller
{
    public $enableCsrfValidation = false;

    public function actionTest() {
        echo 'ActiveController';
    }
}