$(function() {
    $.ajaxSetup({
        headers: {
            "X-CSRF-TOKEN": $('meta[name="csrf-token"]').attr("content")
        }
    });
    var alamat = "/api/event";

      $.ajax({
        url: alamat,
        method: "GET",
        dataType: "json",
        success: function (berhasil) {
            console.log(berhasil)
            $.each(berhasil.data, function (key, value) {
                $(".data-event").append(
                    `
                    <tr>
                    <td><center><img src="/assets/img/event/${value.foto}" width="100px" height="100px"></center></td>
                        <td><center>${value.judul}</center></td>
                        <td><center>${value.tempat}</center></td>
                        <td><center>${value.tanggal}</center></td>
                        <td><center><button class="btn btn-danger btn-sm hapus-data" data-id="${value.id}">Hapus</button></td>
                    </tr>
                    `
                )
            })
        }
    });


    $("#form-create-event").on("submit", function(e) {
        var formData = new FormData($("#form-create-event")[0]);
        e.preventDefault();

        // formData.append("foto", $('input[type="file"]')[0].files[0]);
        // formData.append("judul", $(".judul").val());
        // formData.append("tempat", $(".tempat").val());
        // formData.append("tanggal", $(".tanggal").val());

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
    $(".data-event").on("click", ".hapus-data", function() {
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
