<?php

namespace api\models;

use Yii;

/**
 * This is the model class for table "{{%enewsinfotype}}".
 *
 * @property int $typeid
 * @property string $tname
 * @property int $mid
 * @property int $myorder
 * @property int $yhid
 * @property int $tnum
 * @property int $listtempid
 * @property string $tpath
 * @property string $ttype
 * @property int $maxnum
 * @property string $reorder
 * @property int $tid
 * @property string $tbname
 * @property string $timg
 * @property string $intro
 * @property string $pagekey
 * @property int $newline
 * @property int $hotline
 * @property int $goodline
 * @property int $hotplline
 * @property int $firstline
 * @property int $jstempid
 * @property int $nrejs
 * @property int $listdt
 * @property int $repagenum
 * @property int $classid
 * @property string $title_type
 */
class Enewsinfotype extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return '{{%enewsinfotype}}';
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
            [['mid', 'myorder', 'yhid', 'listtempid', 'maxnum', 'tid', 'jstempid', 'repagenum', 'classid'], 'integer'],
            [['classid', 'title_type'], 'required'],
            [['tname'], 'string', 'max' => 30],
            [['tnum', 'newline', 'hotline', 'goodline', 'hotplline', 'firstline'], 'string', 'max' => 3],
            [['tpath'], 'string', 'max' => 100],
            [['ttype'], 'string', 'max' => 10],
            [['reorder', 'title_type'], 'string', 'max' => 50],
            [['tbname'], 'string', 'max' => 60],
            [['timg'], 'string', 'max' => 200],
            [['intro', 'pagekey'], 'string', 'max' => 255],
            [['nrejs', 'listdt'], 'string', 'max' => 1],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'typeid' => 'Typeid',
            'tname' => 'Tname',
            'mid' => 'Mid',
            'myorder' => 'Myorder',
            'yhid' => 'Yhid',
            'tnum' => 'Tnum',
            'listtempid' => 'Listtempid',
            'tpath' => 'Tpath',
            'ttype' => 'Ttype',
            'maxnum' => 'Maxnum',
            'reorder' => 'Reorder',
            'tid' => 'Tid',
            'tbname' => 'Tbname',
            'timg' => 'Timg',
            'intro' => 'Intro',
            'pagekey' => 'Pagekey',
            'newline' => 'Newline',
            'hotline' => 'Hotline',
            'goodline' => 'Goodline',
            'hotplline' => 'Hotplline',
            'firstline' => 'Firstline',
            'jstempid' => 'Jstempid',
            'nrejs' => 'Nrejs',
            'listdt' => 'Listdt',
            'repagenum' => 'Repagenum',
            'classid' => 'Classid',
            'title_type' => 'Title Type',
        ];
    }

    public function getAllType()
    {
        return Self::find()->select(['title_type'])->groupBy('title_type')->all();
    }

    public function getInfoTitleType($sql)
    {
        return Self::find()
                ->select(['title_type', 'typeid', 'tname', 'tpath'])
                ->where($sql['where'])
                ->orderBy('title_type')
                ->all();
    }
}
