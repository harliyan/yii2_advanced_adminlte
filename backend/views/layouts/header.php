<?php
use yii\helpers\Html;
use backend\assets\AppAsset;
use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;
use yii\widgets\Breadcrumbs;
use common\widgets\Alert;
?>
<header class="main-header">
  <!-- Logo -->
  <a href="index2.html" class="logo">
    <!-- mini logo for sidebar mini 50x50 pixels -->
    <span class="logo-mini"><b><?=$title?></b></span>
    <!-- logo for regular state and mobile devices -->
    <span class="logo-lg"><b><?=$title?></b> Administrator</span>
  </a>
  <!-- Header Navbar: style can be found in header.less -->
  <nav class="navbar navbar-static-top" role="navigation">
    <!-- Sidebar toggle button-->
    <a href="#" class="sidebar-toggle" data-toggle="offcanvas" role="button">
      <span class="sr-only">Toggle navigation</span>
    </a>
    <div class="navbar-custom-menu">
      <ul class="nav navbar-nav">


       <!--  <li class="dropdown messages-menu">
          <a href="<?= Yii::$app->request->baseUrl; ?>/site/login" class="dropdown-toggle" data-toggle="dropdown">Login
          </a>
        </li> -->



        <!-- login -->
        <li class="dropdown messages-menu">
          <?php
          NavBar::begin([
            'brandLabel' => Yii::$app->name,
            'brandUrl' => Yii::$app->homeUrl,
            'options' => [
              'class' => 'navbar-inverse navbar-fixed-top',
            ],
          ]);

          $menuItems = [
            ['label' => 'Home', 'url' => ['/site/index']],
          ];

          if (Yii::$app->user->isGuest) {
            $menuItems[] = ['label' => 'Login', 'url' => ['/site/login']];
          } else {
            $menuItems[] = '<li>'
            . Html::beginForm(['/site/logout'], 'post')
            . Html::submitButton(
              'Logout (' . Yii::$app->user->identity->username . ')',
              ['class' => 'btn btn-danger logout']
            )
            . Html::endForm()
            . '</li>';
          }
          echo Nav::widget([
            'options' => ['class' => 'navbar-nav navbar-right'],
            'items' => $menuItems,
          ]);
          NavBar::end();
          ?>

          <div class="container">
            <?= Breadcrumbs::widget([
              'links' => isset($this->params['breadcrumbs']) ? $this->params['breadcrumbs'] : [],
            ]) ?>
            <?= Alert::widget() ?>
          </div>
        </li>
        <!-- login -->


        <!-- Control Sidebar Toggle Button -->

      </ul>
    </div>
  </nav>
</header>
