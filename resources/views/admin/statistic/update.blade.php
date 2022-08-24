@extends('admin/template')
@section('content')

    <div class="col-md-12 col-sm-12 col-xs-12">
        <div class="x_panel">
            <div class="x_title">
                <h2>Statiskaların yenilənməsi</h2>
                <div class="clearfix"></div>
            </div>
            <div class="x_content">
                <br />
                <form id="form_id" action="{{route('statistic.update',$statistic->id)}}" method="POST" data-parsley-validate class="form-horizontal form-label-left needs-validation " novalidate>

                   @csrf
                    <div class="container">
                        <div class="row">

                            <div class="col-lg-12" style="padding: 0px;">
                                <div class="form-group">
                                    <label class="control-label col-md-1 col-sm-3 col-xs-12" for="first-name">Xidmət Sayı

                                        <span class="required">*</span>
                                    </label>
                                    <div class="col-md-10 col-sm-6 col-xs-12">
                                        <input type="text" required="required" name="service_count" class="form-control col-md-7 col-xs-12" value="{{$statistic->service_count}}">
                                        <div class="invalid-feedback">
                                            Xana boş ola bilməz!
                                        </div>
                                    </div>
                                </div>

                            </div>
                            <div class="col-lg-12" style="padding: 0px;">
                                <div class="form-group">
                                    <label class="control-label col-md-1 col-sm-3 col-xs-12" for="first-name">Xidmət Göstərilən Rayonların Sayı

                                        <span class="required">*</span>
                                    </label>
                                    <div class="col-md-10 col-sm-6 col-xs-12">
                                        <input type="text" required="required" name="service_districts_count" class="form-control col-md-7 col-xs-12" value="{{$statistic->service_districts_count}}">
                                        <div class="invalid-feedback">
                                            Xana boş ola bilməz!
                                        </div>
                                    </div>
                                </div>

                            </div>
                            <div class="col-lg-12" style="padding: 0px;">
                                <div class="form-group">
                                    <label class="control-label col-md-1 col-sm-3 col-xs-12" for="first-name">Filial Sayı

                                        <span class="required">*</span>
                                    </label>
                                    <div class="col-md-10 col-sm-6 col-xs-12">
                                        <input type="text" required="required" name="branch_count" class="form-control col-md-7 col-xs-12" value="{{$statistic->branch_count}}">
                                        <div class="invalid-feedback">
                                            Xana boş ola bilməz!
                                        </div>
                                    </div>
                                </div>

                            </div>
                            <div class="col-lg-12" style="padding: 0px;">
                                <div class="form-group">
                                    <label class="control-label col-md-1 col-sm-3 col-xs-12" for="first-name">Əməkdaş Sayı

                                        <span class="required">*</span>
                                    </label>
                                    <div class="col-md-10 col-sm-6 col-xs-12">
                                        <input type="text" required="required" name="employee_count" class="form-control col-md-7 col-xs-12" value="{{$statistic->employee_count}}">
                                        <div class="invalid-feedback">
                                            Xana boş ola bilməz!
                                        </div>
                                    </div>
                                </div>

                            </div>
                            <div class="col-lg-12" style="padding: 0px;">
                                <div class="form-group">
                                    <label class="control-label col-md-1 col-sm-3 col-xs-12" for="first-name">BİZİMLƏ ƏMƏKDAŞLIQ<span class="required">*</span>
                                    </label>
                                    <div class="col-md-10 col-sm-6 col-xs-12">

                                        <textarea name="cooperation_withus" style="width: 100%;height: 100px;" >{{$statistic->cooperation_withus}}</textarea>
                                        <div class="invalid-feedback">
                                            Xana boş ola bilməz!
                                        </div>
                                    </div>
                                </div>

                            </div>
                            <div class="col-lg-12" style="padding: 0px;">
                                <div class="form-group">
                                    <label class="control-label col-md-1 col-sm-3 col-xs-12" for="first-name">ÜSTÜNLÜKLƏRİMİZ 1<span class="required">*</span>
                                    </label>
                                    <div class="col-md-10 col-sm-6 col-xs-12">
                                        <input type="text" required="required" name="advantage_one" class="form-control col-md-7 col-xs-12" value="{{$statistic->advantage_one}}">
                                        <div class="invalid-feedback">
                                            Xana boş ola bilməz!
                                        </div>
                                    </div>
                                </div>

                            </div>


                            <div class="col-lg-12" style="padding: 0px;">
                                <div class="form-group">
                                    <label class="control-label col-md-1 col-sm-3 col-xs-12" for="first-name">ÜSTÜNLÜKLƏRİMİZ 2<span class="required">*</span>
                                    </label>
                                    <div class="col-md-10 col-sm-6 col-xs-12">
                                        <input type="text" required="required" name="advantage_two" class="form-control col-md-7 col-xs-12" value="{{$statistic->advantage_two}}">
                                        <div class="invalid-feedback">
                                            Xana boş ola bilməz!
                                        </div>
                                    </div>
                                </div>

                            </div>


                            <div class="col-lg-12" style="padding: 0px;">
                                <div class="form-group">
                                    <label class="control-label col-md-1 col-sm-3 col-xs-12" for="first-name">ÜSTÜNLÜKLƏRİMİZ 3<span class="required">*</span>
                                    </label>
                                    <div class="col-md-10 col-sm-6 col-xs-12">
                                        <input type="text" required="required" name="advantage_three" class="form-control col-md-7 col-xs-12" value="{{$statistic->advantage_three}}">
                                        <div class="invalid-feedback">
                                            Xana boş ola bilməz!
                                        </div>
                                    </div>
                                </div>

                            </div>

                            <div class="col-lg-12" style="padding: 0px;">
                                <div class="form-group">
                                    <label class="control-label col-md-1 col-sm-3 col-xs-12" for="first-name">ÜSTÜNLÜKLƏRİMİZ 4<span class="required">*</span>
                                    </label>
                                    <div class="col-md-10 col-sm-6 col-xs-12">
                                        <input type="text" required="required" name="advantage_four" class="form-control col-md-7 col-xs-12" value="{{$statistic->advantage_four}}">
                                        <div class="invalid-feedback">
                                            Xana boş ola bilməz!
                                        </div>
                                    </div>
                                </div>

                            </div>
                            <div class="col-lg-12" style="padding: 0px;">
                                <div class="form-group">
                                    <label class="control-label col-md-1 col-sm-3 col-xs-12" for="first-name">ÜSTÜNLÜKLƏRİMİZ 5<span class="required">*</span>
                                    </label>
                                    <div class="col-md-10 col-sm-6 col-xs-12">
                                        <input type="text" required="required" name="advantage_five" class="form-control col-md-7 col-xs-12" value="{{$statistic->advantage_five}}">
                                        <div class="invalid-feedback">
                                            Xana boş ola bilməz!
                                        </div>
                                    </div>
                                </div>

                            </div>
                            <div class="col-lg-12" style="padding: 0px;">
                                <div class="form-group">
                                    <label class="control-label col-md-1 col-sm-3 col-xs-12" for="first-name">ÜSTÜNLÜKLƏRİMİZ 6<span class="required">*</span>
                                    </label>
                                    <div class="col-md-10 col-sm-6 col-xs-12">
                                        <input type="text" required="required" name="advantage_six" class="form-control col-md-7 col-xs-12" value="{{$statistic->advantage_six}}">
                                        <div class="invalid-feedback">
                                            Xana boş ola bilməz!
                                        </div>
                                    </div>
                                </div>

                            </div>




                        </div>

                    </div>
            </div>
            <div class="ln_solid"></div>
            <div class="form-group">
                <div class="col-md-2 col-sm-6 col-xs-12">
                    <button type="button" form="form_id" id="upd_btn" class="btn btn-success">Tamamla</button>
                </div>
            </div>
            </form>
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
                    type:"POST",
                    url:"{{route('statistic.update',$statistic->id)}}",
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









