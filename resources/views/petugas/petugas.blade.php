@extends('separate.master')

@section('content')

<div class="content-wrapper">

    <div class="card card-success">
        <div class="card-header">
                <h3 class="card-title">Form Input Data Petugas</h3>
              </div>

              <form action="{{ route('petugas.store') }}" method="POST">
                @csrf
                <div class="card-body">
                    <div class="card card-success">
              <div class="card-header">
                  <h3 class="card-title">Petugas</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form>
                  <div class="card-body">
                  <div class="form-group">
                      <label for="exampleInputNama1">Nama</label>
                      <input type="text" class="form-control" name="nama" placeholder="Enter Nama">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputJabatan1">Jabatan</label>
                    <input type="text" class="form-control" name="jabatan" placeholder="Enter Jabatan">
                  </div>
                  <div class="form-group">
                      <label for="exampleInputNoTelepon1">No Telepon</label>
                    <input type="number" class="form-control" name="telp" placeholder="Enter No Telepon">
                  </div>
                  <div class="form-group">
                      <label for="exampleInputAlamat1">Alamat</label>
                      <input type="text" class="form-control" name="alamat" placeholder="Enter Alamat">
                  </div>
                  <!-- /.card-body -->

                  <div class="card-footer">
                      <button type="submit" class="btn btn-success">Submit</button>
                  <a href="{{ route('petugas.index') }}" class="btn btn-success">Kembali</a>
                </div>
              </form>
            </div>
        </div>

            <!-- jQuery -->
            <script src="{{ asset('AdminLTE/plugins/jquery/jquery.min.js')}}"></script>
<!-- Bootstrap 4 -->
<script src="{{ asset('AdminLTE/plugins/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
<!-- AdminLTE App -->
<script src="{{ asset('AdminLTE/dist/js/adminlte.min.js')}}"></script>
@endsection