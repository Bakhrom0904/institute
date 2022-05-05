<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "tch_menu_title".
 *
 * @property int $id
 * @property string $name_uz
 * @property string $name_ru
 * @property string $name_en
 * @property int $tch_menu_id
 *
 * @property TchMenu $tchMenu
 * @property Teacher[] $teachers
 */
class TchMenuTitle extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'tch_menu_title';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['name_uz', 'name_ru', 'name_en', 'tch_menu_id'], 'required'],
            [['tch_menu_id'], 'integer'],
            [['name_uz', 'name_ru', 'name_en'], 'string', 'max' => 255],
            [['tch_menu_id'], 'exist', 'skipOnError' => true, 'targetClass' => TchMenu::className(), 'targetAttribute' => ['tch_menu_id' => 'id']],
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
            'tch_menu_id' => 'Tch Menu ID',
        ];
    }

    /**
     * Gets query for [[TchMenu]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getTchMenu()
    {
        return $this->hasOne(TchMenu::className(), ['id' => 'tch_menu_id']);
    }

    /**
     * Gets query for [[Teachers]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getTeachers()
    {
        return $this->hasMany(Teacher::className(), ['tch_menu_title_id' => 'id']);
    }
}
