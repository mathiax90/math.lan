<?php
/* @var $result frontend\modules\mult\models\Ex1; */
?>
<div>Количество ошибок: <?= $result->error_count ?> из 64</div>
<div>Время выполнения: <?= strtotime($result->date_end) - strtotime($result->date_start) ?> секунд</div>
<?php
foreach ($model->fieldArray as $key => $value) {
    if ($model->$key != $value['answer']) {
        echo '<div>' . $value['num1'] . ' x ' . $value['num2'] . ' = <strike>' . $model->$key . '</strike> ' . $value['answer'] . '</div>';
    }
}
?>
<a href="/mult/default/ex1" class="btn btn-primary">Повторить тест</a>
