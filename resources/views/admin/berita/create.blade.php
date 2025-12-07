@extends('layouts.admin')

@section('title', 'Tulis Berita')

@section('content')
    <div class="page-header">
        <h3 class="page-title">
            <span class="page-title-icon bg-gradient-primary text-white me-2">
                <i class="mdi mdi-lead-pencil"></i>
            </span> Tulis Berita Baru
        </h3>
        <nav aria-label="breadcrumb">
            <ul class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{ route('admin.berita.index') }}">Berita</a></li>
                <li class="breadcrumb-item active" aria-current="page">Tulis</li>
            </ul>
        </nav>
    </div>

    <div class="row">
        <div class="col-12 grid-margin stretch-card">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title">Formulir Artikel</h4>
                    <p class="card-description"> Bagikan informasi terbaru seputar sekolah </p>
                    
                    <form class="forms-sample">
                        
                        <div class="form-group">
                            <label for="judul">Judul Artikel</label>
                            <input type="text" class="form-control" id="judul" placeholder="Contoh: Kegiatan Pramuka Mingguan...">
                        </div>

                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="kategori">Kategori</label>
                                    <select class="form-control" id="kategori">
                                        <option>Kegiatan Sekolah</option>
                                        <option>Prestasi</option>
                                        <option>Pengumuman</option>
                                        <option>Artikel Islami</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="tanggal">Tanggal Publish</label>
                                    <input type="date" class="form-control" id="tanggal">
                                </div>
                            </div>
                        </div>

                        <div class="form-group">
                            <label>Gambar Utama (Thumbnail)</label>
                            <input type="file" name="img[]" class="file-upload-default">
                            <div class="input-group col-xs-12">
                                <input type="file" class="form-control file-upload-info" placeholder="Upload Image">
                            </div>
                            <small class="text-muted">Disarankan ukuran horizontal (Landscape).</small>
                        </div>

                        <div class="form-group">
                            <label for="konten">Isi Artikel</label>
                            <textarea class="form-control" id="konten" rows="15" placeholder="Tuliskan isi berita di sini..."></textarea>
                            <small class="text-info">*Nantinya bagian ini akan menggunakan Text Editor canggih (Summernote/CKEditor).</small>
                        </div>

                        <div class="form-group">
                            <div class="form-check">
                                <label class="form-check-label">
                                    <input type="checkbox" class="form-check-input" checked> Langsung Tayangkan (Publish)
                                </label>
                            </div>
                        </div>

                        <button type="submit" class="btn btn-gradient-primary me-2">Terbitkan</button>
                        <a href="{{ route('admin.berita.index') }}" class="btn btn-light">Batal</a>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection