<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace common\components;

use Yii;

/**
 * Description of User
 *
 * @author tsoydi
 */
class User extends \yii\web\User {
    public function getUsername() {
        return \Yii::$app->user->identity->username;
    }

}
