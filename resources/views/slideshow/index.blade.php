@extends('layouts.dashboard.app')
@section('title', 'Slideshow')
@section('content')
    <div class="card">
        <div class="card-body">
            <h3 class="card-title fw-semibold mb-4">Slideshow</h3>
            <div class="d-flex justify-content-end mb-0">
                <button class="btn btn-success" data-bs-toggle="modal" data-bs-target="#create_slideshow_modal">Tambah
                    Data</button>
            </div>
            <div class="pt-4 table-responsive text-nowrap">
                <table class="table table-bordered text-center">
                    <thead>
                        <tr>
                            <th class="col-1">No</th>
                            <th>Gambar</th>
                            <th class="col-1">Urutan</th>
                            <th class="col-1">Aksi</th>
                        </tr>
                    </thead>
                    @foreach ($slideshows as $slideshow)
                        <tbody>
                            <tr>
                                <td>{{ $loop->iteration }}</td>
                                <td><img src="{{ asset('uploads/' . $slideshow->gambar) }}" width="100px" height="100px">
                                </td>
                                <td>{{ $slideshow->urutan }}</td>
                                <td>
                                    <div class="d-flex ">
                                        {{-- Button  Edit --}}
                                        <button class="btn btn-warning me-3" data-bs-toggle="modal"
                                            data-bs-target="#update_slideshow_modal{{ $slideshow->id }}">
                                            <i class="ti ti-edit"></i>
                                        </button>

                                        {{-- Button Delete --}}
                                        <form action="{{ route('slideshow.destroy', $slideshow->id) }}" method="POST"
                                            class="form_delete">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="btn btn-danger button_delete">
                                                <i class="ti ti-trash"></i>
                                            </button>
                                        </form>
                                    </div>
                                </td>
                            </tr>
                        </tbody>
                    @endforeach
                </table>
                <div class="mt-4 d-flex justify-content-end">
                    {{ $slideshows->links() }}
                </div>
            </div>
        </div>
    </div>

    @include('slideshow.modal')
@endsection
