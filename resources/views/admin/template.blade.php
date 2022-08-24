<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">


    <title>Splab Admin Panel </title>

    <link rel="shortcut icon" href="favicon.ico">

    <!-- Bootstrap -->
    <link href="{{asset('')}}Back/assets/plugins/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome -->
    <link href="{{asset('')}}Back/assets/plugins/font-awesome/css/font-awesome.min.css" rel="stylesheet">
    <!-- NProgress -->
    <link href="{{asset('')}}Back/assets/plugins/nprogress/nprogress.css" rel="stylesheet">
    <!-- iCheck -->
    <link href="{{asset('')}}Back/assets/plugins/iCheck/skins/flat/green.css" rel="stylesheet">

    <!-- Custom Theme Style -->
    <link href="{{asset('')}}Back/assets/css/style.css" rel="stylesheet">
    <!-- INTERNAL Notifications  Css -->
    <link href="{{asset('')}}Back/assets/plugins/notify/css/jquery.growl.css" rel="stylesheet" />
    <link href="{{asset('')}}Back/assets/plugins/notify/css/notifIt.css" rel="stylesheet" />
    <!--Confirm css -->
    <link rel="stylesheet" href="{{asset('')}}Back/assets/plugins/confirm-notification/css/confirm-min.css" />
    @yield('css')
</head>

<body class="nav-md">
<div class="container body">
    <div class="main_container">
        <div class="col-md-3 left_col">
            <div class="left_col scroll-view">


                <div class="clearfix"></div>

                <!-- menu profile quick info -->
                <div class="profile clearfix">
                    <div class="profile_pic">
                        <a href="{{route('admin.index')}}">
                            <img src="{{asset('')}}Back/assets/images/splab-2.png"  alt="..." class="img-circle profile_img">
                        </a>
                 </div>
                    <div class="profile_info">
                        <span>Xoş gəlmisiniz</span>
                        <h2>Admin</h2>
                    </div>
                </div>
                <!-- /menu profile quick info -->

                <br />

                <!-- sidebar menu -->
                <div id="sidebar-menu" class="main_menu_side hidden-print main_menu">
                    <div class="menu_section">

                        <ul class="nav side-menu">
                            <li><a href="{{route('admin.index')}}"><i class="fa fa-home"></i>Əsas sehifə</a></li>
                            <li><a href="{{route('settings.index')}}"><i class="fa fa-wrench"></i> Tənzimləmələr</a></li>
                            <li><a href="{{route('useful_links.index')}}"><i class="fa fa-external-link"></i>Faydalı Linklər</a></li>
                            <li><a href="{{route('our_team.index')}}"><i class="fa fa-users"></i>Komandamız</a></li>
                            <li><a href="{{route('statistic.index')}}"><i class="fa fa-bar-chart"></i>Statiskalar</a></li>
                            <li><a href="{{route('sliders.index')}}"><i class="fa fa-video-camera"></i>Slayder</a></li>
                            <li><a href="{{route('package_services.index')}}"><i class="fa fa-cog"></i>Paket xidmətləri</a></li>
                            <li><a href="{{route('customer_says.index')}}"><i class="fa fa-user"></i>Müştərilərin deyimi</a></li>
                            <li><a href="{{route('cooperation_update.edit')}}"><i class="fa fa-balance-scale"></i>Bizimlə əməkdaşlıq</a></li>

                            <li><a><i class="fa fa-folder-o"></i> Səhifələr <span class="fa fa-chevron-down"></span></a>
                                <ul class="nav child_menu">
                                    <li><a href="{{route('aboutus_update.edit')}}">Haqqımızda</a></li>
                                    <li><a href="{{route('services.index')}}">Xidmətlər</a></li>
                                    <li><a href="{{route('galleries.index')}}">Qalereya</a></li>
                                    <li><a href="{{route('news.index')}}">Xəbərlər</a></li>
                                </ul>
                            </li>

                        </ul>
                    </div>


                </div>
                <!-- /sidebar menu -->

            </div>
        </div>

        <!-- top navigation -->
        <div class="top_nav">
            <div class="nav_menu">
                <nav>
                    <div class="nav toggle">
                        <a id="menu_toggle"><i class="fa fa-bars"></i></a>
                    </div>

                    <ul class="nav navbar-nav navbar-right">
                        <li class="">
                            <a href="javascript:;" class="user-profile dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
                                <img src="{{asset('')}}Back/assets/images/splab-2.png" alt="">Super Admin
                                <span class=" fa fa-angle-down"></span>
                            </a>
                            <ul class="dropdown-menu dropdown-usermenu pull-right">
                                <li><a href="{{route('admin.logout')}}"><i class="fa fa-sign-out pull-right"></i> Çıxış</a></li>
                            </ul>
                        </li>


                    </ul>
                </nav>
            </div>
        </div>
        <!-- /top navigation -->

        <!-- page content -->

        <div class="right_col" role="main">
            <div class="row">

               @yield('content')


            </div>

        </div>
        <!-- /page content -->

        <!-- footer content -->
        <footer>
            <div class="pull-right">
                Bütün hüquqlar <a href="#">Amondesoft</a> tərəfindən qorunur.
            </div>
            <div class="clearfix"></div>
        </footer>
        <!-- /footer content -->
    </div>
</div>

<!-- jQuery -->
<script src="{{asset('')}}Back/assets/plugins/jquery/dist/jquery.min.js"></script>
<!-- Bootstrap -->
<script src="{{asset('')}}Back/assets/plugins/bootstrap/dist/js/bootstrap.min.js"></script>
<!-- FastClick -->
<script src="{{asset('')}}Back/assets/plugins/fastclick/lib/fastclick.js"></script>
<!-- NProgress -->
<script src="{{asset('')}}Back/assets/plugins/nprogress/nprogress.js"></script>
<!-- Chart.js -->
<script src="{{asset('')}}Back/assets/plugins/Chart.js/dist/Chart.min.js"></script>
<!-- gauge.js -->
<script src="{{asset('')}}Back/assets/plugins/gauge.js/dist/gauge.min.js"></script>
<!-- bootstrap-progressbar -->
<script src="{{asset('')}}Back/assets/plugins/bootstrap-progressbar/bootstrap-progressbar.min.js"></script>
<!-- iCheck -->
<script src="{{asset('')}}Back/assets/plugins/iCheck/icheck.min.js"></script>

<!-- Custom Theme Scripts -->
<script src="{{asset('')}}Back/assets/js/custom.js"></script>

<!-- INTERNAL Notifications js -->
<script src="{{asset('')}}Back/assets/plugins/notify/js/rainbow.js"></script>
<script src="{{asset('')}}Back/assets/plugins/notify/js/sample.js"></script>
<script src="{{asset('')}}Back/assets/plugins/notify/js/jquery.growl.js"></script>
<script src="{{asset('')}}Back/assets/plugins/notify/js/notifIt.js"></script>
<!--Form Validations js-->
<script src="{{asset('')}}Back/assets/js/form-vallidations.js"></script>
<!--Confirm js -->
<script src="{{asset('')}}Back/assets/plugins/confirm-notification/js/confirm-min.js"></script>

<script src="{{asset('')}}Back/assets/js/confirm.js">deleteItemAction();</script>
<script>

    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });


</script>

@yield('js')



</body>
</html>
