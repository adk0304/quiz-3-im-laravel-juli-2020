@extends('layouts/master')
@section('content')
 <div class="card">
      <div class="card-header">
        <h3 class="card-title">DataTable with default features</h3>
      </div>
      <!-- /.card-header -->
      <div class="card-body">
        <table id="example1" class="table table-bordered table-striped">
          <thead>
          <tr>
            <th>No</th>
            <th>Nama Proyek</th>
            <th>Deskripsi</th>
            <th>Tanggal Mulai</th>
            <th>Tanggal Deadline</th>
            <th>Status</th>
          </tr>
          </thead>
          <tbody>
            @foreach($proyek as $p => $proyek)
          <tr>
            <td> {{$p +1 }}</td>
            <td>{{$proyek -> nama_proyek}}</td>
            <td>{{$proyek -> deskripsi}}</td>
            <td>{{$proyek -> tgl_mulai}}</td>
            <td>{{$proyek -> tgl_deadline}}</td>
            <td>{{$proyek -> status}}</td>
          </tr>
            @endforeach
          </tfoot>
        </table>
      </div>
      <!-- /.card-body -->
    </div>
@endsection