<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "intensive_morbidity_rate".
 *
 * @property int $id
 * @property int $number_week
 * @property int|null $year_of_morbidity
 *
 * @property NumberOfCases $yearOfMorbidity
 */
class IntensiveMorbidityRate extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'intensive_morbidity_rate';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['number_week'], 'required'],
            [['number_week', 'year_of_morbidity'], 'integer'],
            [['year_of_morbidity'], 'exist', 'skipOnError' => true, 'targetClass' => NumberOfCases::class, 'targetAttribute' => ['year_of_morbidity' => 'id']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'number_week' => 'Number Week',
            'year_of_morbidity' => 'Year Of Morbidity',
        ];
    }

    /**
     * Gets query for [[YearOfMorbidity]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getYearOfMorbidity()
    {
        return $this->hasOne(NumberOfCases::class, ['id' => 'year_of_morbidity']);
    }
}
