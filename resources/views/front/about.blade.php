
@extends('front/template')
@section('content')

    <div id="wrapper-content"><!-- PAGE WRAPPER-->
        <div id="page-wrapper"><!-- MAIN CONTENT-->
            <div class="main-content"><!-- CONTENT-->
                <div class="content"><!-- SLIDER BANNER-->

                    <div class="section background-opacity page-title set-height-top" style="background-image: url({{asset('')}}Front/assets/images/6508589.jpg);">
                        <div class="container">
                            <div class="page-title-wrapper"><!--.page-title-content--><h2 class="captions">Bizim Haqqımızda</h2>
                                <ol class="breadcrumb">
                                    <li><a href="index.html">Ana səhifə</a></li>
                                    <li class="active"><a href="#">Haqqımızda</a></li>
                                </ol>
                            </div>
                        </div>
                    </div>
                    <div class="section nav-subscribe">
                        <div class="container">
                            <div class="nav-subscribe-wrapper">
                                <div class="nav-subscribe-left"><p class="subscribe-text">Yeniliklərdən  Xəbərdar <b class="focus">Olun</b></p></div>
                                <div class="nav-subscribe-right">
                                    <button class="btn btn-green btn-bold"><span>ABÜNƏ OL</span></button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--INTRO EDUGATE-->
                    <div class="section intro-edu" id="whySplab">
                        <div class="container">
                            <div class="intro-edu-wrapper">
                                <div class="row">
                                    <div class="col-md-5"><img src="{{$about->ab_img1}}" alt="" class="intro-image fadeInLeft animated wow"/></div><!-- 400 * 500 -->
                                    <div class="col-md-7">
                                        <div class="intro-title"><b>{{$about->ab_title1}}</div>
                                        <div class="intro-content"><p>{{$about->ab_text1}}</p>

                                            <p>Laboratoriyamızda torpağın, bitkinin, gübrənin və suyun  aqrokimyəvi, toxumun səpin və keyfiyyəti analizini  ən yeni texnologiyalarla  həyata keçirir.</p></div>
                                        <div class="group-button">
                                            <a class="btn btn-transition-2" href="services.html"><span>xidmətlərlə tanış ol</span></a>
                                            <a class="btn btn-green" href="contact.html"><span>əməkdaşlığa başla</span></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="section section-padding edu-ab">
                        <div class="container">
                            <div class="edu-ab">
                                <div class="group-title-index edu-ab-title"><h2 class="center-title">UĞURUMUZUN <b>SİRRİ</b></h2><h4 class="top-title">Müştəri mərkəzli fəaliyyət alqoritmi</h4></div>
                                <div class="edu-ab-content">
                                    <ul class="list-unstyled list-inline">
                                        <li>
                                            <div class="circle-icon"><i class="fa fa-wifi fa-2x"></i></div>
                                            <span>Sürətli qeydiyyat</span></li>
                                        <li>
                                            <div class="circle-icon fa-2x"><i class="fa fa-search"></i></div>
                                            <span>Peşəkar iş</span></li>
                                        <li>
                                            <div class="circle-icon fa-2x"><i class="fa fa-thumbs-up"></i></div>
                                            <span>Dəqiq nəticə</span></li>
                                        <li>
                                            <div class="circle-icon fa-2x"><i class="fa fa-user"></i></div>
                                            <span>Məmnum müştəri</span></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="section section-padding edu-feature" id="fealiyyatsahemiz">
                        <div class="container">
                            <div class="edu-feature-wrapper">
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="row">
                                            <div class="col-md-12">
                                                <div class="group-title-index edu-feature-text"><h2 class="center-title">{{$about->ab_title2}}</h2>

                                                    <p class="top-title">{{$about->ab_text2}}</p></div>
                                            </div>
                                            <div class="col-md-8">
                                                <ul id="accordion" role="tablist" class="panel-group list-unstyled edu-feature-list">
                                                    <li class="panel">
                                                        <div role="tab" id="item-1" class="col-item-1"><i class="fa fa-check-circle"></i><a href="#lesson" data-toggle="collapse" data-parent="#accordion" role="button" aria-expanded="true" aria-controls="lesson"><span>Toxum</span> analizi</a></div>
                                                        <div id="lesson" role="tabpanel" aria-labelledby="item-1" class="collapse">
                                                            <div class="panel-body col-item-2">{{$about->ab_seed_analysis}}</div>
                                                        </div>
                                                    </li>
                                                    <li class="panel">
                                                        <div role="tab" id="item-2" class="col-item-1"><i class="fa fa-check-circle"></i><a href="#display" data-toggle="collapse" data-parent="#accordion" role="button" aria-expanded="true" aria-controls="lesson"><span>Torpaq</span> analizi</a></div>
                                                        <div id="display" role="tabpanel" aria-labelledby="item-2" class="collapse">
                                                            <div class="panel-body col-item-2">{{$about->ab_soil_analysis}}</div>
                                                        </div>
                                                    </li>
                                                    <li class="panel">
                                                        <div role="tab" id="item-3" class="col-item-1"><i class="fa fa-check-circle"></i><a href="#discuss" data-toggle="collapse" data-parent="#accordion" role="button" aria-expanded="true" aria-controls="lesson"><span>Su</span> analizi</a></div>
                                                        <div id="discuss" role="tabpanel" aria-labelledby="item-3" class="collapse">
                                                            <div class="panel-body col-item-2">{{$about->ab_water_analysis}}</div>
                                                        </div>
                                                    </li>
                                                    <li class="panel">
                                                        <div role="tab" id="item-4" class="col-item-1"><i class="fa fa-check-circle"></i><a href="#capability1" data-toggle="collapse" data-parent="#accordion" role="button" aria-expanded="true" aria-controls="lesson"><span>Bitki</span> analizi</a></div>
                                                        <div id="capability1" role="tabpanel" aria-labelledby="item-4" class="collapse">
                                                            <div class="panel-body col-item-2">{{$about->ab_plant_analysis}}</div>
                                                        </div>
                                                    </li>
                                                    <li class="panel">
                                                        <div role="tab" id="item-5" class="col-item-1"><i class="fa fa-check-circle"></i><a href="#capability2" data-toggle="collapse" data-parent="#accordion" role="button" aria-expanded="true" aria-controls="lesson"><span>Gübrə</span> analizi</a></div>
                                                        <div id="capability2" role="tabpanel" aria-labelledby="item-5" class="collapse">
                                                            <div class="panel-body col-item-2">{{$about->ab_fertilizer_analysis}}</div>
                                                        </div>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6"><img src="{{asset('')}}Front/assets/images/istockphoto-857876568-612x612.jpg" alt="" class="computer-image"/></div><!-- 570*450  -->
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- PROGRESS BARS-->

                    <div class="section progress-bars section-padding" id="statistics">
                        <div class="container">
                            <div class="progress-bars-content">
                                <div class="progress-bar-wrapper"><h2 class="title-2">HAQQIMIZDA BƏZİ VACİB STATİSTİKALAR</h2>

                                    <div class="row">
                                        <div class="content">
                                            <div class="col-sm-3">
                                                <div class="progress-bar-number">
                                                    <div data-from="44" data-to="{{$statistic->service_count}}" data-speed="1000" class="num">ss</div>
                                                    <p class="name-inner">Xidmət Sayı</p></div>
                                            </div>
                                            <div class="col-sm-3">
                                                <div class="progress-bar-number">
                                                    <div data-from="0" data-to="{{$statistic->service_districts_count}}" data-speed="1000" class="num">11</div>
                                                    <p class="name-inner">Xidmət Göstərilən Rayonlar</p></div>
                                            </div>
                                            <div class="col-sm-3">
                                                <div class="progress-bar-number">
                                                    <div data-from="0" data-to="{{$statistic->branch_count}}" data-speed="1000" class="num"></div>
                                                    <p class="name-inner">Filial Sayı</p></div>
                                            </div>
                                            <div class="col-sm-3">
                                                <div class="progress-bar-number">
                                                    <div data-from="0" data-to="{{$statistic->employee_count}}" data-speed="1000" class="num"></div>
                                                    <p class="name-inner">Əməkdaş Sayı</p></div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="group-button">
                                        <button onclick="window.location.href='services.php'" class="btn btn-transition-3"><span>Labaratoriya xidmətləri</span></button>
                                        <button onclick="window.location.href='contact.php'" class="btn btn-green-3"><span>Testə başla</span></button>
                                    </div>
                                    <div class="group-btn-slider">
                                        <div class="btn-prev"><i class="fa fa-angle-left"></i></div>
                                        <div class="btn-next"><i class="fa fa-angle-right"></i></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- WHY CHOOSE US-->
                    <div class="section why-choose-us">
                        <div class="why-choose-us-wrapper-top">
                            <div class="container">
                                <div class="why-choose-us-wrapper"><h2 class="title-2">Bizimlə əməkdaşlıq nə vəd edir?</h2>

                                    <p>{{$statistic->cooperation_withus}}</p>
                                    <button onclick="window.location.href='contact.html'" class="btn btn-green-2"><span>Xidmətlərimizdən yararlanın</span></button>
                                </div>
                                <div data-wow-delay="0.2s" data-wow-duration="1.2s" class="background-girl-1 wow fadeInUp"><img src="{{asset('')}}Front/assets/images/NMC11.png" alt="" class="img-responsive"/></div><!-- 350*450 -->
                            </div>
                        </div>
                        <div class="why-choose-us-wrapper-bottom background-opacity" style="background-image: url({{asset('')}}Front/assets/images/650858.jpg);"> <!-- 1920*1280 -->
                            <div class="container">
                                <div data-wow-delay="0.4s" data-wow-duration="1s" class="row why-choose-us-wrapper wow zoomIn">
                                    <div class="customs-row">
                                        <div class="col-sm-4 col-xs-6 section-icon"><img src="{{asset('')}}Front/assets/images/index-icons/customer(1).png" width="32" height="32" alt=""/>

                                            <p>{{$statistic->advantage_one}}</p></div>
                                        <div class="col-sm-4 col-xs-6 section-icon"><img src="{{asset('')}}Front/assets/images/index-icons/verify.png" width="32" height="32" alt=""/>

                                            <p> {{$statistic->advantage_two}}</p></div>
                                    </div>
                                    <div class="customs-row">
                                        <div class="col-sm-4 col-xs-6 section-icon"><img src="{{asset('')}}Front/assets/images/index-icons/social-media.png" width="32" height="32" alt=""/>

                                            <p>{{$statistic->advantage_three}}</p></div>
                                        <div class="col-sm-4 col-xs-6 section-icon"><img src="{{asset('')}}Front/assets/images/index-icons/digitalization (1).png" width="32" height="32" alt=""/>

                                            <p>{{$statistic->advantage_four}}</p></div>
                                    </div>
                                    <div class="customs-row">
                                        <div class="col-sm-4 col-xs-6 section-icon"><img src="{{asset('')}}Front/assets/images/index-icons/satisfaction.png" width="32" height="32" alt=""/>

                                            <p>{{$statistic->advantage_five}}</p></div>
                                        <div class="col-sm-4 col-xs-6 section-icon"><img src="{{asset('')}}Front/assets/images/index-icons/cash-payment.png" width="32" height="32" alt=""/>

                                            <p>{{$statistic->advantage_six}}</p></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- SLIDER TALK ABOUT US-->
                    <div class="section background-opacity slider-talk-about-us" id="musterireyi" style="background-image: url({{asset('')}}Front/assets/images/teams_background.jpg);"> <!--1920*1280 -->
                        <div class="container">
                            <div id="people-talk" data-ride="carousel" data-interval="5000" class="slider-talk-about-us-wrapper carousel slide">
                                <div role="listbox" class="slider-talk-about-us-content carousel-inner">

                                    @foreach($customer_says as $customer_say)


                                        <div class="peopel-item item {{$customer_say->is_active_cls}}"><p class="peopel-comment">{{$customer_say->c_title}}</p>

                                            <div class="group-peole-info">
                                                <div class="peopel-avatar"><img src="{{$customer_say->c_img}}" alt="" class="img-responsive"/></div> <!-- 400*400 -->
                                                <div class="peopel-name">{{$customer_say->c_name_surname}}</div>
                                                <div class="people-job">{{$customer_say->c_company}}</div>
                                                <div class="people-job">{{$customer_say->c_position}}</div>
                                            </div>
                                        </div>
                                    @endforeach

                                </div>
                            </div>
                        </div>
                        <div class="group-btn-slider"><a href="#people-talk" role="button" data-slide="prev">
                                <div class="btn-prev carousel-control left"><i class="fa fa-angle-left"></i></div>
                            </a><a href="#people-talk" role="button" data-slide="next">
                                <div class="btn-next carousel-control right"><i class="fa fa-angle-right"></i></div>
                            </a></div>
                    </div>





                    <!-- BEST STAFF-->
                    <div class="section section-padding background-opacity best-staff" style="background-image: url(assets/images/teams_background.jpg);"> <!-- 1920*1280 -->

                        <div class="container">
                            <div class="group-title-index"><h4 class="top-title">işinizi peşəkarlara həvalə edin</h4>

                                <h2 class="center-title">SPLab ailəsinin üzvləri</h2>

                                <div class="bottom-title"><img src="{{asset('')}}Front/assets/images/S_plab_green.png" alt="" width="80" height="40"></div>
                            </div>

                            <div class="best-staff-wrapper">
                                <div class="best-staff-content">
                                    <div class="staff-item customize">
                                        <div class="staff-item-wrapper">
                                            <div class="staff-info"><a href="#" class="staff-avatar"><img src="{{asset('')}}Front/assets/images/teams/qedirovnamiq.jpg" alt="" class="img-responsive"/></a><a href="#" class="staff-name">Qədirov Namiq Rəşid oğlu</a>

                                                <div class="staff-job">Laboratoriya müdiri</div>
                                                <div class="staff-desctiption">İxtisas - Ümumi aqronom</div>
                                            </div>
                                        </div>
                                        <div class="staff-socials"><a href="#" class="facebook"><i class="fa fa-facebook"></i></a><a href="#" class="google"><i class="fa fa-google-plus"></i></a><a href="#" class="twitter"><i class="fa fa-twitter"></i></a></div>
                                    </div>
                                    <div class="staff-item customize">
                                        <div class="staff-item-wrapper">
                                            <div class="staff-info"><a href="#" class="staff-avatar"><img src="{{asset('')}}Front/assets/images/teams/keremlieli.jpg" alt="" class="img-responsive"/></a><a href="#" class="staff-name">Kərəmli Əli Nizami oğlu</a>

                                                <div class="staff-job">Topoqraf</div>
                                                <div class="staff-desctiption">Ixtisasi – Torpağın kadastrı üzrə mühəndis – topoqraf</div>
                                            </div>
                                        </div>
                                        <div class="staff-socials"><a href="#" class="facebook"><i class="fa fa-facebook"></i></a><a href="#" class="google"><i class="fa fa-google-plus"></i></a><a href="#" class="twitter"><i class="fa fa-twitter"></i></a></div>
                                    </div>
                                    <div class="staff-item customize">
                                        <div class="staff-item-wrapper">
                                            <div class="staff-info"><a href="#" class="staff-avatar"><img src="{{asset('')}}Front/assets/images/teams/qasimovgulbeniz.jpg" alt="" class="img-responsive"/></a><a href="#" class="staff-name">Qasımova Gülbəniz Ayaz qızı</a>

                                                <div class="staff-job">Baş Aqrokimyaçı laborant</div>
                                                <div class="staff-desctiption">İxtisas – Aqrokimya və torpaqşünaslıq.</div>
                                            </div>
                                        </div>
                                        <div class="staff-socials"><a href="#" class="facebook"><i class="fa fa-facebook"></i></a><a href="#" class="google"><i class="fa fa-google-plus"></i></a><a href="#" class="twitter"><i class="fa fa-twitter"></i></a></div>
                                    </div>
                                    <div class="staff-item customize">
                                        <div class="staff-item-wrapper">
                                            <div class="staff-info"><a href="#" class="staff-avatar"><img src="{{asset('')}}Front/assets/images/teams/eliyevayaqut.jpg" alt="" class="img-responsive"/></a><a href="#" class="staff-name">Əliyeva Yaqut Sarı qızı</a>

                                                <div class="staff-job">Baş Aqrokimyaçı laborant</div>
                                                <div class="staff-desctiption">İxtisas – Aqrokimya və torpaqşünaslıq.</div>
                                            </div>
                                        </div>
                                        <div class="staff-socials"><a href="#" class="facebook"><i class="fa fa-facebook"></i></a><a href="#" class="google"><i class="fa fa-google-plus"></i></a><a href="#" class="twitter"><i class="fa fa-twitter"></i></a></div>
                                    </div>
                                    <div class="staff-item customize">
                                        <div class="staff-item-wrapper">
                                            <div class="staff-info"><a href="#" class="staff-avatar"><img src="{{asset('')}}Front/assets/images/teams/serdarlixatire.jpg" alt="" class="img-responsive"/></a><a href="#" class="staff-name">Sərdarlı Xatirə Qulam qızı</a>

                                                <div class="staff-job">Baş Aqrokimyaçı laborant</div>
                                                <div class="staff-desctiption">İxtisas – Aqrokimya və torpaqşünaslıq.</div>
                                            </div>
                                        </div>
                                        <div class="staff-socials"><a href="#" class="facebook"><i class="fa fa-facebook"></i></a><a href="#" class="google"><i class="fa fa-google-plus"></i></a><a href="#" class="twitter"><i class="fa fa-twitter"></i></a></div>
                                    </div>
                                    <div class="staff-item customize">
                                        <div class="staff-item-wrapper">
                                            <div class="staff-info"><a href="#" class="staff-avatar"><img src="{{asset('')}}Front/assets/images/teams/AgayevaTurkan.jpg" alt="" class="img-responsive"/></a><a href="#" class="staff-name">Ağayeva Türkan  İbrahim qızı</a>

                                                <div class="staff-job">Baş aqrokimyaçı</div>
                                                <div class="staff-desctiption">İxtisas – Biologiya.</div>
                                            </div>
                                        </div>
                                        <div class="staff-socials"><a href="#" class="facebook"><i class="fa fa-facebook"></i></a><a href="#" class="google"><i class="fa fa-google-plus"></i></a><a href="#" class="twitter"><i class="fa fa-twitter"></i></a></div>
                                    </div>
                                    <div class="staff-item customize">
                                        <div class="staff-item-wrapper">
                                            <div class="staff-info"><a href="#" class="staff-avatar"><img src="{{asset('')}}Front/assets/images/teams/AbdullayevaŞəkurə.jpg" alt="" class="img-responsive"/></a><a href="#" class="staff-name">Abdullayeva Şəkurə Məhəmməd qızı </a>

                                                <div class="staff-job">Baş laborant</div>
                                                <div class="staff-desctiption">İxtisas – Mühəndis-texnoloq.</div>
                                            </div>
                                        </div>
                                        <div class="staff-socials"><a href="#" class="facebook"><i class="fa fa-facebook"></i></a><a href="#" class="google"><i class="fa fa-google-plus"></i></a><a href="#" class="twitter"><i class="fa fa-twitter"></i></a></div>
                                    </div>
                                    <div class="staff-item customize">
                                        <div class="staff-item-wrapper">
                                            <div class="staff-info"><a href="#" class="staff-avatar"><img src="{{asset('')}}Front/assets/images/teams/NəsirovSəfəralı.jpg" alt="" class="img-responsive"/></a><a href="#" class="staff-name">Nəsirov Səfəralı Üzeyir oğlu</a>

                                                <div class="staff-job">Bakı Laboratoriyasının direktoru</div>
                                                <div class="staff-desctiption">İxtisas – Ümumi Aqronom.</div>
                                            </div>
                                        </div>
                                        <div class="staff-socials"><a href="#" class="facebook"><i class="fa fa-facebook"></i></a><a href="#" class="google"><i class="fa fa-google-plus"></i></a><a href="#" class="twitter"><i class="fa fa-twitter"></i></a></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="group-btn-slider">
                            <div class="btn-prev"><i class="fa fa-angle-left"></i></div>
                            <div class="btn-next"><i class="fa fa-angle-right"></i></div>
                        </div>
                    </div>


                    <!-- SLIDER LOGO-->
                    <div class="section slider-logo" id="partners">
                        <div class="container">
                            <div class="slider-logo-wrapper">
                                <div class="slider-logo-content">
                                    <div class="carousel-logos owl-carousel">
                                        <div class="logo-iteam item"><a href="https://agroland.az/"><img src="{{asset('')}}Front/assets/images/logo/agroland.png" alt="" class="img-responsive"/></a></div> <!-- 110*90 -->
                                        <div class="logo-iteam item"><a href="#"><img src="{{asset('')}}Front/assets/images/logo/amondesoftt.png" alt="" class="img-responsive"/></a></div> <!-- 110*90 -->
                                        <div class="logo-iteam item"><a href="https://azlegals.az/"><img src="{{asset('')}}Front/assets/images/logo/azlegal.png" alt="" class="img-responsive"/></a></div> <!-- 110*90 -->
                                        <div class="logo-iteam item"><a href="bineaqro.az"><img src="{{asset('')}}Front/assets/images/logo/bineaqro.png" alt="" class="img-responsive"/></a></div> <!-- 110*90 -->
                                        <div class="logo-iteam item"><a href="https://agroland.az/#kraunkor"><img src="{{asset('')}}Front/assets/images/logo/kraunkor.png" alt="" class="img-responsive"/></a></div> <!-- 110*90 -->
                                        <div class="logo-iteam item"><a href="http://www.bmp.az/"><img src="{{asset('')}}Front/assets/images/logo/BakuMedicalPlaza.png" alt="" class="img-responsive"/></a></div> <!-- 110*90 -->
                                        <div class="logo-iteam item"><a href="saraqrup.com"><img src="{{asset('')}}Front/assets/images/logo/Saraqrupp.png" alt="" class="img-responsive"/></a></div> <!-- 110*90 -->
                                        <div class="logo-iteam item"><a href="https://tornado.az/ "><img src="{{asset('')}}Front/assets/images/logo/Tornado.png" alt="" class="img-responsive"/></a></div> <!-- 110*90 -->
                                        <div class="logo-iteam item"><a href="https://xalqbank.az/"><img src="{{asset('')}}Front/assets/images/logo/Xalqbank.png" alt="" class="img-responsive"/></a></div> <!-- 110*90 -->

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- BUTTON BACK TO TOP-->
        <div id="back-top"><a href="#top"><i class="fa fa-angle-double-up"></i></a></div>
    </div>

@endsection

@section('css')

@endsection
@section('js')

@endsection
