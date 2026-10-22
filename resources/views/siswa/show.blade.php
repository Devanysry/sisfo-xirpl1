@extends('layouts.main')

@section('title', 'Detail Data Siswa')

@section('content')
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800"><i class="fas fa-id-card mr-2 text-primary"></i>Detail Siswa</h1>
        <div>
            <a href="{{ route('siswa.edit', $siswa->id) }}" class="btn btn-sm btn-warning shadow-sm">
                <i class="fas fa-edit mr-1"></i> Edit
            </a>
            <a href="{{ route('siswa.index') }}" class="btn btn-sm btn-secondary shadow-sm">
                <i class="fas fa-arrow-left mr-1"></i> Kembali
            </a>
        </div>
    </div>

    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Profil Siswa</h6>
        </div>
        <div class="card-body">
            <table class="table table-borderless mb-0">
                <tr><th width="20%">NIS</th><td>{{ $siswa->nis }}</td></tr>
                <tr><th>Nama Lengkap</th><td>{{ $siswa->nama }}</td></tr>
                <tr><th>Kelas</th><td>{{ $siswa->kelas->nama_kelas ?? '-' }}</td></tr>
                <tr><th>Jenis Kelamin</th><td>{{ $siswa->jenis_kelamin == 'L' ? 'Laki-Laki' : 'Perempuan' }}</td></tr>
                <tr><th>No HP</th><td>{{ $siswa->no_hp ?: '-' }}</td></tr>
                <tr><th>Alamat</th><td>{{ $siswa->alamat ?: '-' }}</td></tr>
            </table>
        </div>
    </div>

    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Riwayat Nilai Mata Pelajaran</h6>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered table-striped" width="100%" cellspacing="0">
                    <thead class="bg-primary text-white">
                        <tr>
                            <th width="5%">No</th>
                            <th>Mata Pelajaran</th>
                            <th class="text-center">Tugas</th>
                            <th class="text-center">UTS</th>
                            <th class="text-center">UAS</th>
                            <th class="text-center">Nilai Akhir</th>
                            <th class="text-center">Status</th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse ($siswa->nilais as $index => $n)
                            <tr>
                                <td>{{ $index + 1 }}</td>
                                <td>{{ $n->mapel->nama_mapel ?? '-' }}</td>
                                <td class="text-center">{{ $n->nilai_tugas }}</td>
                                <td class="text-center">{{ $n->nilai_uts }}</td>
                                <td class="text-center">{{ $n->nilai_uas }}</td>
                                <td class="text-center"><span class="badge badge-info p-2">{{ $n->nilai_akhir }}</span></td>
                                <td class="text-center">
                                    <span class="badge badge-{{ $n->keterangan == 'Lulus' ? 'success' : 'danger' }} p-2">{{ $n->keterangan }}</span>
                                </td>
                            </tr>
                        @empty
                            <tr>
                                <td colspan="7" class="text-center py-4 text-muted">Belum ada nilai untuk siswa ini.</td>
                            </tr>
                        @endforelse
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection
