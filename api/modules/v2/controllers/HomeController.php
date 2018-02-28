<?php

namespace api\modules\v2\controllers;

class HomeController extends \yii\rest\Controller
{
    public function actionIndex()
    {
        return $this->render('index');
    }

}
