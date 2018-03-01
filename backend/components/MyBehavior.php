<?php
/**
 * Created by PhpStorm.
 * User: 张鹏飞
 * Date: 2018/3/1
 * Time: 14:29
 */
namespace backend\components;
use yii;
class MyBehavior extends yii\base\ActionFilter
{
    public function beforeAction($action)
    {
        $currentRequestRoute = $action->getUniqueId();
        if (!Yii::$app->user->can('/' . $currentRequestRoute)) {
          //  throw new \yii\web\ForbiddenHttpException("没权限访问.");
        }

        return true;
    }
    public function isGuest()
    {
        return Yii::$app->user->isGuest;
    }
}