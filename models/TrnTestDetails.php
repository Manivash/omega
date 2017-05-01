<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "trn_test_details".
 *
 * @property integer $id
 * @property integer $mst_customer_id
 * @property integer $mst_product_id
 * @property integer $mst_test_id
 * @property integer $mst_sub_test_id
 * @property string $assign_date
 * @property integer $assigned_by
 * @property string $assigned_ip
 * @property string $status
 * @property string $received_date
 * @property integer $received_by
 * @property string $emp_pin
 * @property string $received_ip
 * @property integer $completed_by
 * @property string $completed_date
 * @property string $completed_ip
 * @property boolean $is_need_verification
 * @property integer $test_order
 * @property integer $modified_by
 * @property string $modified_date
 * @property string $modified_ip
 */
class TrnTestDetails extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'trn_test_details';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['mst_customer_id', 'mst_product_id', 'mst_test_id'], 'required'],
            [['mst_customer_id', 'mst_product_id', 'mst_test_id', 'mst_sub_test_id', 'assigned_by', 'received_by', 'completed_by', 'test_order', 'modified_by'], 'integer'],
            [['assign_date', 'received_date', 'completed_date', 'modified_date'], 'safe'],
            [['is_need_verification'], 'boolean'],
            [['assigned_ip', 'emp_pin', 'received_ip', 'completed_ip', 'modified_ip'], 'string', 'max' => 100],
            [['status'], 'string', 'max' => 150],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'mst_customer_id' => 'Mst Customer ID',
            'mst_product_id' => 'Mst Product ID',
            'mst_test_id' => 'Mst Test ID',
            'mst_sub_test_id' => 'Mst Sub Test ID',
            'assign_date' => 'Assign Date',
            'assigned_by' => 'Assigned By',
            'assigned_ip' => 'Assigned Ip',
            'status' => 'Status',
            'received_date' => 'Received Date',
            'received_by' => 'Received By',
            'emp_pin' => 'Emp Pin',
            'received_ip' => 'Received Ip',
            'completed_by' => 'Completed By',
            'completed_date' => 'Completed Date',
            'completed_ip' => 'Completed Ip',
            'is_need_verification' => 'Is Need Verification',
            'test_order' => 'Test Order',
            'modified_by' => 'Modified By',
            'modified_date' => 'Modified Date',
            'modified_ip' => 'Modified Ip',
        ];
    }
}
