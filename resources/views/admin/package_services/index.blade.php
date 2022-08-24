@extends('admin/template')
@section('content')

    <div class="">
        <div class="page-title">
            <div class="title_left">
                <h3 id="elaqe">Paket xidmətləri</h3>
            </div>

            <div class="title_right">
                <div class="col-md-5 col-sm-5 col-xs-12 form-group pull-right top_search">
                    <div class="input-group">
                        <input type="text" class="form-control search-input" placeholder="Axtarın...">
                    </div>
                </div>
            </div>
        </div>

        <div class="clearfix"></div>

        <div class="row">

            <div class="col-lg-12">
                <div class="x_panel">

                    <div class="x_content">

                        <table class="table table-bordered">
                            <thead>
                            <tr>
                                <th class="w-5">№</th>
                                <th class="w-50">Paket növü</th>
                                <th class="w-30">İcra müddəti</th>
                                <th class="w-15">Alətlər Paneli</th>
                            </tr>
                            </thead>
                            <tbody class="search-tbody">


                            @foreach($package_types as $package_type)
                            <tr>
                                <th scope="row">{{$loop->iteration}}</th>
                                <td>{{$package_type->p_title}}</td>
                                <td>{{$package_type->exec_time}}</td>
                                <td class="d-flex justify-content-center">
                                    <a class="btn btn-primary btn-circle btn-sm me-1" href="{{route('edit_package_services.edit',$package_type->id)}}" title="Düzəliş edin">
                                        <i class="fa fa-edit fs-norm"></i>
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

@endsection

