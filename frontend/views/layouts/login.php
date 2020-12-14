<?php
/* @var $this \yii\web\View */
/* @var $content string */

use yii\helpers\Url;
use yii\helpers\Html;
use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;
use yii\widgets\Breadcrumbs;
use frontend\assets\AppAsset;
use common\widgets\Alert;
use slavkovrn\dynatreemenu\DynaTreeMenuWidget;
//use yii\web\View;
use yii\helpers\ArrayHelper;
use kartik\sidenav\SideNav;
use yii\web\Controller;

$session = Yii::$app->session;
AppAsset::register($this);
?>

<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">
    <head>
        <meta charset="<?= Yii::$app->charset ?>">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <?= Html::csrfMetaTags() ?>
        <title><?= Html::encode($this->title) ?></title>
        <?php $this->head() ?>
    </head>
    <body>

        <?php $this->beginBody() ?>

        <div class="wrap">

            <div class="btn btn-lg sidenav-open-btn" onclick="toggleNav()" ><span class="glyphicon glyphicon-menu-hamburger" aria-hidden="true"></span></div>
            <!--old menu here-->


            <?php
            NavBar::begin([
                'brandLabel' => '<img src="' . Yii::getAlias("@web/favicon.png") . '"  class="pull-left"/>Test Your Mighth',
//                'brandUrl' => Yii::$app->homeUrl,
                'innerContainerOptions' => ['class' => 'container-fluid'],
                'options' => [
                    'class' => 'navbar-inverse navbar-fixed-top',
                ],
            ]);
            ?>

            <?php
            if (Yii::$app->user->isGuest) {
//                $menuItems[] = ['label' => 'Signup', 'url' => ['/site/signup']];
                $menuItems[] = ['label' => 'Вход', 'url' => ['/site/login']];
            }
            else {

                //$menuItems = $session['menu_items'];
//                $menuItems[] = '<li class="btn btn-link" onclick="toggleNav()">open</li>';
//                $menuItems[] = ['label' => 'connect', 'url' => ['/site/connect']];
                $menuItems[] = '<li>'
                        . Html::beginForm(['/site/logout'], 'post')
                        . Html::submitButton(
                                'Выйти (' . Yii::$app->user->identity->name . ')', ['class' => 'btn btn-link logout']
            )
                        . Html::endForm()
                        . '</li>';
            }
            echo Nav::widget([
                'options' => ['class' => 'navbar-nav navbar-right'],
                'items' => $menuItems,
                'encodeLabels' => false,
            ]);
            NavBar::end();


            ?>
            <div id="wrapper">


                <div id="mySidenav" class="sidenav"><?php
                    echo SideNav::widget([
                        'type' => SideNav::TYPE_PRIMARY,
//                        'heading' => 'Меню',
                        'items' => [],
                    ]);
                    ?></div>


                <div id="page-content-wrapper">

                    <div class="container-fluid" id="main">


                        <?=
                        Breadcrumbs::widget([
                            'links' => isset($this->params['breadcrumbs']) ? $this->params['breadcrumbs'] : [],
                        ])
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
