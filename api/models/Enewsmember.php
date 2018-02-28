<?php

namespace api\models;

use Yii;

/**
 * This is the model class for table "{{%enewsmember}}".
 *
 * @property int $userid
 * @property string $username
 * @property string $password
 * @property string $rnd
 * @property string $email
 * @property int $registertime
 * @property int $groupid
 * @property int $userfen
 * @property int $userdate
 * @property double $money
 * @property int $zgroupid
 * @property int $havemsg
 * @property int $checked
 * @property string $salt
 * @property string $userkey
 */
class Enewsmember extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return '{{%enewsmember}}';
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
            [['registertime', 'groupid', 'userfen', 'userdate', 'zgroupid'], 'integer'],
            [['money'], 'number'],
            [['username', 'rnd'], 'string', 'max' => 20],
            [['password'], 'string', 'max' => 32],
            [['email'], 'string', 'max' => 50],
            [['havemsg', 'checked'], 'string', 'max' => 1],
            [['salt'], 'string', 'max' => 8],
            [['userkey'], 'string', 'max' => 12],
            [['username'], 'unique'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'userid' => 'Userid',
            'username' => 'Username',
            'password' => 'Password',
            'rnd' => 'Rnd',
            'email' => 'Email',
            'registertime' => 'Registertime',
            'groupid' => 'Groupid',
            'userfen' => 'Userfen',
            'userdate' => 'Userdate',
            'money' => 'Money',
            'zgroupid' => 'Zgroupid',
            'havemsg' => 'Havemsg',
            'checked' => 'Checked',
            'salt' => 'Salt',
            'userkey' => 'Userkey',
        ];
    }
}
