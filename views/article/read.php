<?php
/* @var $this yii\web\View */
use yii\helpers\Html;
use app\assets\AppAsset;
use app\models\Category;
use app\models\User;

echo yii\helpers\Html::cssFile( "@web/css/full-article.css");
$this->title = $article->heading;
$authorId = $article->author;
$author = User::findOne($authorId);


?>

<div class="full-article">
    <h1 class="article-heading"><?= $article->heading ?></h1>
    <text class="main-text"><?= $article->text ?></text><br>
    <!-- <img class="article-image" src="<?=$article->image ?>" alt="Изображение"><br> -->
</div>
<div class="other">
    <?=$article->likes ?><img class="thumbs" src="../web/pix/thumb-up.png"> / <?=$article->dislikes ?><img class="thumbs" src="../web/pix/thumb-down.png"> /
    <?php 
        $category = Category::findOne($article->category);
        echo $category->name." /";
    ?>
    Автор: <?=$author->username ?> /
    Дата: <?=$article->date ?>
</div>