@extends('layouts.main')

@section('title', 'Input Nilai Siswa')

@section('content')
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800"><i class="fas fa-plus-circle mr-2 text-primary"></i>Input Nilai Siswa</h1>
    </div>

    <div class="card shadow mb-4">
        <div class="card-body">
            <form action="{{ route('nilai.store') }}" method="POST">
                @csrf
                @include('nilai._form')
                <button type="submit" class="btn btn-primary"><i class="fas fa-save mr-1"></i> Simpan</button>
                <a href="{{ route('nilai.index') }}" class="btn btn-secondary">Batal</a>
            </form>
        </div>
    </div>
@endsection
