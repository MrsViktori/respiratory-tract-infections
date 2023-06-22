<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "number_of_cases".
 *
 * @property int $id
 * @property string $date
 * @property int $number_week
 * @property int $number_of_cases_children
 * @property int $number_of_cases_adults
 * @property int $number_of_cases_elderly
 * @property string $number_of_cases_all
 *
 * @property IntensiveMorbidityRate[] $intensiveMorbidityRates
 */
class NumberOfCases extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'number_of_cases';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['date', 'number_of_cases_children', 'number_of_cases_adults', 'number_of_cases_elderly', 'number_of_cases_all'], 'required'],
            [['date'], 'safe'],
            [['number_week', 'number_of_cases_children', 'number_of_cases_adults', 'number_of_cases_elderly'], 'integer'],
            [['number_of_cases_all'], 'string', 'max' => 255],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'date' => 'Date',
            'number_week' => 'Number Week',
            'number_of_cases_children' => 'Number Of Cases Children',
            'number_of_cases_adults' => 'Number Of Cases Adults',
            'number_of_cases_elderly' => 'Number Of Cases Elderly',
            'number_of_cases_all' => 'Number Of Cases All',
        ];
    }

    /**
     * Gets query for [[IntensiveMorbidityRates]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getIntensiveMorbidityRates()
    {
        return $this->hasMany(IntensiveMorbidityRate::class, ['year_of_morbidity' => 'id']);
    }

}
