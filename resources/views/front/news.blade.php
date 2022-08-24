
@extends('front/template')
@section('content')

    <div id="wrapper-content"><!-- PAGE WRAPPER-->
        <div id="page-wrapper"><!-- MAIN CONTENT-->
            <div class="main-content"><!-- CONTENT-->
                <div class="content">
                    <div class="section background-opacity page-title set-height-top">
                        <div class="container">
                            <div class="page-title-wrapper"><h2 class="captions">XƏBƏRLƏR & YENİLİKLƏR</h2>
                                <ol class="breadcrumb">
                                    <li><a href="index.html">Ana səhifə</a></li>
                                    <li class="active"><a href="#">Xəbərlər</a></li>
                                </ol>
                            </div>
                        </div>
                    </div>
                    <div class="section nav-subscribe">
                        <div class="container">
                            <div class="nav-subscribe-wrapper">
                                <div class="nav-subscribe-left"><p class="subscribe-text"> <b class="focus">Xəbərlərimizə</b> abunə ol</p></div>
                                <div class="nav-subscribe-right">
                                    <button class="btn btn-green btn-bold"><span>ABUNƏ OL</span></button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="section section-padding news-page">
                        <div class="container">
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="news-page-wrapper news-masonry">
                                        @foreach($news as $new)
                                        <div class="gird-item">
                                            <div class="edugate-layout-3 news-gird">
                                                <div class="edugate-layout-3-wrapper"><a href="{{$new->fb_link}}" target="_blank" class="edugate-image"><img src="{{$new->news_img}}"  alt="" class="img-responsive"/></a> <!-- 750*540 -->

                                                    <div class="edugate-content"><a href="{{$new->fb_link}}" target="_blank" class="title">Yeni filialın açılışı</a>

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
                                                        <a class="btn btn-green" href="{{$new->fb_link}}" target="_blank"><span>Davamı</span></a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        @endforeach

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
