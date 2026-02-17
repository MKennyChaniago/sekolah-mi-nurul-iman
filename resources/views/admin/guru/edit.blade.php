@extends('layouts.admin')

@section('content')
<div class="row">
    <div class="col-12 grid-margin stretch-card">
        <div class="card">
            <div class="card-body">
                <h4 class="card-title">Edit Data Guru</h4>
                <p class="card-description">Update informasi guru/staff</p>
                
                <form class="forms-sample" action="{{ route('admin.guru.update', $guru->id) }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')
                    
                    <div class="form-group">
                        <label for="name">Nama Lengkap</label>
                        <input type="text" class="form-control @error('name') is-invalid @enderror" id="name" name="name" value="{{ old('name', $guru->name) }}" required>
                        @error('name')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="form-group">
                        <label for="nip">NIP</label>
                        <input type="text" class="form-control @error('nip') is-invalid @enderror" id="nip" name="nip" value="{{ old('nip', $guru->nip) }}">
                        @error('nip')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="form-group">
                        <label for="position">Jabatan</label>
                        <input type="text" class="form-control @error('position') is-invalid @enderror" id="position" name="position" value="{{ old('position', $guru->position) }}" required>
                        @error('position')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="form-group">
                        <label for="status">Status Kepegawaian</label>
                        <select class="form-control @error('status') is-invalid @enderror" id="status" name="status" required>
                            <option value="PNS" {{ old('status', $guru->status) == 'PNS' ? 'selected' : '' }}>PNS</option>
                            <option value="GTY" {{ old('status', $guru->status) == 'GTY' ? 'selected' : '' }}>GTY</option>
                            <option value="Honorer" {{ old('status', $guru->status) == 'Honorer' ? 'selected' : '' }}>Honorer</option>
                            <option value="Staff" {{ old('status', $guru->status) == 'Staff' ? 'selected' : '' }}>Staff</option>
                        </select>
                        @error('status')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="form-group">
                        <label for="photo">Foto Profil</label>
                        <input type="file" class="form-control @error('photo') is-invalid @enderror" id="photo" name="photo" accept="image/*">
                        <small class="text-muted">Biarkan kosong jika tidak ingin mengubah foto.</small>
                        @if($guru->photo)
                            <div class="mt-2">
                                <img src="{{ asset('storage/' . $guru->photo) }}" alt="Current Photo" style="width: 100px; height: 100px; object-fit: cover; border-radius: 50%;">
                            </div>
                        @endif
                        @error('photo')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>

                    <button type="submit" class="btn btn-primary me-2">Update Data</button>
                    <a href="{{ route('admin.guru.index') }}" class="btn btn-light">Batal</a>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection
