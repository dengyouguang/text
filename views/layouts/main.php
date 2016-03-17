<?php

/* @var $this \yii\web\View */
/* @var $content string */

use yii\helpers\Html;
use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;
use yii\widgets\Breadcrumbs;
use app\assets\AppAsset;

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
    <?php
    NavBar::begin([
        'brandLabel' => 'My Company',
        'brandUrl' => Yii::$app->homeUrl,
        'options' => [
            'class' => 'navbar-inverse navbar-fixed-top',
        ],
    ]);
    echo Nav::widget([
        'options' => ['class' => 'navbar-nav navbar-right'],
        'items' => [
            ['label' => '关于我们', 'url' => ['/' . $moduleID . '/about']],
                   ['label' => '志愿者', 'url' => ['/' . $moduleID . '/member']],
                   ['label' => '志愿动态', 'url' => ['/' . $moduleID . '/news']],
                   ['label' => '志愿项目', 'url' => ['/' . $moduleID . '/project']],
                   ['label' => '项目评论', 'url' => ['/' . $moduleID . '/talk']],
                   ['label' => '培训资料', 'url' => ['/' . $moduleID . '/project-details']],
                   ['label' => '志愿风采', 'url' => ['/' . $moduleID . '/mien']],
                   ['label' => '志愿报名', 'url' => ['/' . $moduleID . '/aplay']],
                   ['label' => '首页焦点图', 'url' => ['/' . $moduleID . '/slide']],
                   ['label' => '常见问题', 'url' => ['/' . $moduleID . '/help']],
                   ['label' => '联系我们', 'url' => ['/' . $moduleID . '/contact']],
                   ['label' => '用户管理',
                       'items' => [
                           ['label' => '用户列表', 'url' => ['/user/admin/index']],
                           ['label' => '用户列表', 'url' => ['/user/admin/index']],
                           ['label' => '用户列表', 'url' => ['/user/admin/index']],
                           ['label' => '用户列表', 'url' => ['/user/admin/index']],
                           ['label' => '用户列表', 'url' => ['/user/admin/index']],
                       ],
                   ],
            Yii::$app->user->isGuest ?
                ['label' => 'Login', 'url' => ['/site/login']] :
                [
                    'label' => 'Logout (' . Yii::$app->user->identity->username . ')',
                    'url' => ['/site/logout'],
                    'linkOptions' => ['data-method' => 'post']
                ],
        ],
    ]);
    NavBar::end();
    ?>

    <div class="container">
        <?= Breadcrumbs::widget([
            'links' => isset($this->params['breadcrumbs']) ? $this->params['breadcrumbs'] : [],
        ]) ?>
        <?= $content ?>
    </div>
</div>

<footer class="footer">
    <div class="container">
        <p class="pull-left">&copy; My Company <?= date('Y') ?></p>

        <p class="pull-right"><?= Yii::powered() ?></p>
    </div>
</footer>

<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>
