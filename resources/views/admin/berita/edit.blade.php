@extends('layouts.admin')

@section('content')
<div class="row">
    <div class="col-12 grid-margin stretch-card">
        <div class="card">
            <div class="card-body">
                <h4 class="card-title">Edit Berita</h4>
                <p class="card-description">Ubah data berita</p>
                
                <form class="forms-sample" action="{{ route('admin.berita.update', $beritum->id) }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')
                    
                    <div class="form-group">
                        <label for="title">Judul Berita</label>
                        <input type="text" class="form-control @error('title') is-invalid @enderror" id="title" name="title" value="{{ old('title', $beritum->title) }}" required>
                        @error('title')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="form-group">
                        <label for="category">Kategori</label>
                        <select class="form-control @error('category') is-invalid @enderror" id="category" name="category" required>
                            <option value="Kegiatan" {{ old('category', $beritum->category) == 'Kegiatan' ? 'selected' : '' }}>Kegiatan</option>
                            <option value="Prestasi" {{ old('category', $beritum->category) == 'Prestasi' ? 'selected' : '' }}>Prestasi</option>
                            <option value="Pengumuman" {{ old('category', $beritum->category) == 'Pengumuman' ? 'selected' : '' }}>Pengumuman</option>
                            <option value="Artikel" {{ old('category', $beritum->category) == 'Artikel' ? 'selected' : '' }}>Artikel</option>
                        </select>
                        @error('category')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="form-group">
                        <label for="thumbnail">Foto Sampul (Thumbnail)</label>
                        <input type="file" class="form-control @error('thumbnail') is-invalid @enderror" id="thumbnail" name="thumbnail" accept="image/*">
                        <small class="text-muted">Biarkan kosong jika tidak ingin mengubah foto.</small>
                        @if($beritum->thumbnail)
                            <div class="mt-2">
                                <img src="{{ asset('storage/' . $beritum->thumbnail) }}" alt="Current Thumbnail" style="max-width: 200px; border-radius: 4px;">
                            </div>
                        @endif
                        @error('thumbnail')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="form-group">
                        <label for="content">Isi Berita</label>
                        <textarea class="form-control @error('content') is-invalid @enderror" id="content" name="content" rows="10" required>{{ old('content', $beritum->content) }}</textarea>
                        @error('content')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="form-group">
                        <label for="status">Status Publikasi</label>
                        <select class="form-control @error('status') is-invalid @enderror" id="status" name="status" required>
                            <option value="published" {{ old('status', $beritum->status) == 'published' ? 'selected' : '' }}>Langsung Terbit (Published)</option>
                            <option value="draft" {{ old('status', $beritum->status) == 'draft' ? 'selected' : '' }}>Simpan sebagai Draft</option>
                        </select>
                        @error('status')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>

                    <button type="submit" class="btn btn-primary me-2">Update Berita</button>
                    <a href="{{ route('admin.berita.index') }}" class="btn btn-light">Batal</a>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection
