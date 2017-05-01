<?php

namespace app\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\MstTests;

/**
 * MstTestSearch represents the model behind the search form about `app\models\MstTests`.
 */
class MstTestSearch extends MstTests
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id', 'mst_department_id', 'mst_product_id', 'test_order', 'status', 'is_deleted', 'created_by', 'modified_by'], 'integer'],
            [['test_name', 'created_date', 'modified_date'], 'safe'],
            [['tat_hr'], 'number'],
        ];
    }

    /**
     * @inheritdoc
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
        $query = MstTests::find();

        $dataProvider = new ActiveDataProvider([
            'query' => $query,
        ]);

        $this->load($params);

        if (!$this->validate()) {
            // uncomment the following line if you do not want to return any records when validation fails
            // $query->where('0=1');
            return $dataProvider;
        }

        $query->andFilterWhere([
            'id' => $this->id,
            'mst_department_id' => $this->mst_department_id,
            'mst_product_id' => $this->mst_product_id,
            'tat_hr' => $this->tat_hr,
            'test_order' => $this->test_order,
            'status' => $this->status,
            'is_deleted' => $this->is_deleted,
            'created_by' => $this->created_by,
            'created_date' => $this->created_date,
            'modified_by' => $this->modified_by,
            'modified_date' => $this->modified_date,
        ]);

        $query->andFilterWhere(['like', 'test_name', $this->test_name]);

        return $dataProvider;
    }
}
