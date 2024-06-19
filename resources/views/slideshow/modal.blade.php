{{-- Modal Create --}}
<form action="{{ route('slideshow.store') }}" method="POST" class="form_modal" enctype="multipart/form-data">
    @csrf
    <div class="modal fade" id="create_slideshow_modal" tabindex="-1" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="">Tambah Slideshow</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="row">
                        <div class="col mb-3">
                            <label for="gambar" class="form-label">Gambar</label>
                            <input type="file" name="gambar" class="form-control" aria-describedby="gambar" />
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
@foreach ($slideshows as $slideshow)
    <form action="{{ route('slideshow.update', $slideshow->id) }}" method="POST" class="form_modal"
        enctype="multipart/form-data">
        @csrf
        @method('PUT')
        <div class="modal fade" id="update_slideshow_modal{{ $slideshow->id }}" tabindex="-1" aria-hidden="true"
            class="slideshow_modal">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="update_slideshow_modal{{ $slideshow->id }}">Edit
                            Slideshow</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <div class="row">
                            <div class="col mb-3">
                                <label for="gambar" class="form-label">Gambar</label><br>
                                <img src="{{ asset('uploads/' . $slideshow->gambar) }}" width="100px" height="100px">
                                <input type="file" name="gambar" class="form-control" aria-describedby="gambar" />
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
