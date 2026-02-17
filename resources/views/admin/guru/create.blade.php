@extends('layouts.admin')

@section('content')
<div class="row">
    <div class="col-12 grid-margin stretch-card">
        <div class="card">
            <div class="card-body">
                <h4 class="card-title">Tambah Guru / Staff</h4>
                <p class="card-description">Input data pendidik dan tenaga kependidikan</p>
                
                <form class="forms-sample" action="{{ route('admin.guru.store') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    
                    <div class="form-group">
                        <label for="name">Nama Lengkap</label>
                        <input type="text" class="form-control @error('name') is-invalid @enderror" id="name" name="name" value="{{ old('name') }}" placeholder="Contoh: Nama Guru, S.Pd" required>
                        @error('name')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="form-group">
                        <label for="nip">NIP (Opsional)</label>
                        <input type="text" class="form-control @error('nip') is-invalid @enderror" id="nip" name="nip" value="{{ old('nip') }}" placeholder="Nomor Induk Pegawai">
                        @error('nip')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="form-group">
                        <label for="position">Jabatan</label>
                        <input type="text" class="form-control @error('position') is-invalid @enderror" id="position" name="position" value="{{ old('position') }}" placeholder="Contoh: Guru Kelas 1A / Kepala Sekolah" required>
                        @error('position')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="form-group">
                        <label for="status">Status Kepegawaian</label>
                        <select class="form-control @error('status') is-invalid @enderror" id="status" name="status" required>
                            <option value="">Pilih Status</option>
                            <option value="PNS" {{ old('status') == 'PNS' ? 'selected' : '' }}>PNS</option>
                            <option value="GTY" {{ old('status') == 'GTY' ? 'selected' : '' }}>GTY (Guru Tetap Yayasan)</option>
                            <option value="Honorer" {{ old('status') == 'Honorer' ? 'selected' : '' }}>Honorer</option>
                            <option value="Staff" {{ old('status') == 'Staff' ? 'selected' : '' }}>Staff TU / Penjaga</option>
                        </select>
                        @error('status')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="form-group">
                        <label for="photo">Foto Profil</label>
                        <input type="file" class="form-control @error('photo') is-invalid @enderror" id="photo" name="photo" accept="image/*">
                        <small class="text-muted">Format: JPG, PNG. Maks: 2MB. Disarankan rasio 1:1.</small>
                        @error('photo')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>

                    <button type="submit" class="btn btn-primary me-2">Simpan Data</button>
                    <a href="{{ route('admin.guru.index') }}" class="btn btn-light">Batal</a>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection