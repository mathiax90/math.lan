<?php

namespace frontend\modules\mult\controllers;

use Yii;
use yii\web\Controller;
use frontend\modules\mult\models\Ex1;

/**
 * Default controller for the `mult` module
 */
class DefaultController extends Controller
{
    /**
     * Renders the index view for the module
     * @return string
     */
    public function actionIndex()
    {
        return $this->render('index');
    }

    public function actionEx1() {
        $model = new Ex1();
//если пост то пытаемся загрузить файл
        if ($model->load(Yii::$app->request->post()) && $model->validate()) {
                      
            //пытаемся загрузить файл
            
            if (true) {
                // file is uploaded successfully
                return $this->render('ex1', [
                            'model' => $model,
                ]);
            }
        }

        Yii::info("disorder");

        foreach ($model->fieldArray as &$row) {
            $row['order'] = rand(1, 1000);
        }

        return $this->render('ex1', [
                    'model' => $model,
        ]);
    }

}
