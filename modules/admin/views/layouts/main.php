<?php

use app\widgets\Alert;
use yii\helpers\Html;
use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;
use yii\widgets\Breadcrumbs;
use app\assets\AdminAsset;
use yii\helpers\Url;

AdminAsset::register($this);
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
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">

    <title>Gentelella Alela! | </title>

    <!-- <link href="../../web/css/font-awesome.min.css" rel="stylesheet"> -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">

</head>
<!-- <body> -->
<?php $this->beginBody() ?>
<body class="nav-md">
<div class="container body">
    <div class="main_container">
        <div class="col-md-3 left_col">
            <div class="left_col scroll-view">
                <div class="navbar nav_title" style="border: 0;">
                    <a href="#" class="site_title"><i class="fa fa-graduation-cap"></i> <span>GreenPost</span></a>
                </div>
                <div class="clearfix"></div>
                <br />
                <!-- sidebar menu -->
                <div id="sidebar-menu" class="main_menu_side hidden-print main_menu">
                    <div class="menu_section">
                        <ul class="nav side-menu">
                            <!-- <li><a href="<?php //echo Url::toRoute('address/index')?>"><i class="fa fa-dashboard"></i>Address</a></li> -->
                            <li><a href="<?php echo Url::toRoute('shop/index')?>"><i class="fa fa-home"></i>Shop</a></li>
                            <li><a href="<?php echo Url::toRoute('category/index')?>"><i class="fa fa-book"></i>Kategoriya</a></li>
                            <li><a href="<?php echo Url::toRoute('product/index')?>"><i class="fa fa-files-o"></i>Mahsulot</a></li>
                            <!-- <li><a href="<?php //echo Url::toRoute('productimage/index')?>"><i class="fa fa-file"></i>Mahsulot rasmlari</a></li> -->
                            <li><a href="<?php echo Url::toRoute('chat/index')?>"><i class="fa fa-comments"></i>Chat</a></li>
                            <!-- <li><a href="<?php //echo Url::toRoute('favoriteproducts/index')?>"><i class="fa fa-users"></i>Sevimli mahsulotlar</a></li> -->
                            <!-- <li><a href="<?php //echo Url::toRoute('ordercode/index')?>"><i class="fa fa-users"></i>Order Code</a></li> -->
                            <!-- <li><a href="<?php //echo Url::toRoute('orders/index')?>"><i class="fa fa-users"></i>Orders</a></li> -->
                            <!-- <li><a><i class="fa fa-paperclip"></i>Davomat<span class="fa fa-chevron-down"></span></a> -->
                            <ul class="nav child_menu">
                                <li><a href="<?php echo Url::toRoute('attendance/index')?>"> Bugun Kelganlar</a></li>
                                <li><a href="<?php echo Url::toRoute('attendance/who')?>">Filialda Kimlar Bor</a></li>
                                <li><a href="<?php echo Url::toRoute('observer/students_att')?>">Davomat qilish</a></li>
                            </ul>
                            <!-- </li> -->
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <!-- top navigation -->
        <div class="top_nav">
            <div class="nav_menu">
                <nav>
                    <div class="col-md-12 col-sm-12 col-xs-12" style="padding: 10px">
                        <a id="menu_toggle"><i class="fa fa-bars" style="font-size: 1.5em; cursor: pointer;"></i></a>
                        <?php echo "&nbsp&nbsp"; ?>
                        <a class="nav-link btn btn-default" style="margin: 0;" role="button" onclick="javascript:history.back();">
                            <i class="fa fa-arrow-left f-size"></i> Ortga
                        </a>
                        <a class="nav-link btn btn-danger pull-right" style="margin-left: 5px;" href="<?=Url::toRoute('site/logout')?>"><i class="fa fa-sign-out pull-right"></i></a>
                    </div>
                </nav>
            </div>
        </div>
        <div class="right_col" role="main">
            <?= $content?>
            <div class="clearfix"></div>
        </div>
    </div>
</div>
</body>
<?php $this->endBody() ?>
<script src="../../web/js/jquery.min.js"></script>
<script src="../../web/js/bootstrap.min.js"></script>
<script src="../../web/js/custom.min.js"></script>
</html>
<?php $this->endPage() ?>
