<?php
/* @var $this yii\web\View */
use yii\helpers\Html;

?>
<h1>Новости SciInfo</h1>
<div class="news">
    <?php foreach ($text as $item):
        if($item['verified'] == 1){

        ?>
        <div class="news-block" style="background-image: url(../web/pix/background.jpg);">
            <a href="index.php?r=article%2Fread&id=<?=$item['id'];?>" class="text">
            <h2><?= $item['heading']; ?></h2>
            <?php 
                $shortText = mb_substr($item['text'], 0, 34);
            ?>
            <h4><?= $shortText."..." ?></h4>
            <img src="../web/pix/thumb-up.png" alt=""> <?= $item['likes'];?><img src="../web/pix/thumb-down.png" alt=""> <?php echo $item['dislikes'];?></text>
            </a>
        </div>
        <?php
        }
    endforeach ?>
</div>
