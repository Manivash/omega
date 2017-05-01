<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "mst_tests".
 *
 * @property integer $id
 * @property integer $mst_department_id
 * @property integer $mst_product_id
 * @property string $test_name
 * @property string $tat_hr
 * @property integer $test_order
 * @property integer $status
 * @property integer $is_deleted
 * @property integer $created_by
 * @property string $created_date
 * @property integer $modified_by
 * @property string $modified_date
 */
class MstTests extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'mst_tests';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['mst_department_id', 'mst_product_id'], 'required'],
            [['mst_department_id', 'mst_product_id', 'test_order', 'status', 'is_deleted', 'created_by', 'modified_by'], 'integer'],
            [['tat_hr'], 'number'],
            [['created_date', 'modified_date'], 'safe'],
            [['test_name'], 'string', 'max' => 150],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'mst_department_id' => 'Mst Department ID',
            'mst_product_id' => 'Mst Product ID',
            'test_name' => 'Test Name',
            'tat_hr' => 'Tat Hr',
            'test_order' => 'Test Order',
            'status' => 'Status',
            'is_deleted' => 'Is Deleted',
            'created_by' => 'Created By',
            'created_date' => 'Created Date',
            'modified_by' => 'Modified By',
            'modified_date' => 'Modified Date',
        ];
    }

    public function getDepartment()
    {
        return $this->hasOne(MstDepartments::className(), ['id' => 'mst_department_id']);
    }

    public function getProduct()
    {
        return $this->hasOne(MstProducts::className(), ['id' => 'mst_product_id']);
    }
}
