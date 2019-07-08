@extends('layouts.admin')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">Dashboard</div>
                <div class="card-body">
              
                    <div class="form-group">
                        <label>Nama Kategori</label>
                        <input type="text" name="namakategori" class="form-control" required>
                    </div>
                    <div class="form-group">
                        <button class="btn btn-success tombol-simpan">Simpan</button>
                    </div>
                </div>
                <div>
                    <table class="table data-kategori">
                    <tr>
                        <th><center>Nama Kategori</center></th>
                        <th><center>Slug</center></th>
                        <th colspan="3" style="text-align: center;">AKSI</th>
                    </tr>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
