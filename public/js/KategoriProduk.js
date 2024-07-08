// Validasi create kategori produk
document.getElementById('createKategoriProduk').addEventListener('submit', function (event) {
    const namaInput = document.getElementById('createNama');
    const deskripsiInput = document.getElementById('createDeskripsi');
    const namaValue = namaInput.value.trim();
    const deskripsiValue = deskripsiInput.value.trim();
    const namaError = document.getElementById('createNamaError');
    const deskripsiError = document.getElementById('createDeskripsiError');

    if (namaValue === '') {
        event.preventDefault();
        namaInput.classList.add('border', 'border-danger');
        namaError.textContent = 'Nama kategori produk harus diisi';
    } else if (namaValue.length > 200) {
        event.preventDefault();
        namaInput.classList.add('border', 'border-danger');
        namaError.textContent = 'Nama kategori produk maksimal 200 karakter.';
    } else {
        namaInput.classList.remove('border', 'border-danger');
        namaError.textContent = '';
    }

    if (deskripsiValue.length > 200) {
        event.preventDefault();
        deskripsiInput.classList.add('border', 'border-danger');
        deskripsiError.textContent = 'Deskripsi maksimal 200 karakter.';
    } else {
        deskripsiInput.classList.remove('border', 'border-danger');
        deskripsiError.textContent = '';
    }
});

// Validasi update kategori produk
document.getElementById('updateKategoriProduk').addEventListener('submit', function (event) {
    const namaInput = document.getElementById('updateNama');
    const deskripsiInput = document.getElementById('updateDeskripsi');
    const namaValue = namaInput.value.trim();
    const deskripsiValue = deskripsiInput.value.trim();
    const namaError = document.getElementById('updateNamaError');
    const deskripsiError = document.getElementById('updateDeskripsiError');

    if (namaValue === '') {
        event.preventDefault();
        namaInput.classList.add('border', 'border-danger');
        namaError.textContent = 'Nama kategori produk harus diisi';
    } else if (namaValue.length > 200) {
        event.preventDefault();
        namaInput.classList.add('border', 'border-danger');
        namaError.textContent = 'Nama kategori produk maksimal 200 karakter.';
    } else {
        namaInput.classList.remove('border', 'border-danger');
        namaError.textContent = '';
    }

    if (deskripsiValue.length > 200) {
        event.preventDefault();
        deskripsiInput.classList.add('border', 'border-danger');
        deskripsiError.textContent = 'Deskripsi maksimal 200 karakter.';
    } else {
        deskripsiInput.classList.remove('border', 'border-danger');
        deskripsiError.textContent = '';
    }
});
