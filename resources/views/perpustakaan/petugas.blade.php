@extends('separate.master')

@section('content')
<div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">Form Input Data Petugas</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form action="/book/store" method="POST">
                @csrf
                <div class="card-body">
                  <div class="form-group">
                    <label for="exampleInputEmail1">Nama Petugas</label>
                    <input type="number" class="form-control" name="nama_petugas" placeholder="Input Nama Petugas">
                    <label for="exampleInputEmail1">Jabatan Petugas</label>
                    <input type="text" class="form-control" name="jabatan_petugas" placeholder="Input Jabatan Petugas">
                    <label for="exampleInputEmail1">No Telepon</label>
                    <input type="text" class="form-control" name="no_telp_petugas" placeholder="Input No Telepon Petugas">
                    <label for="exampleInputEmail1">Alamat Petugas</label>
                    <input type="text" class="form-control" name="penerbit_buku" placeholder="Input Penerbit Buku">
                    <!-- <label for="exampleInputEmail1">Tahun Penerbitan</label>
                    <input type="number" class="form-control" name="tahun_penerbit" placeholder="Input Tahun Penerbitan">
                    <label for="exampleInputEmail1">Stok Buku</label>
                    <input type="number" class="form-control" name="stok" placeholder="Input Sisa Stock"> -->
                  </div>
                <!-- /.card-body -->

                <div class="card-footer">
                  <button type="submit" name="submit" value="Save" class="btn btn-primary">Submit</button>
                </div>
              </form>
            </div>
@endsection