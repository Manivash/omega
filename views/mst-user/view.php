<?php

use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\MstUser */
?>
<div class="mst-user-view">
 
    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'id',
//            'mst_institution_id',
            'user_type',
//            'userref_id',
            'username',
//            'password',
            'displayname',
//            'is_common_user',
            'status',
//            'is_deleted',
            'created_date',
//            'created_by',
//            'modified_date',
//            'modified_by',
//            'usr_last_access_ip',
//            'usr_last_access',
            'user_email_id:email',
//            'reset_password_token:ntext',
//            'token_created_at',
//            'usr_status',
//            'first_visited',
//            'second_password',
//            'email_confirm_token:ntext',
//            'is_email_confirm:email',
//            'tmp_password',
//            'is_account_activated',
//            'is_mail_avail',
//            'login_attempt_count',
//            'is_account_locked',
//            'station_id',
//            'mst_feeheading_id',
            'ext_no',
        ],
    ]) ?>

</div>
