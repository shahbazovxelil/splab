@extends('front/template')
@section('content')

    <div id="wrapper-content"><!-- PAGE WRAPPER-->
        <div id="page-wrapper"><!-- MAIN CONTENT-->
            <div class="main-content"><!-- CONTENT-->
                <div class="content">
                    <div class="container">
                        <h2>SPLab aqrokimya laboratoriyası tərəfindən həyata keçirilən xidmətlər</h2>
                        <ul class="responsive-table">
                            <li class="table-header">
                                <div class="ser-col ser-col-1">№</div>
                                <div class="ser-col ser-col-2">Xidmətin adı</div>
                                <div class="ser-col ser-col-3"><p class="m-0 p-0">Analizlərin müddəti</p> <p class="m-0 p-0"><small>(iş günü)</small></p></div>
                            </li>
                            <li class="table-row">
                                <h4>Torpaq Analizi</h4>
                            </li>
                            @foreach($services1 as $servic1)
                            <li class="table-row">
                                <div class="ser-col ser-col-1" data-label="№">{{$loop->iteration}}</div>
                                <div class="ser-col ser-col-2" data-label="Xidmətin adı">{{$servic1->name}}</div>
                                <div class="ser-col ser-col-3" data-label="Analizlərin müddəti (iş günü)">{{$servic1->day}}</div>
                            </li>
                            @endforeach



                            <li class="table-row">
                                <h4>Suvarma suyu analizləri</h4>
                            </li>
                            @foreach($services2 as $servic2)
                                <li class="table-row">
                                    <div class="ser-col ser-col-1" data-label="№">{{$loop->iteration}}</div>
                                    <div class="ser-col ser-col-2" data-label="Xidmətin adı">{{$servic2->name}}</div>
                                    <div class="ser-col ser-col-3" data-label="Analizlərin müddəti (iş günü)">{{$servic2->day}}</div>
                                </li>
                            @endforeach


                            <li class="table-row">
                                <h4>Bitki (yarpağ) analizləri</h4>
                            </li>
                            @foreach($services3 as $servic3)
                                <li class="table-row">
                                    <div class="ser-col ser-col-1" data-label="№">{{$loop->iteration}}</div>
                                    <div class="ser-col ser-col-2" data-label="Xidmətin adı">{{$servic3->name}}</div>
                                    <div class="ser-col ser-col-3" data-label="Analizlərin müddəti (iş günü)">{{$servic3->day}}</div>
                                </li>
                            @endforeach

                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <div class="footer-top" style="margin-bottom: 30px; background-color: #727a91;">
            <div class="container">
                <div class="footer-top-wrapper">
                    <div class="footer-top-left"><p class="footer-top-focus">Xidmət çeşidlərimizlə tanış ol!</p>

                        <p class="footer-top-text">Komandamızın təqdim etdiyi peşəkar xidmətlərin adlı siyahısı</p></div>
                    <div class="footer-top-right">
                        <a href="SPLabXidmətNövləri.pdf" download class="btn btn-blue btn-bold"><span>Xidmətləri yüklə</span></a>
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
