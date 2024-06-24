{{-- Modal Create --}}
<form action="{{ route('kategori-produk.store') }}" method="POST" class="form_modal">
    @csrf
    <div class="modal fade" id="create_kategori_produk_modal" tabindex="-1" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="">Tambah Kategori Produk</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="row">
                        <div class="col mb-3">
                            <label for="nama" class="form-label">Nama</label>
                            <input type="text" id="nama" name="nama" class="form-control" placeholder="Nama"
                                value="{{ old('nama') }}"required />
                        </div>
                    </div>
                    <div class="row">
                        <div class="col mb-3">
                            <label for="deskripsi" class="form-label">Deskripsi</label>
                            <textarea class="form-control" rows="3" name="deskripsi" value="{{ old('deskripsi') }}" placeholder="Deskripsi"></textarea>
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
    <form action="{{ route('kategori-produk.update', $kategori_produk->id) }}" method="POST" class="form_modal">
        @csrf
        @method('PUT')
        <div class="modal fade" id="update_kategori_produk_modal{{ $kategori_produk->id }}" tabindex="-1"
            aria-hidden="true" class="kategori_produk_modal">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="update_kategori_produk_modal{{ $kategori_produk->id }}">Edit
                            Kategori
                            Produk</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <div class="row">
                            <div class="col mb-3">
                                <label for="nama" class="form-label">Nama</label>
                                <input type="text" id="nama" name="nama" class="form-control"
                                    value="{{ $kategori_produk->nama }}" required />
                            </div>
                        </div>
                        <div class="row">
                            <div class="col mb-3">
                                <label for="deskripsi" class="form-label">Deskripsi</label>
                                <textarea class="form-control" rows="3" name="deskripsi">{{ $kategori_produk->deskripsi }}</textarea>
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
