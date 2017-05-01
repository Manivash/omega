<?php

namespace app\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\MstDepartments;

/**
 * MstDepartmentSearch represents the model behind the search form about `app\models\MstDepartments`.
 */
class MstDepartmentSearch extends MstDepartments
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id', 'mst_customer_id', 'status', 'is_deleted', 'created_by', 'modified_by'], 'integer'],
            [['dept_name', 'dept_short_name', 'dept_start_date', 'created_date', 'modified_date'], 'safe'],
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
        $query = MstDepartments::find();

        $dataProvider = new ActiveDataProvider([
            'query' => $query,
            'sort'=> ['defaultOrder' => ['dept_name'=>SORT_ASC]]
        ]);

        $this->load($params);

        if (!$this->validate()) {
            // uncomment the following line if you do not want to return any records when validation fails
            // $query->where('0=1');
            return $dataProvider;
        }

        $query->andFilterWhere([
            'id' => $this->id,
            'mst_customer_id' => $this->mst_customer_id,
            'dept_start_date' => $this->dept_start_date,
            'dept_start_date' => $this->dept_start_date,
            'status' => $this->status,
            'is_deleted' => $this->is_deleted,
            'created_date' => $this->created_date,
            'created_by' => $this->created_by,
            'modified_date' => $this->modified_date,
            'modified_by' => $this->modified_by,
        ]);

        $query->andFilterWhere(['like', 'lower(dept_name)', strtolower($this->dept_name)])
            ->andFilterWhere(['like', 'lower(dept_short_name)', strtolower($this->dept_short_name)]);

        return $dataProvider;
    }
}
