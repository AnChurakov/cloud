<!DOCTYPE html>
<<<<<<< HEAD
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="A fully featured admin theme which can be used to build CRM, CMS, etc.">
        <meta name="author" content="Coderthemes">

        <!-- App Favicon -->
        <link rel="shortcut icon" href="assets/images/favicon.ico">

        <!-- CSRF Token -->
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <!-- App title -->
        <title>{{ config('app.name', 'Cloud') }}</title>

        <!--Morris Chart CSS -->
		<link rel="stylesheet" href="{{ asset('assets/plugins/morris/morris.css') }}" />

        <!-- form Uploads -->
        <link href="{{ asset('assets/plugins/fileuploads/css/dropify.min.css') }}" rel="stylesheet" type="text/css" />
		
		<!-- DataTables -->
        <link href="{{ asset('assets/plugins/datatables/dataTables.bootstrap4.min.css') }}" rel="stylesheet" type="text/css" />
        <link href="{{ asset('assets/plugins/datatables/buttons.bootstrap4.min.css') }}" rel="stylesheet" type="text/css" />

        <!-- Switchery css -->
        <link href="{{ asset('assets/plugins/switchery/switchery.min.css') }}" rel="stylesheet" type="text/css" />

        <!-- Bootstrap CSS -->
        <link href="{{ asset('assets/css/bootstrap.min.css') }}" rel="stylesheet" type="text/css" />

        <!-- App CSS -->
        <link href="{{ asset('assets/css/style.css') }}" rel="stylesheet" type="text/css" />

        <!-- Modernizr js -->
        <script src="{{ asset('assets/js/modernizr.min.js') }}"></script>

    </head>


    <body class="fixed-left">

        <!-- Begin page -->
        <div id="wrapper">

            <!-- Top Bar Start -->
            <div class="topbar">

                <!-- LOGO -->
                <div class="topbar-left">
                    <a href="index.html" class="logo">
                        <i class="zmdi zmdi-group-work icon-c-logo"></i>
                        <span>Uplon</span></a>
                </div>

                <nav class="navbar-custom">

                    <ul class="list-inline float-right mb-0">
                        <li class="list-inline-item dropdown notification-list">
                            <a class="nav-link dropdown-toggle arrow-none waves-light waves-effect" data-toggle="dropdown" href="#" role="button"
                               aria-haspopup="false" aria-expanded="false">
                                <i class="zmdi zmdi-notifications-none noti-icon"></i>
                                <span class="noti-icon-badge"></span>
                            </a>
                            <div class="dropdown-menu dropdown-menu-right dropdown-arrow dropdown-lg" aria-labelledby="Preview">
                                <!-- item-->
                                <div class="dropdown-item noti-title">
                                    <h5><small><span class="label label-danger pull-xs-right">7</span>Notification</small></h5>
                                </div>

                                <!-- item-->
                                <a href="javascript:void(0);" class="dropdown-item notify-item">
                                    <div class="notify-icon bg-success"><i class="icon-bubble"></i></div>
                                    <p class="notify-details">Robert S. Taylor commented on Admin<small class="text-muted">1min ago</small></p>
                                </a>

                                <!-- item-->
                                <a href="javascript:void(0);" class="dropdown-item notify-item">
                                    <div class="notify-icon bg-info"><i class="icon-user"></i></div>
                                    <p class="notify-details">New user registered.<small class="text-muted">1min ago</small></p>
                                </a>

                                <!-- item-->
                                <a href="javascript:void(0);" class="dropdown-item notify-item">
                                    <div class="notify-icon bg-danger"><i class="icon-like"></i></div>
                                    <p class="notify-details">Carlos Crouch liked <b>Admin</b><small class="text-muted">1min ago</small></p>
                                </a>

                                <!-- All-->
                                <a href="javascript:void(0);" class="dropdown-item notify-item notify-all">
                                    View All
                                </a>

                            </div>
                        </li>

                       

                        <li class="list-inline-item dropdown notification-list">
                            <a class="nav-link dropdown-toggle waves-effect waves-light nav-user" data-toggle="dropdown" href="#" role="button"
                               aria-haspopup="false" aria-expanded="false">
                                <img src="{{ asset('assets/images/users/avatar-1.jpg') }}" alt="user" class="rounded-circle">
                            </a>
                            <div class="dropdown-menu dropdown-menu-right profile-dropdown " aria-labelledby="Preview">
                                

                                <!-- item-->
                                <a href="javascript:void(0);" class="dropdown-item notify-item">
                                    <i class="zmdi zmdi-account-circle"></i> <span>Профиль</span>
                                </a>

                                <!-- item-->
                                <a href="javascript:void(0);" class="dropdown-item notify-item">
                                    <i class="zmdi zmdi-settings"></i> <span>Настройки</span>
                                </a>

                                
                                <!-- item-->
                                <a href="#" class="dropdown-item notify-item" onclick="document.getElementById('logout-form').submit()">
                                    <i class="zmdi zmdi-power"></i> <span>Выйти</span>
                                    <form action="{{ route('logout') }}" method="post" id="logout-form" style="display: none;">
                                        @csrf
                                    </form>
                                </a>

                            </div>
                        </li>

                    </ul>

                    <ul class="list-inline menu-left mb-0">
                        <!--<li class="float-left">
                            <button class="button-menu-mobile open-left waves-light waves-effect">
                                <i class="zmdi zmdi-menu"></i>
                            </button>
                        </li>-->
                        <li class="hidden-mobile app-search">
                            <form role="search" class="">
                                <input type="text" placeholder="Найти..." class="form-control">
                                <a href=""><i class="fa fa-search"></i></a>
                            </form>
                        </li>
                    </ul>

                </nav>

=======
<html lang="ru">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="assets/img/basic/favicon.ico" type="image/x-icon">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>Paper</title>
    <!-- CSS -->
    <link rel="stylesheet" href="{{asset('adminpanel/assets/css/app.css') }}">
    <style>
        .loader {
            position: fixed;
            left: 0;
            top: 0;
            width: 100%;
            height: 100%;
            background-color: #F5F8FA;
            z-index: 9998;
            text-align: center;
        }

        .plane-container {
            position: absolute;
            top: 50%;
            left: 50%;
        }
    </style>
    <!-- Js -->
    <!--
    --- Head Part - Use Jquery anywhere at page.
    --- http://writing.colin-gourlay.com/safely-using-ready-before-including-jquery/
    -->
    <script>(function(w,d,u){w.readyQ=[];w.bindReadyQ=[];function p(x,y){if(x=="ready"){w.bindReadyQ.push(y);}else{w.readyQ.push(x);}};var a={ready:p,bind:p};w.$=w.jQuery=function(f){if(f===d||f===u){return a}else{p(f)}}})(window,document)</script>
</head>
<body class="light">
<!-- Pre loader -->
<div id="loader" class="loader">
    <div class="plane-container">
        <div class="preloader-wrapper small active">
            <div class="spinner-layer spinner-blue">
                <div class="circle-clipper left">
                    <div class="circle"></div>
                </div><div class="gap-patch">
                <div class="circle"></div>
            </div><div class="circle-clipper right">
                <div class="circle"></div>
            </div>
>>>>>>> anton
            </div>

            <div class="spinner-layer spinner-red">
                <div class="circle-clipper left">
                    <div class="circle"></div>
                </div><div class="gap-patch">
                <div class="circle"></div>
            </div><div class="circle-clipper right">
                <div class="circle"></div>
            </div>
            </div>

<<<<<<< HEAD
							<li class="has_sub">
                                <a href="javascript:void(0);" class="waves-effect">
								<i class="zmdi zmdi-local-offer"></i> <span> Промокоды </span> <span class="menu-arrow"></span></a>
                                <ul class="list-unstyled">
                                    <li><a href="/coupon/add">Добавить новый</a></li>
									<li><a href="/coupon/all">Список промокодов</a></li>
                                    
                                </ul>
                            </li>
							
							<li class="has_sub">
                                <a href="javascript:void(0);" class="waves-effect">
								<i class="zmdi zmdi-accounts"></i> <span> Пользователи </span> <span class="menu-arrow"></span></a>
                                <ul class="list-unstyled">
                                    <li><a href="#">Добавить нового</a></li>
									<li><a href="#">Список пользователей</a></li>
                                    
                                </ul>
                            </li>

                            <li class="has_sub">
                                <a href="javascript:void(0);" class="waves-effect">
								<i class="zmdi zmdi-settings"></i> <span> Города </span> <span class="menu-arrow"></span></a>
                                <ul class="list-unstyled">
                                    <li><a href="{{ route('city.add') }}">Добавить</a></li>
                                    <li><a href="{{ route('city.all') }}">Список</a></li>
                                </ul>
                            </li>
							
							<li class="has_sub">
                                <a href="javascript:void(0);" class="waves-effect">
								<i class="zmdi zmdi-settings"></i> <span> Настройки </span> <span class="menu-arrow"></span></a>
                                <ul class="list-unstyled">
                                    <li><a href="ui-buttons.html">Buttons</a></li>
                                    
                                </ul>
                            </li>
=======
            <div class="spinner-layer spinner-yellow">
                <div class="circle-clipper left">
                    <div class="circle"></div>
                </div><div class="gap-patch">
                <div class="circle"></div>
            </div><div class="circle-clipper right">
                <div class="circle"></div>
            </div>
            </div>
>>>>>>> anton

            <div class="spinner-layer spinner-green">
                <div class="circle-clipper left">
                    <div class="circle"></div>
                </div><div class="gap-patch">
                <div class="circle"></div>
            </div><div class="circle-clipper right">
                <div class="circle"></div>
            </div>
            </div>
        </div>
    </div>
</div>
<div id="app">
<aside class="main-sidebar fixed offcanvas shadow" data-toggle='offcanvas'>
    <section class="sidebar">
        <div class="w-80px mt-3 mb-3 ml-3">
            <img src="{{ asset ('adminpanel/assets/img/basic/logo.png') }}" alt="">
        </div>
        <div class="relative">
            <a data-toggle="collapse" href="#userSettingsCollapse" role="button" aria-expanded="false"
               aria-controls="userSettingsCollapse" class="btn-fab btn-fab-sm absolute fab-right-bottom fab-top btn-primary shadow1 ">
                <i class="icon icon-cogs"></i>
            </a>
            <div class="user-panel p-3 light mb-2">
                <div>
                    <div class="float-left image">
                        <img class="user_avatar" src="{{ asset('adminpanel/assets/img/dummy/u2.png') }}" alt="User Image">
                    </div>
                    <div class="float-left info">
                        <h6 class="font-weight-light mt-2 mb-1">Alexander Pierce</h6>
                        <a href="#"><i class="icon-circle text-primary blink"></i> Online</a>
                    </div>
                </div>
                <div class="clearfix"></div>
                <div class="collapse multi-collapse" id="userSettingsCollapse">
                    <div class="list-group mt-3 shadow">
                        <a href="index.html" class="list-group-item list-group-item-action ">
                            <i class="mr-2 icon-umbrella text-blue"></i>Profile
                        </a>
                        <a href="#" class="list-group-item list-group-item-action"><i
                                class="mr-2 icon-cogs text-yellow"></i>Settings</a>
                        <a href="#" class="list-group-item list-group-item-action"><i
                                class="mr-2 icon-security text-purple"></i>Change Password</a>
                    </div>
                </div>
            </div>
        </div>
        <ul class="sidebar-menu">
            <li class="header"><strong>МЕНЮ МАГАЗИНА</strong></li>
            <li class="treeview"><a href="/admin">
                <i class="icon icon-home2 purple-text s-18"></i> <span>Главная</span>
            </a></li>         
            
            <li class="treeview"><a href="/product/all">
                <i class="icon icon icon-package blue-text s-18"></i>
                <span>Товары</span>
                
            </a> </li>
            <li class="treeview"><a href="#"><i class="icon icon-account_box light-green-text s-18"></i>Категории
            <i class="icon icon-angle-left s-18 pull-right"></i></a>
                <ul class="treeview-menu">
                    <li><a href="panel-page-users.html"><i class="icon icon-circle-o"></i>Добавить категорию</a>
                    </li>
                    <li><a href="panel-page-users-create.html"><i class="icon icon-add"></i>Список категорий</a>
                    </li>
                    
                </ul>
            </li>
            <li class="treeview"><a href="#"><i class="icon icon-account_box light-green-text s-18"></i>Подкатегории
            <i class="icon icon-angle-left s-18 pull-right"></i></a>
                <ul class="treeview-menu">
                    <li><a href="panel-page-users.html"><i class="icon icon-circle-o"></i>Добавить подкатегорию</a>
                    </li>
                    <li><a href="panel-page-users-create.html"><i class="icon icon-add"></i>Список подкатегорий</a>
                    </li>
                    
                </ul>
            </li>
            <li class="treeview"><a href="#"><i class="icon icon-account_box light-green-text s-18"></i>Промокоды
            <i class="icon icon-angle-left s-18 pull-right"></i></a>
                <ul class="treeview-menu">
                    <li><a href="panel-page-users.html"><i class="icon icon-circle-o"></i>Добавить промокод</a>
                    </li>
                    <li><a href="panel-page-users-create.html"><i class="icon icon-add"></i>Список промокодов</a>
                    </li>
                    
                </ul>
            </li>
            <li class="treeview"><a href="#"><i class="icon icon-account_box light-green-text s-18"></i>Пользователи<i
                    class="icon icon-angle-left s-18 pull-right"></i></a>
                <ul class="treeview-menu">
                    <li><a href="panel-page-users.html"><i class="icon icon-circle-o"></i>Все пользователи</a>
                    </li>
                    <li><a href="panel-page-users-create.html"><i class="icon icon-add"></i>Добавить пользователя</a>
                    </li>
                    
                </ul>
            </li>
            
           
           
        </ul>
    </section>
</aside>
<!--Sidebar End-->
<div class="has-sidebar-left">
    <div class="pos-f-t">
    <div class="collapse" id="navbarToggleExternalContent">
        <div class="bg-dark pt-2 pb-2 pl-4 pr-2">
            <div class="search-bar">
                <input class="transparent s-24 text-white b-0 font-weight-lighter w-128 height-50" type="text"
                       placeholder="start typing...">
            </div>
            <a href="#" data-toggle="collapse" data-target="#navbarToggleExternalContent" aria-expanded="false"
               aria-label="Toggle navigation" class="paper-nav-toggle paper-nav-white active "><i></i></a>
        </div>
    </div>
</div>
    <div class="sticky">
        <div class="navbar navbar-expand navbar-dark d-flex justify-content-between bd-navbar blue accent-3">
            <div class="relative">
                <a href="#" data-toggle="push-menu" class="paper-nav-toggle pp-nav-toggle">
                    <i></i>
                </a>
            </div>
            <!--Top Menu Start -->
<div class="navbar-custom-menu">
    <ul class="nav navbar-nav">
        
        <!-- Notifications -->
        <!--<li class="dropdown custom-dropdown notifications-menu">
            <a href="#" class=" nav-link" data-toggle="dropdown" aria-expanded="false">
                <i class="icon-notifications "></i>
                <span class="badge badge-danger badge-mini rounded-circle">4</span>
            </a>
            <ul class="dropdown-menu dropdown-menu-right">
                <li class="header">You have 10 notifications</li>
                <li>
                    
                    <ul class="menu">
                        <li>
                            <a href="#">
                                <i class="icon icon-data_usage text-success"></i> 5 new members joined today
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <i class="icon icon-data_usage text-danger"></i> 5 new members joined today
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <i class="icon icon-data_usage text-yellow"></i> 5 new members joined today
                            </a>
                        </li>
                    </ul>
                </li>
                <li class="footer p-2 text-center"><a href="#">View all</a></li>
            </ul>
        </li>-->
        <li>
            <a class="nav-link " data-toggle="collapse" data-target="#navbarToggleExternalContent"
               aria-controls="navbarToggleExternalContent"
               aria-expanded="false" aria-label="Toggle navigation">
                <i class=" icon-search3 "></i>
            </a>
        </li>
       
        <!-- User Account-->
        <li class="dropdown custom-dropdown user user-menu ">
            <a href="#" class="nav-link" data-toggle="dropdown">
                
                <i class="icon-exit_to_app"></i>
            </a>
            
        </li>
    </ul>
</div>
        </div>
    </div>
</div>


@yield('content')


<!-- Add the sidebar's background. This div must be placed
         immediately after the control sidebar -->
<div class="control-sidebar-bg shadow white fixed"></div>
</div>
<!--/#app -->
<script src="{{ asset('adminpanel/assets/js/app.js') }}" type="text/javascript"></script>

<!--
--- Footer Part - Use Jquery anywhere at page.
--- http://writing.colin-gourlay.com/safely-using-ready-before-including-jquery/
-->
<script>(function($,d){$.each(readyQ,function(i,f){$(f)});$.each(bindReadyQ,function(i,f){$(d).bind("ready",f)})})(jQuery,document)</script>
</body>
</html>