<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "supporters".
 *
 * @property int $id
 * @property string|null $img
 * @property string $link
 */
class Supporters extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'supporters';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['link'], 'required'],
            [['img', 'link'], 'string', 'max' => 255],
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
            'link' => 'Link',
        ];
    }
}
