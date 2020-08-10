@extends('layouts/master')
@section('content')
<form action="/proyek/store" method="POST">
  @csrf
			<div class="card-body">
                  <div class="form-group">
                    <label>Nama Proyek</label>
                    <input type="text" class="form-control" name="nama_proyek" id="nama_proyek" placeholder="Nama Proyek">
                  </div>
                  <div class="form-group">
                    <label>deskripsi</label>
                    <input type="text" class="form-control" name="deskripsi" id="deskripsi" placeholder="Deskripsi">
                  </div>
                  <div class="form-group">
                    <label>Tanggal Mulai</label>
                    <input type="date" class="form-control" name="tgl_mulai" id="tgl_mulai" >
                  </div>
                  <div class="form-group">
                    <label>Tanggal Deadline</label>
                    <input type="date" class="form-control" name="tgl_deadline" id="tgl_deadline" >
                  </div>
                  <div class="form-group">
                    <label>Status</label>
                    <select name="status" id="status" class="form-control">
                      <option value="0">False</option>
                      <option value="1">True</option>
                    </select>
                  </div>
                  <button type="submit" class="btn btn-primary">Submit</button>                
              </div>
</form>
@endsection