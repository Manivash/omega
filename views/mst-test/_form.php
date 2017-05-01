<?php
use yii\helpers\Html;
use yii\widgets\ActiveForm;
use yii\helpers\ArrayHelper;
use app\models\MstDepartments;
use app\models\MstProducts;

/* @var $this yii\web\View */
/* @var $model app\models\MstTests */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="mst-tests-form">

    <?php $form = ActiveForm::begin();
    $products = ArrayHelper::map(MstProducts::find()->all(),'id','product_name');
    $department = ArrayHelper::map(MstDepartments::find()->where(['status'=>1])->all(),'id','dept_name');
    ?>

    <?= $form->field($model, 'mst_department_id')->dropDownList($department,['prompt'=>'--select the department--']) ?>

    <?= $form->field($model, 'mst_product_id')->dropDownList($products,['prompt'=>'--select the product--']) ?>

    <?= $form->field($model, 'test_name')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'tat_hr')->textInput() ?>

    <?= $form->field($model, 'test_order')->textInput() ?>

    <?= $form->field($model, 'status')->checkbox() ?>
  
	<?php if (!Yii::$app->request->isAjax){ ?>
	  	<div class="form-group">
	        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
	    </div>
	<?php } ?>

    <?php ActiveForm::end(); ?>
    
</div>
