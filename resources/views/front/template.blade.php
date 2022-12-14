<!DOCTYPE html>
<html lang="tr">
<head><title>SPLab</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- LIBRARY FONT--><link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link rel="shortcut icon" href="splab-2.ico">
    <link href="https://fonts.googleapis.com/css2?family=Lora:wght@400;500;600;700&display=swap" rel="stylesheet">
    <link type="text/css" rel="stylesheet" href="{{asset('')}}Front/assets/font/font-icon/font-awesome-4.4.0/css/font-awesome.css">
    <link type="text/css" rel="stylesheet" href="{{asset('')}}Front/assets/font/font-icon/font-svg/css/Glyphter.css">
    <!-- LIBRARY CSS-->
    <link type="text/css" rel="stylesheet" href="{{asset('')}}Front/assets/libs/animate/animate.css">
    <link type="text/css" rel="stylesheet" href="{{asset('')}}Front/assets/libs/bootstrap-3.3.5/css/bootstrap.css">
    <link type="text/css" rel="stylesheet" href="{{asset('')}}Front/assets/libs/owl-carousel-2.0/assets/owl.carousel.css">
    <link type="text/css" rel="stylesheet" href="{{asset('')}}Front/assets/libs/selectbox/css/jquery.selectbox.css">
    <link type="text/css" rel="stylesheet" href="{{asset('')}}Front/assets/libs/fancybox/css/jquery.fancybox.css">
    <link type="text/css" rel="stylesheet" href="{{asset('')}}Front/assets/libs/fancybox/css/jquery.fancybox-buttons.css">
    <link type="text/css" rel="stylesheet" href="{{asset('')}}Front/assets/libs/media-element/build/mediaelementplayer.min.css">
    <!-- STYLE CSS    -->
    <link type="text/css" rel="stylesheet" href="{{asset('')}}Front/assets/css/color-1.css?version=51" id="color-skins">
    <!--link(type="text/css", rel='stylesheet', href='#', id="color-skins")-->
    <script src="{{asset('')}}Front/assets/libs/jquery/jquery-2.1.4.min.js"></script>
    <script src="{{asset('')}}Front/assets/libs/js-cookie/js.cookie.js"></script>
@yield('css')

    <!--script.--><!--    if ((Cookies.get('color-skin') != undefined) && (Cookies.get('color-skin') != 'color-1')) {--><!--        $('#color-skins').attr('href', 'assets/css/' + Cookies.get('color-skin') + '.css');--><!--    } else if ((Cookies.get('color-skin') == undefined) || (Cookies.get('color-skin') == 'color-1')) {--><!--        $('#color-skins').attr('href', 'assets/css/color-1.css');--><!--    }--></head>
<body><!-- HEADER-->

<header>
    <div class="header-topbar">
        <div class="container">
            <div class="topbar-left pull-left">
                <div class="email"><a href="mailto:info@splab.az?subject=??m??kda??l??qla ba??l?? m??raci??t" target="_blank"><i class="topbar-icon fa fa-envelope-o"></i><span>{{$sett->email}}</span></a></div>
                <div class="hotline"><a href="tel: +994 51 230 89 50" target="_blank"><i class="topbar-icon fa fa-phone"></i><span>+{{$sett->mobile_phone}}</span></a></div>
            </div>
            <div class="topbar-right pull-right">
                <div class="socials">
                    <a href="https://www.facebook.com/SPLab-101736738973027/" target="_blank" class="facebook"><i class="fa fa-facebook"></i></a>
                    <a href="mailto:info@splab.az?subject=??m??kda??l??qla ba??l?? m??raci??t" target="_blank" class="google" ><i class="topbar-icon fa fa-envelope-o"></i></a>
                    <a href="https://www.instagram.com/splab_laboratoriyasi/" target="_blank" class="twitter"><i class="fa fa-instagram"></i></a>
                </div>
            </div>
        </div>
    </div>
    <div class="header-main homepage-01">
        <div class="container">
            <div class="header-main-wrapper">
                <div class="navbar-heade">
                    <div class="logo pull-left"><a href="{{route('front.index')}}" class="header-logo"><img src="{{asset('')}}Front/assets/images/S_plab.png" alt=""/></a></div>
                    <button type="button" data-toggle="collapse" data-target=".navigation" class="navbar-toggle edugate-navbar"><span class="icon-bar"></span><span class="icon-bar"></span><span class="icon-bar"></span></button>
                </div>
                <nav class="navigation collapse navbar-collapse pull-right">
                    <ul class="nav-links nav navbar-nav">
                        <li class="dropdown"><a href="{{route('front.about')}}" class="main-menu">Haqq??m??zda</a></li>
                        <li class="dropdown"><a href="{{route('front.services')}}"  class="main-menu">Xidm??tl??r</a></li>
                        <li class="dropdown"><a href="{{route('front.galleries')}}"  class="main-menu">Qalereya</a></li>
                        <li><a href="{{route('front.news')}}" class="main-menu">X??b??rl??r</a>
                        </li>
                        <li><a href="{{route('front.contact')}}" class="main-menu">??laq??</a></li>
                        <li class="button-search"><p class="main-menu"><i class="fa fa-search"></i></p></li>
                        <div class="nav-search hide">
                            <form><input type="text" placeholder="Search" class="searchbox"/>
                                <button type="submit" class="searchbutton fa fa-search"></button>
                            </form>
                        </div>
                    </ul>
                </nav>
            </div>
        </div>
    </div>
</header>
<!-- WRAPPER-->



@yield('content')




<!-- FOOTER-->
<footer>

    <div class="footer-top">
        <div class="container">
            <div class="footer-top-wrapper">
                <div class="footer-top-left"><p class="footer-top-focus">SPlab ail??sinin ??zv?? ol!</p>

                    <p class="footer-top-text">M??qavil??li ??m??kda??l??????n ??st??nl??kl??rind??n yararlan??n</p></div>
                <div class="footer-top-right">
                    <form method="get" action="SPLAB_??m??kda??l??q_M??qavil??si.docx">
                        <button type="submit" onclick="window.location.href='contact.html'" class="btn btn-blue btn-bold"><span>M??qavil??ni y??kl??</span></button>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <div class="footer-main">
        <div class="container">
            <div class="footer-main-wrapper">
                <div class="row">
                    <div class="col-2">
                        <div class="col-md-3 col-sm-6 col-xs-6 sd380">
                            <div class="edugate-widget widget">
                                <div class="title-widget">SPLab</div>
                                <div class="content-widget"><p>Sara Qrup QSC ??lk??mizd?? u??urla davam ed??n aqrar islahatlar?? d??st??kl??y??r??k, k??nd t??s??rr??fat?? m??hsullar??n??n keyfiyy??tinin v?? istehsal??n??n art??t??lmas?? i??l??rin?? ??z t??hf??sini verm??k ??????n f??aliyy??t istiqam??tl??rini geni??l??ndirir.</p>

                                    <div class="info-list">
                                        <ul class="list-unstyled">
                                            <li><i class="fa fa-envelope-o"></i><a href="mailto:info@splab.az?subject=??m??kda??l??qla ba??l?? m??raci??t" target="_blank">{{$sett->email}}</a></li>
                                            <li><i class="fa fa-phone"></i><a href="tel: +994 51 230 89 50" target="_blank">T: +{{$sett->mobile_phone}}</a></li>
                                            <li style="padding-bottom: 0;"><i class="fa fa-map-marker"></i><a href="contact.html"><p>{{$sett->city}}</p></a></li>
                                            <li style="padding-top: 5px; border-top: none;"><i class="fa fa-map-marker"></i><a href="contact.html"><p>{{$sett->city}}</p></a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3 col-sm-6 col-xs-6 sd380">
                            <div class="useful-link-widget widget">
                                <div class="title-widget">FAYDALI L??NKL??R</div>
                                <div class="content-widget">
                                    <div class="useful-link-list">
                                        <div class="row">
                                            <div class="col-md-6 col-sm-6 col-xs-6">
                                                <ul class="list-unstyled">
                                                    <li><i class="fa fa-angle-right"></i><a href="about-us.html#teams">Komandam??z</a></li>
                                                    <li><i class="fa fa-angle-right"></i><a href="services.html">Xidm??tl??r</a></li>
                                                    <li><i class="fa fa-angle-right"></i><a href="news-masonry.html">X??b??rl??r</a></li>
                                                    <li><i class="fa fa-angle-right"></i><a href="about-us.html#whySplab">Niy?? SPLab</a></li>
                                                    <li><i class="fa fa-angle-right"></i><a href="#">Sosial Media</a></li>
                                                    <li><i class="fa fa-angle-right"></i><a href="contact.html#splabmap">X??rit??</a></li>
                                                </ul>
                                            </div>
                                            <div class="col-md-6 col-sm-6 col-xs-6">
                                                <ul class="list-unstyled">
                                                    <li><i class="fa fa-angle-right"></i><a href="index.html">Ana S??hif??</a></li>
                                                    <li><i class="fa fa-angle-right"></i><a href="about-us.html#statistics">Statistika</a></li>
                                                    <li><i class="fa fa-angle-right"></i><a href="about-us.html#partners">Partnyorlar</a></li>
                                                    <li><i class="fa fa-angle-right"></i><a href="#">Blog Post</a></li>
                                                    <li><i class="fa fa-angle-right"></i><a href="about-us.html#musterireyi">M????t??ri r??yi</a></li>
                                                    <li><i class="fa fa-angle-right"></i><a href="#">Siyas??t</a></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-2">
                        <div class="col-md-3 col-sm-6 col-xs-6 sd380">
                            <div class="gallery-widget widget">
                                <div class="title-widget">QALEREYA</div>
                                <div class="content-widget">
                                    <div class="gallery-list"><a href="#" class="thumb"><img src="assets/images/gallery/gallery-01.jpg" alt="" class="img-responsive"/></a><a href="#" class="thumb"><img src="assets/images/gallery/gallery-02.jpg" alt="" class="img-responsive"/></a><a href="#" class="thumb"><img src="assets/images/gallery/gallery-03.jpg" alt="" class="img-responsive"/></a><a href="#" class="thumb"><img src="assets/images/gallery/gallery-04.jpg" alt="" class="img-responsive"/></a><a href="#" class="thumb"><img src="assets/images/gallery/gallery-05.jpg" alt="" class="img-responsive"/></a><a href="#" class="thumb"><img src="assets/images/gallery/gallery-06.jpg" alt="" class="img-responsive"/></a><a href="#" class="thumb"><img src="assets/images/gallery/gallery-07.jpg" alt="" class="img-responsive"/></a><a href="#" class="thumb"><img src="assets/images/gallery/gallery-08.jpg"
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                        alt="" class="img-responsive"/></a></div>
                                    <div class="clearfix"></div>
                                    <a href="gallery-masonry.html" class="view-more">Daha ??ox bax??n&nbsp;<i class="fa fa-angle-double-right mls"></i></a></div>
                            </div>
                        </div>
                        <div class="col-md-3 col-sm-6 col-xs-6 sd380">
                            <div class="mailing-widget widget">
                                <div class="title-widget">po??t g??nd??ri??i</div>
                                <div class="content-wiget"><p>??n son yenil??m??l??ri v?? t??klifl??ri ??ld?? etm??k ??????n po??t siyah??m??za daxil olun.</p>

                                    <form action="index.html">
                                        <div class="input-group"><input type="text" placeholder="Email ??nvan" class="form-control form-email-widget"/><span class="input-group-btn"><input type="submit" value="???" class="btn btn-email"/></span></div>
                                    </form>
                                    <p>M??xfiliyiniz?? h??rm??t edirik</p>

                                    <div class="socials">
                                        <a href="{{$sett->facebook_link}}" target="_blank" class="facebook"><i class="fa fa-facebook"></i></a>
                                        <a href="{{$sett->email_link}}" target="_blank" class="google"><i class="fa fa-envelope-o"></i></a>
                                        <a href="{{$sett->instagram_link}}" target="_blank" class="twitter"><i class="fa fa-instagram"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="hyperlink">
                <div class="pull-left hyper-left">
                    <ul class="list-inline">
                        <li><a href="index.html">ANA S??H??F??</a></li>
                        <li><a href="about-us.html">HAQQIMIZDA</a></li>
                        <li><a href="services.html">X??DM??TL??R</a></li>
                        <li><a href="gallery-masonry.html">QALEREYA</a></li>
                        <li><a href="news-masonry.html">X??B??RL??R</a></li>
                        <li><a href="contact.html">??LAQ??</a></li>
                    </ul>
                </div>
                <div class="pull-right hyper-right">?? 2021 M????llif h??quqlar?? qorunur AmondeSoft</div>
            </div>
        </div>
    </div>
</footer>
<!-- THEME SETTING-->
<div class="theme-setting">
    <div class="theme-loading">
        <div class="theme-loading-content">
            <div class="dots-loader"></div>
        </div>
    </div>

    <div class="content-theme-setting"><h2 class="title">setting color</h2>
        <ul class="list-unstyled list-inline color-skins">
            <li data-color="color-1"></li>
            <li data-color="color-2"></li>
            <li data-color="color-3"></li>
            <li data-color="color-4"></li>
            <li data-color="color-5"></li>
            <li data-color="color-6"></li>
            <li data-color="color-7"></li>
            <li data-color="color-8"></li>
            <li data-color="color-9"></li>
            <li data-color="color-10"></li>
        </ul>
    </div>
</div>
<!-- LOADING-->
<div class="body-2 loading">
    <div class="dots-loader"></div>
</div>
<!-- JAVASCRIPT LIBS--><!--script.--><!--    if ((Cookies.get('color-skin') != undefined) && (Cookies.get('color-skin') != 'color-1')) {--><!--        $('.logo .header-logo img').attr('src', 'assets/images/logo-' + Cookies.get('color-skin') + '.png');--><!--    } else if ((Cookies.get('color-skin') == undefined) || (Cookies.get('color-skin') == 'color-1')) {--><!--        $('.logo .header-logo img').attr('src', 'assets/images/logo-color-1.png');--><!--    }-->
<script src="{{asset('')}}Front/assets/libs/bootstrap-3.3.5/js/bootstrap.min.js"></script>
<script src="{{asset('')}}Front/assets/libs/smooth-scroll/jquery-smoothscroll.js"></script>
<script src="{{asset('')}}Front/assets/libs/owl-carousel-2.0/owl.carousel.min.js"></script>
<script src="{{asset('')}}Front/assets/libs/appear/jquery.appear.js"></script>
<script src="{{asset('')}}Front/assets/libs/count-to/jquery.countTo.js"></script>
<script src="{{asset('')}}Front/assets/libs/wow-js/wow.min.js"></script>
<script src="{{asset('')}}Front/assets/libs/selectbox/js/jquery.selectbox-0.2.min.js"></script>
<script src="{{asset('')}}Front/assets/libs/fancybox/js/jquery.fancybox.js"></script>
<script src="{{asset('')}}Front/assets/libs/fancybox/js/jquery.fancybox-buttons.js"></script>
<!-- MAIN JS-->
<script src="{{asset('')}}Front/assets/js/main.js"></script>
<!-- LOADING SCRIPTS FOR PAGE-->
<script src="{{asset('')}}Front/assets/libs/isotope/isotope.pkgd.min.js"></script>
<script src="{{asset('')}}Front/assets/libs/isotope/fit-columns.js"></script>
<script src="{{asset('')}}Front/assets/js/pages/homepage.js"></script>
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAu6tm60TzeUo9rWpLnrQ7mrFn4JPMVje4&amp;amp;sensor=false"></script>
<script src="{{asset('')}}Front/assets/js/pages/contact.js"></script>
<script src="{{asset('')}}Front/assets/libs/media-element/build/mediaelement-and-player.min.js"></script>
<script src="{{asset('')}}Front/assets/libs/isotope/isotope.pkgd.min.js"></script>
<script src="{{asset('')}}Front/assets/js/pages/news-masonry.js"></script>
<script src="{{asset('')}}Front/assets/js/pages/gallery.js"></script>

@yield('js')

</body>
</html>
