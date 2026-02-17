@extends('layouts.admin')

@section('content')
<div class="row">
    <div class="col-md-4 grid-margin stretch-card">
        <div class="card">
            <div class="card-body">
                <h4 class="card-title">Upload Produk Hukum</h4>
                <form class="forms-sample" action="{{ route('admin.produk_hukum.store') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="form-group">
                        <label for="title">Judul Dokumen</label>
                        <input type="text" class="form-control" id="title" name="title" required placeholder="Contoh: SK Pendirian Sekolah">
                    </div>
                    <div class="form-group">
                        <label for="category">Kategori</label>
                        <select class="form-control" id="category" name="category" required>
                            <option value="SK">Surat Keputusan (SK)</option>
                            <option value="Juknis">Petunjuk Teknis (Juknis)</option>
                            <option value="Peraturan">Peraturan Sekolah</option>
                            <option value="Lainnya">Lainnya</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="file_path">File Dokumen (PDF/DOC)</label>
                        <input type="file" class="form-control" id="file_path" name="file_path" accept=".pdf,.doc,.docx" required>
                    </div>
                    <button type="submit" class="btn btn-primary me-2">Upload</button>
                </form>
            </div>
        </div>
    </div>

    <div class="col-md-8 grid-margin stretch-card">
        <div class="card">
            <div class="card-body">
                <h4 class="card-title">Daftar Dokumen</h4>
                @if(session('success'))
                    <div class="alert alert-success alert-dismissible fade show" role="alert">
                        {{ session('success') }}
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    </div>
                @endif
                
                <div class="table-responsive">
                    <table class="table table-hover">
                        <thead>
                            <tr>
                                <th>Judul</th>
                                <th>Kategori</th>
                                <th>File</th>
                                <th>Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            @forelse($documents as $document)
                            <tr>
                                <td>{{ $document->title }}</td>
                                <td><label class="badge badge-info">{{ $document->category }}</label></td>
                                <td>
                                    <a href="{{ asset('storage/' . $document->file_path) }}" target="_blank" class="btn btn-sm btn-outline-primary">
                                        <i class="mdi mdi-download"></i> Unduh
                                    </a>
                                </td>
                                <td>
                                    <button type="button" class="btn btn-warning btn-sm" data-bs-toggle="modal" data-bs-target="#editModal{{ $document->id }}">
                                        <i class="mdi mdi-pencil"></i>
                                    </button>
                                    <form action="{{ route('admin.produk_hukum.destroy', $document->id) }}" method="POST" class="d-inline" onsubmit="return confirm('Hapus dokumen ini?')">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-danger btn-sm">
                                            <i class="mdi mdi-delete"></i>
                                        </button>
                                    </form>

                                    <!-- Edit Modal -->
                                    <div class="modal fade" id="editModal{{ $document->id }}" tabindex="-1" aria-hidden="true">
                                        <div class="modal-dialog">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h5 class="modal-title">Edit Dokumen</h5>
                                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                </div>
                                                <form action="{{ route('admin.produk_hukum.update', $document->id) }}" method="POST" enctype="multipart/form-data">
                                                    @csrf
                                                    @method('PUT')
                                                    <div class="modal-body">
                                                        <div class="form-group">
                                                            <label>Judul Dokumen</label>
                                                            <input type="text" class="form-control" name="title" value="{{ $document->title }}" required>
                                                        </div>
                                                        <div class="form-group">
                                                            <label>Kategori</label>
                                                            <select class="form-control text-black" name="category" required>
                                                                <option value="SK" {{ $document->category == 'SK' ? 'selected' : '' }}>Surat Keputusan (SK)</option>
                                                                <option value="Juknis" {{ $document->category == 'Juknis' ? 'selected' : '' }}>Petunjuk Teknis (Juknis)</option>
                                                                <option value="Peraturan" {{ $document->category == 'Peraturan' ? 'selected' : '' }}>Peraturan</option>
                                                                <option value="Lainnya" {{ $document->category == 'Lainnya' ? 'selected' : '' }}>Lainnya</option>
                                                            </select>
                                                        </div>
                                                        <div class="form-group">
                                                            <label>Ganti File (Opsional)</label>
                                                            <input type="file" class="form-control" name="file_path" accept=".pdf,.doc,.docx">
                                                            <small>Biarkan kosong jika tidak ingin mengganti file.</small>
                                                        </div>
                                                    </div>
                                                    <div class="modal-footer">
                                                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Tutup</button>
                                                        <button type="submit" class="btn btn-primary">Update</button>
                                                    </div>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                </td>
                            </tr>
                            @empty
                            <tr><td colspan="4" class="text-center">Belum ada dokumen.</td></tr>
                            @endforelse
                        </tbody>
                    </table>
                </div>

                <div class="mt-3">
                    {{ $documents->links() }}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
