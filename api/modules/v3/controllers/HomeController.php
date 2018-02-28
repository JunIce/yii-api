<?php

namespace api\modules\v3\controllers;
use Yii;
use yii\filters\Cors;
use yii\helpers\ArrayHelper;
use yii\filters\ContentNegotiator;
use yii\rest\Controller;
use yii\web\Response;

use api\models\EcmsGou;
use api\models\Enewstagsdata;
use api\models\Enewsinfotype;
use api\models\Enewsclass;

/**
 * Default controller for the `v3` module
 */
class HomeController extends Controller
{
    /**
     * Renders the index view for the module
     * @return string
     */
    public function actionNewinfolist()
    {
        $model = new EcmsGou();
        $res = $model->InfoDetail([
            'where' => [],
            'offset' => 0,
            'limit' => 12,
            'orderby' => ['newstime' => SORT_DESC],
        ]);
        return $res;
    }

    public function actionHotinfolist()
    {
        $model = new EcmsGou();
        $res = $model->InfoDetail([
            'where' => [],
            'offset' => 0,
            'limit' => 12,
            'orderby' => ['favanum' => SORT_DESC],
        ]);
        return $res;
    }

    public function actionAlltype()
    {
        $model = new Enewsinfotype();
        $res = $model -> getAllType();
        return $res;
    }

    public function actionClasslists()
    {
        $model = new Enewsclass();
        $res = $model->parentClass();
        return $res;
    }

    public function actionClassinfo()
    {
        $classid =(int)Yii::$app->request->get('classid');
        $model = new EcmsGou();
        $res = $model->InfoDetail([
            'where' => ['classid' => $classid ],
            'offset' => 0,
            'limit' => 12,
            'orderby' => ['id' => SORT_DESC],
        ]);

        // $model1 = new Enewsinfotype();
        // $res['class_tags'] = $model1->getInfoTitleType([
        //     'where' => ['classid' => $classid ]
        // ]);
        return ($res);
    }

    public function actionInfodetail()
    {
        $id =(int)Yii::$app->request->get('id');
        $classid =(int)Yii::$app->request->get('classid');
        $model1 = new EcmsGou();
        $res = $model1->InfoCDetail([
            'id' => $id,
            'classid' => $classid
        ]);

        return ($res);
    }

    public function behaviors()
    {
        $behaviors = parent::behaviors();
        unset($behaviors['authenticator']);

        $behaviors['corsFilter'] = [
            'class' => Cors::className(),
            'cors' => [
                'Origin' => ['*'],
                // restrict access to
                'Access-Control-Request-Method' => ['*'],
                // Allow only POST and PUT methods
                'Access-Control-Request-Headers' => ['*'],
                // Allow OPTIONS caching
                'Access-Control-Max-Age' => 3600,
                // Allow the X-Pagination-Current-Page header to be exposed to the browser.
                'Access-Control-Expose-Headers' => ['X-Pagination-Current-Page'],
            ],
        ];

        $behaviors['contentNegotiator'] = [
            'class' => ContentNegotiator::className(),
            'formats' => [
                'application/json' => Response::FORMAT_JSON
            ]
        ];
        return $behaviors;
    }
}