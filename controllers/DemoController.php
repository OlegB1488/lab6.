<?php
/**
 * Created by PhpStorm.
 * User: ClassAdmin
 * Date: 02.10.2019
 * Time: 11:35
 */

namespace app\controllers;

use app\models\DemoXml;
use yii\web\Controller;

class DemoController extends Controller
{

     public function actionXml(){

        \Yii::$app->response->format = \yii\web\Response::FORMAT_XML;
        $items = ['some', 'array', 'of', 'data' => ['associative', 'array']];
        return $items;

        Yii::$app->guestbook->format = \yii\web\Response::FORMAT_XML;
        $items = ['some', 'array', 'of', 'data' => ['associative', 'array']];
        return $items;
}
}
