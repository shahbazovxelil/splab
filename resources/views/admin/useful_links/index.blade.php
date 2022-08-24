@extends('admin/template')
@section('content')

    <div class="col-lg-12">
        <div class="x_panel">
            <div class="basic-header">
                <div></div>
                <div class="card-header align-items-center">
                    <div class="card-title">FAYDALI LİNKLƏR</div>
                </div>
                <div class="card-header pr-0">
                    <a  href="{{route('useful_links.create')}}" class="btn btn-success d-flex justify-content-center align-items-center ms-2" ><i class="fa fa-wpforms me-2"></i>Yeni link yarat +</a>
                </div>
            </div>
            <div class="x_content">

                <table class="table datatable table-bordered">
                    <thead>
                    <tr>
                        <th class="w-5">№</th>
                        <th class="w-80">Adı</th>
                        <th class="w-15">Alətlər Paneli</th>
                    </tr>
                    </thead>
                    <tbody class="search-tbody">

                    @foreach($useful_links as $useful_link)
                    <tr>
                        <th scope="row">{{ $loop->iteration }}</th>

                            <td>{{$useful_link->name}}</td>

                        <td class="d-flex justify-content-center">
                            <a class="btn btn-primary btn-circle btn-sm me-1" href="{{route('useful_links.edit',$useful_link->id)}}" title="Düzəliş et" data-bs-original-title="">
                                <i class="fa fa-edit fs-norm"></i>
                            </a>
                            <a class="btn btn-danger btn-circle btn-sm deleteitem" useful_id="{{$useful_link->id}}" title="sil">
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

                var useful_id = $(this).attr("useful_id");

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

                                    url: '{{url('admin/useful_links')}}/'+useful_id,
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

