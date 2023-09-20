@extends('separate.master')

@section('content')

<div class="content-wrapper">
<div class="card card-info">
              <div class="card-header">
                <h3 class="card-title">Form Detail Data Anggota</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form action="{{ route('anggota.store') }}" method="POST">
                @csrf
              <div class="card-body">
              <div class="card card-info">
              <div class="card-header">
                <h3 class="card-title">Data Anggota</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form>
                <div class="card-body">
                  <div class="form-group">
                    <label for="exampleInputEmail1">Kode Anggota</label>
                    <input type="text" class="form-control" name="kode" value="{{ $anggota[0]->kode_anggota }}" disabled>
                    <label for="exampleInputEmail1">Nama Anggota</label>
                    <input type="text" class="form-control" name="nama" value="{{ $anggota[0]->nama_anggota }}" disabled>
                        <label>Jenis Kelamin</label>
                        <select type="text" name="jk" class="form-control" value="{{ $anggota[0]->jk_anggota }}" disabled>
                          <option disabled selectdes>Jenis Kelamin</option>
                          <option value="L">Laki-Laki</option>
                          <option value="P">Perempuan</option>
                        </select>
                        <label>Jurusan</label>
                        <select type="text" name="jurusan" class="form-control" value="{{ $anggota[0]->jurusan_anggota }}" disabled>
                          <option disabled selectdes>Jurusan</option>
                          <option value="rpl">RPL</option>
                          <option value="tkj">TKJ</option>
                          <option value="dpib">DPIB</option>
                          <option value="dgm">DGM</option>
                          <option value="tm">TM</option>
                          <option value="tkro">TKRO</option>
                          <option value="tbsm">TBSM</option>
                          <option value="tei">TEI</option>
                          <option value="titl">TITL</option>
                          <option value="tflm">TFLM</option>
                          <option value="tpl">TPL</option>
                        </select>
                    <label for="exampleInputEmail1">No Telepon</label>
                    <input type="number" class="form-control" name="telp" value="{{ $anggota[0]->no_telp_anggota }}" disabled>
                    <label for="exampleInputEmail1">Alamat Anggota</label>
                    <input type="text" class="form-control" name="alamat" value="{{ $anggota[0]->alamat_anggota }}" disabled>
                  </div>
                <!-- /.card-body -->

                <div class="card-footer">
                  <a href="{{ route('anggota.index') }}" class="btn btn-info">Kembali</a>
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