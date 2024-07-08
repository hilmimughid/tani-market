{{-- Modal Create --}}
<form action="{{ route('kategori-produk.store') }}" method="POST" id="createKategoriProduk">
    @csrf
    <div class="modal fade" id="createKategoriProdukModal" tabindex="-1" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Tambah Kategori Produk</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="row">
                        <div class="col mb-3">
                            <label for="nama" class="form-label">Nama <span class="text-danger">*</span></label>
                            <input type="text" id="createNama" name="nama" class="form-control"
                                placeholder="Masukkan Nama" />
                            <span id="createNamaError" class="text-danger"></span>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col mb-3">
                            <label for="deskripsi" class="form-label">Deskripsi</label>
                            <textarea id="createDeskripsi" name="deskripsi" class="form-control" rows="5" placeholder="Masukkan Deskripsi"></textarea>
                            <span id="createDeskripsiError" class="text-danger"></span>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-dark" data-bs-dismiss="modal">
                        Batal
                    </button>
                    <button type="submit" class="btn btn-success">Simpan</button>
                </div>
            </div>
        </div>
    </div>
</form>

{{-- Modal Update --}}
@foreach ($kategori_produks as $kategori_produk)
    <form action="{{ route('kategori-produk.update', $kategori_produk->id) }}" method="POST" id="updateKategoriProduk">
        @csrf
        @method('PUT')
        <div class="modal fade" id="updateKategoriProdukModal{{ $kategori_produk->id }}" tabindex="-1"
            aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="updateKategoriProdukModal{{ $kategori_produk->id }}">Edit
                            Kategori Produk</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <div class="row">
                            <div class="col mb-3">
                                <label for="nama" class="form-label">Nama <span class="text-danger">*</span></label>
                                <input type="text" id="updateNama" name="nama" class="form-control"
                                    value="{{ $kategori_produk->nama }}" />
                                <span id="updateNamaError" class="text-danger"></span>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col mb-3">
                                <label for="deskripsi" class="form-label">Deskripsi</label>
                                <textarea class="form-control" id="updateDeskripsi" name="deskripsi" rows="5">
                                    {{ $kategori_produk->deskripsi }}</textarea>
                                <span id="updateDeskripsiError" class="text-danger"></span>
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-dark" data-bs-dismiss="modal">
                            Batal
                        </button>
                        <button type="submit" class="btn btn-success">Simpan</button>
                    </div>
                </div>
            </div>
        </div>
    </form>
@endforeach
