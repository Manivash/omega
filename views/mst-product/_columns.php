<?php
use yii\helpers\Url;
use app\models\MstCustomers;
use yii\helpers\ArrayHelper;

return [
//    [
//        'class' => 'kartik\grid\CheckboxColumn',
//        'width' => '20px',
//    ],
    [
        'class' => 'kartik\grid\SerialColumn',
        'width' => '30px',
    ],
        // [
        // 'class'=>'\kartik\grid\DataColumn',
        // 'attribute'=>'id',
    // ],
    [
        'class'=>'\kartik\grid\DataColumn',
        'attribute'=>'mst_customer_id',
        'value'=>'customer.customer_name',
        'filter'=> ArrayHelper::map(MstCustomers::find()->where(['status'=>1,'is_deleted'=>0])->orderBy('customer_name asc')->all(), 'id', 'customer_name')
    ],
    [
        'class'=>'\kartik\grid\DataColumn',
        'attribute'=>'product_name',
    ],
    [
        'class'=>'\kartik\grid\DataColumn',
        'attribute'=>'product_desc',
    ],
    [
        'class' => 'kartik\grid\ActionColumn',
        'dropdown' => false,
        'vAlign'=>'middle',
        'urlCreator' => function($action, $model, $key, $index) { 
                return Url::to([$action,'id'=>$key]);
        },
        'viewOptions'=>['role'=>'modal-remote','title'=>'View','data-toggle'=>'tooltip'],
        'updateOptions'=>['role'=>'modal-remote','title'=>'Update', 'data-toggle'=>'tooltip'],
        'deleteOptions'=>['role'=>'modal-remote','title'=>'Delete', 
                          'data-confirm'=>false, 'data-method'=>false,// for overide yii data api
                          'data-request-method'=>'post',
                          'data-toggle'=>'tooltip',
                          'data-confirm-title'=>'Are you sure?',
                          'data-confirm-message'=>'Are you sure want to delete this item'], 
    ],

];   