<?php

namespace api\models;

use Yii;

/**
 * This is the model class for table "{{%pcity}}".
 *
 * @property int $id
 * @property string $code
 * @property string $name
 * @property string $provincecode
 */
class Pcity extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return '{{%pcity}}';
    }

    /**
     * @return \yii\db\Connection the database connection used by this AR class.
     */
    public static function getDb()
    {
        return Yii::$app->get('db2');
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['code', 'name', 'provincecode'], 'required'],
            [['code', 'provincecode'], 'string', 'max' => 6],
            [['name'], 'string', 'max' => 20],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'code' => 'Code',
            'name' => 'Name',
            'provincecode' => 'Provincecode',
        ];
    }
}
