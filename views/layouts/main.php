<?php

use yii\helpers\Html;
use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;
use yii\widgets\Breadcrumbs;
use app\assets\AppAsset;

AppAsset::register($this);
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<a href="../../../../../Users/PKK-11057/Downloads/adminlte.php"></a>
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
            <?php
            NavBar::begin([
                'brandLabel' => 'อบรม Yii2 รพ.ศรีวิไล',
                'brandUrl' => Yii::$app->homeUrl,
                'options' => [
                    'class' => 'navbar-inverse navbar-fixed-top',
                ],
            ]);
            echo Nav::widget([
                'options' => ['class' => 'navbar-nav navbar-right'],
                'encodeLabels'=>false,
                'items' => [
                    ['label' => 'หน้าหลัก', 'url' => ['/site/index']],
                    ['label' => 'จัดการข้อมูล',
                        'items' => [
                            ['label' => 'Calitem', 'url' => ['/calitems/index'], 'visible' => ! Yii::$app->user->isGuest],
                            ['label' => 'Cal', 'url' => ['/cals/index'], 'visible' => ! Yii::$app->user->isGuest],
                            ['label' => 'Company', 'url' => ['/companys/index'], 'visible' => ! Yii::$app->user->isGuest],
                            ['label' => 'Department', 'url' => ['/departments/index'], 'visible' => ! Yii::$app->user->isGuest],
                            ['label' => 'Employee', 'url' => ['/employees/index'], 'visible' => Yii::$app->user->isGuest],
                            ['label' => 'Group', 'url' => ['/groups/index'], 'visible' => ! Yii::$app->user->isGuest],
                            ['label' => 'House', 'url' => ['/house/index'], 'visible' => ! Yii::$app->user->isGuest],
                            ['label' => 'Person', 'url' => ['/person/index'], 'visible' => ! Yii::$app->user->isGuest],
                            ['label' => 'Registool', 'url' => ['/registools/index'], 'visible' => ! Yii::$app->user->isGuest],
                            ['label' => 'Room', 'url' => ['/room/index'], 'visible' => ! Yii::$app->user->isGuest],
                            ['label' => 'Tool', 'url' => ['/tools/index'], 'visible' => ! Yii::$app->user->isGuest],
                            ['label' => 'Tooltype', 'url' => ['/tooltypes/index'], 'visible' => ! Yii::$app->user->isGuest],
                            ['label' => 'year', 'url' => ['/years/index'], 'visible' => ! Yii::$app->user->isGuest],
                        ]
                    ],
                    ['label' => 'เกี่ยวกับ', 'url' => ['/site/about']],
                    ['label' => 'ติดต่อ', 'url' => ['/site/contact']],
                    Yii::$app->user->isGuest ?
                            ['label' => '<i class="glyphicon glyphicon-user"></i> ลงชื่อใช้งาน', 'url' => ['/user/security/login']] :
                            ['label' => '<i class="glyphicon glyphicon-user"></i> (' . Yii::$app->user->identity->username . ')',
                        'items' => [
                            //['label' => 'ข้อมูลส่วนตัว', 'url' => ['/user/settings/profile']],
                            //['label' => 'Account', 'url' => ['/user/settings/account']],
                            ['label' => 'ออกจากระบบ', 'url' => ['/user/security/logout'], 'linkOptions' => ['data-method' => 'post']],
                        ]],
                    ['label' => '<i class="glyphicon glyphicon-pencil"></i> ลงทะเบียน', 'url' => ['/user/registration/register'],
                        'visible' => Yii::$app->user->isGuest],
//            Yii::$app->user->isGuest ?
//                ['label' => 'เข้าสู่ระบบ', 'url' => ['/site/login']] :
//                [
//                    'label' => 'ออกจากระบบ (' . Yii::$app->user->identity->username . ')',
//                    'url' => ['/site/logout'],
//                    'linkOptions' => ['data-method' => 'post']
//                ],
                ],
            ]);
            NavBar::end();
            ?>

            <div class="container">
            <?=
            Breadcrumbs::widget([
                'links' => isset($this->params['breadcrumbs']) ? $this->params['breadcrumbs'] : [],
            ])
            ?>
                <?= $content ?>
            </div>
        </div>

        <footer class="footer">
            <div class="container">
                <p class="pull-left">&copy; อบรม Yii2 <?= date('Y') ?></p>

                <p class="pull-right"><?php //Yii::powered()  ?>Power By Tom</p>
            </div>
        </footer>

        <?php $this->endBody() ?>
    </body>
</html>
<?php $this->endPage() ?>
