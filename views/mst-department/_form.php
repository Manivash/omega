<?php
use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\MstDepartments */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="mst-departments-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'mst_customer_id')->textInput() ?>

    <?= $form->field($model, 'dept_name')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'dept_short_name')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'dept_start_date')->textInput() ?>

    <?= $form->field($model, 'status')->checkbox() ?>

	<?php if (!Yii::$app->request->isAjax){ ?>
	  	<div class="form-group">
	        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
	    </div>
	<?php } ?>

    <?php ActiveForm::end(); ?>
    
</div>
