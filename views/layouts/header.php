<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Задачник</title>
        <link href="/template/css/bootstrap.min.css" rel="stylesheet" type="text/css">
        <link href="/template/css/font-awesome.min.css" rel="stylesheet" type="text/css">
        <link href="/template/css/main.css" rel="stylesheet" type="text/css">
        <link rel="shortcut icon" href="/template/images/home/ico.png"> <!--favicon!-->
    </head><!--/head-->
    <body>
        <header id="header"><!--header-->
            <div class="header_top"><!--header_top-->
                <div class="container">
                    <div class="row">
                        <div class="col-sm-5">
                            <div class="contactinfo">
                                <ul class="nav nav-pills">
                                    <li><a href="#"><i class="fa fa-phone"></i> +7(000)000-00-00</a></li>
                                    <li><a href="#"><i class="fa fa-envelope"></i>igorsa33@yandex.ru</a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-sm-7">
                            <div class="center-block">
                                <h1>Задачник</h1>
                            </div>
                        </div>
                    </div>
                </div>
            </div><!--/header_top-->
            <div class="header-middle">
                <div class="container">
                    <div class="row">
                        <div class="col-sm-4">
                            <div class="logo pull-left">
                                <a href="/index/order-id/page-1"><img src="/template/images/home/logo.png" alt="" /></a>
                            </div>
                        </div>
                        <div class="col-sm-8">
                            <div class="shop-menu pull-right">
                                <ul class="nav navbar-nav">
                                    <?php if (User::isGuest()): ?>                                        
                                        <li><a href="/user/login/"><i class="fa fa-lock"></i> Вход для администратора</a></li>
                                    <?php else: ?>
                                        <li><a href="/user/logout/"><i class="fa fa-unlock"></i> Выход</a></li>
                                        <?php endif; ?>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </header><!--/header-->


