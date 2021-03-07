@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row mt-4 mb-4">
            <div class="col-lg-12 margin-tb">
                <div class="float-left">
                    <h2>Edit data Guru</h2>
                </div>
                <div class="float-right">
                    <a class="btn btn-secondary" href="{{ route('guru.index') }}">Kembali</a>
                </div>
            </div>
        </div>

        @if ($errors->any())
            <div class="alert alert-danger">
                <strong>Whoops!</strong> There were some problems with your input.<br><br>
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <form action="{{ route('guru.store') }}" method="POST">
            @csrf

            <div class="row">
                <div class="col-xs-12 col-sm-12 col-md-12 mb-4">
                    <div class="form-group">
                        <strong>NIP:</strong>
                        <input type="text" name="nip" class="form-control" autofocus
                            value="{{ old('nip') ? old('nip') : $guru->nip }}">
                        @error('nip')
                            <small class="text-danger">{{ $message }}</small>
                        @enderror
                    </div>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-12 mb-4">
                    <div class="form-group">
                        <strong>Nama:</strong>
                        <input type="text" name="nama" class="form-control"
                            value="{{ old('nama') ? old('nama') : $guru->nama }}">
                        @error('nama')
                            <small class="text-danger">{{ $message }}</small>
                        @enderror
                    </div>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-12 mb-4">
                    <div class="form-group">
                        <strong>Mata Pelajaran:</strong>
                        <input type="text" name="mapel" class="form-control"
                            value="{{ old('mapel') ? old('mapel') : $guru->mapel }}">
                        @error('mapel')
                            <small class="text-danger">{{ $message }}</small>
                        @enderror
                    </div>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-12 mb-4">
                    <div class="form-group">
                        <strong>Foto:</strong>
                        <input type="file" name="foto" id="foto" class="form-control">
                    </div>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-12 mb-5">
                    <button type="submit" class="btn btn-primary">Submit</button>
                </div>
            </div>

        </form>
    </div>
@endsection
