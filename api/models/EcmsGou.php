<?php

namespace api\models;

use Yii;

/**
 * This is the model class for table "{{%ecms_gou}}".
 *
 * @property int $id
 * @property int $classid
 * @property int $ttid
 * @property int $onclick
 * @property int $plnum
 * @property int $totaldown
 * @property string $newspath
 * @property string $filename
 * @property int $userid
 * @property string $username
 * @property int $firsttitle
 * @property int $isgood
 * @property int $ispic
 * @property int $istop
 * @property int $isqf
 * @property int $ismember
 * @property int $isurl
 * @property int $truetime
 * @property int $lastdotime
 * @property int $havehtml
 * @property int $groupid
 * @property int $userfen
 * @property string $titlefont
 * @property string $titleurl
 * @property int $stb
 * @property int $fstb
 * @property int $restb
 * @property string $keyboard
 * @property string $title
 * @property int $newstime
 * @property string $titlepic
 * @property string $price
 * @property string $seller
 * @property string $comm_url
 * @property string $comm_imgs
 * @property string $appraise
 * @property int $likenum
 * @property string $showpic
 * @property int $age
 * @property int $height
 * @property int $weight
 * @property int $shoesize
 * @property int $favanum
 * @property string $reason
 * @property int $isping
 */
class EcmsGou extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return '{{%ecms_gou}}';
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
            [['classid', 'ttid', 'onclick', 'plnum', 'totaldown', 'userid', 'truetime', 'lastdotime', 'groupid', 'userfen', 'newstime', 'likenum', 'age', 'height', 'weight', 'shoesize', 'favanum'], 'integer'],
            [['comm_imgs', 'appraise', 'showpic'], 'required'],
            [['comm_imgs', 'appraise', 'showpic'], 'string'],
            [['newspath', 'username'], 'string', 'max' => 20],
            [['filename'], 'string', 'max' => 36],
            [['firsttitle', 'isgood', 'ispic', 'istop', 'isqf', 'ismember', 'isurl', 'havehtml'], 'string', 'max' => 1],
            [['titlefont'], 'string', 'max' => 14],
            [['titleurl'], 'string', 'max' => 200],
            [['stb', 'fstb', 'restb'], 'string', 'max' => 3],
            [['keyboard'], 'string', 'max' => 80],
            [['title'], 'string', 'max' => 100],
            [['titlepic'], 'string', 'max' => 120],
            [['price', 'seller', 'comm_url', 'reason'], 'string', 'max' => 255],
            [['isping'], 'string', 'max' => 4],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'classid' => 'Classid',
            'ttid' => 'Ttid',
            'onclick' => 'Onclick',
            'plnum' => 'Plnum',
            'totaldown' => 'Totaldown',
            'newspath' => 'Newspath',
            'filename' => 'Filename',
            'userid' => 'Userid',
            'username' => 'Username',
            'firsttitle' => 'Firsttitle',
            'isgood' => 'Isgood',
            'ispic' => 'Ispic',
            'istop' => 'Istop',
            'isqf' => 'Isqf',
            'ismember' => 'Ismember',
            'isurl' => 'Isurl',
            'truetime' => 'Truetime',
            'lastdotime' => 'Lastdotime',
            'havehtml' => 'Havehtml',
            'groupid' => 'Groupid',
            'userfen' => 'Userfen',
            'titlefont' => 'Titlefont',
            'titleurl' => 'Titleurl',
            'stb' => 'Stb',
            'fstb' => 'Fstb',
            'restb' => 'Restb',
            'keyboard' => 'Keyboard',
            'title' => 'Title',
            'newstime' => 'Newstime',
            'titlepic' => 'Titlepic',
            'price' => 'Price',
            'seller' => 'Seller',
            'comm_url' => 'Comm Url',
            'comm_imgs' => 'Comm Imgs',
            'appraise' => 'Appraise',
            'likenum' => 'Likenum',
            'showpic' => 'Showpic',
            'age' => 'Age',
            'height' => 'Height',
            'weight' => 'Weight',
            'shoesize' => 'Shoesize',
            'favanum' => 'Favanum',
            'reason' => 'Reason',
            'isping' => 'Isping',
        ];
    }




    public function InfoDetail($sql)
    {
        $res = Self::find()
                ->select(['id', 'newstime', 'titleurl', 'titlepic', 'title', 'favanum', 'likenum', 'ttid', 'userid', 'username'])
                ->where($sql['where'])
                ->offset($sql['offset'])
                ->limit($sql['limit'])
                ->orderBy($sql['orderby'])
                ->all();
        shuffle($res);
        return ($res);
    }

    public function InfoCDetail($info)
    {

        $res = Self::find()
                ->select(['p.id', 'p.title', 'p.ttid', 'p.titlepic', 'p.favanum', 'p.likenum', 'p.userid', 'p.username', 'u.userpic', 'p.newstime','p.comm_imgs','p.classid','p.appraise'])
                ->alias('p')
                ->leftJoin(Enewsmemberadd::tableName().' as u' , 'u.userid = p.userid')
                ->where(['p.id' => $info['id'] ])
                ->asArray()
                ->all();
        $res[0]['tags'] = Enewstagsdata::relateTag($info);
        return $res;
    }
}
