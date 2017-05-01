<?php
use yii\helpers\Url;
use yii\bootstrap\Html;

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
//    [
//        'class'=>'\kartik\grid\DataColumn',
//        'attribute'=>'mst_institution_id',
//    ],
    [
        'class'=>'\kartik\grid\DataColumn',
        'attribute'=>'user_type',
    ],
//    [
//        'class'=>'\kartik\grid\DataColumn',
//        'attribute'=>'userref_id',
//    ],
    [
        'class'=>'\kartik\grid\DataColumn',
        'attribute'=>'username',
    ],
//    [
//        'class'=>'\kartik\grid\DataColumn',
//        'attribute'=>'password',
//    ],
     [
         'class'=>'\kartik\grid\DataColumn',
         'attribute'=>'displayname',
     ],
    // [
        // 'class'=>'\kartik\grid\DataColumn',
        // 'attribute'=>'is_common_user',
    // ],
     [
         'class'=>'\kartik\grid\DataColumn',
         'attribute'=>'status',
         'filter' => array('1' => 'Active', '0' => 'InActive'),
         'format' => 'html',
         'hAlign' => 'center',
         'vAlign' => 'center',
         'value' => function ($model, $key, $index, $column) {
             switch ($model->status) {
                 case 0:
                     return Html::tag('span', '', ['class' => 'glyphicon glyphicon-minus text-danger  kv-align-center kh-align-middle']);
                     break;
                 case 1:
                     return Html::tag('span', '', ['class' => 'glyphicon glyphicon-ok kv-align-center kv-align-middle text-success']);
                     break;
                 default:
                     return Html::tag('span', '', ['class' => 'glyphicon glyphicon-remove red  kv-align-center kv-align-middle text-warning']);
                     break;
             }
         },
     ],
    // [
        // 'class'=>'\kartik\grid\DataColumn',
        // 'attribute'=>'is_deleted',
    // ],
     [
         'class'=>'\kartik\grid\DataColumn',
         'attribute'=>'created_date',
     ],
    // [
        // 'class'=>'\kartik\grid\DataColumn',
        // 'attribute'=>'created_by',
    // ],
    // [
        // 'class'=>'\kartik\grid\DataColumn',
        // 'attribute'=>'modified_date',
    // ],
    // [
        // 'class'=>'\kartik\grid\DataColumn',
        // 'attribute'=>'modified_by',
    // ],
    // [
        // 'class'=>'\kartik\grid\DataColumn',
        // 'attribute'=>'usr_last_access_ip',
    // ],
    // [
        // 'class'=>'\kartik\grid\DataColumn',
        // 'attribute'=>'usr_last_access',
    // ],
    // [
        // 'class'=>'\kartik\grid\DataColumn',
        // 'attribute'=>'user_email_id',
    // ],
    // [
        // 'class'=>'\kartik\grid\DataColumn',
        // 'attribute'=>'reset_password_token',
    // ],
    // [
        // 'class'=>'\kartik\grid\DataColumn',
        // 'attribute'=>'token_created_at',
    // ],
    // [
        // 'class'=>'\kartik\grid\DataColumn',
        // 'attribute'=>'usr_status',
    // ],
    // [
        // 'class'=>'\kartik\grid\DataColumn',
        // 'attribute'=>'first_visited',
    // ],
    // [
        // 'class'=>'\kartik\grid\DataColumn',
        // 'attribute'=>'second_password',
    // ],
    // [
        // 'class'=>'\kartik\grid\DataColumn',
        // 'attribute'=>'email_confirm_token',
    // ],
    // [
        // 'class'=>'\kartik\grid\DataColumn',
        // 'attribute'=>'is_email_confirm',
    // ],
    // [
        // 'class'=>'\kartik\grid\DataColumn',
        // 'attribute'=>'tmp_password',
    // ],
    // [
        // 'class'=>'\kartik\grid\DataColumn',
        // 'attribute'=>'is_account_activated',
    // ],
    // [
        // 'class'=>'\kartik\grid\DataColumn',
        // 'attribute'=>'is_mail_avail',
    // ],
    // [
        // 'class'=>'\kartik\grid\DataColumn',
        // 'attribute'=>'login_attempt_count',
    // ],
    // [
        // 'class'=>'\kartik\grid\DataColumn',
        // 'attribute'=>'is_account_locked',
    // ],
    // [
        // 'class'=>'\kartik\grid\DataColumn',
        // 'attribute'=>'station_id',
    // ],
    // [
        // 'class'=>'\kartik\grid\DataColumn',
        // 'attribute'=>'mst_feeheading_id',
    // ],
     [
         'class'=>'\kartik\grid\DataColumn',
         'attribute'=>'ext_no',
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