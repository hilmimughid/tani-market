@extends('layouts.dashboard.app')
@section('title', 'User')
@section('content')
    <div class="card">
        <div class="card-body">
            <h3 class="card-title fw-semibold mb-4">User</h3>
            <div class="d-flex justify-content-between mb-0">
                <form action="{{ route('user.index') }}" method="GET" class="d-flex">
                    <input type="text" name="search" class="form-control me-2" placeholder="Cari">
                    <button type="submit" class="btn btn-outline-primary"><i class="ti ti-search"></i></button>
                </form>
                <a class="btn btn-success" href="{{ route('user.create') }}"> Tambah Data</a>
            </div>
            <div class="pt-4 table-responsive text-nowrap">
                <table class="table table-bordered text-center">
                    <thead>
                        <tr>
                            <th class="col-1">No</th>
                            <th>Nama</th>
                            <th>Email</th>
                            <th>No. HP</th>
                            <th class="col-1">Role</th>
                            <th class="col-1">Aksi</th>
                        </tr>
                    </thead>
                    @foreach ($users as $user)
                        <tbody>
                            <tr>
                                <td>{{ $loop->iteration }}</td>
                                <td>{{ $user->nama }}</td>
                                <td>{{ $user->email }}</td>
                                <td>{{ $user->no_hp }}</td>
                                <td>{{ $user->role }}</td>
                                <td>
                                    <div class="d-flex ">
                                        {{-- Button  Edit --}}
                                        <a class="btn btn-warning me-2" href="{{ route('user.edit', $user->id) }}"><i
                                                class="ti ti-edit"></i></a>

                                        {{-- Button Delete --}}
                                        <form action="{{ route('user.destroy', $user->id) }}" method="POST"
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
                    {{ $users->links() }}
                </div>
            </div>
        </div>
    </div>
@endsection
