<?php
use yii\widgets\ActiveForm;
use yii\helpers\Html;
use yii\grid\GridView;
use yii\data\ArrayDataProvider;

$output = array();
$images = scandir("../images");

for($i=2; $i < count($images); $i++){
    $src = $images[$i];
    array_push($output, $src); 
}
?>

<div class='images'>
    <table>
        <tr>
            <td>
                Наименование
            </td>
            <td>
                Изображение
            </td>
        </tr>
        <?php
        for($i = 0; $i <= count($output) - 1; $i++){
            $name = $output[$i];
            $image = '../images/'.$output[$i];
            echo "
            <tr>
                <td>
                    $name
                </td>
                <td>
                    <img src='$image' alt='Ошибка' width='200px' height='125px'>
                </td>
            </tr>
            ";
        }
        ?>
    </table>
</div>

<?php 
    
    $form = ActiveForm::begin(['options' => ['enctype' => 'multipart/form-data']]) ?>

    <?= $form->field($model, 'imageFile')->fileInput() ?>

    <button>Загрузить</button>
    <?php 

    if ($sending){
        echo "<br> Файл успешно загружен";
        $sending = false;
    }
    
    ?>


<?php ActiveForm::end() ?>