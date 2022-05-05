<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "tutor_info".
 *
 * @property int $id
 * @property string $name_uz
 * @property string $name_ru
 * @property string $name_en
 * @property string $biriktirilgan_uz
 * @property string $biriktirilgan_ru
 * @property string $biriktirilgan_en
 * @property string $tel
 * @property string $telegram
 * @property string $email
 * @property string $manzil_uz
 * @property string $manzil_ru
 * @property string $manzil_en
 * @property string|null $img
 * @property string $content_uz
 * @property string $content_ru
 * @property string $content_en
 * @property string $tutor_duty_uz
 * @property string $tutor_duty_ru
 * @property string $tutor_duty_en
 * @property string $birik_talaba_royxati_uz
 * @property string $birik_talaba_royxati_ru
 * @property string $birik_talaba_royxati_en
 * @property int $tutor_menu_sub_id
 * @property int $tutor_faculty_id
 *
 * @property TutorFaculty $tutorFaculty
 * @property MenuSub $tutorMenuSub
 */
class TutorInfo extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'tutor_info';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['name_uz', 'name_ru', 'name_en', 'biriktirilgan_uz', 'biriktirilgan_ru', 'biriktirilgan_en', 'tel', 'telegram', 'email', 'manzil_uz', 'manzil_ru', 'manzil_en', 'content_uz', 'content_ru', 'content_en', 'tutor_duty_uz', 'tutor_duty_ru', 'tutor_duty_en', 'birik_talaba_royxati_uz', 'birik_talaba_royxati_ru', 'birik_talaba_royxati_en', 'tutor_menu_sub_id', 'tutor_faculty_id'], 'required'],
            [['manzil_uz', 'manzil_ru', 'manzil_en', 'content_uz', 'content_ru', 'content_en', 'tutor_duty_uz', 'tutor_duty_ru', 'tutor_duty_en', 'birik_talaba_royxati_uz', 'birik_talaba_royxati_ru', 'birik_talaba_royxati_en'], 'string'],
            [['tutor_menu_sub_id', 'tutor_faculty_id'], 'integer'],
            [['name_uz', 'name_ru', 'name_en', 'biriktirilgan_uz', 'biriktirilgan_ru', 'biriktirilgan_en', 'tel', 'telegram', 'email', 'img'], 'string', 'max' => 255],
            [['tutor_faculty_id'], 'exist', 'skipOnError' => true, 'targetClass' => TutorFaculty::className(), 'targetAttribute' => ['tutor_faculty_id' => 'id']],
            [['tutor_menu_sub_id'], 'exist', 'skipOnError' => true, 'targetClass' => MenuSub::className(), 'targetAttribute' => ['tutor_menu_sub_id' => 'id']],
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
            'biriktirilgan_uz' => 'Biriktirilgan Uz',
            'biriktirilgan_ru' => 'Biriktirilgan Ru',
            'biriktirilgan_en' => 'Biriktirilgan En',
            'tel' => 'Tel',
            'telegram' => 'Telegram',
            'email' => 'Email',
            'manzil_uz' => 'Manzil Uz',
            'manzil_ru' => 'Manzil Ru',
            'manzil_en' => 'Manzil En',
            'img' => 'Img',
            'content_uz' => 'Content Uz',
            'content_ru' => 'Content Ru',
            'content_en' => 'Content En',
            'tutor_duty_uz' => 'Tutor Duty Uz',
            'tutor_duty_ru' => 'Tutor Duty Ru',
            'tutor_duty_en' => 'Tutor Duty En',
            'birik_talaba_royxati_uz' => 'Birik Talaba Royxati Uz',
            'birik_talaba_royxati_ru' => 'Birik Talaba Royxati Ru',
            'birik_talaba_royxati_en' => 'Birik Talaba Royxati En',
            'tutor_menu_sub_id' => 'Tutor Menu Sub ID',
            'tutor_faculty_id' => 'Tutor Faculty ID',
        ];
    }

    /**
     * Gets query for [[TutorFaculty]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getTutorFaculty()
    {
        return $this->hasOne(TutorFaculty::className(), ['id' => 'tutor_faculty_id']);
    }

    /**
     * Gets query for [[TutorMenuSub]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getTutorMenuSub()
    {
        return $this->hasOne(MenuSub::className(), ['id' => 'tutor_menu_sub_id']);
    }
}
