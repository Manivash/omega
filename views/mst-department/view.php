<?php

use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\MstDepartments */
?>
<div class="mst-departments-view">
 
    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'id',
            'mst_customer_id',
            'dept_name',
            'dept_short_name',
            'dept_start_date',
            'status',
//            'is_deleted',
//            'created_date',
//            'created_by',
//            'modified_date',
//            'modified_by',
        ],
    ]) ?>

</div>
