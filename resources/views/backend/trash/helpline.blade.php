@extends('backend.layouts.main')
@section('main-container')
<div class="breadcrumbs">
    <div class="col-sm-4">
        <div class="page-header float-left">
            <div class="page-title">
                <h1>Trash</h1>
            </div>
        </div>
    </div>
    <div class="col-sm-8">
        <div class="page-header float-right">
            <div class="page-title">
                <ol class="breadcrumb text-right">
                    <li><a href="{{ route('admin.dashboard') }}">Trash</a></li>
                    <li class="active">Helpline</a></li>
                </ol>
            </div>
        </div>
    </div>
</div>
<div class="content mt-3">
    <div class="animated fadeIn">
        <div class="row">
            <div class="col-md-2"></div>
            <!--/.col-->
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">
                        <strong class="card-title">
                            Helpline
                            <a href="{{ route('admin.dashboard') }}">
                                <button class="btn btn-primary d-line-block ml-2 float-right"> View </button>
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
                                                <a href="{{ route('admin.helpline.restoredelete', ['id' => $helpline->helpline_id]) }}"
                                                    class="badge badge-primary float-left"><i class="fa fa-undo"
                                                        style="font-size:16px;"></i></a>
                                                <a href="{{ route('admin.helpline.forcedelete', ['id' => $helpline->helpline_id]) }}"
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
            <div class="col-md-2"></div>
            <!--/.col-->
        </div>
    </div>
</div>
    </div>
@endsection
