<?php

namespace api\models;

use Yii;

/**
 * This is the model class for table "{{%enewstagsdata}}".
 *
 * @property int $tid
 * @property int $tagid
 * @property int $classid
 * @property int $id
 * @property int $newstime
 * @property int $mid
 */
class Enewstagsdata extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return '{{%enewstagsdata}}';
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
            [['tagid', 'classid', 'id', 'newstime', 'mid'], 'integer'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'tid' => 'Tid',
            'tagid' => 'Tagid',
            'classid' => 'Classid',
            'id' => 'ID',
            'newstime' => 'Newstime',
            'mid' => 'Mid',
        ];
    }


    public static function relateTag($info)
    {
        $model = Self::find()
            ->select(['t1.tagid', 't2.tagname'])
            ->alias('t1')
            ->leftJoin(Enewstags::tablename().' as t2', 't2.tagid = t1.tagid')
            ->where(['t1.id' => $info['id']])
            ->asArray()
            ->all();

        return $model;
    }
}
