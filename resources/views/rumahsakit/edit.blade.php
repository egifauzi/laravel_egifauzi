@extends('layout')
@section('title')
Rumah Sakit
@endsection
@section('content')
@if ($message = Session::get('success'))
        <div class="alert alert-success">
            <p>{{ $message }}</p>
        </div>
    @endif

<div class="card-header cursor-pointer">
    <div class="card-title m-0">
        <h3 class="fw-bolder fs-6 m-0">Data Rumah Sakit</h3>
    </div>
    {{-- <a data-bs-toggle="modal" data-bs-target="#create_brand" href="#" type="button"
        class="align-self-center  btn btn-sm btn-primary "><i class="fas fa-plus" aria-hidden="true"></i> Tambah Rumah Sakit</a> --}}
</div>
<div class="card-body table-responsive-md">

   
    @if ($errors->any())
        <div class="alert alert-danger">
            <strong>Whoops!</strong> There were some problems with your input.<br><br>
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
  
    <form action="{{ route('rumahsakit.update',$rumahsakit->id) }}" method="POST">
        @csrf
        @method('PUT')
   
         <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12 mb-5">
                <div class="form-group">
                    <strong>nama_rumahsakit : </strong>
                    <input type="text" name="nama_rumahsakit" value="{{ $rumahsakit->nama_rumahsakit }}" class="form-control" placeholder="nama_rumahsakit">
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12 mb-5">
                <div class="form-group">
                    <strong>alamat : </strong>
                    <input type="text" name="alamat" value="{{ $rumahsakit->alamat }}" class="form-control" placeholder="alamat">
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12 mb-5">
                <div class="form-group">
                    <strong>email : </strong>
                    <input type="text" name="email" value="{{ $rumahsakit->email }}" class="form-control" placeholder="email">
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12 mb-5">
                <div class="form-group">
                    <strong>telepon : </strong>
                    <input type="text" name="telepon" value="{{ $rumahsakit->telepon }}" class="form-control" placeholder="telepon">
                </div>
            </div>
            <div class="d-flex flex-stack pt-8">
                <div class="">
                    <a class="btn btn-light" href="{{route('rumahsakit.index')}}"><i class="fa fa-arrow-left mr-2"></i> Kembali </a>
                </div>
                <div class="">
                    <button type="reset" class="btn btn-light mr-5"><i class="fa fa-undo mr-2"></i> Reset </button>
                    <button type="submit" class="btn btn-primary float-right ml-1"><i class="fa fa-check mr-2"></i> Submit </button>
                </div>
            </div>
        </div>
   
    </form>
</div>
@endsection