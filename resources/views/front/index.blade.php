@extends('front/template')
@section('content')

    <div id="wrapper-content"><!-- PAGE WRAPPER-->
        <div id="page-wrapper"><!-- MAIN CONTENT-->
            <div class="main-content"><!-- CONTENT-->
                <div class="content"><!-- SLIDER BANNER-->
                    <div class="section slider-banner set-height-top">
                        @foreach($sliders as $slider)
                        <div class="slider-item">
                            <div class="slider-1" style="background-image: url({{asset('')}}{{$slider->s_img}})">
                                <div class="slider-caption">
                                    <div class="container"><h5 class="text-info-2">{{$slider->s_about}}</h5>

                                        <h3 class="text-info-1">{{$slider->s_title}}</h3>

                                        <p class="text-info-3">{{$slider->s_short_about}}</p>
                                        <a href="about-us.html#fealiyyatsahemiz" class="btn btn-green"><span>Daha ətraflı</span></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        @endforeach

                    </div>
                    <!-- CHOOSE COURSES-->
                    <div class="section section-padding choose-course">
                        <div class="container">
                            <div class="group-title-index"><h4 class="top-title">TANIŞ OL</h4>

                                <h2 class="center-title">LABORATOR   XİDMƏTLƏR</h2>

                                <div class="bottom-title"><img src="{{asset('')}}Front/assets/images/S_plab_green.png" alt="" width="80" height="40"></div>
                            </div>
                            <div class="choose-course-wrapper row">
                                <div class="col-md-4 col-xs-6 col-sm-12">
                                    <div class="item-course item-1">
                                        <div class="icon-circle">
                                            <div class="icon-background"><img src="{{asset('')}}Front/assets/images/index-icons/soil(1).png" alt=""></div>
                                            <div class="info">
                                                <div class="info-back"><a href="#"><small>Istənilən növ torpaq keyfiyyət analizi aparılır. </small></a></div>
                                            </div>
                                        </div>
                                        <div class="name-course"><a href="#">TORPAQ   ANALİZİ</a></div>
                                    </div>
                                </div>
                                <div class="col-md-4 col-xs-6 col-sm-12" >
                                    <div class="item-course item-2">
                                        <div class="icon-circle">
                                            <div class="icon-background"><img src="{{asset('')}}Front/assets/images/index-icons/water(1).png" alt=""></div>
                                            <div class="info">
                                                <div class="info-back"><a href="#"><small>Suyun təsərrüfat üçün yararlı olub olmamasına görə lazimi analizlərin aparılması. </small></a></div>
                                            </div>
                                        </div>
                                        <div class="name-course"><a href="#">SU ANALİZİ</a></div>
                                    </div>
                                </div>
                                <!--<div class="col-md-4 col-xs-6 col-sm-12">-->
                                <!--    <div class="item-course item-3">-->
                                <!--        <div class="icon-circle">-->
                                <!--            <div class="icon-background"><img src="assets/images/index-icons/fertilizer(1).png" alt=""></div>-->
                                <!--            <div class="info">-->
                                <!--                <div class="info-back"><a href="courses.html"><small>Gübrənin yararlı olub olmamasına görə lazimi analizlərin aparılması.</small></a></div>-->
                                <!--            </div>-->
                                <!--        </div>-->
                                <!--        <div class="name-course"><a href="courses.html">GÜBRƏ ANALİZİ </a><i class="fa fa-long-arrow-right"></i></div>-->
                                <!--    </div>-->
                                <!--</div>-->

                                <div class="col-md-4 col-xs-6 col-sm-12" style="margin-bottom: 70px;">
                                    <div class="item-course item-5">
                                        <div class="icon-circle">
                                            <div class="icon-background"><img src="{{asset('')}}Front/assets/images/index-icons/plant.png" alt=""></div>
                                            <div class="info">
                                                <div class="info-back"><a href="#"><small>Toxumun analizlərini apararaq yüksək məhsuldarlıq əldə edirsiniz.</small></a></div>
                                            </div>
                                        </div>
                                        <div class="name-course"><a href="#">TOXUM  ANALİZİ</a></div>
                                    </div>
                                </div>
                                <div class="col-md-4 col-xs-6 col-sm-12" style="margin-bottom: 70px;">
                                    <div class="item-course item-4">
                                        <div class="icon-circle">
                                            <div class="icon-background"><img src="{{asset('')}}Front/assets/images/index-icons/cience-analysis.png" alt=""></div>
                                            <div class="info">
                                                <div class="info-back"><a href="analysis-see-2.html"><small>Bitki analizi nəticəsində element çatışmazlığı müəyyən edilir.</small></a></div>
                                            </div>
                                        </div>
                                        <div class="name-course"><a href="analysis-see-2.html">SU NÜMUNƏSİNİN GÖTÜRÜLMƏ QAYDASI </a><i class="fa fa-long-arrow-right"></i></div>
                                    </div>
                                </div>
                                <div class="col-md-4 col-xs-6 col-sm-12" style="margin-bottom: 70px;">
                                    <div class="item-course item-6">
                                        <div class="icon-circle">
                                            <div class="icon-background"><img src="{{asset('')}}Front/assets/images/index-icons/soil(2).png" alt=""></div>
                                            <div class="info">
                                                <div class="info-back"><a href="analysis-see.html"><small>Nümunələr müxtəlif əkin təyinatlı torpaqlar üçün götürülür.</small></a></div>
                                            </div>
                                        </div>
                                        <div class="name-course"><a href="analysis-see.html">TORPAQ  NÜMUNƏSİNİN  GÖTÜRÜLMƏ  QAYDASI </a><i class="fa fa-long-arrow-right"></i></div>
                                    </div>
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
                    <!-- TOP COURSES-->
                    <!--
                    <div class="section section-padding top-courses">
                        <div class="container">
                            <div class="group-title-index"><h4 class="top-title">CHOOSE YOUR COURSE</h4>

                                <h2 class="center-title">the top popular courses for you</h2>

                                <div class="bottom-title"><img src="assets/images/S_plab_green.png" alt="" width="80" height="40"></div>
                            </div>
                            <div class="top-courses-wrapper">
                                <div class="top-courses-slider">
                                    <div class="top-courses-item">
                                        <div class="edugate-layout-2">
                                            <div class="edugate-layout-2-wrapper">
                                                <div class="edugate-content"><a href="courses-detail.html" class="title">Fermer Paketi</a>

                                                    <div class="info">
                                                        <div class="author item"><a href="#">By Admin</a></div>
                                                        <div class="date-time item"><a href="#">17 sep 2015</a></div>
                                                    </div>
                                                    <div class="info-more">
                                                        <div class="view item"><i class="fa fa-user"></i>

                                                            <p> 56</p></div>
                                                        <div class="comment item"><i class="fa fa-comment"></i>

                                                            <p> 239</p></div>
                                                    </div>
                                                    <div title="Rated 5.00 out of 5" class="star-rating"><span class="width-80"><strong class="rating">5.00</strong> out of 5</span></div>
                                                    <div class="description">It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout...</div>
                                                    <button onclick="window.location.href='courses-detail.html'" class="btn btn-green"><span>learn now</span></button>
                                                </div>
                                                <div class="edugate-image"><img src="assets/images/courses/courses-1.jpg" alt="" class="img-responsive"/></div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="top-courses-item">
                                        <div class="edugate-layout-2">
                                            <div class="edugate-layout-2-wrapper">
                                                <div class="edugate-content"><a href="courses-detail.html" class="title">Photoghaphy Master</a>

                                                    <div class="info">
                                                        <div class="author item"><a href="#">By Admin</a></div>
                                                        <div class="date-time item"><a href="#">17 sep 2015</a></div>
                                                    </div>
                                                    <div class="info-more">
                                                        <div class="view item"><i class="fa fa-user"></i>

                                                            <p> 56</p></div>
                                                        <div class="comment item"><i class="fa fa-comment"></i>

                                                            <p> 239</p></div>
                                                    </div>
                                                    <div title="Rated 5.00 out of 5" class="star-rating"><span class="width-10"><strong class="rating">5.00</strong> out of 5</span></div>
                                                    <div class="description">It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout...</div>
                                                    <button onclick="window.location.href='courses-detail.html'" class="btn btn-green"><span>learn now</span></button>
                                                </div>
                                                <div class="edugate-image"><img src="assets/images/courses/courses-2.jpg" alt="" class="img-responsive"/></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="top-courses-slider">
                                    <div class="top-courses-item">
                                        <div class="edugate-layout-2">
                                            <div class="edugate-layout-2-wrapper">
                                                <div class="edugate-content"><a href="courses-detail.html" class="title">Photoghaphy Master</a>

                                                    <div class="info">
                                                        <div class="author item"><a href="#">By Admin</a></div>
                                                        <div class="date-time item"><a href="#">17 sep 2015</a></div>
                                                    </div>
                                                    <div class="info-more">
                                                        <div class="view item"><i class="fa fa-user"></i>

                                                            <p> 56</p></div>
                                                        <div class="comment item"><i class="fa fa-comment"></i>

                                                            <p> 239</p></div>
                                                    </div>
                                                    <div title="Rated 5.00 out of 5" class="star-rating"><span class="width-70"><strong class="rating">5.00</strong> out of 5</span></div>
                                                    <div class="description">It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout...</div>
                                                    <button onclick="window.location.href='courses-detail.html'" class="btn btn-green"><span>learn now</span></button>
                                                </div>
                                                <div class="edugate-image"><img src="assets/images/courses/courses-3.jpg" alt="" class="img-responsive"/></div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="top-courses-item">
                                        <div class="edugate-layout-2">
                                            <div class="edugate-layout-2-wrapper">
                                                <div class="edugate-content"><a href="courses-detail.html" class="title">Photoghaphy Master</a>

                                                    <div class="info">
                                                        <div class="author item"><a href="#">By Admin</a></div>
                                                        <div class="date-time item"><a href="#">17 sep 2015</a></div>
                                                    </div>
                                                    <div class="info-more">
                                                        <div class="view item"><i class="fa fa-user"></i>

                                                            <p> 00</p></div>
                                                        <div class="comment item"><i class="fa fa-comment"></i>

                                                            <p> 02</p></div>
                                                    </div>
                                                    <div title="Rated 5.00 out of 5" class="star-rating"><span class="width-90"><strong class="rating">5.00</strong> out of 5</span></div>
                                                    <div class="description">It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout...</div>
                                                    <button onclick="window.location.href='courses-detail.html'" class="btn btn-green"><span>learn now</span></button>
                                                </div>
                                                <div class="edugate-image"><img src="assets/images/courses/courses-4.jpg" alt="" class="img-responsive"/></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="group-btn-top-courses-slider">
                                    <div class="btn-prev">&lsaquo;</div>
                                    <div class="btn-next">&rsaquo;</div>
                                </div>
                            </div>
                        </div>
                    </div>
                    -->
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
                    <!-- PRICING-->
                    <div class="section section-padding pricing">
                        <div class="container">
                            <div class="group-title-index"><h4 class="top-title">Ən uyğun qiymətlərlə</h4>

                                <h2 class="center-title">Paket xidmətləri</h2>

                                <div class="bottom-title"><img src="{{asset('')}}Front/assets/images/S_plab_green.png" alt="" width="80" height="40"></div>
                            </div>
                            <div class="row">
                                <div class="pricing-wrapper">
                                    @foreach($package_services as $package_services)
                                    <div class="col-sm-4">
                                        <div class="pricing-widget main active">
                                            <div class="pricing-header">
                                                <div class="price-cost">
                                                    <div class="inner"><p data-from="0" data-to="2" data-speed="1000" class="inner-number">0</p></div>
                                                </div>
                                            </div>

                                            <div class="pricing-content"><h3 class="pricing-title">{{$package_services->p_title}}</h3>

                                                <p class="pricing-subtitle">{{$package_services->p_about_short}}</p>
                                                <ul class="pricing-list">
                                                    <li><p><strong>{{$package_services->p_bottom_section_one}}</strong></p></li>
                                                    <li><p><strong>{{$package_services->p_bottom_section_two}}</strong></p></li>
                                                    <li><p><strong>{{$package_services->p_bottom_section_three}}</strong></p></li>
                                                    <li><p><strong>{{$package_services->p_bottom_section_four}}<sup>3</sup><sub>2-</sub></strong></p></li>
                                                    <li><p><strong>{{$package_services->p_bottom_section_five}}</strong></p></li>
                                                    <li><p><strong>İcra müddəti-</strong>{{$package_services->exec_time}}  </p></li>
                                                </ul>
                                                <div class="pricing-button"><a href="contact.html">Paketi seç</a></div>
                                            </div>

                                        </div>
                                    </div>
                                    @endforeach

                                </div>
                            </div>

                            <div class="group-btn-slider">
                                <div class="btn-prev"><i class="fa fa-angle-left"></i></div>
                                <div class="btn-next"><i class="fa fa-angle-right"></i></div>
                            </div>
                        </div>
                    </div>
                    <!-- SLIDER TALK ABOUT US-->


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
                    <!--LATEST NEW-->
                    <div class="section section-padding latest-news">
                        <div class="container">
                            <div class="group-title-index"><h4 class="top-title">Xəbərlər</h4>

                                <h2 class="center-title">Labaratoriya haqqında ən son yeniliklər</h2>

                                <div class="bottom-title"><img src="{{asset('')}}Front/assets/images/S_plab_green.png" alt="" width="80" height="40"></div>
                            </div>
                            <div class="latest-news-wrapper">


                            @foreach($news as $new)
                                <div class="edugate-layout-1">
                                    <div class="edugate-image"><img src="{{$new->news_img}}" alt="" class="img-responsive"/></div> <!-- 720*540 -->
                                    <div class="edugate-content"><a href="https://www.facebook.com/KendTeserrufatiLaboratoriyasi/videos/618689279252564"  target="_blank" class="title">Yeni filialın açılışı</a>

                                        <div class="info">
                                            <div class="author item"><a href="#">{{$new->by_whom}}</a></div>
                                            <div class="date-time item"><a href="#">{{$new->created_at}}</a></div>
                                        </div>
                                        <div class="info-more">
                                            <div class="view item"><i class="fa fa-user"></i>

                                                <p> 56</p></div>
                                            <div class="comment item"><i class="fa fa-comment"></i>

                                                <p> 239</p></div>
                                        </div>
                                        <div class="description">{{$new->subject}}</div>
                                        <a href="{{$new->fb_link}}" target="_blank" class="btn btn-green"><span>Davamı</span></a>
                                    </div>
                                </div>

                                @endforeach

                                <a href="https://www.facebook.com/SPLab-101736738973027/" target="_blank" class="btn btn-green btn-latest-new" style="width: 200px;"><span>Daha ətraflı<i class="fa fa-long-arrow-right"></i></span></a>
                            </div>
                        </div>
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
                    <!-- PICTURE AND GALLERY-->
                    <div class="section section-padding picture-gallery">
                        <div class="group-title-index"><h4 class="top-title">Bax və tanı</h4>

                            <h2 class="center-title">Şəkil və Qalereyamız</h2>

                            <div class="bottom-title"><img src="{{asset('')}}Front/assets/images/S_plab_green.png" alt="" width="80" height="40"></div>
                        </div>
                        <div class="picture-gallery-wrapper"><!-- Nav tabs-->
                            <ul role="tablist" class="nav nav-tabs edugate-tabs">
                                <li role="presentation" class="active"><a href="#campus" data-toggle="tab" class="text">Ümumi</a></li>
                                <li role="presentation"><a href="#education" data-toggle="tab" class="text">Beyləqan</a></li>
                                <li role="presentation"><a href="#building" data-toggle="tab" class="text">Bakı</a></li>
                            </ul>
                            <!-- Tab panes-->
                            <div class="tab-content gallery-content">
                                <div id="campus" role="tabpanel" class="tab-pane fade in active">
                                    <div class="grid">
                                        @foreach($galleries as $gallery)
                                        <div class="grid-item grid-item-{{$gallery->short_about}}"><a href="{{$gallery->gal_img}}" class="content fancybox-button"><img src="{{$gallery->gal_img}}" alt="" class="img-responsive"/></a></div>
                                        @endforeach
                                    </div>
                                </div>
                                <div id="education" role="tabpanel" class="tab-pane fade">
                                    <div class="grid">
                                        @foreach($galleries2 as $gallery2)
                                        <div class="grid-item grid-item-{{$gallery2->short_about}}"><a href="{{$gallery2->gal_img}}" class="content fancybox-button"><img src="{{$gallery2->gal_img}}" alt="" class="img-responsive"/></a></div>
                                        @endforeach
                                    </div>
                                </div>
                                <div id="building" role="tabpanel" class="tab-pane fade">
                                    <div class="grid">
                                        @foreach($galleries3 as $gallery3)
                                            <div class="grid-item grid-item-{{$gallery3->short_about}}"><a href="{{$gallery3->gal_img}}" class="content fancybox-button"><img src="{{$gallery3->gal_img}}" alt="" class="img-responsive"/></a></div>
                                        @endforeach
                                    </div>
                                </div>
                            </div>
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
