@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row mt-5 mb-5">
            <div class="col-lg-12 margin-tb">
                <div class="float-left">
                    <h2>Lihat Data Guru</h2>
                </div>
                <div class="float-right">
                    <a class="btn btn-secondary" href="{{ route('guru.index') }}">Kembali</a>
                </div>
            </div>
        </div>

        <div class="col-lg-8">
            <img src="{{ asset('img/' . $guru->foto) }}" width="120" class="rounded">
            <table class="table table-striped table-responsive">
                <tbody>
                    <tr>
                        <td>NIP</td>
                        <td>{{ $guru->nip }}</td>
                    </tr>
                    <tr>
                        <td>Nama</td>
                        <td>{{ $guru->nama }}</td>
                    </tr>
                    <tr>
                        <td>Mata Pelajaran</td>
                        <td>{{ $guru->mapel }}</td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
@endsection
