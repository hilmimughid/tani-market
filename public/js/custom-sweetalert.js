// Sweetalert Crete & Update
$(document).ready(function () {
    $('.form_modal').on('submit', function (e) {
        e.preventDefault();
        var form = $(this);

        $.ajax({
            url: form.attr('action'),
            type: 'POST',
            data: form.serialize(),
            success: function (response) {
                if (response.status === 'success') {
                    $('.modal.show').modal('hide');
                    Swal.fire({
                        title: 'Berhasil!',
                        text: response.message,
                        icon: 'success',
                        confirmButtonText: 'OK',
                    });
                    setTimeout(function () {
                        location.reload();
                    }, 1200);
                } else if (response.status === 'error') {
                    $('.modal.show').modal('hide');
                    Swal.fire({
                        title: 'Gagal!',
                        text: response.message,
                        icon: 'error',
                        timer: 1200,
                        confirmButtonText: 'OK',
                    });
                }
            }
        });
    });
});

// SweetAlert2 Delete
$(document).ready(function () {
    $('.button_delete').on('click', function (e) {
        e.preventDefault();
        var form = $(this).parents('.form_delete');

        Swal.fire({
            title: 'Apakah Anda yakin?',
            icon: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#13ddb9',
            cancelButtonColor: '#2a3547',
            confirmButtonText: 'Ya',
            cancelButtonText: 'Batal',
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
                            }, 1200);
                        }
                        if (response.status === 'error') {
                            Swal.fire(
                                'Gagal!',
                                response.message,
                                'error'
                            )
                            setTimeout(function () {
                                location.reload();
                            }, 1200);
                        }
                    }
                });
            }
        })
    });
});
