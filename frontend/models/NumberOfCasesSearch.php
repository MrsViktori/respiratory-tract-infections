<?php

namespace app\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\NumberOfCases;

/**
 * NumberOfCasesSearch represents the model behind the search form of `app\models\NumberOfCases`.
 */
class NumberOfCasesSearch extends NumberOfCases
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id', 'number_week', 'number_of_cases_children', 'number_of_cases_adults', 'number_of_cases_elderly'], 'integer'],
            [['date', 'number_of_cases_all'], 'safe'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function scenarios()
    {
        // bypass scenarios() implementation in the parent class
        return Model::scenarios();
    }

    /**
     * Creates data provider instance with search query applied
     *
     * @param array $params
     *
     * @return ActiveDataProvider
     */
    public function search($params)
    {
        $query = NumberOfCases::find();

        // add conditions that should always apply here

        $dataProvider = new ActiveDataProvider([
            'query' => $query,
        ]);

        $this->load($params);

        if (!$this->validate()) {
            // uncomment the following line if you do not want to return any records when validation fails
            // $query->where('0=1');
            return $dataProvider;
        }

        // grid filtering conditions
        $query->andFilterWhere([
            'id' => $this->id,
            'date' => $this->date,
            'number_week' => $this->number_week,
            'number_of_cases_children' => $this->number_of_cases_children,
            'number_of_cases_adults' => $this->number_of_cases_adults,
            'number_of_cases_elderly' => $this->number_of_cases_elderly,
        ]);

        $query->andFilterWhere(['like', 'number_of_cases_all', $this->number_of_cases_all]);

        return $dataProvider;
    }
}
