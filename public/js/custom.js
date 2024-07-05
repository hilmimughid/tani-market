// Validasi form kategori produk
document.getElementById('form_kategori_produk').addEventListener('submit', function (event) {
    const namaInput = document.getElementById('nama');
    const deskripsiInput = document.getElementById('deskripsi');
    const namaValue = namaInput.value.trim();
    const deskripsiValue = deskripsiInput.value.trim();
    const namaError = document.getElementById('nama-error');
    const deskripsiError = document.getElementById('deskripsi-error');

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
