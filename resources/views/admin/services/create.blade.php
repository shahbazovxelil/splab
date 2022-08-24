


@extends('admin/template')
@section('content')

    <div class="">
        <div class="clearfix"></div>
        <div class="row">
            <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                    <div class="x_title">
                        <h2>SERVİS ƏLAVƏ EDİN</h2>
                        <div class="clearfix"></div>
                    </div>
                    <div class="x_content">
                        <br />
                        <form id="demo-form2" data-parsley-validate class="form-horizontal form-label-left">

                            <div class="card-body">
                                <div>
                                    <div>
                                        <form id="form_id"  data-parsley-validate class="form-horizontal form-label-left needs-validation " novalidate>
                                            @csrf
                                                <div class="col-lg-12 d-flex justify-content-center" style="margin-bottom: 50px">
                                                    <div class="form-group w-30">
                                                        <label class=" form-label fs-15 text-center">Kategoriyanı seçin</label>
                                                        <div class="d-flex">
                                                            <select  class="form-select fs-15 border " name="sel_name" id="sel_cls">                                                                         placeholder="Seçiminizi edin...">
                                                              @foreach($services as $service)
                                                                <option value="{{$service->id}}">{{$service->category_name}}</option>
                                                              @endforeach
                                                            </select>
                                                            <!-- Small modal -->
                                                            <button type="button" class="btn btn-primary click_cat" data-toggle="modal" data-target=".bs-example-modal-sm" title="Digər kategoriya əlavə edin">+</button>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div >
                                                    <div class="col-lg-7 d-flex justify-content-between align-items-center">
                                                        <label class="control-label w-20 p-0">Kategoriyaya Görə Məhsulun Adı <span class="required">*</span>
                                                        </label>
                                                         <div class="form-group w-80 m-0" style="margin-bottom: 0px; margin-left: 10px">
                                                              <div>
                                                                  <input type="text"  class="form-control"  name="name" value="">
                                                              </div>
                                                         </div>
                                                    </div>
                                                     <div class="col-lg-5 d-flex justify-content-between align-items-center">
                                                         <label class="control-label w-40 p-0" >Kategoriyaya Görə Məhsulun Günü <span class="required">*</span>
                                                         </label>
                                                                <div class="form-group w-60 m-0" style="margin-bottom: 0px; margin-left: 10px">
                                                                         <div>
                                                                             <input type="text"  class="form-control"  name="day" value="">
                                                                         </div>
                                                                </div>

                                                     </div>
                                                </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                            <div class="ln_solid"></div>
                            <div class="form-group">
                                <div class="col-md-2 col-sm-6 col-xs-12">
                                    <button type="reset" form="form_id" class="btn btn-primary">Təmizlə</button>
                                    <button type="button" form="form_id" id="save_btn" class="btn btn-success">Yadda saxla</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <div class="modal fade bs-example-modal-sm noteModal" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog modal-large modal-dialog-centered">
            <div class="modal-content">

                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span>
                    </button>
                    <h4 class="modal-title" id="myModalLabel2">Modal title</h4>
                </div>
                <div class="modal-body">
                    <form id="equip" method="post">
                        <div class="form-group">
                            <label class="control-label col-md-2 col-sm-3 col-xs-12" for="last-name">Kategoriya<span class="required">*</span>
                            </label>
                            <div class="col-md-9 col-sm-6 col-xs-12">
                                <input type="text" name="category_name" required="required" class="form-control col-md-7 col-xs-12" placeholder="Məs(Torpaq analizi)" value="">
                            </div>
                        </div>
                    </form>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Bağla</button>
                    <button type="button" class="btn btn-success" id="save_btn_cat">Tamamla</button>
                </div>

            </div>
        </div>
    </div>
@endsection

@section('css')

@endsection
@section('js')
    <script>



        $(document).ready(function () {



            $(document).on('click','#save_btn',function (){



                $.ajaxSetup({
                    headers: {
                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                    }
                });

                $.ajax({
                    type:"POST",
                    url:"{{route('services.adddata')}}",
                    data:{
                        cat_id:$("select[name='sel_name']").val(),
                        namee:$("input[name='name']").val(),
                        dayy:$("input[name='day']").val()
                    },
                    success:function(response){
                        not12();
                        // document.getElementById('form_id').reset();
                    },
                    error:function(response){
                        not13();
                    }

                });


            });







        $(document).on("click",".click_cat",function(){

            // let doc_id = $(this).parents("td").attr('doc_id');
            // let thiss = $(this).parents("td");

            $(document).off("click","#save_btn_cat").on("click","#save_btn_cat",function(){

                $.ajaxSetup({
                    headers: {
                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                    }
                });
                let category_name = $("input[name='category_name']").val();
                $.ajax({
                    url: "{{route('services.store')}}",
                    type: "POST",
                    dataType: "json",
                    data:{category_name:category_name},
                    success: function (response) {

                        // console.log(response.service.category_name);


                            not12();
                            $(".noteModal").modal("hide");

                        },
                    error:function(response){

                        not13();
                    }


                });
            });



        });



        });


    </script>

@endsection
