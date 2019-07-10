<!-- Modal -->
@extends('layouts.admin')
@section('css')
<link rel="stylesheet" href="/backend/assets/vendor/select2/select2.min.css">
<style>
/* Full-width input fields */
input[type=text], input[type=password] {
    width: 100%;
    padding: 12px 20px;
    margin: 8px 0;
    display: inline-block;
    border: 1px solid #ccc;
    box-sizing: border-box;
}
/* Set a style for all buttons */
button {
    background-color: #4CAF50;
    color: white;
    padding: 14px 20px;
    margin: 8px 0;
    border: none;
    cursor: pointer;
    width: 80%;
}
button:hover {
    opacity: 0.8;
}
/* Extra styles for the cancel button */
.cancelbtn {
    width: auto;
    padding: 10px 18px;
    background-color: #f44336;
}
/* Center the image and position the close button */
/* .imgcontainer {
    text-align: center;
    margin: 24px 0 12px 0;
    position: relative;
}
img.avatar {
    width: 40%;
    border-radius: 50%;
} */
.container {
    padding: 16px;
}
span.psw {
    float: right;
    padding-top: 16px;
}
/* The Modal (background) */
.modal {
    display: none; /* Hidden by default */
    position: fixed; /* Stay in place */
    z-index: 1; /* Sit on top */
    left: 10%;
    top: 0;
    width: 100%; /* Full width */
    height: 100%; /* Full height */
    overflow: auto; /* Enable scroll if needed */
    background-color: rgb(0,0,0); /* Fallback color */
    background-color: rgba(0,0,0,0.4); /* Black w/ opacity */
    padding-top: 60px;
}
/* Modal Content/Box */
.modal-content {
    background-color: #fefefe;
    margin: 5% auto 15% auto; /* 5% from the top, 15% from the bottom and centered */
    border: 1px solid #888;
    width: 60%; /* Could be more or less, depending on screen size */
}
/* The Close Button (x) */
.close {
    position: absolute;
    right: 25px;
    top: 0;
    color: #000;
    font-size: 35px;
    font-weight: bold;
}
.close:hover,
.close:focus {
    color: red;
    cursor: pointer;
}
/* Add Zoom Animation */
.animate {
    -webkit-animation: animatezoom 0.6s;
    animation: animatezoom 0.6s
}
@-webkit-keyframes animatezoom {
    from {-webkit-transform: scale(0)} 
    to {-webkit-transform: scale(1)}
}
@keyframes animatezoom {
    from {transform: scale(0)} 
    to {transform: scale(1)}
}
/* Change styles for span and cancel button on extra small screens */
@media screen and (max-width: 300px) {
    span.psw {
       display: block;
       float: none;
    }
    .cancelbtn {
       width: 100%;
    }
}
</style>
@endsection

@section('js')
<script src="/backend/assets/vendor/select2/select2.min.js"></script>
<script src="/backend/assets/js/components/select2-init.js"></script>
<script src="/backend/assets/vendor/ckeditor/ckeditor.js"></script>
<script>
        CKEDITOR.replace( 'editor1' );
</script>
@endsection

@section('content')
    <div id="id01" class="modal">
        <form class="modal-content animate" id="form-create-artikel" action="/action_page.php" enctype="multipart/form-data">
            <div class="imgcontainer">
                 <span onclick="document.getElementById('id01').style.display='none'" class="close" title="Close Modal">&times;</span>
    
            </div>
            <div class="container">
                <div class="form-group">
                    <label for="">Judul</label>
                    <input class="form-control judul" type="text" name="judul" required>
                </div>
                <div class="form-group">
                    <label for="">Konten</label>
                    <textarea id="editor1" name="konten" class="form-control konten" cols="30" rows="10" required></textarea>
                </div>
                <div class="form-group">
                    <label for="">Foto</label>
                    <input class="form-control foto" type="file" name="foto" required>
                </div>
                <div class="form-group">
                    <label for="">Kategori</label>
                    <select name="kategori" class="form-control kategori">
                        <option selected>Pilih Kategori</option>
                    </select>
                </div>
                <div class="form-group">
                    <label for="">Tag</label>
                    <select name="tag[]" id="s2_demo3" class="form-control multiple tag" multiple></select>
                </div>
                <div class="modal-footer">
                    <button type="submit" class="btn btn-primary simpan-artikel">Simpan</button>
                </div>
            </div>     
        </form>
    </div>
    <div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header bg-dark">Data Artikel</div>
                <div class="card-body">  
                <center><button class="btn btn-primary tambah-artikel" onclick="document.getElementById('id01').style.display='block'" style="width:200px;">Tambah</button></center>
                    <div class="table-responsive">
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
                        </table>
                    </div>
                </div>
                </div>
            </div>
        </div>
    </div>
    </div>
@endsection