@extends('layouts.admin')

@section('content')
<div class="row">
    <div class="col-12 grid-margin stretch-card">
        <div class="card">
            <div class="card-body">
                <h4 class="card-title">Tambah Berita Baru</h4>
                <p class="card-description">Buat artikel atau pengumuman baru</p>
                
                <form class="forms-sample" action="{{ route('admin.berita.store') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    
                    <div class="form-group">
                        <label for="title">Judul Berita</label>
                        <input type="text" class="form-control @error('title') is-invalid @enderror" id="title" name="title" value="{{ old('title') }}" placeholder="Masukkan judul berita" required>
                        @error('title')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="form-group">
                        <label for="category">Kategori</label>
                        <select class="form-control @error('category') is-invalid @enderror" id="category" name="category" required>
                            <option value="">Pilih Kategori</option>
                            <option value="Kegiatan" {{ old('category') == 'Kegiatan' ? 'selected' : '' }}>Kegiatan</option>
                            <option value="Prestasi" {{ old('category') == 'Prestasi' ? 'selected' : '' }}>Prestasi</option>
                            <option value="Pengumuman" {{ old('category') == 'Pengumuman' ? 'selected' : '' }}>Pengumuman</option>
                            <option value="Artikel" {{ old('category') == 'Artikel' ? 'selected' : '' }}>Artikel</option>
                        </select>
                        @error('category')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="form-group">
                        <label for="thumbnail">Foto Sampul (Thumbnail)</label>
                        <input type="file" class="form-control @error('thumbnail') is-invalid @enderror" id="thumbnail" name="thumbnail" accept="image/*">
                        <small class="text-muted">Format: JPG, PNG. Maks: 2MB.</small>
                        @error('thumbnail')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="form-group">
                        <label for="content">Isi Berita</label>
                        <textarea class="form-control @error('content') is-invalid @enderror" id="content" name="content" rows="10" placeholder="Tulis isi berita di sini..." required>{{ old('content') }}</textarea>
                        @error('content')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="form-group">
                        <label for="status">Status Publikasi</label>
                        <select class="form-control @error('status') is-invalid @enderror" id="status" name="status" required>
                            <option value="published" {{ old('status') == 'published' ? 'selected' : '' }}>Langsung Terbit (Published)</option>
                            <option value="draft" {{ old('status') == 'draft' ? 'selected' : '' }}>Simpan sebagai Draft</option>
                        </select>
                        @error('status')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>

                    <button type="submit" class="btn btn-primary me-2">Simpan Berita</button>
                    <a href="{{ route('admin.berita.index') }}" class="btn btn-light">Batal</a>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection