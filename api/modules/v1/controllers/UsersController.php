<?php

namespace api\modules\v1\controllers;

use yii\rest\ActiveController;
use yii\web\Response;


class UsersController extends ActiveController
{
    public $modelClass = 'app\models\Users';
}
