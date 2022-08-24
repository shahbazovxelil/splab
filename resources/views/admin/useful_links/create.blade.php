@extends('admin/template')
@section('content')

    <div class="col-md-12 col-sm-12 col-xs-12">
        <div class="x_panel">
            <div class="x_title">
                <h2>Faydalı lİnk əlavə edİn</h2>
                <div class="clearfix"></div>
            </div>
            <div class="x_content">
                <br />
                <form id="form_id"  action="{{route('useful_links.store')}}"  method="POST" data-parsley-validate class="form-horizontal form-label-left needs-validation " novalidate>
                    @csrf
                    <div class="form-group">
                        <label class="control-label col-md-2 col-sm-3 col-xs-12" for="first-name">Faydalı link adı <span class="required">*</span>
                        </label>
                        <div class="col-md-9 col-sm-6 col-xs-12">
                            <input type="text" required="required" name="name" class="form-control col-md-7 col-xs-12" value="">
                            <div class="invalid-feedback">
                                Xana boş ola bilməz!
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label col-md-2 col-sm-3 col-xs-12" for="last-name">Faydalı link keçidi<span class="required">*</span>
                        </label>
                        <div class="col-md-9 col-sm-6 col-xs-12">
                            <input type="text" required="required" name="link" class="form-control col-md-7 col-xs-12" value="">
                            <div class="invalid-feedback">
                                Xana boş ola bilməz!
                            </div>
                        </div>
                    </div>
                    <div class="ln_solid"></div>
                    <div class="form-group">
                        <div class="col-md-2 col-sm-6 col-xs-12 col-md-offset-2">
                            <button type="button" form="form_id" id="save_btn" class="btn btn-success">Yadda saxla</button>
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

                var  all_data = $('#form_id').serialize();

                $.ajaxSetup({
                    headers: {
                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                    }
                });
                $.ajax({
                    type:"POST",
                    url:"{{route('useful_links.store')}}",
                    data:all_data,
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
