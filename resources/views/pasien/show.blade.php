@extends('layout')
  
@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2> Show pasien</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-primary" href="{{ route('pasien.index') }}"> Back</a>
            </div>
        </div>
    </div>
   
    <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>nama_pasien</strong>
                {{ $pasien->nama_pasien }}
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>alamat</strong>
                {{ $pasien->alamat }}
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>telepon</strong>
                {{ $pasien->telepon }}
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>rumahsakit_id</strong>
                {{ $pasien->rumahsakit_id }}
            </div>
        </div>
    </div>
@endsection