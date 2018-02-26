<?php

namespace api\modules\v2\controllers;
use yii\filters\ContentNegotiator;
use yii\web\Response;

use Yii;
use api\models\Province;
use api\models\Pcity;


class RegionController extends \yii\web\Controller
{
    public function actionIndex()
    {
        $model = new Province();
        $res = $model
                ->find()
                ->select(['code','name'])
                ->orderBy('id ASC')
                ->asArray()
                ->all();
        return $res;
    }

    public function actionProvince()
    {
        $pcode = Yii::$app->request->get('pcode');
        $model = new Province();
        $res = $model->find()->where(['code'=>$pcode ])
              ->all();
        return $res;
    }

    public function actionCity()
    {
        $pcode = Yii::$app->request->get('pcode');
        $model = new Pcity();
        $res = $model->find()->select(['code','name'])->where(['provincecode'=>$pcode ])
              ->all();
        return $res;
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
