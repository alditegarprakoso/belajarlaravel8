@extends('layouts.app')

@section('content')
    <div class="container">
        <h1 class="mt-3">Ini adalah Halaman Guru</h1>
        <div>
            <a class="btn btn-success" href="{{ route('guru.create') }}">Tambah Guru</a>
        </div>
        @if ($message = Session::get('success'))
            <div class="alert alert-success mt-3">
                <small>{{ $message }}</small>
            </div>
        @endif
        <table class="table mt-4 text-center">
            <thead>
                <tr>
                    <th>No.</th>
                    <th>NIP</th>
                    <th>Nama</th>
                    <th>Mata Pelajaran</th>
                    <th>Foto</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($data as $guru)
                    <tr>
                        <td>{{ ++$i }}</td>
                        <td>{{ $guru->nip }}</td>
                        <td>{{ $guru->nama }}</td>
                        <td>{{ $guru->mapel }}</td>
                        <td><img src="{{ asset('img/' . $guru->foto) }}" width="80"></td>
                        <td>
                            <form action="{{ route('guru.destroy', $guru->id_guru) }}" method="POST">
                                <a href="{{ route('guru.show', $guru->id_guru) }}" class="btn btn-sm btn-success">Show</a>
                                <a href="{{ route('guru.edit', $guru->id_guru) }}"
                                    class="btn btn-sm btn-warning text-white">Edit</a>
                                <button type="submit" class="btn btn-danger btn-sm"
                                    onclick="return confirm('Apakah Anda yakin ingin menghapus data ini?')">Delete</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
        {{ $data->links() }}
    </div>
@endsection
