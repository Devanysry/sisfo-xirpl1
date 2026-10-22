@extends('layouts.main')

@section('title', 'Edit Data Nilai')

@section('content')
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800"><i class="fas fa-edit mr-2 text-primary"></i>Edit Data Nilai</h1>
    </div>

    <div class="card shadow mb-4">
        <div class="card-body">
            <form action="{{ route('nilai.update', $nilai->id) }}" method="POST">
                @csrf
                @method('PUT')
                @include('nilai._form', ['nilai' => $nilai])
                <button type="submit" class="btn btn-primary"><i class="fas fa-save mr-1"></i> Perbarui</button>
                <a href="{{ route('nilai.index') }}" class="btn btn-secondary">Batal</a>
            </form>
        </div>
    </div>
@endsection
