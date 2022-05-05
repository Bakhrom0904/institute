<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "fakultet".
 *
 * @property int $id
 * @property string $name_uz
 * @property string $name_ru
 * @property string $name_en
 * @property string $faculty_uz
 * @property string $faculty_ru
 * @property string $faculty_en
 * @property string $rank_uz
 * @property string $rank_ru
 * @property string $rank_en
 * @property string|null $img
 * @property string $content_uz
 * @property string $content_ru
 * @property string $content_en
 * @property string $qabul_date_uz
 * @property string $qabul_date_ru
 * @property string $qabul_date_en
 * @property string $tel
 * @property string $fax
 * @property string $email
 * @property string $telegram
 * @property string $address_uz
 * @property string $address_ru
 * @property string $address_en
 * @property string $staff_uz
 * @property string $staff_ru
 * @property string $staff_en
 * @property int $menu_sub_id
 *
 * @property MenuSub $menuSub
 */
class Fakultet extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'fakultet';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['name_uz', 'name_ru', 'name_en', 'faculty_uz', 'faculty_ru', 'faculty_en', 'rank_uz', 'rank_ru', 'rank_en', 'content_uz', 'content_ru', 'content_en', 'qabul_date_uz', 'qabul_date_ru', 'qabul_date_en', 'tel', 'fax', 'email', 'telegram', 'address_uz', 'address_ru', 'address_en', 'staff_uz', 'staff_ru', 'staff_en', 'menu_sub_id'], 'required'],
            [['content_uz', 'content_ru', 'content_en'], 'string'],
            [['menu_sub_id'], 'integer'],
            [['name_uz', 'name_ru', 'name_en', 'faculty_uz', 'faculty_ru', 'faculty_en', 'rank_uz', 'rank_ru', 'rank_en', 'img', 'qabul_date_uz', 'qabul_date_ru', 'qabul_date_en', 'tel', 'fax', 'email', 'telegram', 'address_uz', 'address_ru', 'address_en', 'staff_uz', 'staff_ru', 'staff_en'], 'string', 'max' => 255],
            [['menu_sub_id'], 'exist', 'skipOnError' => true, 'targetClass' => MenuSub::className(), 'targetAttribute' => ['menu_sub_id' => 'id']],
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
            'faculty_uz' => 'Faculty Uz',
            'faculty_ru' => 'Faculty Ru',
            'faculty_en' => 'Faculty En',
            'rank_uz' => 'Rank Uz',
            'rank_ru' => 'Rank Ru',
            'rank_en' => 'Rank En',
            'img' => 'Img',
            'content_uz' => 'Content Uz',
            'content_ru' => 'Content Ru',
            'content_en' => 'Content En',
            'qabul_date_uz' => 'Qabul Date Uz',
            'qabul_date_ru' => 'Qabul Date Ru',
            'qabul_date_en' => 'Qabul Date En',
            'tel' => 'Tel',
            'fax' => 'Fax',
            'email' => 'Email',
            'telegram' => 'Telegram',
            'address_uz' => 'Address Uz',
            'address_ru' => 'Address Ru',
            'address_en' => 'Address En',
            'staff_uz' => 'Staff Uz',
            'staff_ru' => 'Staff Ru',
            'staff_en' => 'Staff En',
            'menu_sub_id' => 'Menu Sub ID',
        ];
    }

    /**
     * Gets query for [[MenuSub]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getMenuSub()
    {
        return $this->hasOne(MenuSub::className(), ['id' => 'menu_sub_id']);
    }
}
