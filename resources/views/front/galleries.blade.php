@extends('front/template')
@section('content')

    <div id="wrapper-content"><!-- PAGE WRAPPER-->
        <div id="page-wrapper"><!-- MAIN CONTENT-->

            <div class="main-content"><!-- CONTENT-->
                <div class="content">
                    <div class="section background-opacity page-title set-height-top">
                        <div class="container">
                            <div class="page-title-wrapper"><h2 class="captions">Qalereya</h2>
                                <ol class="breadcrumb">
                                    <li><a href="index.html">Ana Səhifə</a></li>
                                    <li class="active"><a href="#">Qalereya</a></li>
                                </ol>
                            </div>
                        </div>
                    </div>
                    <div class="section section-padding gallery-page gallery-mansonry">
                        <div class="container">
                            <div class="gallery-nav">
                                <ul id="filters" class="nav nav-tabs edugate-tabs button-group filters-button-group">
                                    <li data-filter="*" data-category="all" class="tab active">
                                        <div class="text">Ümumi</div>
                                    </li>
                                    <li data-filter=".beyleqan" data-category="beyleqan" class="tab">
                                        <div class="text">Beyləqan</div>
                                    </li>
                                    <li data-filter=".baki" data-category="baki" class="tab">
                                        <div class="text">Bakı</div>
                                    </li>
                                </ul>
                            </div>
                            <div class="grid">
                                @foreach($galleries1 as $gallery1)
                                <div data-category="beyleqan" class="grid-item beyleqan building">
                                    <a href="#" class="link">
                                    <span class="content">
                                        <span class="content-title">SPLab</span>
                                        <span class="content-edu"><i class="icons fa fa-file-text"></i>
                                            <span>Daima sizinlə</span>
                                        </span>
                                    </span>
                                        <img src="{{$gallery1->gal_img}}" alt=""/>
                                    </a>
                                </div>
                                @endforeach
                                    @foreach($galleries2 as $gallery2)

                                    <div data-category="baki" class="grid-item baki building teacher">
                                    <a href="#" class="link">
                                    <span class="content">
                                        <span class="content-title">SPLab</span>
                                        <span class="content-edu"><i class="icons fa fa-file-text"></i>
                                            <span>Daima sizinlə</span>
                                        </span>
                                    </span>
                                        <img src="{{$gallery2->gal_img}}" alt=""/>
                                    </a>
                                </div>
                                    @endforeach

                            </div>
                            <div class="load-more">
                                <button class="btn btn-green"><span>Daha çox</span></button>
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
