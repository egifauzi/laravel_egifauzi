@extends('layout')
   
@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Edit pasien</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-primary" href="{{ route('pasien.index') }}"> Back</a>
            </div>
        </div>
    </div>
   
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
  
    <form action="{{ route('pasien.update',$pasien->id) }}" method="POST">
        @csrf
        @method('PUT')
   
         <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>nama_pasien : </strong>
                    <input type="text" name="nama_pasien" value="{{ $pasien->nama_pasien }}" class="form-control" placeholder="nama_pasien">
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>alamat : </strong>
                    <input type="text" name="alamat" value="{{ $pasien->alamat }}" class="form-control" placeholder="alamat">
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>telepon : </strong>
                    <input type="text" name="telepon" value="{{ $pasien->telepon }}" class="form-control" placeholder="telepon">
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>rumahsakit_id : </strong>
                    <input type="text" name="rumahsakit_id" value="{{ $pasien->rumahsakit_id }}" class="form-control" placeholder="rumahsakit_id">
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12 text-center">
              <button type="submit" class="btn btn-primary">Submit</button>
            </div>
        </div>
   
    </form>
@endsection