<?php

namespace api\modules\v1\controllers;

use yii\rest\Controller;
use yii\filters\ContentNegotiator;
use yii\filters\VerbFilter;
use yii\web\Response;
use Yii;

use api\models\Goods;

class GoodsController extends Controller
{
    public function actionGes()
    {
        $req = Yii::$app->request;
        var_dump($req->get('id'));
        $model = new Goods();
        $res = $model->find()
        ->asArray()
        ->all();
        return ($res);
    }

    public function behaviors()
    {
        return [
            'contentNegotiator' => [
                'class' => ContentNegotiator::className(),
                'formats' => [
                    'text/html' => Response::FORMAT_JSON
                ],
            ],
        ];
    }


}
