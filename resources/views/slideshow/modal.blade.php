{{-- Modal Create --}}
<form action="{{ route('slideshow.store') }}" method="POST" id="createSlideshow" enctype="multipart/form-data">
    @csrf
    <div class="modal fade" id="createSlideshowModal" tabindex="-1" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Tambah Slideshow</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="row">
                        <div class="col mb-3">
                            <label for="gambar" class="form-label">Gambar <span class="text-danger">*</span></label>
                            <input type="file" id="createGambar" name="gambar" class="form-control"
                                aria-describedby="gambar" />
                            <span id="createGambarError" class="text-danger"></span>
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
    <form action="{{ route('slideshow.update', $slideshow->id) }}" method="POST" id="updateSlideshow"
        enctype="multipart/form-data">
        @csrf
        @method('PUT')
        <div class="modal fade" id="updateSlideshowModal{{ $slideshow->id }}" tabindex="-1" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="updateSlideshowModal{{ $slideshow->id }}">Edit
                            Slideshow</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <div class="row">
                            <div class="col mb-3">
                                <label for="gambar" class="form-label">Gambar <span
                                        class="text-danger">*</span></label><br>
                                <img src="{{ asset('uploads/' . $slideshow->gambar) }}" width="200px" height="150px"
                                    class="mb-3">
                                <input type="file" id="updateGambar" name="gambar" class="form-control"
                                    aria-describedby="gambar" />
                                <span id="updateGambarError" class="text-danger"></span>
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
