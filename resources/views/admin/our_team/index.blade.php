
@extends('admin/template')
@section('content')

    <div class="col-lg-12">
        <div class="x_panel">
            <div class="basic-header">
                <div></div>
                <div class="card-header align-items-center">
                    <div class="card-title">KOMANDAMIZ</div>
                </div>
                <div class="card-header pr-0">
                    <a class="btn btn-success d-flex justify-content-center align-items-center ms-2" href="{{route('our_team.create')}}"><i class="fa fa-wpforms me-2"></i>Yeni komanda yarat +</a>
                </div>
            </div>
            <div class="x_content">

                <table class="table datatable table-bordered">
                    <thead>
                    <tr>
                        <th class="w-5">№</th>
                        <th class="w-30">Adı</th>
                        <th class="w-30">Vəzifə</th>
                        <th class="w-20">Elektron ünvan</th>
                        <th class="w-15">Alətlər Paneli</th>
                    </tr>
                    </thead>
                    <tbody class="search-tbody">
                    @foreach($our_team as $team)
                    <tr>
                        <th scope="row">{{ $loop->iteration }}</th>
                        <td>{{$team->name_surname}}</td>
                        <td>Mir Damməd</td>
                        <td>{{$team->email_adress}}</td>
                        <td class="d-flex justify-content-center">
                            <a class="btn btn-primary btn-circle btn-sm me-1" href="{{route('our_team.edit',$team->id)}}" title="Düzəliş et" data-bs-original-title="">
                                <i class="fa fa-edit fs-norm"></i>
                            </a>
                            <a class="btn btn-danger btn-circle btn-sm deleteitem" ourteam_id="{{$team->id}}" title="sil">
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

                var ourteam_id = $(this).attr("ourteam_id");

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

                                    url: '{{url('admin/our_team')}}/'+ourteam_id,
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
