<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace frontend\modules\mult\models;

use yii\base\Model;
use Yii;


class Ex1 extends Model {

    public $p22;
    public $p23;
    public $p24;
    public $p25;
    public $p26;
    public $p27;
    public $p28;
    public $p29;
    public $p32;
    public $p33;
    public $p34;
    public $p35;
    public $p36;
    public $p37;
    public $p38;
    public $p39;
    public $p42;
    public $p43;
    public $p44;
    public $p45;
    public $p46;
    public $p47;
    public $p48;
    public $p49;
    public $p52;
    public $p53;
    public $p54;
    public $p55;
    public $p56;
    public $p57;
    public $p58;
    public $p59;
    public $p62;
    public $p63;
    public $p64;
    public $p65;
    public $p66;
    public $p67;
    public $p68;
    public $p69;
    public $p72;
    public $p73;
    public $p74;
    public $p75;
    public $p76;
    public $p77;
    public $p78;
    public $p79;
    public $p82;
    public $p83;
    public $p84;
    public $p85;
    public $p86;
    public $p87;
    public $p88;
    public $p89;
    public $p92;
    public $p93;
    public $p94;
    public $p95;
    public $p96;
    public $p97;
    public $p98;
    public $p99;

    public function rules() {
        return [
            [['p22', 'p23', 'p24', 'p25', 'p26', 'p27', 'p28', 'p29', 'p32', 'p33', 'p34', 'p35', 'p36', 'p37', 'p38', 'p39', 'p42', 'p43', 'p44', 'p45', 'p46', 'p47', 'p48', 'p49', 'p52', 'p53', 'p54', 'p55', 'p56', 'p57', 'p58', 'p59', 'p62', 'p63', 'p64', 'p65', 'p66', 'p67', 'p68', 'p69', 'p72', 'p73', 'p74', 'p75', 'p76', 'p77', 'p78', 'p79', 'p82', 'p83', 'p84', 'p85', 'p86', 'p87', 'p88', 'p89', 'p92', 'p93', 'p94', 'p95', 'p96', 'p97', 'p98', 'p99'], 'integer'],
            [['p22', 'p23', 'p24', 'p25', 'p26', 'p27', 'p28', 'p29', 'p32', 'p33', 'p34', 'p35', 'p36', 'p37', 'p38', 'p39', 'p42', 'p43', 'p44', 'p45', 'p46', 'p47', 'p48', 'p49', 'p52', 'p53', 'p54', 'p55', 'p56', 'p57', 'p58', 'p59', 'p62', 'p63', 'p64', 'p65', 'p66', 'p67', 'p68', 'p69', 'p72', 'p73', 'p74', 'p75', 'p76', 'p77', 'p78', 'p79', 'p82', 'p83', 'p84', 'p85', 'p86', 'p87', 'p88', 'p89', 'p92', 'p93', 'p94', 'p95', 'p96', 'p97', 'p98', 'p99'], 'required'],
        ];
    }

    public function attributeLabels() {
        $labels = [];
        foreach ($this->fieldArray as $fieldName => $fieldDetail) {
            $labels[$fieldName] = $fieldDetail["num1"] . " x " . $fieldDetail["num2"] . " = ";
        }

        return $labels;
    }



    public function getData() {
        
    }

    public $fieldArray = [
        'p22' => ['order' => 0, "answer" => 4, "user_answer" => 0, "num1" => 2, "num2" => 2],
        'p23' => ['order' => 0, "answer" => 6, "user_answer" => 0, "num1" => 2, "num2" => 3],
        'p24' => ['order' => 0, "answer" => 8, "user_answer" => 0, "num1" => 2, "num2" => 4],
        'p25' => ['order' => 0, "answer" => 10, "user_answer" => 0, "num1" => 2, "num2" => 5],
        'p26' => ['order' => 0, "answer" => 12, "user_answer" => 0, "num1" => 2, "num2" => 6],
        'p27' => ['order' => 0, "answer" => 14, "user_answer" => 0, "num1" => 2, "num2" => 7],
        'p28' => ['order' => 0, "answer" => 16, "user_answer" => 0, "num1" => 2, "num2" => 8],
        'p29' => ['order' => 0, "answer" => 18, "user_answer" => 0, "num1" => 2, "num2" => 9],
        'p32' => ['order' => 0, "answer" => 6, "user_answer" => 0, "num1" => 3, "num2" => 2],
        'p33' => ['order' => 0, "answer" => 9, "user_answer" => 0, "num1" => 3, "num2" => 3],
        'p34' => ['order' => 0, "answer" => 12, "user_answer" => 0, "num1" => 3, "num2" => 4],
        'p35' => ['order' => 0, "answer" => 15, "user_answer" => 0, "num1" => 3, "num2" => 5],
        'p36' => ['order' => 0, "answer" => 18, "user_answer" => 0, "num1" => 3, "num2" => 6],
        'p37' => ['order' => 0, "answer" => 21, "user_answer" => 0, "num1" => 3, "num2" => 7],
        'p38' => ['order' => 0, "answer" => 24, "user_answer" => 0, "num1" => 3, "num2" => 8],
        'p39' => ['order' => 0, "answer" => 27, "user_answer" => 0, "num1" => 3, "num2" => 9],
        'p42' => ['order' => 0, "answer" => 8, "user_answer" => 0, "num1" => 4, "num2" => 2],
        'p43' => ['order' => 0, "answer" => 12, "user_answer" => 0, "num1" => 4, "num2" => 3],
        'p44' => ['order' => 0, "answer" => 16, "user_answer" => 0, "num1" => 4, "num2" => 4],
        'p45' => ['order' => 0, "answer" => 20, "user_answer" => 0, "num1" => 4, "num2" => 5],
        'p46' => ['order' => 0, "answer" => 24, "user_answer" => 0, "num1" => 4, "num2" => 6],
        'p47' => ['order' => 0, "answer" => 28, "user_answer" => 0, "num1" => 4, "num2" => 7],
        'p48' => ['order' => 0, "answer" => 32, "user_answer" => 0, "num1" => 4, "num2" => 8],
        'p49' => ['order' => 0, "answer" => 36, "user_answer" => 0, "num1" => 4, "num2" => 9],
        'p52' => ['order' => 0, "answer" => 10, "user_answer" => 0, "num1" => 5, "num2" => 2],
        'p53' => ['order' => 0, "answer" => 15, "user_answer" => 0, "num1" => 5, "num2" => 3],
        'p54' => ['order' => 0, "answer" => 20, "user_answer" => 0, "num1" => 5, "num2" => 4],
        'p55' => ['order' => 0, "answer" => 25, "user_answer" => 0, "num1" => 5, "num2" => 5],
        'p56' => ['order' => 0, "answer" => 30, "user_answer" => 0, "num1" => 5, "num2" => 6],
        'p57' => ['order' => 0, "answer" => 35, "user_answer" => 0, "num1" => 5, "num2" => 7],
        'p58' => ['order' => 0, "answer" => 40, "user_answer" => 0, "num1" => 5, "num2" => 8],
        'p59' => ['order' => 0, "answer" => 45, "user_answer" => 0, "num1" => 5, "num2" => 9],
        'p62' => ['order' => 0, "answer" => 12, "user_answer" => 0, "num1" => 6, "num2" => 2],
        'p63' => ['order' => 0, "answer" => 18, "user_answer" => 0, "num1" => 6, "num2" => 3],
        'p64' => ['order' => 0, "answer" => 24, "user_answer" => 0, "num1" => 6, "num2" => 4],
        'p65' => ['order' => 0, "answer" => 30, "user_answer" => 0, "num1" => 6, "num2" => 5],
        'p66' => ['order' => 0, "answer" => 36, "user_answer" => 0, "num1" => 6, "num2" => 6],
        'p67' => ['order' => 0, "answer" => 42, "user_answer" => 0, "num1" => 6, "num2" => 7],
        'p68' => ['order' => 0, "answer" => 48, "user_answer" => 0, "num1" => 6, "num2" => 8],
        'p69' => ['order' => 0, "answer" => 54, "user_answer" => 0, "num1" => 6, "num2" => 9],
        'p72' => ['order' => 0, "answer" => 14, "user_answer" => 0, "num1" => 7, "num2" => 2],
        'p73' => ['order' => 0, "answer" => 21, "user_answer" => 0, "num1" => 7, "num2" => 3],
        'p74' => ['order' => 0, "answer" => 28, "user_answer" => 0, "num1" => 7, "num2" => 4],
        'p75' => ['order' => 0, "answer" => 35, "user_answer" => 0, "num1" => 7, "num2" => 5],
        'p76' => ['order' => 0, "answer" => 42, "user_answer" => 0, "num1" => 7, "num2" => 6],
        'p77' => ['order' => 0, "answer" => 49, "user_answer" => 0, "num1" => 7, "num2" => 7],
        'p78' => ['order' => 0, "answer" => 56, "user_answer" => 0, "num1" => 7, "num2" => 8],
        'p79' => ['order' => 0, "answer" => 63, "user_answer" => 0, "num1" => 7, "num2" => 9],
        'p82' => ['order' => 0, "answer" => 16, "user_answer" => 0, "num1" => 8, "num2" => 2],
        'p83' => ['order' => 0, "answer" => 24, "user_answer" => 0, "num1" => 8, "num2" => 3],
        'p84' => ['order' => 0, "answer" => 32, "user_answer" => 0, "num1" => 8, "num2" => 4],
        'p85' => ['order' => 0, "answer" => 40, "user_answer" => 0, "num1" => 8, "num2" => 5],
        'p86' => ['order' => 0, "answer" => 48, "user_answer" => 0, "num1" => 8, "num2" => 6],
        'p87' => ['order' => 0, "answer" => 56, "user_answer" => 0, "num1" => 8, "num2" => 7],
        'p88' => ['order' => 0, "answer" => 64, "user_answer" => 0, "num1" => 8, "num2" => 8],
        'p89' => ['order' => 0, "answer" => 72, "user_answer" => 0, "num1" => 8, "num2" => 9],
        'p92' => ['order' => 0, "answer" => 18, "user_answer" => 0, "num1" => 9, "num2" => 2],
        'p93' => ['order' => 0, "answer" => 27, "user_answer" => 0, "num1" => 9, "num2" => 3],
        'p94' => ['order' => 0, "answer" => 36, "user_answer" => 0, "num1" => 9, "num2" => 4],
        'p95' => ['order' => 0, "answer" => 45, "user_answer" => 0, "num1" => 9, "num2" => 5],
        'p96' => ['order' => 0, "answer" => 54, "user_answer" => 0, "num1" => 9, "num2" => 6],
        'p97' => ['order' => 0, "answer" => 63, "user_answer" => 0, "num1" => 9, "num2" => 7],
        'p98' => ['order' => 0, "answer" => 72, "user_answer" => 0, "num1" => 9, "num2" => 8],
        'p99' => ['order' => 0, "answer" => 81, "user_answer" => 0, "num1" => 9, "num2" => 9],
    ];

}
