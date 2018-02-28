<?php

namespace api\models;

use Yii;

/**
 * This is the model class for table "{{%enewstags}}".
 *
 * @property int $tagid
 * @property string $tagname
 * @property int $num
 * @property int $isgood
 * @property int $cid
 * @property int $classid
 */
class Enewstags extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return '{{%enewstags}}';
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
            [['num', 'cid', 'classid'], 'integer'],
            [['tagname'], 'string', 'max' => 20],
            [['isgood'], 'string', 'max' => 1],
            [['tagname'], 'unique'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'tagid' => 'Tagid',
            'tagname' => 'Tagname',
            'num' => 'Num',
            'isgood' => 'Isgood',
            'cid' => 'Cid',
            'classid' => 'Classid',
        ];
    }
}
