<?php

/* @var $this \yii\web\View */
/* @var $content string */
use yii\helpers\Html;
use yii\helpers\Url;
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
<header>
    <nav class="row">
      <div class="nav-wrapper">
        <div class="col s12">
          <a href="<?= Yii::$app->homeUrl ?>" class="brand-logo"><?= Yii::$app->name ?></a>
          <ul id="nav-mobile" class="right hide-on-med-and-down">
            <li><a href=" <?= Url::to('index.php?r=site/index') ?> ">Home</a></li>
            <li><a href="<?= Url::to('index.php?r=site/about') ?>">About</a></li>
            <li><a href="<?= Url::to('index.php?r=site/contact') ?>">Contact</a></li>
            <li>
            <?=
              (Yii::$app->user->isGuest)?  '<a href="'.Url::to("index.php?r=user/security/login").'">Login</a>' : '<a href="'.Url::to("index.php?r=user/security/logout").'">Logout</a>'
            ?>
            </li>
          </ul>
        </div>
      </div>
    </nav>
</header>
<main class='container'>
    <?= Breadcrumbs::widget([
        'links' => isset($this->params['breadcrumbs']) ? $this->params['breadcrumbs'] : [],
    ]) ?>
    <?= $content ?>
</main>
<footer class="page-footer">
  <div class="container">
    <div class="row">
      <div class="col l6 s12">
        <h5 class="white-text">DoingITeasyChannel</h5>
        <p class="grey-text text-lighten-4">Website for the DoingITeasyChannel Followers</p>
      </div>
      <div class="col l4 offset-l2 s12">
        <h5 class="white-text">Links</h5>
        <ul>
          <li><a class="grey-text text-lighten-3" href="https://www.youtube.com/channel/UCaDQTcZrzZqym56ikdOlJow">DoingITeasyChannel YouTube Channel</a></li>
          <li><a class="grey-text text-lighten-3" href="https://twitter.com/Uthpala_419">Follow Me - Uthpala Heenatigala</a></li>
          <li><a class="grey-text text-lighten-3" href="https://www.facebook.com/groups/doingiteasychannelwebdevs/">DoingITeasyChannel Web Devs Facebook Group</a></li>
          <li><a class="grey-text text-lighten-3" href="http://doingiteasy.net/">DoingITeasy IT Solutions Provider</a></li>
        </ul>
      </div>
    </div>
  </div>
  <div class="footer-copyright">
    <div class="container">
    © 2016 DoingITeasyChannel
    <a class="grey-text text-lighten-4 right" href="#!">More Links</a>
    </div>
  </div>
</footer>

<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>
