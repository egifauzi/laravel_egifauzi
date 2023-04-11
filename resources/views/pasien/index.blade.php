@extends('layout')
@section('title')
Pasien
@endsection
@section('content')


<div class="card-header cursor-pointer">
    <div class="card-title m-0">
        <h3 class="fw-bolder fs-6 m-0">Data Pasien</h3>
    </div>
    <a data-bs-toggle="modal" data-bs-target="#create_brand" href="#" type="button"
        class="align-self-center  btn btn-sm btn-primary "><i class="fas fa-plus" aria-hidden="true"></i> Tambah Pasien</a>
</div>
<div class="card-body table-responsive-md">
    <table id="example" class="table table-striped table-row-bordered gy-5 gs-7 border rounded" style="width:100%">
        <thead>
        <tr class="fw-bolder fs-6 text-gray-800 px-7">
            <th>No</th>
            <th>Nama Pasien</th>
            <th>Alamat</th>
            <th>Telepon</th>
            <th>Rumah Sakit</th>
            <th width="280px">Action</th>
        </tr>
        </thead>
        <tbody>
        @foreach ($pasien as $pasien)
        <tr>
            <td>{{ ++$i }}</td>
            <td>{{ $pasien->nama_pasien }}</td>
            <td>{{ $pasien->alamat }}</td>
            <td>{{ $pasien->telepon }}</td>
            <td>{{ $pasien['rumahsakit_id'] }}</td>
            <form action="{{ route('pasien.destroy', $pasien->id) }}" method="post">
                <td class="text-end min-w-50px">
                    <a class="btn btn-outline btn-outline btn-outline-primary btn-sm btn-active-light-primary font-16 pl-2 addAttr"
                        href="javascript:;" data-bs-toggle="modal" data-bs-target="#kt_modal_new_card"
                        data-id="{{ $pasien['id'] }}" data-satu="{{ $pasien['nama_pasien'] }}"
                        data-dua="{{ $pasien['alamat'] }}" data-tiga="{{ $pasien['rumahsakit_id'] }}"
                        data-empat="{{ $pasien['telepon'] }}"
                        data-created_at="{{ Carbon\Carbon::parse($pasien['created_at'])->formatLocalized('%A, %d %B %Y')}}"
                        data-updated_at="{{ Carbon\Carbon::parse($pasien['updated_at'])->formatLocalized('%A, %d %B %Y')}}">
                        <i class="far fa-eye text-primary"></i>Lihat</a>
                    <a class="btn btn-outline btn-outline btn-outline-primary btn-sm btn-active-light-primary font-16 pl-2"
                        href="{{ route('pasien.edit', $pasien['id']) }}">
                        <i class="far fa-edit text-primary"></i> Ubah</a>
                    <button type="submit"
                        class="btn btn-outline btn-outline btn-outline-primary btn-sm btn-active-light-primary font-16 pl-2"
                        onclick="return confirm('Apakah anda yakin ingin Menghapus data {{ $pasien['nama_lengkap'] }} dari sistem?')">
                        <i class="fa fa-trash-alt text-primary"></i> Hapus</button>
                    <input type="hidden" value="{{ csrf_token() }}" name="_token">
                    <input type="hidden" value="delete" name="_method">
                    {{-- <a class="btn btn-outline btn-outline btn-outline-primary btn-sm btn-active-light-primary font-16 pl-2 mt-1"
                        href="{{ route('pasien.edit', $pasien['id']) }}">
                    <i class="far fa-envelope text-primary"></i> Ganti Email</a> --}}
            </form>
            </td>
        </tr>
        @endforeach
    </tbody>
    </table>
  
    <div class="modal fade" data-bs-backdrop="static" id="create_brand" aria-hidden="true">
        <!--begin::Modal dialog-->
        <div class="modal-dialog modal-dialog-centered modal-lg ">
            <!--begin::Modal content-->
            <div class="modal-content">
                <!--begin::Modal header-->
                <div class="modal-header">
                    <!--begin::Modal title-->
                    <h2 class="mb-0">Tambah Data Pasien</h2>
                    <!--end::Modal title-->
                    <!--begin::Close-->
                    <div class="btn btn-icon btn-sm btn-active-icon-primary" data-bs-dismiss="modal">
                        <!--begin::Svg Icon | path: icons/duotone/Interface/Close-Square.svg-->
                        <span class="svg-icon svg-icon-2x">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                                <path opacity="0.25" fill-rule="evenodd" clip-rule="evenodd"
                                    d="M2.36899 6.54184C2.65912 4.34504 4.34504 2.65912 6.54184 2.36899C8.05208 2.16953 9.94127 2 12 2C14.0587 2 15.9479 2.16953 17.4582 2.36899C19.655 2.65912 21.3409 4.34504 21.631 6.54184C21.8305 8.05208 22 9.94127 22 12C22 14.0587 21.8305 15.9479 21.631 17.4582C21.3409 19.655 19.655 21.3409 17.4582 21.631C15.9479 21.8305 14.0587 22 12 22C9.94127 22 8.05208 21.8305 6.54184 21.631C4.34504 21.3409 2.65912 19.655 2.36899 17.4582C2.16953 15.9479 2 14.0587 2 12C2 9.94127 2.16953 8.05208 2.36899 6.54184Z"
                                    fill="#12131A" />
                                <path fill-rule="evenodd" clip-rule="evenodd"
                                    d="M8.29289 8.29289C8.68342 7.90237 9.31658 7.90237 9.70711 8.29289L12 10.5858L14.2929 8.29289C14.6834 7.90237 15.3166 7.90237 15.7071 8.29289C16.0976 8.68342 16.0976 9.31658 15.7071 9.70711L13.4142 12L15.7071 14.2929C16.0976 14.6834 16.0976 15.3166 15.7071 15.7071C15.3166 16.0976 14.6834 16.0976 14.2929 15.7071L12 13.4142L9.70711 15.7071C9.31658 16.0976 8.68342 16.0976 8.29289 15.7071C7.90237 15.3166 7.90237 14.6834 8.29289 14.2929L10.5858 12L8.29289 9.70711C7.90237 9.31658 7.90237 8.68342 8.29289 8.29289Z"
                                    fill="#12131A" />
                            </svg>
                        </span>
                        <!--end::Svg Icon-->
                    </div>
                    <!--end::Close-->
                </div>
                <!--end::Modal header-->
                <!--begin::Modal body-->
                <div class="modal-body my-1">
                    <div class="container py-5 rounded border p-10 row">
                        <form action="{{ route('pasien.store') }}" method="POST">
                            @csrf
                            @if(count($errors)>0)
                                <ul>
                                    @foreach($errors->all() as $error)
                                        <li>
                                            {{$error}}
                                        </li>
                                    @endforeach
                                </ul>
                            @endif
                            <div class="row">
                                <div class="col-12 mb-10">
                                    <label class="form-label">Nama Pasien</label>
                                    <input type="text" class="form-control  @error('nama_pasien') is-invalid @enderror"
                                        name="nama_pasien" value="" placeholder="Masukan Nama Pasien" required="" />
                                    @if ($errors->has('nama_pasien'))
                                    <span class="help-block text-danger">
                                        <strong>{{ $errors->first('nama_pasien') }}</strong>
                                    </span>
                                    @endif
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-12 mb-10">
                                    <label class="form-label">Alamat</label>
                                    <input type="text" class="form-control  @error('alamat') is-invalid @enderror"
                                        name="alamat" value="" placeholder="Masukan Alamat" required="" />
                                    @if ($errors->has('alamat'))
                                    <span class="help-block text-danger">
                                        <strong>{{ $errors->first('alamat') }}</strong>
                                    </span>
                                    @endif
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-12 mb-10">
                                    <label class="form-label">Rumah Sakit</label>
                                    <input type="text" class="form-control  @error('rumahsakit_id') is-invalid @enderror"
                                        name="rumahsakit_id" value="" placeholder="Masukan rumahsakit_id" required="" />
                                    @if ($errors->has('rumahsakit_id'))
                                    <span class="help-block text-danger">
                                        <strong>{{ $errors->first('rumahsakit_id') }}</strong>
                                    </span>
                                    @endif
                                </div>
                            </div>
                            
                            <div class="row">
                                <div class="col-12 mb-10">
                                    <label class="form-label">Telepon</label>
                                    <input type="number" class="form-control  @error('telepon') is-invalid @enderror"
                                        name="telepon" value="" placeholder="Masukan Telepon" required="" />
                                    @if ($errors->has('telepon'))
                                    <span class="help-block text-danger">
                                        <strong>{{ $errors->first('telepon') }}</strong>
                                    </span>
                                    @endif
                                </div>
                            </div>
    
                    </div>
                    <div class="d-flex flex-stack pt-8">
                        <div class="">
                        </div>
                        <div class="">
                            <button type="reset" class="btn btn-light mr-5"><i class="fa fa-undo mr-2"></i> Reset </button>
                            <button type="submit" class="btn btn-primary float-right ml-1"><i class="fa fa-check mr-2"></i>
                                Submit </button>
                        </div>
                    </div>
                    </form>
    
                </div>
                <!--end::Modal body-->
            </div>
            <!--end::Modal content-->
        </div>
        <!--end::Modal dialog-->
    </div>
    <!--begin::Modal - New Card-->
<div class="modal fade" id="kt_modal_new_card" aria-hidden="true">
    <!--begin::Modal dialog-->
    <div class="modal-dialog modal-dialog-centered mw-650px">
        <!--begin::Modal content-->
        <div class="modal-content">
            <!--begin::Modal header-->
            <div class="modal-header">
                <!--begin::Modal title-->
                <h2 class="mb-0">Rincian Data Pasien</h2>
                <!--end::Modal title-->
                <!--begin::Close-->
                <div class="btn btn-icon btn-sm btn-active-icon-primary" data-bs-dismiss="modal">
                    <!--begin::Svg Icon | path: icons/duotone/Interface/Close-Square.svg-->
                    <span class="svg-icon svg-icon-2x">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                            <path opacity="0.25" fill-rule="evenodd" clip-rule="evenodd"
                                d="M2.36899 6.54184C2.65912 4.34504 4.34504 2.65912 6.54184 2.36899C8.05208 2.16953 9.94127 2 12 2C14.0587 2 15.9479 2.16953 17.4582 2.36899C19.655 2.65912 21.3409 4.34504 21.631 6.54184C21.8305 8.05208 22 9.94127 22 12C22 14.0587 21.8305 15.9479 21.631 17.4582C21.3409 19.655 19.655 21.3409 17.4582 21.631C15.9479 21.8305 14.0587 22 12 22C9.94127 22 8.05208 21.8305 6.54184 21.631C4.34504 21.3409 2.65912 19.655 2.36899 17.4582C2.16953 15.9479 2 14.0587 2 12C2 9.94127 2.16953 8.05208 2.36899 6.54184Z"
                                fill="#12131A" />
                            <path fill-rule="evenodd" clip-rule="evenodd"
                                d="M8.29289 8.29289C8.68342 7.90237 9.31658 7.90237 9.70711 8.29289L12 10.5858L14.2929 8.29289C14.6834 7.90237 15.3166 7.90237 15.7071 8.29289C16.0976 8.68342 16.0976 9.31658 15.7071 9.70711L13.4142 12L15.7071 14.2929C16.0976 14.6834 16.0976 15.3166 15.7071 15.7071C15.3166 16.0976 14.6834 16.0976 14.2929 15.7071L12 13.4142L9.70711 15.7071C9.31658 16.0976 8.68342 16.0976 8.29289 15.7071C7.90237 15.3166 7.90237 14.6834 8.29289 14.2929L10.5858 12L8.29289 9.70711C7.90237 9.31658 7.90237 8.68342 8.29289 8.29289Z"
                                fill="#12131A" />
                        </svg>
                    </span>
                    <!--end::Svg Icon-->
                </div>
                <!--end::Close-->
            </div>
            <!--end::Modal header-->
            <!--begin::Modal body-->
            <div class="modal-body my-1">
                <!--begin::Form-->
                <div class="row">
                    <div class="card-body p-9">
                        <!--begin::Row-->
                        <div class="row mb-7">
                            <label class="col-lg-4 fw-bold text-muted">Nama</label>
                            <div class="col-lg-8">
                                <span class="fw-bolder fs-6 text-dark" id="satu"></span>
                            </div>
                        </div>
                        <div class="row mb-7">
                            <label class="col-lg-4 fw-bold text-muted">Alamat</label>
                            <div class="col-lg-8 fv-row">
                                <span class="fw-bold fs-6" id="dua"></span>
                            </div>
                        </div>

                        <div class="row mb-7">
                            <label class="col-lg-4 fw-bold text-muted">Rumah Sakit</label>
                            <div class="col-lg-8 fv-row">
                                <span class="fw-bold fs-6" id="tiga"></span>
                            </div>
                        </div>
                        <div class="row mb-7">
                            <label class="col-lg-4 fw-bold text-muted">Telepon</label>
                            <div class="col-lg-8">
                                <span class="fw-bold fs-6" id="empat"></span>
                            </div>
                        </div>
                        <div class="row mb-7">
                            <label class="col-lg-4 fw-bold text-muted">Data Diterbitkan Pada</label>
                            <div class="col-lg-8">
                                <span class="fw-bold fs-6" id="created_at"></span>
                            </div>
                        </div>
                        <div class="row mb-10">
                            <label class="col-lg-4 fw-bold text-muted">Data Diterbitkan Pada</label>
                            <div class="col-lg-8">
                                <span class="fw-bold fs-6" id="updated_at"></span>
                            </div>
                        </div>
                        <!--begin::Notice-->

                        <!--end::Notice-->
                    </div>
                </div>
                <!--end::Form-->
            </div>
            <!--end::Modal body-->
        </div>
        <!--end::Modal content-->
    </div>
    <!--end::Modal dialog-->
</div>
<!--end::Modal - New Card-->
    @endsection
    @include('pluign.data-table')
    @section('js2')
    @if(count($errors)>0)
    <script>
        $(document).ready(function () {
            $('#create_brand').modal('show');
            console.log("ready!");
        });
    
    </script>
    @endif
    <script>
        $('.addAttr').click(function () {
            var id = $(this).data('id');
            var satu = $(this).data('satu');
            var dua = $(this).data('dua');
            var tiga = $(this).data('tiga');
            var empat = $(this).data('empat');
            var created_at = $(this).data('created_at');
            var updated_at = $(this).data('updated_at');
    
    
            $('#satu').text(satu);
            $('#dua').text(dua);
            $('#tiga').text(tiga);
            $('#empat').text(empat);
            $('#created_at').text(created_at);
            $('#updated_at').text(updated_at);
        });
    
    </script>
    @endsection