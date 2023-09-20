@extends('separate.master')

@section('content')
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
@@ -10,7 +8,7 @@
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="">Home</a></li>
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Blank Page</li>
            </ol>
          </div>
@@ -24,7 +22,7 @@
      <!-- Default box -->
      <div class="card">
        <div class="card-header">
          <h3 class="card-title">INI PERPUSTAKAAN</h3>
          <h3 class="card-title">Title</h3>

          <div class="card-tools">
            <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
@@ -35,35 +33,9 @@
            </button>
          </div>
        </div>
        <!-- <div class="card-body">
        <table border="1" width="100%" style="text-align: center">
    <tr>
        <th>kode buku</th>
        <th>judul buku</th>
        <th>penulis buku</th>
        <th>penerbit buku</th>
        <th>tahun penerbit</th>
        <th>stok</th>
    </tr>
    @foreach($buku as $key)
    <tr>
        <td>{{$key->kode_buku}}</td>
        <td>{{$key->judul_buku}}</td>
        <td>{{$key->penulis_buku}}</td>
        <td>{{$key->penerbit_buku}}</td>
        <td>{{$key->tahun_penerbit}}</td>
        <td>{{$key->stok}}</td>
    </tr>
    @endforeach
</table> -->

        <div class="card-body">
          Start creating your amazing application!
        </div>
        <!-- /.card-body -->
        <!-- /.card-footer-->
      </div>
      <!-- /.card -->

    </section>
    <!-- /.content -->
@endsection
</div>