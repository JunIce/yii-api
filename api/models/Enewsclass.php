<?php

namespace api\models;

use Yii;

/**
 * This is the model class for table "{{%enewsclass}}".
 *
 * @property int $classid
 * @property int $bclassid
 * @property string $classname
 * @property string $sonclass
 * @property int $is_zt
 * @property int $lencord
 * @property int $link_num
 * @property int $newstempid
 * @property int $onclick
 * @property int $listtempid
 * @property string $featherclass
 * @property int $islast
 * @property string $classpath
 * @property string $classtype
 * @property string $newspath
 * @property int $filename
 * @property string $filetype
 * @property int $openpl
 * @property int $openadd
 * @property int $newline
 * @property int $hotline
 * @property int $goodline
 * @property string $classurl
 * @property int $groupid
 * @property int $myorder
 * @property string $filename_qz
 * @property int $hotplline
 * @property int $modid
 * @property int $checked
 * @property int $firstline
 * @property string $bname
 * @property int $islist
 * @property int $searchtempid
 * @property int $tid
 * @property string $tbname
 * @property int $maxnum
 * @property int $checkpl
 * @property int $down_num
 * @property int $online_num
 * @property string $listorder
 * @property string $reorder
 * @property string $intro
 * @property string $classimg
 * @property int $jstempid
 * @property int $addinfofen
 * @property int $listdt
 * @property int $showclass
 * @property int $showdt
 * @property int $checkqadd
 * @property int $qaddlist
 * @property string $qaddgroupid
 * @property int $qaddshowkey
 * @property int $adminqinfo
 * @property int $doctime
 * @property string $classpagekey
 * @property int $dtlisttempid
 * @property int $classtempid
 * @property int $nreclass
 * @property int $nreinfo
 * @property int $nrejs
 * @property int $nottobq
 * @property string $ipath
 * @property int $addreinfo
 * @property int $haddlist
 * @property int $sametitle
 * @property int $definfovoteid
 * @property string $wburl
 * @property int $qeditchecked
 * @property int $wapstyleid
 * @property int $repreinfo
 * @property int $pltempid
 * @property string $cgroupid
 * @property int $yhid
 * @property int $wfid
 * @property int $cgtoinfo
 * @property string $bdinfoid
 * @property int $repagenum
 * @property int $keycid
 * @property int $allinfos
 * @property int $infos
 * @property int $addtime
 */
class Enewsclass extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return '{{%enewsclass}}';
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
            [['bclassid', 'lencord', 'newstempid', 'onclick', 'listtempid', 'newline', 'hotline', 'goodline', 'groupid', 'myorder', 'modid', 'searchtempid', 'tid', 'maxnum', 'jstempid', 'addinfofen', 'doctime', 'dtlisttempid', 'classtempid', 'definfovoteid', 'wapstyleid', 'pltempid', 'yhid', 'wfid', 'repagenum', 'keycid', 'allinfos', 'infos', 'addtime'], 'integer'],
            [['sonclass', 'featherclass', 'classpath', 'intro', 'qaddgroupid', 'cgroupid'], 'required'],
            [['sonclass', 'featherclass', 'classpath', 'intro', 'qaddgroupid', 'cgroupid'], 'string'],
            [['classname', 'bname', 'listorder', 'reorder'], 'string', 'max' => 50],
            [['is_zt', 'islast', 'filename', 'openpl', 'openadd', 'checked', 'islist', 'checkpl', 'listdt', 'showclass', 'showdt', 'checkqadd', 'qaddlist', 'qaddshowkey', 'adminqinfo', 'nreclass', 'nreinfo', 'nrejs', 'nottobq', 'addreinfo', 'sametitle', 'qeditchecked', 'repreinfo', 'cgtoinfo'], 'string', 'max' => 1],
            [['link_num', 'hotplline', 'firstline', 'down_num', 'online_num', 'haddlist'], 'string', 'max' => 4],
            [['classtype', 'filetype'], 'string', 'max' => 10],
            [['newspath', 'filename_qz'], 'string', 'max' => 20],
            [['classurl'], 'string', 'max' => 200],
            [['tbname'], 'string', 'max' => 60],
            [['classimg', 'classpagekey', 'ipath', 'wburl'], 'string', 'max' => 255],
            [['bdinfoid'], 'string', 'max' => 25],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'classid' => 'Classid',
            'bclassid' => 'Bclassid',
            'classname' => 'Classname',
            'sonclass' => 'Sonclass',
            'is_zt' => 'Is Zt',
            'lencord' => 'Lencord',
            'link_num' => 'Link Num',
            'newstempid' => 'Newstempid',
            'onclick' => 'Onclick',
            'listtempid' => 'Listtempid',
            'featherclass' => 'Featherclass',
            'islast' => 'Islast',
            'classpath' => 'Classpath',
            'classtype' => 'Classtype',
            'newspath' => 'Newspath',
            'filename' => 'Filename',
            'filetype' => 'Filetype',
            'openpl' => 'Openpl',
            'openadd' => 'Openadd',
            'newline' => 'Newline',
            'hotline' => 'Hotline',
            'goodline' => 'Goodline',
            'classurl' => 'Classurl',
            'groupid' => 'Groupid',
            'myorder' => 'Myorder',
            'filename_qz' => 'Filename Qz',
            'hotplline' => 'Hotplline',
            'modid' => 'Modid',
            'checked' => 'Checked',
            'firstline' => 'Firstline',
            'bname' => 'Bname',
            'islist' => 'Islist',
            'searchtempid' => 'Searchtempid',
            'tid' => 'Tid',
            'tbname' => 'Tbname',
            'maxnum' => 'Maxnum',
            'checkpl' => 'Checkpl',
            'down_num' => 'Down Num',
            'online_num' => 'Online Num',
            'listorder' => 'Listorder',
            'reorder' => 'Reorder',
            'intro' => 'Intro',
            'classimg' => 'Classimg',
            'jstempid' => 'Jstempid',
            'addinfofen' => 'Addinfofen',
            'listdt' => 'Listdt',
            'showclass' => 'Showclass',
            'showdt' => 'Showdt',
            'checkqadd' => 'Checkqadd',
            'qaddlist' => 'Qaddlist',
            'qaddgroupid' => 'Qaddgroupid',
            'qaddshowkey' => 'Qaddshowkey',
            'adminqinfo' => 'Adminqinfo',
            'doctime' => 'Doctime',
            'classpagekey' => 'Classpagekey',
            'dtlisttempid' => 'Dtlisttempid',
            'classtempid' => 'Classtempid',
            'nreclass' => 'Nreclass',
            'nreinfo' => 'Nreinfo',
            'nrejs' => 'Nrejs',
            'nottobq' => 'Nottobq',
            'ipath' => 'Ipath',
            'addreinfo' => 'Addreinfo',
            'haddlist' => 'Haddlist',
            'sametitle' => 'Sametitle',
            'definfovoteid' => 'Definfovoteid',
            'wburl' => 'Wburl',
            'qeditchecked' => 'Qeditchecked',
            'wapstyleid' => 'Wapstyleid',
            'repreinfo' => 'Repreinfo',
            'pltempid' => 'Pltempid',
            'cgroupid' => 'Cgroupid',
            'yhid' => 'Yhid',
            'wfid' => 'Wfid',
            'cgtoinfo' => 'Cgtoinfo',
            'bdinfoid' => 'Bdinfoid',
            'repagenum' => 'Repagenum',
            'keycid' => 'Keycid',
            'allinfos' => 'Allinfos',
            'infos' => 'Infos',
            'addtime' => 'Addtime',
        ];
    }

    public function parentClass()
    {
        $parent = Self::find()->select(['classid', 'classname', 'classpath'])->where(['bclassid' => 0])->all();
        return $parent;
    }
}
