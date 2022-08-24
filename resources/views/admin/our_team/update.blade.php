@extends('admin/template')
@section('content')

    <div class="col-md-12 col-sm-12 col-xs-12">
        <div class="x_panel">
            <div class="x_title">
                <h2>KOMANDA ƏLAVƏ EDİN</h2>
                <div class="clearfix"></div>
            </div>
            <div class="x_content">
                <br />
                <form id="form_id" action="" method="POST" data-parsley-validate class="form-horizontal form-label-left needs-validation " novalidate>

                    <div class="form-group">
                        <label class="control-label col-md-2 col-sm-3 col-xs-12" for="first-name">Adı, soyadı, Ata adı<span class="required">*</span>
                        </label>
                        <div class="col-md-9 col-sm-6 col-xs-12">
                            <input type="text" required="required" name="name_surname" class="form-control col-md-7 col-xs-12" placeholder="Məs(Vəliyev Elman Akif oğlu)" value="{{$our_team->name_surname}}">
                            <div class="invalid-feedback">
                                Xana boş ola bilməz!
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label col-md-2 col-sm-3 col-xs-12" for="last-name">Tutduğu Vəzifəsi<span class="required">*</span>
                        </label>
                        <div class="col-md-9 col-sm-6 col-xs-12">
                            <input type="text" required="required" name="position" class="form-control col-md-7 col-xs-12" placeholder="Məs(Laboratoriya müdürü)" value="{{$our_team->position}}">
                            <div class="invalid-feedback">
                                Xana boş ola bilməz!
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label col-md-2 col-sm-3 col-xs-12" for="last-name">Vəzifəsinin qısa təsviri<span class="required">*</span>
                        </label>
                        <div class="col-md-9 col-sm-6 col-xs-12">
                            <input type="text" required="required" name="position_descr" class="form-control col-md-7 col-xs-12" placeholder="Məs(İxtisas - Ümumi aqronom)" value="{{$our_team->position_descr}}">
                            <div class="invalid-feedback">
                                Xana boş ola bilməz!
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label col-md-2 col-sm-3 col-xs-12" for="last-name">Elektron Ünvan<span class="required">*</span>
                        </label>
                        <div class="col-md-9 col-sm-6 col-xs-12">
                            <input type="text" required="required" name="email_adress" class="form-control col-md-7 col-xs-12" placeholder="Məs(vəliyev@splab.az)" value="{{$our_team->email_adress}}">
                            <div class="invalid-feedback">
                                Xana boş ola bilməz!
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label col-md-2 col-sm-3 col-xs-12" for="last-name">Seki<span class="required">*</span>
                        </label>
                        <div class="col-md-9 col-sm-6 col-xs-12">
                            <img src="{{asset('')}}uploads/{{$our_team->img}}"  width="100"  height="100" alt="">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label col-md-2 col-sm-3 col-xs-12" for="last-name">Şəkil<span class="required">*</span>
                        </label>
                        <div class="col-md-9 col-sm-6 col-xs-12">
                            <div class="cropper">
                                <main class="page">
                                    <!-- input file -->
                                    <div class="boxs">
                                        <input type="file" name="img" id="file-input">
                                    </div>
                                    <!-- leftbox -->
                                    <div class="boxs-2">
                                        <div class="result"></div>
                                    </div>
                                    <!--rightbox-->
                                    <div class="boxs-2 img-result hide">
                                        <!-- result of crop -->
                                        <img class="cropped" src="" alt="">
                                    </div>
                                    <!-- input file -->
                                    <div class="boxs d-flex">
                                        <div class="options hide">
                                            <label class="p-0"> Eni</label>
                                            <input type="number" class="img-w" value="300" min="100" max="1200" />
                                        </div>
                                        <!-- save btn -->
                                        <button class="btn save hide">Təsdiqlə</button>
                                        <!-- download btn -->
                                        <a href="" class="btn download hide ">Yüklə</a>
                                    </div>
                                </main>
                            </div>


                        </div>
                    </div>
                    <div class="ln_solid"></div>
                    <div class="form-group">
                        <div class="col-md-2 col-sm-6 col-xs-12 col-md-offset-2">
                            <a href="our-team.html" class="btn btn-primary">Ləğv et</a>
                            <button type="button" form="form_id" id="upd_btn" class="btn btn-success">Tamamla</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>

@endsection

@section('css')
    <link rel="stylesheet" href="{{asset('')}}Back/assets/plugins/cropper/cropper.css">
@endsection
@section('js')
    <script src="{{asset('')}}Back/assets/plugins/cropper/cropper.js"></script>
    <script src="{{asset('')}}Back/assets/js/cropper.js"></script>
    <script>
        $(document).ready(function(){
            $(document).on('click','#upd_btn',function (e){
                e.preventDefault();


                $.ajaxSetup({
                    headers: {
                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                    }
                });
                $.ajax({
                    type:"PUT",
                    url:"{{route('our_team.update',$our_team->id)}}",
                    data: {

                        serialize:$('#form_id').serialize(),
                        imgsrc2:imgsrc2
                    },
                    success:function(response){
                        not12();
                        // document.getElementById('form_id').reset();
                        console.log(response);
                    },
                    error:function(response){
                        not13();
                    }

                });

            });
        });



    </script>
@endsection
