<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "tezkor_havolalar".
 *
 * @property int $id
 * @property string $name_uz
 * @property string $name_ru
 * @property string $name_en
 * @property string $height
 * @property string $width
 * @property int $link_type
 * @property string $link
 * @property string|null $img
 * @property int $tez_men__sub_id
 *
 * @property MenuSub $tezMenSub
 */
class TezkorHavolalar extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'tezkor_havolalar';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['name_uz', 'name_ru', 'name_en', 'height', 'width', 'link_type', 'link', 'tez_men__sub_id'], 'required'],
            [['link_type', 'tez_men__sub_id'], 'integer'],
            [['name_uz', 'name_ru', 'name_en', 'height', 'width', 'link', 'img'], 'string', 'max' => 255],
            [['tez_men__sub_id'], 'exist', 'skipOnError' => true, 'targetClass' => MenuSub::className(), 'targetAttribute' => ['tez_men__sub_id' => 'id']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'name_uz' => 'Name Uz',
            'name_ru' => 'Name Ru',
            'name_en' => 'Name En',
            'height' => 'Height',
            'width' => 'Width',
            'link_type' => 'Link Type',
            'link' => 'Link',
            'img' => 'Img',
            'tez_men__sub_id' => 'Tez Men  Sub ID',
        ];
    }

    /**
     * Gets query for [[TezMenSub]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getTezMenSub()
    {
        return $this->hasOne(MenuSub::className(), ['id' => 'tez_men__sub_id']);
    }
}
