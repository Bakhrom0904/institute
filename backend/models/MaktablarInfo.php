<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "maktablar_info".
 *
 * @property int $id
 * @property string $name_uz
 * @property string $name_ru
 * @property string $name_en
 * @property string|null $img
 * @property string $kimga_biriktirilgan_uz
 * @property string $kimga_biriktirilgan_ru
 * @property string $kimga_biriktirilgan_en
 * @property string $tel
 * @property string $email
 * @property string $fax
 * @property string $manzil_uz
 * @property string $manzil_ru
 * @property string $manzil_en
 * @property string $sektor_uz
 * @property string $sektor_ru
 * @property string $sektor_en
 * @property string $maktab_tarixi_uz
 * @property string $maktab_tarixi_ru
 * @property string $maktab_tarixi_en
 * @property string $maktab_teacher_uz
 * @property string $maktab_teacher_ru
 * @property string $maktab_teacher_en
 * @property string $maktab_pupil_uz
 * @property string $maktab_pupil_ru
 * @property string $maktab_pupil_en
 * @property string $maktab_pasporti_uz
 * @property string $maktab_togaraklar_uz
 * @property string $maktab_togaraklar_ru
 * @property int $maktab_togaraklar_en
 * @property string $maktab_pasporti_ru
 * @property string $maktab_pasporti_en
 * @property int $maktab_info_menu_sub_id
 */
class MaktablarInfo extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'maktablar_info';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['name_uz', 'name_ru', 'name_en', 'kimga_biriktirilgan_uz', 'kimga_biriktirilgan_ru', 'kimga_biriktirilgan_en', 'tel', 'email', 'fax', 'manzil_uz', 'manzil_ru', 'manzil_en', 'sektor_uz', 'sektor_ru', 'sektor_en', 'maktab_tarixi_uz', 'maktab_tarixi_ru', 'maktab_tarixi_en', 'maktab_teacher_uz', 'maktab_teacher_ru', 'maktab_teacher_en', 'maktab_pupil_uz', 'maktab_pupil_ru', 'maktab_pupil_en', 'maktab_pasporti_uz', 'maktab_togaraklar_uz', 'maktab_togaraklar_ru', 'maktab_togaraklar_en', 'maktab_pasporti_ru', 'maktab_pasporti_en', 'maktab_info_menu_sub_id'], 'required'],
            [['kimga_biriktirilgan_uz', 'kimga_biriktirilgan_ru', 'kimga_biriktirilgan_en', 'manzil_uz', 'manzil_ru', 'manzil_en', 'maktab_tarixi_uz', 'maktab_tarixi_ru', 'maktab_tarixi_en', 'maktab_teacher_uz', 'maktab_teacher_ru', 'maktab_teacher_en', 'maktab_pupil_uz', 'maktab_pupil_ru', 'maktab_pupil_en', 'maktab_pasporti_uz', 'maktab_togaraklar_uz', 'maktab_togaraklar_ru', 'maktab_pasporti_ru', 'maktab_pasporti_en', 'maktab_togaraklar_en'], 'string'],
            [['maktab_info_menu_sub_id'], 'integer'],
            [['name_uz', 'name_ru', 'name_en', 'img', 'tel', 'email', 'fax', 'sektor_uz', 'sektor_ru', 'sektor_en'], 'string', 'max' => 255],
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
            'img' => 'Img',
            'kimga_biriktirilgan_uz' => 'Kimga Biriktirilgan Uz',
            'kimga_biriktirilgan_ru' => 'Kimga Biriktirilgan Ru',
            'kimga_biriktirilgan_en' => 'Kimga Biriktirilgan En',
            'tel' => 'Tel',
            'email' => 'Email',
            'fax' => 'Fax',
            'manzil_uz' => 'Manzil Uz',
            'manzil_ru' => 'Manzil Ru',
            'manzil_en' => 'Manzil En',
            'sektor_uz' => 'Sektor Uz',
            'sektor_ru' => 'Sektor Ru',
            'sektor_en' => 'Sektor En',
            'maktab_tarixi_uz' => 'Maktab Tarixi Uz',
            'maktab_tarixi_ru' => 'Maktab Tarixi Ru',
            'maktab_tarixi_en' => 'Maktab Tarixi En',
            'maktab_teacher_uz' => 'Maktab Teacher Uz',
            'maktab_teacher_ru' => 'Maktab Teacher Ru',
            'maktab_teacher_en' => 'Maktab Teacher En',
            'maktab_pupil_uz' => 'Maktab Pupil Uz',
            'maktab_pupil_ru' => 'Maktab Pupil Ru',
            'maktab_pupil_en' => 'Maktab Pupil En',
            'maktab_pasporti_uz' => 'Maktab Pasporti Uz',
            'maktab_togaraklar_uz' => 'Maktab Togaraklar Uz',
            'maktab_togaraklar_ru' => 'Maktab Togaraklar Ru',
            'maktab_togaraklar_en' => 'Maktab Togaraklar En',
            'maktab_pasporti_ru' => 'Maktab Pasporti Ru',
            'maktab_pasporti_en' => 'Maktab Pasporti En',
            'maktab_info_menu_sub_id' => 'Maktab Info Menu Sub ID',
        ];
    }
}
