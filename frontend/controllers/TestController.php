<?php
/**
 * Created by PhpStorm.
 * User: 张鹏飞
 * Date: 2018/2/28
 * Time: 16:13
 */

namespace frontend\controllers;


use yii\web\Controller;

class TestController extends Controller
{

    public function actionIndex($name)
    {
        return $this->render('index',['name'=>$name]);
    }

}