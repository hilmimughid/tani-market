// Validasi create slideshow
document.getElementById('createSlideshow').addEventListener('submit', function (event) {
    const gambarInput = document.getElementById('createGambar');
    const gambarValue = gambarInput.files[0]; // Ambil file gambar yang diunggah
    const gambarError = document.getElementById('createGambarError');

    if (!gambarValue) {
        event.preventDefault();
        gambarInput.classList.add('border', 'border-danger');
        gambarError.textContent = 'Gambar harus diunggah.';
    } else {
        // Periksa tipe file gambar
        const allowedFormats = ['image/jpeg', 'image/png', 'image/jpg', 'image/svg+xml'];
        if (!allowedFormats.includes(gambarValue.type)) {
            event.preventDefault();
            gambarInput.classList.add('border', 'border-danger');
            gambarError.textContent = 'Format gambar harus jpeg, png, jpg, atau svg.';
        } else {
            // Periksa ukuran gambar (maksimal 2MB)
            const maxFileSize = 2 * 1024 * 1024; // 2MB dalam byte
            if (gambarValue.size > maxFileSize) {
                event.preventDefault();
                gambarInput.classList.add('border', 'border-danger');
                gambarError.textContent = 'Ukuran gambar maksimal 2MB.';
            } else {
                gambarInput.classList.remove('border', 'border-danger');
                gambarError.textContent = '';
            }
        }
    }
});



// Validasi update slideshow
document.getElementById('updateSlideshow').addEventListener('submit', function (event) {
    const gambarInput = document.getElementById('updateGambar');
    const gambarValue = gambarInput.files[0]; // Ambil file gambar yang diunggah
    const gambarError = document.getElementById('updateGambarError');

    // Periksa tipe file gambar
    const allowedFormats = ['image/jpeg', 'image/png', 'image/jpg', 'image/svg+xml'];
    if (!allowedFormats.includes(gambarValue.type)) {
        event.preventDefault();
        gambarInput.classList.add('border', 'border-danger');
        gambarError.textContent = 'Format gambar harus jpeg, png, jpg, atau svg.';
    } else {
        // Periksa ukuran gambar (maksimal 2MB)
        const maxFileSize = 2 * 1024 * 1024; // 2MB dalam byte
        if (gambarValue.size > maxFileSize) {
            event.preventDefault();
            gambarInput.classList.add('border', 'border-danger');
            gambarError.textContent = 'Ukuran gambar maksimal 2MB.';
        } else {
            gambarInput.classList.remove('border', 'border-danger');
            gambarError.textContent = '';
        }
    }
});
