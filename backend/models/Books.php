<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "books".
 *
 * @property int $id
 * @property string $name_uz
 * @property string $name_ru
 * @property string $name_en
 * @property string $chop_etilgan_joy_uz
 * @property string $chop_etilgan_joy_ru
 * @property string $chop_etilgan_joy_en
 * @property string $date
 * @property int $book_fak_staff_id
 * @property int $number
 *
 * @property FakultetStaff $bookFakStaff
 */
class Books extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'books';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['name_uz', 'name_ru', 'name_en', 'chop_etilgan_joy_uz', 'chop_etilgan_joy_ru', 'chop_etilgan_joy_en', 'date', 'book_fak_staff_id', 'number'], 'required'],
            [['book_fak_staff_id', 'number'], 'integer'],
            [['name_uz', 'name_ru', 'name_en', 'chop_etilgan_joy_uz', 'chop_etilgan_joy_ru', 'chop_etilgan_joy_en', 'date'], 'string', 'max' => 255],
            [['book_fak_staff_id'], 'exist', 'skipOnError' => true, 'targetClass' => FakultetStaff::className(), 'targetAttribute' => ['book_fak_staff_id' => 'id']],
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
            'chop_etilgan_joy_uz' => 'Chop Etilgan Joy Uz',
            'chop_etilgan_joy_ru' => 'Chop Etilgan Joy Ru',
            'chop_etilgan_joy_en' => 'Chop Etilgan Joy En',
            'date' => 'Date',
            'book_fak_staff_id' => 'Book Fak Staff ID',
            'number' => 'Number',
        ];
    }

    /**
     * Gets query for [[BookFakStaff]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getBookFakStaff()
    {
        return $this->hasOne(FakultetStaff::className(), ['id' => 'book_fak_staff_id']);
    }
}
