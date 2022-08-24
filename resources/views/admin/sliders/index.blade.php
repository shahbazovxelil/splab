@extends('admin/template')
@section('content')

    <div class="col-lg-12">
        <div class="x_panel">
            <div class="basic-header">
                <div></div>
                <div class="card-header align-items-center">
                    <div class="card-title">SLAYDER</div>
                </div>
                <div class="card-header pr-0">
                    <a class="btn btn-success d-flex justify-content-center align-items-center ms-2" href="{{route('sliders.create')}}"><i class="fa fa-wpforms me-2"></i>Yenisini yarat +</a>
                </div>
            </div>
            <div class="x_content">

                <table class="table datatable table-bordered">
                    <thead>
                    <tr>
                        <th class="w-5">№</th>
                        <th class="w-30">Şəkil</th>
                        <th class="w-50">Başlıq</th>
                        <th class="w-15">Alətlər Paneli</th>
                    </tr>
                    </thead>
                    <tbody class="search-tbody">
                    @foreach($sliders as $slider)
                    <tr>
                        <th class="align-middle" scope="row">{{ $loop->iteration }}</th>
                        <td class="align-middle">
                            <div class="d-flex">
                                <span class="avatar brround avatar-xxl d-block" style="background-image: url({{asset('')}}{{$slider->s_img}})"></span>
                            </div>
                        </td>
                        <td class="align-middle">{{$slider->s_title}}</td>
                        <td class="text-center align-middle">
                            <a class="btn btn-primary btn-circle btn-sm me-1" href="{{route('sliders.edit',$slider->id)}}" title="Düzəliş et" data-bs-original-title="">
                                <i class="fa fa-edit fs-norm"></i>
                            </a>
                            <a class="btn btn-danger btn-circle btn-sm deleteitem" slider_id="{{$slider->id}}" title="sil">
                                <i class="fa fa-trash fs-norm"></i>
                            </a>
                        </td>
                    </tr>
                    @endforeach
                    </tbody>
                </table>

            </div>
        </div>
    </div>

@endsection

@section('css')

@endsection
@section('js')
    <script>
        //Delete samp acts
        var deleteItemAction = function () {
            $(".deleteitem").click(function (e) {
                e.preventDefault();
                var xx =$(this).parent().parent();

                var slider_id = $(this).attr("slider_id");

                $.confirm({
                    title: 'Məlumatın silinməsi',
                    content: 'Əminsinizmi?',
                    closeIcon: true,
                    type: 'red',
                    buttons: {
                        'SİSTEMDƏN SİL': {
                            btnClass: "btn-danger",
                            action: function () {
                                $.ajaxSetup({
                                    headers: {
                                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                                    }
                                });
                                $.ajax({
                                    type: 'DELETE',
                                    url: '{{url('admin/sliders')}}/'+slider_id,
                                    success: function (response)
                                    {
                                        xx.remove();
                                        not12();
                                    },
                                    error: function (response)
                                    {

                                        not13();
                                    }


                                });

                            }
                        },
                        'Bağla': function () {

                        }
                    }
                });
            });
        }

        deleteItemAction();


    </script>
@endsection
