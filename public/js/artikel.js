$(function() {
    $.ajaxSetup({
        headers: {
            "X-CSRF-TOKEN": $('meta[name="csrf-token"]').attr("content")
        }
    });
    var alamat = "/api/artikel";

    // $.ajax({
    //     url: alamat,
    //     method: "GET",
    //     dataType: "json",
    //     success: function (berhasil) {
    //         console.log(berhasil)
    //         $.each(berhasil.data, function (key, value) {
    //             $(".data-artikel").append(
    //                 `
    //                 <tr>
    //                     <td><center>${value.judul}</center></td>
    //                     <td><center>${value.slug}</center></td>
    //                     <td><center>${value.kategori.nama_kategori}</center></td>
    //                     <td><center>${value.tag[0].nama_tag}</center></td>
    //                     <td><center>${value.user.name}</center></td>
    //                     <td><center><img src="/assets/img/artikel/${value.foto}" width="100px" height="100px"></center></td>
    //                     <td><center><button class="btn btn-danger btn-sm hapus-data" data-id="${value.id}">Hapus</button></td>
    //                 </tr>
    //                 `
    //             )
    //         })
    //     }
    // });

    $(".dataTable").dataTable({
        dataType: "json",
        ajax: alamat,
        responsive: true,
        columns: [
            { data: "judul", name: "judul" },
            { data: "slug", name: "slug" },
            { data: "kategori.nama_kategori", name: "kategori.nama_kategori" },
            {
                data: "tag[].nama_tag",
                render: function(nama_tag) {
                    return `${nama_tag}`;
                }
            },
            { data: "user.name", name: "user.name" },
            {
                data: "foto",
                render: function(foto) {
                    return (
                        '<img src="/assets/img/artikel/' +
                        foto +
                        '" style="width:100px" height:"100px" alt="foto">'
                    );
                }
            },
            {
                data: "id",
                render: function(id) {
                    return `<button
                            type="button"
                            class="btn btn-danger btn-sm hapus-data"
                            data-id="${id}">Hapus</button>`;
                }
            }
        ]
    });

    $(".tambah-artikel").on("click", function(e) {
        e.preventDefault();

        $.ajax({
            url: "/api/kategori",
            method: "GET",
            dataType: "JSON",
            success: function(data) {
                $.each(data.data, function(key, value) {
                    $(".kategori").append(
                        `
                        <option value="${value.id}">${
                            value.nama_kategori
                        }</option>
                        `
                    );
                });
            },
            error: function(err) {
                console.log(err);
            }
        });

        $.ajax({
            url: "/api/tag",
            method: "GET",
            dataType: "JSON",
            success: function(data) {
                $.each(data.data, function(key, value) {
                    $(".tag").append(
                        `
                        <option value="${value.id}">${value.nama_tag}</option>
                        `
                    );
                });
            },
            error: function(err) {
                console.log(err);
            }
        });
    });

    $("#form-create-artikel").on("submit", function(e) {
        var formData = new FormData($("#form-create-artikel")[0]);
        e.preventDefault();
        // var tag = $('.tag option:selected').attr('value');

        // formData.append('judul', $('.judul').val());
        // formData.append('konten', $('.konten').val());
        // formData.append('kategori',  $('.kategori option:selected').attr('value'));
        // formData.append('tag', [tag]);
        // formData.append('foto', $('input[type="file"]')[0].files[0])

        $.ajax({
            url: alamat,
            method: "POST",
            dataType: "JSON",
            data: formData,
            contentType: false,
            processData: false,
            success: function(res) {
                alert(res.message);
                location.reload();
            },
            error: function(err) {
                console.log(err);
            }
        });
    });

    // Hapus Data
    $(".data-artikel").on("click", ".hapus-data", function() {
        var id = $(this).data("id");
        // alert(id)
        $.ajax({
            url: alamat + "/" + id,
            method: "DELETE",
            dataType: "json",
            data: {
                id: id
            },
            success: function(berhasil) {
                alert(berhasil.message);
                location.reload();
            },
            error: function(gagal) {
                console.log(gagal);
            }
        });
    });
});
