<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "tch_menu".
 *
 * @property int $id
 * @property string $name_uz
 * @property string $name_ru
 * @property string $name_en
 * @property string $creater
 *
 * @property TchMenuTitle[] $tchMenuTitles
 */
class TchMenu extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'tch_menu';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['name_uz', 'name_ru', 'name_en', 'creater'], 'required'],
            [['name_uz', 'name_ru', 'name_en', 'creater'], 'string', 'max' => 255],
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
            'creater' => 'Creater',
        ];
    }

    /**
     * Gets query for [[TchMenuTitles]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getTchMenuTitles()
    {
        return $this->hasMany(TchMenuTitle::className(), ['tch_menu_id' => 'id']);
    }
}
