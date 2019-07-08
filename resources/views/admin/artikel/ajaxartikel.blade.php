@extends('layouts.admin')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">Dashboard</div>
                <div class="card-body">

                    <div class="form-group">
                        <label for="">Judul</label>
                        <input class="form-control" type="text" name="judul" required>
                    </div>
                    <div class="form-group">
                        <label for="">Konten</label>
                        <textarea id="editor1" name="konten" class="form-control" cols="30" rows="10" required></textarea>
                    </div>
                    <div class="form-group">
                        <label for="">Foto</label>
                        <input class="form-control" type="file" name="foto" required>
                    </div>
                    <div class="form-group">
                        <label for="">Kategori</label>
                        <select name="kategori_id" class="form-control">
                            @foreach($kategori as $data)
                                <option value="{{ $data->id }}">{{ $data->nama_kategori }}</option>
                             @endforeach
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="">Tag</label>
                        <select name="tag_id[]" id="s2_demo3" class="form-control multiple" multiple>
                            @foreach($tag as $data)
                                <option value="{{ $data->id }}">
                                    {{ $data->nama_tag }}
                                </option>
                            @endforeach
                        </select>
                    </div>
                    <div class="form-group">
                        <button class="btn btn-success tombol-simpan">Simpan</button>
                    </div>
                </div>
                <div>
                    <table class="table data-artikel">
                    <tr>
                        <th><center>Judul</center></th>
                        <th><center>Slug</center></th>
                        <th><center>Kategori</center></th>
                        <th><center>Tag</center></th>
                        <th><center>Penulis</center></th>
                        <th><center>Foto</center></th>
                        <th colspan="3" style="text-align: center;">AKSI</th>
                    </tr>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
