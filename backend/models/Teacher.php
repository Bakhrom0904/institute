<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "teacher".
 *
 * @property int $id
 * @property string $name_uz
 * @property string $name_ru
 * @property string $name_en
 * @property string $lavozim_uz
 * @property string $lavozim_ru
 * @property string $lavozim_en
 * @property string $rank_uz
 * @property string $rank_ru
 * @property string $rank_en
 * @property string $telegram
 * @property string $facebook
 * @property string $instagram
 * @property string $email
 * @property string $phone
 * @property string $birth
 * @property string $address_uz
 * @property string $address_ru
 * @property string $address_en
 * @property string $content_uz
 * @property string $content_ru
 * @property string $content_en
 * @property string|null $img
 * @property int $staff_id
 *
 * @property FakultetStaff $staff
 */
class Teacher extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'teacher';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['name_uz', 'name_ru', 'name_en', 'lavozim_uz', 'lavozim_ru', 'lavozim_en', 'rank_uz', 'rank_ru', 'rank_en', 'telegram', 'facebook', 'instagram', 'email', 'phone', 'birth', 'address_uz', 'address_ru', 'address_en', 'content_uz', 'content_ru', 'content_en', 'staff_id'], 'required'],
            [['content_uz', 'content_ru', 'content_en'], 'string'],
            [['staff_id'], 'integer'],
            [['name_uz'], 'string', 'max' => 2552],
            [['name_ru', 'name_en', 'lavozim_uz', 'lavozim_ru', 'lavozim_en', 'rank_uz', 'rank_ru', 'rank_en', 'telegram', 'facebook', 'instagram', 'email', 'phone', 'birth', 'address_uz', 'address_ru', 'address_en', 'img'], 'string', 'max' => 255],
            [['staff_id'], 'exist', 'skipOnError' => true, 'targetClass' => FakultetStaff::className(), 'targetAttribute' => ['staff_id' => 'id']],
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
            'lavozim_uz' => 'Lavozim Uz',
            'lavozim_ru' => 'Lavozim Ru',
            'lavozim_en' => 'Lavozim En',
            'rank_uz' => 'Rank Uz',
            'rank_ru' => 'Rank Ru',
            'rank_en' => 'Rank En',
            'telegram' => 'Telegram',
            'facebook' => 'Facebook',
            'instagram' => 'Instagram',
            'email' => 'Email',
            'phone' => 'Phone',
            'birth' => 'Birth',
            'address_uz' => 'Address Uz',
            'address_ru' => 'Address Ru',
            'address_en' => 'Address En',
            'content_uz' => 'Content Uz',
            'content_ru' => 'Content Ru',
            'content_en' => 'Content En',
            'img' => 'Img',
            'staff_id' => 'Staff ID',
        ];
    }

    /**
     * Gets query for [[Staff]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getStaff()
    {
        return $this->hasOne(FakultetStaff::className(), ['id' => 'staff_id']);
    }
}
