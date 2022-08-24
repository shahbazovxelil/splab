@extends('admin/template')
@section('content')

                <div class="col-md-12 col-sm-12 col-xs-12">
                    <div class="x_panel">
                        <div class="x_title">
                            <h2>Tənzimləmələrin yenilənməsi</h2>
                            <div class="clearfix"></div>
                        </div>
                        <div class="x_content">
                            <br />
                            <form id="form_id" action="{{route('settings.update',$settings->id)}}" method="PUT" data-parsley-validate class="form-horizontal form-label-left needs-validation " novalidate>
                                    @csrf
                                <div class="form-group">
                                    <label class="control-label col-md-2 col-sm-3 col-xs-12" for="first-name">Elektron ünvan <span class="required">*</span>
                                    </label>
                                    <div class="col-md-9 col-sm-6 col-xs-12">
                                        <input type="text" required="required" class="form-control col-md-7 col-xs-12" name="email" value="{{ $settings->email}}">
                                        <div class="invalid-feedback">
                                            Xana boş ola bilməz!
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="control-label col-md-2 col-sm-3 col-xs-12" for="last-name">Tel (Şəhər)<span class="required">*</span>
                                    </label>
                                    <div class="col-md-9 col-sm-6 col-xs-12">
                                        <input type="number" required="required" class="form-control col-md-7 col-xs-12"  placeholder="+994(55) 230-89-50" name="home_phone" value="{{ $settings->home_phone}}">
                                        <div class="invalid-feedback">
                                            Xana boş ola bilməz!
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="control-label col-md-2 col-sm-3 col-xs-12" for="last-name">Tel (Mobil)<span class="required">*</span>
                                    </label>
                                    <div class="col-md-9 col-sm-6 col-xs-12">
                                        <input type="number" required="required" class="form-control col-md-7 col-xs-12" placeholder="+994(12) 230-89-50" name="mobile_phone" value="{{ $settings->mobile_phone}}">
                                        <div class="invalid-feedback">
                                            Xana boş ola bilməz!
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="control-label col-md-2 col-sm-3 col-xs-12" for="last-name">Ölkə<span class="required">*</span>
                                    </label>
                                    <div class="col-md-9 col-sm-6 col-xs-12">
                                        <input type="text" required="required" class="form-control col-md-7 col-xs-12" name="country" value="{{ $settings->country}}">
                                        <div class="invalid-feedback">
                                            Xana boş ola bilməz!
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="control-label col-md-2 col-sm-3 col-xs-12" for="last-name">Şəhər<span class="required">*</span>
                                    </label>
                                    <div class="col-md-9 col-sm-6 col-xs-12">
                                        <input type="text" required="required" class="form-control col-md-7 col-xs-12" name="city" value="{{ $settings->city}}">
                                        <div class="invalid-feedback">
                                            Xana boş ola bilməz!
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="control-label col-md-2 col-sm-3 col-xs-12" for="last-name">Tam ünvan<span class="required">*</span>
                                    </label>
                                    <div class="col-md-9 col-sm-6 col-xs-12">
                                        <input type="text" required="required" class="form-control col-md-7 col-xs-12" name="full_adress" value="{{ $settings->full_adress}}">
                                        <div class="invalid-feedback">
                                            Xana boş ola bilməz!
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="control-label col-md-2 col-sm-3 col-xs-12" for="last-name">Facebook Keçidi<span class="required">*</span>
                                    </label>
                                    <div class="col-md-9 col-sm-6 col-xs-12">
                                        <input type="text" required="required" class="form-control col-md-7 col-xs-12" name="facebook_link" value='{{ $settings->facebook_link}}'>
                                        <div class="invalid-feedback">
                                            Xana boş ola bilməz!
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="control-label col-md-2 col-sm-3 col-xs-12" for="last-name">Mail Keçidi<span class="required">*</span>
                                    </label>
                                    <div class="col-md-9 col-sm-6 col-xs-12">
                                        <input type="text" required="required" class="form-control col-md-7 col-xs-12" name="email_link" value='{{ $settings->email_link}}'>
                                        <div class="invalid-feedback">
                                            Xana boş ola bilməz!
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="control-label col-md-2 col-sm-3 col-xs-12" for="last-name">İnstagram Keçidi<span class="required">*</span>
                                    </label>
                                    <div class="col-md-9 col-sm-6 col-xs-12">
                                        <input type="text" required="required" class="form-control col-md-7 col-xs-12" name="instagram_link" value='{{ $settings->instagram_link}}'>
                                        <div class="invalid-feedback">
                                            Xana boş ola bilməz!
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="middle-name" class="control-label col-md-2 col-sm-3 col-xs-12">Qısa Məlumat<span class="required">*</span></label>
                                    <div class="col-md-9 col-sm-6 col-xs-12">
                                        <textarea  class="form-control col-md-7 col-xs-12 h-90" name="short_info" required>{{ $settings->short_info}}</textarea>
                                        <div class="invalid-feedback">
                                            Xana boş ola bilməz!
                                        </div>
                                    </div>
                                </div>
                                <div class="ln_solid"></div>
                                <div class="form-group">
                                    <div class="col-md-2 col-sm-6 col-xs-12 col-md-offset-2">
                                        <button type="button" form="form_id" id="upd_btn" class="btn btn-success">Yadda saxla</button>
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

        $(document).on('click','#upd_btn',function (){

                var  all_data = $('#form_id').serialize();

               // console.log(all_data);

            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });
            $.ajax({
                    type:"PUT",
                    url:"{{route('settings.update',$settings->id)}}",
                    data:all_data,
                    success:function(response){
                            not12();
                    },
                    error:function(response){
                            not13();
                    }

                });


        });
    });


</script>
@endsection

