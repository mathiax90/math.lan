<?php
/* @var $this \yii\web\View */
/* @var $content string */

use yii\helpers\Html;
use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;
use yii\widgets\Breadcrumbs;
use frontend\assets\AppAsset;
use common\widgets\Alert;
use slavkovrn\dynatreemenu\DynaTreeMenuWidget;
use yii\helpers\ArrayHelper;
use kartik\sidenav\SideNav;
use yii\web\Controller;

$session = Yii::$app->session;
if (!isset($session['menu_items']) and $session->isActive) {
    Yii::$app->user->logout();
    return Yii::$app->response->redirect(['site/login']);
}
AppAsset::register($this);
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">
<head>
    <meta charset="<?= Yii::$app->charset ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?php $this->registerCsrfMetaTags() ?>
    <title><?= Html::encode($this->title) ?></title>
    <?php $this->head() ?>
</head>
<body>
    <?php $this->beginBody() ?>
    <div class="wrap">        
        <nav class="navbar navbar-inverse navbar-fixed-top">
                <div class="container-fluid">
                    <!-- Brand and toggle get grouped for better mobile display -->

                    <div class="navbar-header">
                        <div class="btn btn-lg sidenav-open-btn" onclick="toggleNav()" ><span class="glyphicon glyphicon-menu-hamburger" aria-hidden="true"></span></div>
                        <a class="navbar-brand" href="#">Brand</a>
                    </div>
                    <!-- Collect the nav links, forms, and other content for toggling -->
                </div><!-- /.container-fluid -->
            </nav>
            <div id="wrapper">
                <div id="mySidenav" class="sidenav">
                    <?php
                    echo SideNav::widget([
                        'type' => SideNav::TYPE_PRIMARY,
//                        'heading' => 'Меню',
                        'items' => (!Yii::$app->user->isGuest) ? $session['menu_items'] : [],
                    ]);
                    ?>
                </div>
                <div id="page-content-wrapper">
                    <div class="container-fluid" id="main">
                        <?php
                            echo Breadcrumbs::widget([
                            'links' => isset($this->params['breadcrumbs']) ? $this->params['breadcrumbs'] : [],
                        ]);
                        ?>
                        <?= Alert::widget() ?>
                        <?= $content ?>
                    </div>
                </div>
            </div>        
    </div>
    <?php $this->endBody() ?>
    </body>
</html>
<?php $this->endPage() ?>
