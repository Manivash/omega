<?php
use yii\bootstrap\Html;
use yii\helpers\ArrayHelper;
use app\models\MstCustomers;
use app\models\MstProducts;
use kartik\widgets\DepDrop;
use yii\helpers\Url;
/**
 * Created by PhpStorm.
 * User: MuraliDharan
 * Date: 30/04/2017
 * Time: 11:54 PM
 */

$this->title = 'Customer Entry';

$customers = ArrayHelper::map(MstCustomers::find()->where(['status'=>1])->all(),'id','customer_name');
$products = ArrayHelper::map(MstProducts::find()->where([])->all(),'id','product_name');
$form= \kartik\widgets\ActiveForm::begin();
?>
<div class="form-group">
    <label >Customer</label>
    <?=Html::dropDownList('mst_customer_id','',$customers,['class'=>'form-control'])?>
</div>

<div class="form-group">
    <label >Product</label>
    <?php echo $form->field($model, 'mst_product_id')->dropDownList($products, ['id'=>'mst_product_id','prompt'=>'--Select the Product--']);?>
</div>

<div class="form-group">
    <label >Test</label>
    <?php echo $form->field($model, 'mst_test_id')->widget(DepDrop::classname(), [
        'type'=>DepDrop::TYPE_SELECT2,
        'options'=>['id'=>'mst_test_id', 'placeholder'=>'Select ...'],
        'select2Options'=>['pluginOptions'=>['allowClear'=>true]],
        'pluginOptions'=>[
            'depends'=>['mst_product_id'],
            'url'=>Url::to(['/trn-customer/get-test']),
//            'params'=>['input-type-1', 'input-type-2']
        ]
    ]); ?>
</div>

<?php
$form->end();
?>