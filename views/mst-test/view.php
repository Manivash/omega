<?php

use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\MstTests */
?>
<div class="mst-tests-view">
 
    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'id',
            'mst_department_id',
            'mst_product_id',
            'test_name',
            'tat_hr',
            'test_order',
            'status',
//            'is_deleted',
//            'created_by',
//            'created_date',
//            'modified_by',
//            'modified_date',
        ],
    ]) ?>

</div>
