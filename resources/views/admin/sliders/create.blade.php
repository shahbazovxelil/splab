@extends('admin/template')
@section('content')

    <div class="col-md-12 col-sm-12 col-xs-12">
        <div class="x_panel">
            <div class="x_title">
                <h2>YENİ SLAYDER ƏLAVƏ EDİN</h2>
                <div class="clearfix"></div>
            </div>
            <div class="x_content">
                <br />
                <form id="form_id" action="{{route('sliders.store')}}" method="POST" data-parsley-validate class="form-horizontal form-label-left needs-validation " enctype="multipart/form-data" novalidate>
                            @csrf
                    <div class="form-group">
                        <label class="control-label col-md-2 col-sm-3 col-xs-12" for="first-name">Başlıq <span class="required">*</span>
                        </label>
                        <div class="col-md-9 col-sm-6 col-xs-12">
                            <input type="text" required="required" name="s_title" class="form-control col-md-7 col-xs-12" placeholder="Daxil edin..." value="">
                            <div class="invalid-feedback">
                                Xana boş ola bilməz!
                            </div>
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="control-label col-md-2 col-sm-3 col-xs-12" for="last-name">Haqqında<span class="required">*</span>
                        </label>
                        <div class="col-md-9 col-sm-6 col-xs-12">
                            <input type="text" required="required" name="s_about" class="form-control col-md-7 col-xs-12" placeholder="Daxil edin..." value="">
                            <div class="invalid-feedback">
                                Xana boş ola bilməz!
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label col-md-2 col-sm-3 col-xs-12" for="last-name">Haqqında qısa<span class="required">*</span>
                        </label>
                        <div class="col-md-9 col-sm-6 col-xs-12">
                            <input type="text" required="required" name="s_short_about" class="form-control col-md-7 col-xs-12" placeholder="Daxil edin..." value="">
                            <div class="invalid-feedback">
                                Xana boş ola bilməz!
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label col-md-2 col-sm-3 col-xs-12" for="last-name">Daha ətraflı keçid<span class="required">*</span>
                        </label>
                        <div class="col-md-9 col-sm-6 col-xs-12">
                            <input type="text" required="required" name="s_link_readmore" class="form-control col-md-7 col-xs-12" placeholder="Daxil edin..." value="">
                            <div class="invalid-feedback">
                                Xana boş ola bilməz!
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label col-md-2 col-sm-3 col-xs-12" for="last-name">Şəkil<span class="required">*</span>
                        </label>
                        <input type="file" name="s_img">
                    </div>
                    <div class="ln_solid"></div>
                    <div class="form-group">
                        <div class="col-md-2 col-sm-6 col-xs-12 col-md-offset-2">
                            <button type="button" class="btn btn-success" form="form_id" id="save_btn">Tamamla</button>
                        </div>
                    </div>
                </form>
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

                if ($('input[name="s_img"]')[0].files[0] !==  undefined) fd.append('s_img', $('input[name="s_img"]')[0].files[0]);


                $.ajax({

                    type:"POST",
                    url:"{{route('sliders.store')}}",
                    data:fd,
                    contentType: false,
                    processData: false,
                    success:function(response){

                        // console.log(response);
                        not12();
                        document.getElementById('form_id').reset();
                    },
                    error:function(response){
                        // console.log(response);
                        not13();
                    }

                });


            });
        });


    </script>
@endsection

