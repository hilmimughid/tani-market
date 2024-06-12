// SweetAlert2 hapus
$(document).ready(function () {
    $('.delete-btn').on('click', function (e) {
        e.preventDefault();
        var form = $(this).parents('.delete-form');

        Swal.fire({
            title: 'Apakah Anda yakin?',
            icon: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#71de37',
            cancelButtonColor: '#6e7881',
            confirmButtonText: 'Ya',
            cancelButtonText: 'Batal'
        }).then((result) => {
            if (result.isConfirmed) {
                $.ajax({
                    url: form.attr('action'),
                    type: 'POST',
                    data: form.serialize(),
                    success: function (response) {
                        if (response.status === 'success') {
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
                            Swal.fire(
                                'Gagal!',
                                response.message,
                                'error'
                            )
                            setTimeout(function () {
                                location.reload();
                            }, 1500);
                        }
                    }
                });
            }
        })
    });
});
