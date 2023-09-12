@extends('separate.master')

@section('content')
<div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">Form Input Data Pengembalian</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form action="/book/store" method="POST">
                @csrf
                <div class="card-body">
                  <div class="form-group">
                    <label for="exampleInputEmail1">Tanggal Pengembalian</label>
                    <input type="number" class="form-control" name="tanggal_pengembalian" placeholder="Input Tanggal Pengembalian">
                    <label for="exampleInputEmail1">Denda</label>
                    <input type="text" class="form-control" name="denda" placeholder="Input Denda">
 </div>
                <!-- /.card-body -->

                <div class="card-footer">
                  <button type="submit" name="submit" value="Save" class="btn btn-primary">Submit</button>
                  <button type="submit" name="reset" value="Save" class="btn btn-primary">Reset</button>
                </div>
              </form>
            </div>
</div>
@endsection