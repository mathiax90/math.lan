<?php
/* @var $result frontend\modules\mult\models\Ex1; */
?>
<div>Количество ошибок: <?= $result->error_count ?> из 64</div>
<div>Время выполнения: <?= strtotime($result->date_end) - strtotime($result->date_start) ?> секунд</div>
<a href="/mult/default/ex1" class="btn btn-primary">Повторить тест</a>
