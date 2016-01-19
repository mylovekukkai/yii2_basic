<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

use yii\helpers\ArrayHelper;
use kartik\select2\Select2;
/* @var $this yii\web\View */
/* @var $model app\models\Departments */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="departments-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'name')->textInput(['maxlength' => true]) ?>

    <?php //$form->field($model, 'group_id')->textInput() ?>
    <?= $form->field($model, 'group_id')->widget(Select2::classname(),[
        'data'=> ArrayHelper::map(app\models\Groups::find()->all(),'id','name'),
        'language' => 'th',
        'options' => ['placeholder' => 'เลือกกลุ่มงาน ...'],
        'pluginOptions' => [
            'allowClear' => true
        ],
    ]); ?>

    <?php //$form->field($model, 'rate1')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
