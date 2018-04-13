<?php

namespace api\models;

use Yii;

/**
 * This is the model class for table "{{%gexing}}".
 *
 * @property int $id
 * @property int $onclick
 * @property int $userid
 * @property string $username
 * @property int $istop
 * @property int $isgood
 * @property int $plnum
 * @property string $title
 * @property int $newstime
 * @property string $titlepic
 * @property int $diggtop
 * @property int $diggdown
 * @property int $favanum
 * @property string $content
 */
class Gexing extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return '{{%gexing}}';
    }

    /**
     * @return \yii\db\Connection the database connection used by this AR class.
     */
    public static function getDb()
    {
        return Yii::$app->get('test');
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['onclick', 'userid', 'plnum', 'newstime', 'diggtop', 'diggdown', 'favanum'], 'integer'],
            [['content'], 'required'],
            [['content'], 'string'],
            [['username'], 'string', 'max' => 20],
            [['istop'], 'string', 'max' => 1],
            [['isgood'], 'string', 'max' => 3],
            [['title'], 'string', 'max' => 100],
            [['titlepic'], 'string', 'max' => 200],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'onclick' => 'Onclick',
            'userid' => 'Userid',
            'username' => 'Username',
            'istop' => 'Istop',
            'isgood' => 'Isgood',
            'plnum' => 'Plnum',
            'title' => 'Title',
            'newstime' => 'Newstime',
            'titlepic' => 'Titlepic',
            'diggtop' => 'Diggtop',
            'diggdown' => 'Diggdown',
            'favanum' => 'Favanum',
            'content' => 'Content',
        ];
    }
}
