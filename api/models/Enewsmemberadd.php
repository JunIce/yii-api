<?php

namespace api\models;

use Yii;

/**
 * This is the model class for table "{{%enewsmemberadd}}".
 *
 * @property int $userid
 * @property int $spacestyleid
 * @property string $userpic
 * @property string $spacename
 * @property string $spacegg
 * @property int $viewstats
 * @property string $regip
 * @property int $lasttime
 * @property string $lastip
 * @property int $loginnum
 * @property string $regipport
 * @property string $lastipport
 * @property string $sex
 * @property string $province
 * @property string $city
 * @property string $sign
 * @property int $age
 * @property int $height
 * @property int $weight
 * @property int $shoesize
 * @property int $levelid
 * @property string $coverbg
 * @property int $jzid
 */
class Enewsmemberadd extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return '{{%enewsmemberadd}}';
    }

    /**
     * @return \yii\db\Connection the database connection used by this AR class.
     */
    public static function getDb()
    {
        return Yii::$app->get('nr99');
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['userid', 'spacegg'], 'required'],
            [['userid', 'spacestyleid', 'viewstats', 'lasttime', 'loginnum', 'age', 'height', 'weight', 'shoesize', 'levelid', 'jzid'], 'integer'],
            [['spacegg'], 'string'],
            [['userpic', 'coverbg'], 'string', 'max' => 200],
            [['spacename', 'sign'], 'string', 'max' => 255],
            [['regip', 'lastip', 'province', 'city'], 'string', 'max' => 20],
            [['regipport', 'lastipport'], 'string', 'max' => 6],
            [['sex'], 'string', 'max' => 2],
            [['userid'], 'unique'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'userid' => 'Userid',
            'spacestyleid' => 'Spacestyleid',
            'userpic' => 'Userpic',
            'spacename' => 'Spacename',
            'spacegg' => 'Spacegg',
            'viewstats' => 'Viewstats',
            'regip' => 'Regip',
            'lasttime' => 'Lasttime',
            'lastip' => 'Lastip',
            'loginnum' => 'Loginnum',
            'regipport' => 'Regipport',
            'lastipport' => 'Lastipport',
            'sex' => 'Sex',
            'province' => 'Province',
            'city' => 'City',
            'sign' => 'Sign',
            'age' => 'Age',
            'height' => 'Height',
            'weight' => 'Weight',
            'shoesize' => 'Shoesize',
            'levelid' => 'Levelid',
            'coverbg' => 'Coverbg',
            'jzid' => 'Jzid',
        ];
    }
}
