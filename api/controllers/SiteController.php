<?php
namespace api\controllers;

use Yii;
use yii\web\Controller;
use yii\filters\VerbFilter;
use yii\filters\AccessControl;
use common\models\LoginForm;

/**
 * Site controller
 */
class SiteController extends Controller
{
    public function actionIndex()
    {
           \Yii::$app->response->format = \yii\web\Response::FORMAT_JSON;
           return [
               'message' => 'API test Ok!',
               'code' => 100,
	       '123' => 123
           ];
    }
}
