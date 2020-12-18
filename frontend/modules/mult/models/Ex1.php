<?php

namespace frontend\modules\mult\models;

use Yii;

/**
 * This is the model class for table "ex1".
 *
 * @property int $ex1_id
 * @property int $user_id
 * @property string $date_start
 * @property string $date_end
 * @property int|null $error_count
 */
class Ex1 extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'ex1';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['user_id', 'date_start'], 'required'],
            [['user_id', 'error_count'], 'integer'],
            [['date_start', 'date_end'], 'safe'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'ex1_id' => 'Ex1 ID',
            'user_id' => 'User ID',
            'date_start' => 'Date Start',
            'date_end' => 'Date End',
            'error_count' => 'Error Count',
        ];
    }
}
