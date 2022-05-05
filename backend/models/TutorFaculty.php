<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "tutor_faculty".
 *
 * @property int $id
 * @property string $faculty_name_uz
 * @property string $faculty_name_ru
 * @property string $faculty_name_en
 *
 * @property TutorInfo[] $tutorInfos
 */
class TutorFaculty extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'tutor_faculty';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['faculty_name_uz', 'faculty_name_ru', 'faculty_name_en'], 'required'],
            [['faculty_name_uz', 'faculty_name_ru', 'faculty_name_en'], 'string', 'max' => 255],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'faculty_name_uz' => 'Faculty Name Uz',
            'faculty_name_ru' => 'Faculty Name Ru',
            'faculty_name_en' => 'Faculty Name En',
        ];
    }

    /**
     * Gets query for [[TutorInfos]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getTutorInfos()
    {
        return $this->hasMany(TutorInfo::className(), ['tutor_faculty_id' => 'id']);
    }
}
