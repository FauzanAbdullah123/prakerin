@extends('layouts.admin')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">Dashboard</div>
                <div class="card-body">
              
                    <div class="form-group">
                        <label>Nama Tag</label>
                        <input type="text" name="namatag" class="form-control" required>
                    </div>
                    <div class="form-group">
                        <button class="btn btn-success tombol-simpan">Simpan</button>
                    </div>
                </div>
                <div>
                    <table class="table data-tag">
                    <tr>
                        <th><center>Nama Tag</center></th>
                        <th><center>Slug</center></th>
                        <th colspan="3" style="text-align: center;">AKSI</th>
                    </tr>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
