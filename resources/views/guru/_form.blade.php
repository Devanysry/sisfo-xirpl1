@php $g = $guru ?? null; @endphp
<div class="form-row">
    <div class="form-group col-md-4">
        <label for="nip">NIP</label>
        <input type="text" id="nip" name="nip" class="form-control @error('nip') is-invalid @enderror"
            value="{{ old('nip', $g->nip ?? '') }}">
        @error('nip') <div class="invalid-feedback">{{ $message }}</div> @enderror
    </div>
    <div class="form-group col-md-8">
        <label for="nama">Nama Lengkap</label>
        <input type="text" id="nama" name="nama" class="form-control @error('nama') is-invalid @enderror"
            value="{{ old('nama', $g->nama ?? '') }}">
        @error('nama') <div class="invalid-feedback">{{ $message }}</div> @enderror
    </div>
</div>
<div class="form-row">
    <div class="form-group col-md-4">
        <label for="jenis_kelamin">Jenis Kelamin</label>
        <select id="jenis_kelamin" name="jenis_kelamin" class="form-control @error('jenis_kelamin') is-invalid @enderror">
            <option value="">-- Pilih Jenis Kelamin --</option>
            <option value="L" {{ old('jenis_kelamin', $g->jenis_kelamin ?? '') == 'L' ? 'selected' : '' }}>Laki-Laki</option>
            <option value="P" {{ old('jenis_kelamin', $g->jenis_kelamin ?? '') == 'P' ? 'selected' : '' }}>Perempuan</option>
        </select>
        @error('jenis_kelamin') <div class="invalid-feedback">{{ $message }}</div> @enderror
    </div>
    <div class="form-group col-md-4">
        <label for="email">Email</label>
        <input type="email" id="email" name="email" class="form-control @error('email') is-invalid @enderror"
            value="{{ old('email', $g->email ?? '') }}">
        @error('email') <div class="invalid-feedback">{{ $message }}</div> @enderror
    </div>
    <div class="form-group col-md-4">
        <label for="no_hp">No HP</label>
        <input type="text" id="no_hp" name="no_hp" class="form-control @error('no_hp') is-invalid @enderror"
            value="{{ old('no_hp', $g->no_hp ?? '') }}">
        @error('no_hp') <div class="invalid-feedback">{{ $message }}</div> @enderror
    </div>
</div>
<div class="form-group">
    <label for="alamat">Alamat</label>
    <textarea id="alamat" name="alamat" rows="3" class="form-control @error('alamat') is-invalid @enderror">{{ old('alamat', $g->alamat ?? '') }}</textarea>
    @error('alamat') <div class="invalid-feedback">{{ $message }}</div> @enderror
</div>
