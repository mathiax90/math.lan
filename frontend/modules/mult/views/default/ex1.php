<?php
/* @var $this yii\web\View */

use yii\bootstrap\ActiveForm;
use yii\helpers\Html;

$this->title = "Таблица умножения";
?>

<div class="Reports-default-index">
    <div class="row" style="padding: 10px 10px 0px 10px;">
        <h1><?= Html::encode($this->title) ?><a class="btn btn-primary btn-xs" role="button" data-toggle="collapse" href="#collapseExample" style="margin-left:5px;" aria-expanded="false" aria-controls="collapseExample">
                Подробно
            </a></h1>
        <div class="collapse" id="collapseExample">
            <div class="well">
                Галочка удалить прежние данные используется при полной перезагрузке протколов. Когда загружаете протокол ВМП, эту галку лучше отключить, чтобы видеть ранее загруженные ошибки неВМП и загружаемые ошибки ВМП вместе.<br />
            </div>



        </div>


        <?php
        $form = ActiveForm::begin(['id' => 'report1-form',
                    'layout' => 'horizontal',
                    'fieldConfig' => [
                        'template' => "{label}\n{beginWrapper}\n{input}\n{hint}\n{error}\n{endWrapper}",
                        'horizontalCssClasses' => [
                            'label' => 'col-sm-1',
                            'offset' => 'col-sm-offset-1',
                            'wrapper' => 'col-sm-8',
                            'error' => '',
                            'hint' => '',
                        ],
                    ],
                    'options' => [
                        'style' => 'padding-left:10px; text-align: left;',
            ],
        ]);
        ?>
        <?php
        $order = array_column($model->fieldArray, 'order');
        array_multisort($order, SORT_DESC, $model->fieldArray);
        
        foreach ($model->fieldArray as $fieldName => $fieldDetail) {
            echo $form->field($model, $fieldName)->textInput(['style' => 'width:100px']);
        }
        ?>
        <?php //echo $form->field($model, 'p22')->textInput(['style' => 'width:100px']); ?>
        <?= Html::submitButton('Завершить', ['class' => 'btn btn-danger', 'name' => 'upload']) ?>
        <?php
        ActiveForm::end();
        if (isset($result)) {
            if ($result) {
                echo "<pre>";
                if (isset($log_id)) {
                    echo "ID записи журнала: " . $log_id . "<br />";
                }
                echo (print_r($errors, true));
                echo "</pre>";
            } else {
                echo "Ошибка валидации.";
            }
        }
        ?>
    </div>
</div>
