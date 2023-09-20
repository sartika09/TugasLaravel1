@extends('separate.master')

@section('content')

<div class="content-wrapper">

<div class="card card-info">
              <div class="card-header">
                <h3 class="card-title">Form Detail Data Petugas</h3>
              </div>

              <form action="{{ route('petugas.store') }}" method="POST">
                @csrf
              <div class="card-body">
              <div class="card card-info">
              <div class="card-header">
                <h3 class="card-title">Petugas</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form>
                <div class="card-body">
                  <div class="form-group">
                    <label for="exampleInputNama1">Nama</label>
                    <input type="text" class="form-control" name="nama" value="{{ $petugass[0]->nama_petugas }}" disabled>
                  </div>
                  <div class="form-group">
                    <label for="exampleInputJabatan1">Jabatan</label>
                    <input type="text" class="form-control" name="jabatan" value="{{ $petugass[0]->jabatan_petugas }}" disabled>
                  </div>
                  <div class="form-group">
                    <label for="exampleInputNoTelepon1">No Telepon</label>
                    <input type="number" class="form-control" name="telp" value="{{ $petugass[0]->no_telp_petugas }}" disabled>
                  </div>
                  <div class="form-group">
                    <label for="exampleInputAlamat1">Alamat</label>
                    <input type="text" class="form-control" name="alamat" value="{{ $petugass[0]->alamat_petugas }}" disabled>
                  </div>
                <!-- /.card-body -->

                <div class="card-footer">
                  <a href="{{ route('petugas.index') }}" class="btn btn-info">Kembali</a>
                </div>
              </form>
            </div>

<!-- jQuery -->
<script src="{{ asset('AdminLTE/plugins/jquery/jquery.min.js')}}"></script>
<!-- Bootstrap 4 -->
<script src="{{ asset('AdminLTE/plugins/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
<!-- AdminLTE App -->
<script src="{{ asset('AdminLTE/dist/js/adminlte.min.js')}}"></script>
@endsection