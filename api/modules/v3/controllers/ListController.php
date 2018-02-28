<?php

namespace api\modules\v3\controllers;

class ListController extends \yii\rest\Controller
{
    public function actionIndex()
    {
        return $this->render('index');
    }

}
