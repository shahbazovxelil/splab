@extends('admin/template')
@section('content')

    <div class="">
        <div class="clearfix"></div>
        <div class="row">
            <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                    <div class="x_title">
                        <h2>Paketin yenilənməsi</h2>
                        <div class="clearfix"></div>
                    </div>
                    <div class="x_content">
                        <br />
                        <form id="form_id" action="{{route('edit_package_services.update',$package->id)}}" method="POST" data-parsley-validate class="form-horizontal form-label-left needs-validation " novalidate>
                                    @csrf
                            <div class="form-group">
                                <label class="control-label col-md-2 col-sm-3 col-xs-12" for="first-name">Başlıq <span class="required">*</span>
                                </label>
                                <div class="col-md-9 col-sm-6 col-xs-12">
                                    <input type="text" required="required" name="p_title" class="form-control col-md-7 col-xs-12" value="{{$package->p_title}}">
                                    <div class="invalid-feedback">
                                        Xana boş ola bilməz!
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="control-label col-md-2 col-sm-3 col-xs-12" for="first-name">Haqqında qısa <span class="required">*</span>
                                </label>
                                <div class="col-md-9 col-sm-6 col-xs-12">
                                    <input type="text" required="required" name="p_about_short" class="form-control col-md-7 col-xs-12" value="{{$package->p_about_short}}">
                                    <div class="invalid-feedback">
                                        Xana boş ola bilməz!
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="control-label col-md-2 col-sm-3 col-xs-12" for="last-name">Alt bölməsi 1<span class="required">*</span>
                                </label>
                                <div class="col-md-9 col-sm-6 col-xs-12">
                                    <input type="text" required="required" name="p_bottom_section_one" class="form-control col-md-7 col-xs-12" placeholder="Makro Element K2O" value="{{$package->p_bottom_section_one}}">
                                    <div class="invalid-feedback">
                                        Xana boş ola bilməz!
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="control-label col-md-2 col-sm-3 col-xs-12" for="last-name">Alt bölməsi 2<span class="required">*</span>
                                </label>
                                <div class="col-md-9 col-sm-6 col-xs-12">
                                    <input type="text" required="required" name="p_bottom_section_two" class="form-control col-md-7 col-xs-12" placeholder="Makro Element P2O5" value="{{$package->p_bottom_section_two}}">
                                    <div class="invalid-feedback">
                                        Xana boş ola bilməz!
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="control-label col-md-2 col-sm-3 col-xs-12" for="last-name">Alt bölməsi 3<span class="required">*</span>
                                </label>
                                <div class="col-md-9 col-sm-6 col-xs-12">
                                    <input type="text" required="required" name="p_bottom_section_three" class="form-control col-md-7 col-xs-12" placeholder="Asan Hidroliz Edən Azot" value="{{$package->p_bottom_section_three}}">
                                    <div class="invalid-feedback">
                                        Xana boş ola bilməz!
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="control-label col-md-2 col-sm-3 col-xs-12" for="last-name">Alt bölməsi 4<span class="required">*</span>
                                </label>
                                <div class="col-md-9 col-sm-6 col-xs-12">
                                    <input type="text" required="required" name="p_bottom_section_four" class="form-control col-md-7 col-xs-12" placeholder="PH" value="{{$package->p_bottom_section_four}}">
                                    <div class="invalid-feedback">
                                        Xana boş ola bilməz!
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="control-label col-md-2 col-sm-3 col-xs-12" for="last-name">Alt bölməsi 5<span class="required">*</span>
                                </label>
                                <div class="col-md-9 col-sm-6 col-xs-12">
                                    <input type="text" required="required" name="p_bottom_section_five" class="form-control col-md-7 col-xs-12" placeholder="Duzluluq (EC)" value="{{$package->p_bottom_section_five}}">
                                    <div class="invalid-feedback">
                                        Xana boş ola bilməz!
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="control-label col-md-2 col-sm-3 col-xs-12" for="last-name">İcra müddəti<span class="required">*</span>
                                </label>
                                <div class="col-md-9 col-sm-6 col-xs-12">
                                    <input type="text" required="required" name="exec_time" class="form-control col-md-7 col-xs-12" placeholder="4 İş Günü" value="{{$package->exec_time}}">
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



                $.ajaxSetup({
                    headers: {
                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                    }
                });
                $.ajax({
                    type:"POST",
                    url:"{{route('edit_package_services.update',$package->id)}}",
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
