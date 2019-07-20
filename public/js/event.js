$(function() {
    $.ajaxSetup({
        headers: {
            "X-CSRF-TOKEN": $('meta[name="csrf-token"]').attr("content")
        }
    });
    var alamat = "/api/event";

    $(".dataTable").dataTable({
        dataType: "json",
        ajax: alamat,
        responsive: true,
        columns: [
            {
                data: "foto",
                render: function(foto) {
                    return (
                        '<img src="/assets/img/event/' +
                        foto +
                        '" style="width:100px" height:"100px" alt="foto">'
                    );
                }
            },
            { data: "judul", name: "judul" },
            { data: "tempat", name: "tempat" },
            { data: "tanggal", name: "tanggal" },
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
