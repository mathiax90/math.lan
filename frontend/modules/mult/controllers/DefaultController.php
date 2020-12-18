<?php

namespace frontend\modules\mult\controllers;

use Yii;
use yii\web\Controller;
use frontend\modules\mult\models\Ex1Form;
use frontend\modules\mult\models\Ex1;
use yii\db\Expression;

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
        $model = new Ex1Form();
        //проверка результатов
        if ($model->load(Yii::$app->request->post()) && $model->validate()) {
            $result = $model->Check();
            if (true) {
                // file is uploaded successfully
                return $this->render('ex1result', [
                            'result' => $result,
                ]);
            }
        }
        //  новый запуск
        //delete unclosed
        $user_id = \Yii::$app->user->identity->id;
        $ex1s = Ex1::findAll(['user_id' => $user_id, 'date_end' => null]);
        if (count($ex1s) > 0) {
            foreach ($ex1s as $row) {
                $row->delete();
            }
        }
        //crt new 
        $ex1 = new Ex1();
        $ex1->user_id = $user_id;
        $ex1->date_start = new Expression('NOW()');
        $ex1->save();

        foreach ($model->fieldArray as &$row) {
            $row['order'] = rand(1, 1000);
        }

        foreach ($model->fieldArray as $key => $value) {
            $model->$key = 0;
        }

        return $this->render('ex1', [
                    'model' => $model,
        ]);
    }

}
