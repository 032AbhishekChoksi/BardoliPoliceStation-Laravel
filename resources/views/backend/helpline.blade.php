@extends('backend.layouts.main')
@section('main-container')
    <div class="breadcrumbs">
        <div class="col-sm-4">
            <div class="page-header float-left">
                <div class="page-title">
                    <h1>Helpline</h1>
                </div>
            </div>
        </div>
        <div class="col-sm-8">
            <div class="page-header float-right">
                <div class="page-title">
                    <ol class="breadcrumb text-right">
                        <li><a href="{{ route('admin.dashboard') }}">Dashboard</a></li>
                        <li><a href="{{ route('admin.dashboard') }}">Helpline</a></li>
                        <li class="active">{{$breadTitle}}</li>
                    </ol>
                </div>
            </div>
        </div>
    </div>
    <div class="content mt-3">
        <div class="animated fadeIn">
            <div class="row">
                <div class="col-md-2"></div>
                <div class="col-md-8">
                    <div class="card">
                        <div class="card-header">
                            <strong class="card-title">
                                {{$title}}
                                <a href="{{route('admin.dashboard')}}">
                                    <button class="btn btn-primary d-line-block ml-2 float-right"> View </button>
                                </a>
                            </strong>
                        </div>
                        <form action="" method="POST" class="form-horizontal">
                            @csrf
                            <div class="card-body card-block">
                                <div class="row form-group">
                                    <div class="col col-md-3">
                                        <label for="name-input" class=" form-control-label">Helpline Name</label>
                                    </div>
                                    <div class="col-12 col-md-9">
                                        <input type="text" name="name" id="" class="form-control"
                                            placeholder="Helpline Name"
                                            value="{{ old('name', isset($helpline->hname) ? $helpline->hname : '') }}" required>
                                        <span class="text-danger">
                                            @error('name')
                                                {{ $message }}
                                            @enderror
                                        </span>
                                    </div>
                                </div>
                                <div class="row form-group">
                                    <div class="col col-md-3">
                                        <label for="number-input" class=" form-control-label">Helpline Number</label>
                                    </div>
                                    <div class="col-12 col-md-9">
                                        <input type="number" name="number" id="" class="form-control"
                                            placeholder="Helpline Number"
                                            value="{{ old('number', isset($helpline->hnumber) ? $helpline->hnumber : '') }}" required>
                                        <span class="text-danger">
                                            @error('number')
                                                {{ $message }}
                                            @enderror
                                        </span>
                                    </div>
                                </div>
                            </div>
                            <div class="card-footer">
                                <button type="submit" class="btn btn-primary btn-sm">
                                    <i class="fa fa-dot-circle-o"></i> Submit
                                </button>
                                <button type="reset" class="btn btn-danger btn-sm">
                                    <i class="fa fa-ban"></i> Reset
                                </button>
                            </div>
                        </form>
                    </div>
                </div>
                <!--/.col-->
                <div class="col-md-2"></div>
            </div>
        </div><!-- .animated -->
    </div><!-- .content -->


    </div>
@endsection
