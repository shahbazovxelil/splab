@extends('admin/template')
@section('content')

    <div class="">
        <div class="clearfix"></div>
        <div class="row">
            <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                    <div class="x_title">
                        <h2>MƏLUMATIN YENİLƏNMƏSİ</h2>
                        <div class="clearfix"></div>
                    </div>
                    <div class="x_content">
                        <br/>
                        <form id="form_id"  method="POST" data-parsley-validate class="form-horizontal form-label-left needs-validation " novalidate>
                            @csrf
                            <div class="form-group">
                                <label class="control-label col-md-2 col-sm-3 col-xs-12" for="first-name">Başlıq <span class="required">*</span>
                                </label>
                                <div class="col-md-9 col-sm-6 col-xs-12">
                                    <input type="text" required="required" name="co_title" class="form-control col-md-7 col-xs-12" placeholder="Daxil edin..." value="{{$coop->co_title}}">
                                    <div class="invalid-feedback">
                                        Xana boş ola bilməz!
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="control-label col-md-2 col-sm-3 col-xs-12" for="last-name">Haqqında Qısa<span class="required">*</span>
                                </label>
                                <div class="col-md-9 col-sm-6 col-xs-12">
                                    <textarea required="required" name="co_short_about" class="form-control col-md-7 col-xs-12" placeholder="Daxil edin..." >{{$coop->co_short_about}}.</textarea>
                                    <div class="invalid-feedback">
                                        Xana boş ola bilməz!
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="control-label col-md-2 col-sm-3 col-xs-12" for="first-name">Alt kategoriya 1 <span class="required">*</span>
                                </label>
                                <div class="col-md-9 col-sm-6 col-xs-12">
                                    <input type="text" required="required" name="co_subcat_one" class="form-control col-md-7 col-xs-12" placeholder="Daxil edin..." value="{{$coop->co_subcat_one}}">
                                    <div class="invalid-feedback">
                                        Xana boş ola bilməz!
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="control-label col-md-2 col-sm-3 col-xs-12" for="first-name">Alt kategoriya 2 <span class="required">*</span>
                                </label>
                                <div class="col-md-9 col-sm-6 col-xs-12">
                                    <input type="text" required="required" name="co_subcat_two" class="form-control col-md-7 col-xs-12" placeholder="Daxil edin..." value="{{$coop->co_subcat_two}}">
                                    <div class="invalid-feedback">
                                        Xana boş ola bilməz!
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="control-label col-md-2 col-sm-3 col-xs-12" for="first-name">Alt kategoriya 3 <span class="required">*</span>
                                </label>
                                <div class="col-md-9 col-sm-6 col-xs-12">
                                    <input type="text" required="required" name="co_subcat_three" class="form-control col-md-7 col-xs-12" placeholder="Daxil edin..." value="{{$coop->co_subcat_three}}">
                                    <div class="invalid-feedback">
                                        Xana boş ola bilməz!
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="control-label col-md-2 col-sm-3 col-xs-12" for="first-name">Alt kategoriya 4 <span class="required">*</span>
                                </label>
                                <div class="col-md-9 col-sm-6 col-xs-12">
                                    <input type="text" required="required" name="co_subcat_four" class="form-control col-md-7 col-xs-12" placeholder="Daxil edin..." value="{{$coop->co_subcat_four}}">
                                    <div class="invalid-feedback">
                                        Xana boş ola bilməz!
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="control-label col-md-2 col-sm-3 col-xs-12" for="first-name">Alt kategoriya 5 <span class="required">*</span>
                                </label>
                                <div class="col-md-9 col-sm-6 col-xs-12">
                                    <input type="text" required="required" name="co_subcat_five" class="form-control col-md-7 col-xs-12" placeholder="Daxil edin..." value="{{$coop->co_subcat_five}}">
                                    <div class="invalid-feedback">
                                        Xana boş ola bilməz!
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="control-label col-md-2 col-sm-3 col-xs-12" for="first-name">Alt kategoriya 6 <span class="required">*</span>
                                </label>
                                <div class="col-md-9 col-sm-6 col-xs-12">
                                    <input type="text" required="required" name="co_subcat_six" class="form-control col-md-7 col-xs-12" placeholder="Daxil edin..." value="{{$coop->co_subcat_six}}">
                                    <div class="invalid-feedback">
                                        Xana boş ola bilməz!
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="control-label col-md-2 col-sm-3 col-xs-12" for="last-name">Sekil<span class="required">*</span>
                                </label>
                                <div class="col-md-9 col-sm-6 col-xs-12">
                                    <img src="{{asset('').$coop->co_img}}"  width="100"  height="100" alt="">
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="control-label col-md-2 col-sm-3 col-xs-12" for="last-name">Şəkil<span class="required">*</span>
                                </label>
                                <input type="file" name="co_img" >
                            </div>
                            <div class="form-group">
                                <div class="col-md-2 col-sm-6 col-xs-12 col-md-offset-2">
                                    <button type="button" form="form_id" id="upd_btn" class="btn btn-success">Tamamla</button>
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

            $(document).on('click','#upd_btn',function (){

                var fd = new FormData();
                fd.append('apnd',$('#form_id').serialize());
                // fd.append('_method','PATCH');

                if ($('input[name="co_img"]')[0].files[0] !==  undefined) fd.append('co_img', $('input[name="co_img"]')[0].files[0]);


                $.ajax({

                    type:"POST",
                    url:"{{route('cooperation_update.update',$coop->id)}}",
                    data:fd,
                    contentType: false,
                    processData: false,
                    success:function(response){
                        not1();
                    },
                    error:function(response){
                        not13();
                    }

                });


            });
        });


    </script>
@endsection
