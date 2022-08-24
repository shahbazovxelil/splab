@extends('admin/template')
@section('content')

    <div class="">
        <div class="clearfix"></div>
        <div class="row">
            <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                    <div class="x_title">
                        <h2>XƏBƏR ƏLAVƏ EDİN</h2>
                        <div class="clearfix"></div>
                    </div>
                    <div class="x_content">
                        <br />
                        <form id="form_id"  data-parsley-validate class="form-horizontal form-label-left needs-validation " novalidate>

                            <div class="form-group">
                                <label class="control-label col-md-2 col-sm-3 col-xs-12" for="first-name">Başlıq <span class="required">*</span>
                                </label>
                                <div class="col-md-9 col-sm-6 col-xs-12">
                                    <input type="text" name="title" required="required" class="form-control col-md-7 col-xs-12" placeholder="Daxil edin..." value="">
                                    <div class="invalid-feedback">
                                        Xana boş ola bilməz!
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="control-label col-md-2 col-sm-3 col-xs-12" for="last-name">Kim tərəfindən<span class="required">*</span>
                                </label>
                                <div class="col-md-9 col-sm-6 col-xs-12">
                                    <input type="text" name="by_whom" required="required" class="form-control col-md-7 col-xs-12" placeholder="Məs(By SPLAB)" value="">
                                    <div class="invalid-feedback">
                                        Xana boş ola bilməz!
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="control-label col-md-2 col-sm-3 col-xs-12" for="last-name">Facebook keçidi</span>
                                </label>
                                <div class="col-md-9 col-sm-6 col-xs-12">
                                    <input type="text" name="fb_link" required="required" class="form-control col-md-7 col-xs-12" placeholder='https://www.facebook.com/101736738973027/photos/a.118185173994850/118185990661435/' value="">
                                    <div class="invalid-feedback">
                                        Xana boş ola bilməz!
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="control-label col-md-2 col-sm-3 col-xs-12" for="last-name">Mövzu<span class="required">*</span>
                                </label>
                                <div class="col-md-9 col-sm-6 col-xs-12">
                                    <textarea type="text" name="subject" required="required" class="form-control col-md-7 col-xs-12" placeholder="Məs(vəliyev@splab.az)" value=""></textarea>
                                    <div class="invalid-feedback">
                                        Xana boş ola bilməz!
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="control-label col-md-2 col-sm-3 col-xs-12" for="last-name">Şəkil<span class="required">*</span>
                                </label>
                                <input type="file" name="news_img">
                            </div>
                            <div class="form-group">
                                <div class="col-md-2 col-sm-6 col-xs-12 col-md-offset-2">
                                    <button type="button" form="form_id" id="save_btn" class="btn btn-success">Yadda saxla</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection

@section('css')

@endsection
@section('js')
    <script>

        $(document).ready(function(){

            $(document).on('click','#save_btn',function (){

                var fd = new FormData();
                fd.append('apnd',$('#form_id').serialize());

                if ($('input[name="news_img"]')[0].files[0] !==  undefined) fd.append('news_img', $('input[name="news_img"]')[0].files[0]);


                $.ajax({

                    type:"POST",
                    url:"{{route('news.store')}}",
                    data:fd,
                    contentType: false,
                    processData: false,
                    success:function(response){

                        not12();
                        document.getElementById('form_id').reset();
                    },
                    error:function(response){

                        not13();
                    }

                });


            });
        });


    </script>
@endsection
