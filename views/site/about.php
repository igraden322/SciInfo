<?php

/* @var $this yii\web\View */

use yii\helpers\Html;

$this->title = 'About';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="site-about">
    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        Правила написания статей:
    </p>
    <p>
        1. Вы должны быть авторизованы.
    </p>

    <code><?= __FILE__ ?></code>
</div>
