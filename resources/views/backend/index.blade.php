@extends('backend.layouts.main')
@section('main-container')
    <div class="breadcrumbs">
        <div class="col-sm-4">
            <div class="page-header float-left">
                <div class="page-title">
                    <h1>Dashboard</h1>
                </div>
            </div>
        </div>
        <div class="col-sm-8">
            <div class="page-header float-right">
                <div class="page-title">
                    <ol class="breadcrumb text-right">
                        <li class="active">Dashboard</li>
                    </ol>
                </div>
            </div>
        </div>
    </div>

    <div class="content mt-3">
        <div class="animated fadeIn">
            <div class="row">
                <div class="col-md-6">
                    <div class="card">
                        <div class="card-header">
                            <strong class="card-title">
                                Helpline
                                <a href="{{route('admin.helpline.trash')}}">
                                    <button class="btn btn-danger d-line-block ml-2 float-right"> Move To Trash </button>
                                </a>
                                <a href="{{ route('admin.helpline.create') }}">
                                    <button class="btn btn-primary d-line-block ml-2 float-right"> Add </button>
                                </a>
                            </strong>
                        </div>

                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table">
                                    <thead>
                                        <tr>
                                            <th width="2%">S.No#</th>
                                            <th width="44%">Helpline Name</th>
                                            <th width="44%">Helpline Number</th>
                                            <th width="10%">Actions</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @php
                                            $i = 1;
                                        @endphp
                                        @forelse ($helplines as $helpline)
                                            <tr>
                                                <td>{{ $i }}</td>
                                                <td>{{ $helpline->hname }}</td>
                                                <td>{{ $helpline->hnumber }}</td>
                                                <td>
                                                    <a href="{{ route('admin.helpline.edit', ['id' => $helpline->helpline_id]) }}"
                                                        class="badge badge-primary float-left"><i class="fa fa-edit"
                                                            style="font-size:16px;"></i></a>
                                                    <a href="{{ route('admin.helpline.softdelete', ['id' => $helpline->helpline_id]) }}"
                                                        class="badge badge-danger float-right"><i class="fa fa-trash"
                                                            style="font-size:16px;"></i></a>
                                                </td>
                                                </td>
                                            </tr>
                                            @php
                                                $i++;
                                            @endphp
                                        @empty
                                            <tr>
                                                <td colspan="4" style="text-align:center;"><strong>No Records
                                                        Founds!</strong></td>
                                            </tr>
                                        @endforelse
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div> <!-- .card -->

                </div>
                <!--/.col-->
                <div class="col-md-6">
                    <div class="card">
                        <div class="card-header">
                            <strong class="card-title">
                                News
                                <a href="">
                                    <button class="btn btn-danger d-line-block ml-2 float-right"> Move To Trash </button>
                                </a>
                                <a href="">
                                    <button class="btn btn-primary d-line-block ml-2 float-right"> Add </button>
                                </a>
                            </strong>

                        </div>

                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table">

                                    <tbody>
                                        <tr>
                                            <td>PCR</td>
                                            <td>100</td>
                                            <td>
                                                <a href="" class="badge badge-primary float-right"><i class="fa fa-edit"
                                                        style="font-size:16px;"></i></a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>PCR</td>
                                            <td>100</td>
                                            <td>
                                                <a href="" class="badge badge-primary float-left"><i class="fa fa-edit"
                                                        style="font-size:16px;"></i></a>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div> <!-- .card -->
                </div>
                <!--/.col-->

            </div>
        </div>
    </div>
    </div>
@endsection
