<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\ArticleSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="article-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'id') ?>

    <?= $form->field($model, 'author') ?>

    <?= $form->field($model, 'category') ?>

    <?= $form->field($model, 'heading') ?>

    <?= $form->field($model, 'text') ?>

    <?php // echo $form->field($model, 'date') ?>

    <?php // echo $form->field($model, 'verified') ?>

    <?php // echo $form->field($model, 'image') ?>

    <?php // echo $form->field($model, 'likes') ?>

    <?php // echo $form->field($model, 'dislikes') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-outline-secondary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
