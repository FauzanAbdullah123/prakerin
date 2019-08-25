$(function () {
    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });
    var alamat = '/api/tag'

    // Get Data Siswa
    $.ajax({
        url: alamat,
        method: "GET",
        dataType: "json",
        success: function (berhasil) {
            // console.log(berhasil)
            $.each(berhasil.data, function (key, value) {
                $(".data-tag").append(
                    `
                    <tr>
                        <td><center>${value.nama_tag}</center></td>
                        <td><center>${value.slug}</center></td>
                        <td><center><button class="btn btn-danger btn-sm hapus-data" data-id="${value.id}">Hapus</button></td>
                    </tr>
                    `
                )
            })
        }
    })

    // Simpan Data
    $(".tombol-simpan").click(function (simpan) {
        simpan.preventDefault();
        var nama = $("input[name=namatag]").val()
        // console.log(nama)
        $.ajax({
            url: alamat,
            method: "POST",
            dataType: "json",
            data: {
                nama_tag : nama
            },
            success: function (berhasil) {
                Swal.fire(
                    'Good job!',
                    berhasil.message,
                    'success'
                  )
                location.reload();
            },
            error: function (gagal) {
                console.log(gagal)
            }
        })
    })

    // Hapus Data
    $(".data-tag").on('click', '.hapus-data', function () {
        var id = $(this).data("id");
        // alert(id)
        $.ajax({
            url: alamat + "/" + id,
            method: "DELETE",
            dataType: "json",
            data: {
                id: id
            },
            success: function (berhasil) {
                const swalWithBootstrapButtons = Swal.mixin({
                    customClass: {
                      confirmButton: 'btn btn-success',
                      cancelButton: 'btn btn-danger'
                    },
                    buttonsStyling: false
                  })
                  
                  swalWithBootstrapButtons.fire({
                    title: 'Apakah Anda Yakin?',
                    text: "Menghapus Data Artikel!",
                    type: 'warning',
                    showCancelButton: true,
                    confirmButtonText: 'Ya, Hapus Saja!',
                    cancelButtonText: 'Jangan!',
                    reverseButtons: true
                  }).then((result) => {
                    if (result.value) {
                      swalWithBootstrapButtons.fire(
                        'Terhapus!',
                        berhasil.message,
                        'success'
                      )
                      location.reload();
                    } else if (
                      /* Read more about handling dismissals below */
                      result.dismiss === Swal.DismissReason.cancel
                    ) {
                      swalWithBootstrapButtons.fire(
                        'Dibatalkan',
                        'Data Aman :)',
                        'error'
                      )
                    }
                  })
            },
            error: function (gagal) {
                console.log(gagal)
            }
        })
    })
})
