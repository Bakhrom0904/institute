<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "emblems".
 *
 * @property int $id
 * @property string|null $img
 * @property int $height
 * @property int $width
 * @property string $name
 * @property int $link_type
 * @property string $link
 *
 * @property EmbPages[] $embPages
 */
class Emblems extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'emblems';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['height', 'width', 'name', 'link_type', 'link'], 'required'],
            [['height', 'width', 'link_type'], 'integer'],
            [['img', 'name', 'link'], 'string', 'max' => 255],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'img' => 'Img',
            'height' => 'Height',
            'width' => 'Width',
            'name' => 'Name',
            'link_type' => 'Link Type',
            'link' => 'Link',
        ];
    }

    /**
     * Gets query for [[EmbPages]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getEmbPages()
    {
        return $this->hasMany(EmbPages::className(), ['emb_id' => 'id']);
    }
}
