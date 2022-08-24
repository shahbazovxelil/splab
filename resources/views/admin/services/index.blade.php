@extends('admin/template')
@section('content')

    <div class="">


        <div class="clearfix"></div>

        <div class="row">

            <div class="col-lg-12">
                <div class="x_panel">
                    <div class="basic-header">
                        <div></div>
                        <div class="card-header align-items-center">
                            <div class="card-title">XİDMƏTLƏR</div>
                        </div>
                        <div class="card-header pr-0">
                            <a class="btn btn-success d-flex justify-content-center align-items-center ms-2" href="{{route('services.create')}}"><i class="fa fa-wpforms me-2"></i>Yeni xidmət əlavə edin +</a>
                        </div>
                    </div>
                    <div class="x_content">

                        <table class="table datatable table-bordered">
                            <thead>
                            <tr>
                                <th class="w-5">№</th>
                                <th class="w-50">Xidmətin kategoriyası</th>
                                <th class="w-30">Analizlərin Müddəti</th>
                                <th class="w-15">Alətlər Paneli</th>
                            </tr>
                            </thead>
                            <tbody class="search-tbody">

                            @foreach($services as $service)

                            <tr>
                                <th class="align-middle"scope="row ">{{$loop->iteration}}</th>
                                <td class="align-middle">{{$service->name}}</td>
                                <td class="align-middle">{{$service->day}}</td>
                                <td class="text-center align-middle">
                                    <a class="btn btn-primary btn-circle btn-sm me-1 align-middle" href="{{route('services.edit',$service->id)}}" title="Düzəliş et" data-bs-original-title="">
                                        <i class="fa fa-edit fs-norm"></i>
                                    </a>
                                    <a class="btn btn-danger btn-circle btn-sm deleteitem"  serv_id="{{$service->id}}" title="sil">
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

                var serv_id = $(this).attr("serv_id");

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
                                    url:"{{route('services.destroy',$service->id)}}",
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
