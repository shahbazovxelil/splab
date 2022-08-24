@extends('admin/template')
@section('content')

    <div class="col-md-12 col-sm-12 col-xs-12">
        <div class="x_panel">
            <div class="x_title">
                <h2>Faydalı linklərin yenilənməsi</h2>
                <div class="clearfix"></div>
            </div>
            <div class="x_content">
                <br />
                <form id="form_id"  action="{{route('useful_links.update',$useful_link->id)}}"  method="POST" data-parsley-validate class="form-horizontal form-label-left needs-validation " novalidate>
                        @csrf
                    <div class="form-group">
                        <label class="control-label col-md-2 col-sm-3 col-xs-12" for="first-name">Faydalı link adı <span class="required">*</span>
                        </label>
                        <div class="col-md-9 col-sm-6 col-xs-12">
                            <input type="text" name="name"  required="required" class="form-control col-md-7 col-xs-12" value="{{$useful_link->name}}">
                            <div class="invalid-feedback">
                                Xana boş ola bilməz!
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label col-md-2 col-sm-3 col-xs-12" for="last-name">Faydalı link keçidi<span class="required">*</span>
                        </label>
                        <div class="col-md-9 col-sm-6 col-xs-12">
                            <input type="text" name="link" required="required" class="form-control col-md-7 col-xs-12" value="{{$useful_link->link}}">
                            <div class="invalid-feedback">
                                Xana boş ola bilməz!
                            </div>
                        </div>
                    </div>
                    <div class="ln_solid"></div>
                    <div class="form-group">
                        <div class="col-md-2 col-sm-6 col-xs-12 col-md-offset-2">
                            <button type="button"  form="form_id" id="upd_btn" class="btn btn-success">Tamamla</button>
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
                    url:"{{route('useful_links.update',$useful_link->id)}}",
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

