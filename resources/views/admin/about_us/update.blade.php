@extends('admin/template')
@section('content')

    <div class="">
        <div class="clearfix"></div>
        <div class="row">
            <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                    <div class="x_title">
                        <h2>Haqqımızda yenilənməsi</h2>
                        <div class="clearfix"></div>
                    </div>
                    <div class="x_content">
                        <br />
                        <form id="form_id"  method="POST" data-parsley-validate class="form-horizontal form-label-left needs-validation " novalidate>
                            @csrf
                            <div class="form-group">
                                <label class="control-label col-md-2 col-sm-3 col-xs-12" for="first-name">Başlıq 1 <span class="required">*</span>
                                </label>
                                <div class="col-md-9 col-sm-6 col-xs-12">
                                    <input type="text" required="required" name="ab_title1" class="form-control col-md-7 col-xs-12" value="{{$aboutus->ab_title1}}">
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="control-label col-md-2 col-sm-3 col-xs-12" for="last-name">Mətn 1<span class="required">*</span>
                                </label>
                                <div class="col-md-9 col-sm-6 col-xs-12">
                            <textarea class="content" name="ab_text1">{{$aboutus->ab_text1}}</textarea>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="control-label col-md-2 col-sm-3 col-xs-12" for="last-name">Sekil<span class="required">*</span>
                                </label>
                                <div class="col-md-9 col-sm-6 col-xs-12">
                                    <img src="{{asset('').$aboutus->ab_img1}}"  width="100"  height="100" alt="">
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="control-label col-md-2 col-sm-3 col-xs-12" for="last-name">Şəkil<span class="required">*</span>
                                </label>
                                <input type="file" name="ab_img1" >
                            </div>
                            <div class="form-group">
                                <label class="control-label col-md-2 col-sm-3 col-xs-12" for="last-name">Başlıq 2<span class="required">*</span>
                                </label>
                                <div class="col-md-9 col-sm-6 col-xs-12">
                                    <input type="text" required="required" name="ab_title2" class="form-control col-md-7 col-xs-12" placeholder="" value="{{$aboutus->ab_title2}}">
                                    <div class="invalid-feedback">
                                        Xana boş ola bilməz!
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="control-label col-md-2 col-sm-3 col-xs-12" for="last-name">Mətn 2<span class="required">*</span>
                                </label>
                                <div class="col-md-9 col-sm-6 col-xs-12">
                                    <textarea type="text" required="required" name="ab_text2" class="form-control col-md-7 col-xs-12">{{$aboutus->ab_text2}}</textarea>
                                    <div class="invalid-feedback">
                                        Xana boş ola bilməz!
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="control-label col-md-2 col-sm-3 col-xs-12" for="last-name">Toxum analizi</span>
                                </label>
                                <div class="col-md-9 col-sm-6 col-xs-12">
                                    <input type="text" required="required" name="ab_seed_analysis" class="form-control col-md-7 col-xs-12" value="{{$aboutus->ab_seed_analysis}}">
                                    <div class="invalid-feedback">
                                        Xana boş ola bilməz!
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="control-label col-md-2 col-sm-3 col-xs-12" for="last-name">Torpaq analizi</span>
                                </label>
                                <div class="col-md-9 col-sm-6 col-xs-12">
                                    <input type="text" required="required" name="ab_soil_analysis" class="form-control col-md-7 col-xs-12" value="{{$aboutus->ab_soil_analysis}}">
                                    <div class="invalid-feedback">
                                        Xana boş ola bilməz!
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="control-label col-md-2 col-sm-3 col-xs-12" for="last-name">Su analizi</span>
                                </label>
                                <div class="col-md-9 col-sm-6 col-xs-12">
                                    <input type="text" required="required" name="ab_water_analysis" class="form-control col-md-7 col-xs-12" value="{{$aboutus->ab_water_analysis}}">
                                    <div class="invalid-feedback">
                                        Xana boş ola bilməz!
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="control-label col-md-2 col-sm-3 col-xs-12" for="last-name">Bitki analizi</span>
                                </label>
                                <div class="col-md-9 col-sm-6 col-xs-12">
                                    <input type="text" required="required" name="ab_plant_analysis" class="form-control col-md-7 col-xs-12" value="{{$aboutus->ab_plant_analysis}}">
                                    <div class="invalid-feedback">
                                        Xana boş ola bilməz!
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="control-label col-md-2 col-sm-3 col-xs-12" for="last-name">Gwbrə analizi</span>
                                </label>
                                <div class="col-md-9 col-sm-6 col-xs-12">
                                    <input type="text" required="required" name="ab_fertilizer_analysis" class="form-control col-md-7 col-xs-12" value="{{$aboutus->ab_fertilizer_analysis}}">
                                    <div class="invalid-feedback">
                                        Xana boş ola bilməz!
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="control-label col-md-2 col-sm-3 col-xs-12" for="last-name">Sekil<span class="required">*</span>
                                </label>
                                <div class="col-md-9 col-sm-6 col-xs-12">
                                    <img src="{{asset('').$aboutus->ab_img2}}"  width="100"  height="100" alt="">
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="control-label col-md-2 col-sm-3 col-xs-12" for="last-name">Şəkil<span class="required">*</span>
                                </label>
                                <input type="file" name="ab_img2" >
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

                if ($('input[name="ab_img1"]')[0].files[0] !==  undefined) fd.append('ab_img1', $('input[name="ab_img1"]')[0].files[0]);
                if ($('input[name="ab_img2"]')[0].files[0] !==  undefined) fd.append('ab_img2', $('input[name="ab_img2"]')[0].files[0]);


                $.ajax({
                    type:"POST",
                    url:"{{route('aboutus_update.update',$aboutus->id)}}",
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
