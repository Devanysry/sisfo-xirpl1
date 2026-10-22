@php $m = $mapel ?? null; @endphp
<div class="form-row">
    <div class="form-group col-md-4">
        <label for="kode_mapel">Kode Mapel</label>
        <input type="text" id="kode_mapel" name="kode_mapel" class="form-control @error('kode_mapel') is-invalid @enderror"
            value="{{ old('kode_mapel', $m->kode_mapel ?? '') }}" placeholder="Contoh: MP-PWPB">
        @error('kode_mapel') <div class="invalid-feedback">{{ $message }}</div> @enderror
    </div>
    <div class="form-group col-md-8">
        <label for="nama_mapel">Nama Mata Pelajaran</label>
        <input type="text" id="nama_mapel" name="nama_mapel" class="form-control @error('nama_mapel') is-invalid @enderror"
            value="{{ old('nama_mapel', $m->nama_mapel ?? '') }}">
        @error('nama_mapel') <div class="invalid-feedback">{{ $message }}</div> @enderror
    </div>
</div>
<div class="form-group">
    <label for="kkm">KKM (0 - 100)</label>
    <input type="number" id="kkm" name="kkm" min="0" max="100" class="form-control @error('kkm') is-invalid @enderror"
        value="{{ old('kkm', $m->kkm ?? 75) }}">
    @error('kkm') <div class="invalid-feedback">{{ $message }}</div> @enderror
</div>
