<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "mst_sub_tests".
 *
 * @property integer $id
 * @property integer $mst_test_id
 * @property string $sub_test_name
 * @property integer $sub_test_order
 * @property integer $status
 * @property integer $is_deleted
 * @property integer $created_by
 * @property string $created_date
 * @property integer $modified_by
 * @property string $modified_date
 */
class MstSubTests extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'mst_sub_tests';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['mst_test_id', 'sub_test_order', 'status', 'is_deleted', 'created_by', 'modified_by'], 'integer'],
            [['created_date', 'modified_date'], 'safe'],
            [['sub_test_name'], 'string', 'max' => 200],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'mst_test_id' => 'Mst Test ID',
            'sub_test_name' => 'Sub Test Name',
            'sub_test_order' => 'Sub Test Order',
            'status' => 'Status',
            'is_deleted' => 'Is Deleted',
            'created_by' => 'Created By',
            'created_date' => 'Created Date',
            'modified_by' => 'Modified By',
            'modified_date' => 'Modified Date',
        ];
    }

    function GetTest() {
        return $this->hasOne(MstTests::className(), ['id' => 'mst_test_id']);
    }
}
