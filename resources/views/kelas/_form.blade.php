@php $k = $kelas ?? null; @endphp
<div class="form-group">
    <label for="nama_kelas">Nama Kelas</label>
    <input type="text" id="nama_kelas" name="nama_kelas" class="form-control @error('nama_kelas') is-invalid @enderror"
        value="{{ old('nama_kelas', $k->nama_kelas ?? '') }}" placeholder="Contoh: XI RPL 1">
    @error('nama_kelas') <div class="invalid-feedback">{{ $message }}</div> @enderror
</div>
<div class="form-row">
    <div class="form-group col-md-4">
        <label for="tingkat">Tingkat</label>
        <select id="tingkat" name="tingkat" class="form-control @error('tingkat') is-invalid @enderror">
            <option value="">-- Pilih Tingkat --</option>
            @foreach (['X', 'XI', 'XII'] as $t)
                <option value="{{ $t }}" {{ old('tingkat', $k->tingkat ?? '') == $t ? 'selected' : '' }}>{{ $t }}</option>
            @endforeach
        </select>
        @error('tingkat') <div class="invalid-feedback">{{ $message }}</div> @enderror
    </div>
    <div class="form-group col-md-8">
        <label for="tahun_ajaran">Tahun Ajaran</label>
        <input type="text" id="tahun_ajaran" name="tahun_ajaran" class="form-control @error('tahun_ajaran') is-invalid @enderror"
            value="{{ old('tahun_ajaran', $k->tahun_ajaran ?? '') }}" placeholder="Contoh: 2025/2026">
        @error('tahun_ajaran') <div class="invalid-feedback">{{ $message }}</div> @enderror
    </div>
</div>
<div class="form-group">
    <label for="jurusan">Jurusan</label>
    <input type="text" id="jurusan" name="jurusan" class="form-control @error('jurusan') is-invalid @enderror"
        value="{{ old('jurusan', $k->jurusan ?? '') }}" placeholder="Contoh: Rekayasa Perangkat Lunak">
    @error('jurusan') <div class="invalid-feedback">{{ $message }}</div> @enderror
</div>
