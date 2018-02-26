<?php

namespace api\modules\v1\controllers;

use yii\rest\Controller;
use yii\filters\ContentNegotiator;
use yii\filters\VerbFilter;
use yii\web\Response;

use api\models\Goods;

class GoodsController extends Controller
{
    public function actionGes()
    {
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
            'verbFilter' => [
                'class' => VerbFilter::className(),
                'actions' => [
                    'ges' => ['GET'],
                ]
            ],
        ];
    }
}
