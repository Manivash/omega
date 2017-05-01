<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "mst_products".
 *
 * @property integer $id
 * @property integer $mst_customer_id
 * @property string $product_name
 * @property string $product_desc
 */
class MstProducts extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'mst_products';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['mst_customer_id', 'product_name'], 'required'],
            [['mst_customer_id'], 'integer'],
            [['product_name'], 'string', 'max' => 150],
            [['product_desc'], 'string', 'max' => 300],
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
            'product_name' => 'Product Name',
            'product_desc' => 'Product Desc',
        ];
    }


    public function getCustomer()
    {
        return $this->hasOne(MstCustomers::className(), ['id' => 'mst_customer_id']);
    }
}
