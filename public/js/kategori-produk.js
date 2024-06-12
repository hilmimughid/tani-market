// Sweetalert & validasi modal kategori produk
$(document).ready(function () {
    $('.kategori_produk-form').on('submit', function (event) {
        event.preventDefault();
        var form = $(this);
        var url = form.attr('action');

        $.ajax({
            url: url,
            type: 'POST',
            data: form.serialize(),
            success: function (response) {
                if (response.status === 'success') {
                    $('.modal.show').modal('hide');
                    Swal.fire(
                        'Berhasil!',
                        response.message,
                        'success'
                    )
                    setTimeout(function () {
                        location.reload();
                    }, 1500);
                }
                if (response.status === 'error') {
                    $('.modal.show').modal('hide');
                    Swal.fire(
                        'Gagal!',
                        response.message,
                        'error'
                    )
                    setTimeout(function () {
                        location.reload();
                    }, 1500);
                }
            },
            error: function (response) {
                var errors = response.responseJSON.errors;
                form.find('.nama-error').text(errors.nama);
                form.find('.deskripsi-error').text(errors.deskripsi);
            }
        });
    });
});
