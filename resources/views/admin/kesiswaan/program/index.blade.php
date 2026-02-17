@extends('layouts.admin')

@section('content')
<div class="row">
    <div class="col-md-4 grid-margin stretch-card">
        <div class="card">
            <div class="card-body">
                <h4 class="card-title">Tambah Program Unggulan</h4>
                <form class="forms-sample" action="{{ route('admin.program.store') }}" method="POST">
                    @csrf
                    <div class="form-group">
                        <label for="title">Nama Program</label>
                        <input type="text" class="form-control" id="title" name="title" required placeholder="Contoh: Tahfidz Qur'an">
                    </div>
                    <div class="form-group">
                        <label for="description">Deskripsi Singkat</label>
                        <textarea class="form-control" id="description" name="description" rows="5" required placeholder="Jelaskan tentang program ini..."></textarea>
                    </div>
                    <!-- 
                    <div class="form-group">
                        <label for="bg_color">Warna Background (Opsional)</label>
                        <select class="form-control" id="bg_color" name="bg_color">
                            <option value="bg-primary">Biru (Primary)</option>
                            <option value="bg-success">Hijau (Success)</option>
                            <option value="bg-warning">Kuning (Warning)</option>
                            <option value="bg-info">Cyan (Info)</option>
                        </select>
                    </div>
                    -->
                    <button type="submit" class="btn btn-primary me-2">Simpan</button>
                </form>
            </div>
        </div>
    </div>

    <div class="col-md-8 grid-margin stretch-card">
        <div class="card">
            <div class="card-body">
                <h4 class="card-title">Daftar Program Unggulan</h4>
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
                                <th>Nama Program</th>
                                <th>Deskripsi</th>
                                <th>Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            @forelse($programs as $program)
                            <tr>
                                <td style="width: 25%;">{{ $program->title }}</td>
                                <td class="text-wrap">{{ Str::limit($program->description, 100) }}</td>
                                <td>
                                    <button type="button" class="btn btn-warning btn-sm" data-bs-toggle="modal" data-bs-target="#editModal{{ $program->id }}">
                                        <i class="mdi mdi-pencil"></i>
                                    </button>
                                    <form action="{{ route('admin.program.destroy', $program->id) }}" method="POST" class="d-inline" onsubmit="return confirm('Hapus program ini?')">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-danger btn-sm">
                                            <i class="mdi mdi-delete"></i>
                                        </button>
                                    </form>

                                    <!-- Edit Modal -->
                                    <div class="modal fade" id="editModal{{ $program->id }}" tabindex="-1" aria-hidden="true">
                                        <div class="modal-dialog">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h5 class="modal-title">Edit Program</h5>
                                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                </div>
                                                <form action="{{ route('admin.program.update', $program->id) }}" method="POST">
                                                    @csrf
                                                    @method('PUT')
                                                    <div class="modal-body">
                                                        <div class="form-group">
                                                            <label>Nama Program</label>
                                                            <input type="text" class="form-control" name="title" value="{{ $program->title }}" required>
                                                        </div>
                                                        <div class="form-group">
                                                            <label>Deskripsi</label>
                                                            <textarea class="form-control" name="description" rows="5" required>{{ $program->description }}</textarea>
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
                            <tr><td colspan="3" class="text-center">Belum ada program unggulan.</td></tr>
                            @endforelse
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
