<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use yii\helpers\ArrayHelper;
use app\models\Category;
use app\models\User;
use app\models\CategorySearch;

/* @var $this yii\web\View */
/* @var $model app\models\Article */
/* @var $form yii\widgets\ActiveForm */

$id = $model['author'];
?>
<div class="article-form">
    
    <?php $form = ActiveForm::begin(); ?>

    <?php if(isset($model['author'])){
        $form->field($model, 'author')->hiddenInput(['autofocuse' => true])->label(false);
    }else{
        $form->field($model, 'author')->hiddenInput(['value' => $id, 'autofocuse' => true])->label(false);
    }?>

    <?= $form->field($model, 'author')->hiddenInput(['value' => $id, 'autofocuse' => true])->label(false) ?>

    <?= $form->field($model, 'category')->dropDownList(ArrayHelper::map(Category::find()->all(), 'id', 'name')) ?>

    <?= $form->field($model, 'heading')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'text')->textarea(['rows' => 20]) ?>

    <?php if(isset($model['date'])){
        $form->field($model, 'date')->textInput();
    }else{
        $form->field($model, 'date')->textInput(['value' => date("Y-m-d")]);
    }?>

    <?= $form->field($model, 'verified')->hiddenInput([ 'value' => 0])->label(false) ?>

    <?= $form->field($model, 'image')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton('Отправить', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
