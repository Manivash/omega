<?php

use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\MstCustomers */
?>
<div class="mst-customers-view">
 
    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'id',
            'customer_name',
            'customer_address',
            'city',
            'state',
            'customer_mobile',
            'status',
//            'is_deleted',
//            'created_by',
//            'created_date',
//            'modified_by',
//            'modified_date',
        ],
    ]) ?>

</div>
