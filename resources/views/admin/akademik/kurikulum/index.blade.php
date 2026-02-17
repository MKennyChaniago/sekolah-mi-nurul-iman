@extends('layouts.admin')

@section('content')
<div class="row">
    <div class="col-md-4 grid-margin stretch-card">
        <div class="card">
            <div class="card-body">
                <h4 class="card-title">Tambah Mata Pelajaran</h4>
                <form class="forms-sample" action="{{ route('admin.kurikulum.store') }}" method="POST">
                    @csrf
                    <div class="form-group">
                        <label for="name">Nama Mata Pelajaran</label>
                        <input type="text" class="form-control" id="name" name="name" required placeholder="Contoh: Matematika">
                    </div>
                    <div class="form-group">
                        <label for="group">Kelompok</label>
                        <select class="form-control" id="group" name="group" required>
                            <option value="A">Kelompok A (Wajib)</option>
                            <option value="B">Kelompok B (Wajib)</option>
                            <option value="C">Kelompok C (Peminatan)</option>
                            <option value="Mulok">Muatan Lokal</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="grades">Kelas (Opsional)</label>
                        <input type="text" class="form-control" id="grades" name="grades" placeholder="Contoh: 1, 2, 3">
                    </div>
                    <button type="submit" class="btn btn-primary me-2">Simpan</button>
                </form>
            </div>
        </div>
    </div>

    <div class="col-md-8 grid-margin stretch-card">
        <div class="card">
            <div class="card-body">
                <h4 class="card-title">Daftar Mata Pelajaran</h4>
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
                                <th>Nama Mapel</th>
                                <th>Kelompok</th>
                                <th>Kelas</th>
                                <th>Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            @forelse($subjects as $subject)
                            <tr>
                                <td>{{ $subject->name }}</td>
                                <td>{{ $subject->group }}</td>
                                <td>{{ $subject->grades ?? 'Semua' }}</td>
                                <td>
                                    <button type="button" class="btn btn-warning btn-sm" data-bs-toggle="modal" data-bs-target="#editModal{{ $subject->id }}">
                                        <i class="mdi mdi-pencil"></i>
                                    </button>
                                    <form action="{{ route('admin.kurikulum.destroy', $subject->id) }}" method="POST" class="d-inline" onsubmit="return confirm('Hapus mapel ini?')">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-danger btn-sm">
                                            <i class="mdi mdi-delete"></i>
                                        </button>
                                    </form>

                                    <!-- Edit Modal -->
                                    <div class="modal fade" id="editModal{{ $subject->id }}" tabindex="-1" aria-hidden="true">
                                        <div class="modal-dialog">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h5 class="modal-title">Edit Mata Pelajaran</h5>
                                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                </div>
                                                <form action="{{ route('admin.kurikulum.update', $subject->id) }}" method="POST">
                                                    @csrf
                                                    @method('PUT')
                                                    <div class="modal-body">
                                                        <div class="form-group">
                                                            <label>Nama Mata Pelajaran</label>
                                                            <input type="text" class="form-control" name="name" value="{{ $subject->name }}" required>
                                                        </div>
                                                        <div class="form-group">
                                                            <label>Kelompok</label>
                                                            <select class="form-control text-black" name="group" required>
                                                                <option value="A" {{ $subject->group == 'A' ? 'selected' : '' }}>Kelompok A</option>
                                                                <option value="B" {{ $subject->group == 'B' ? 'selected' : '' }}>Kelompok B</option>
                                                                <option value="C" {{ $subject->group == 'C' ? 'selected' : '' }}>Kelompok C</option>
                                                                <option value="Mulok" {{ $subject->group == 'Mulok' ? 'selected' : '' }}>Muatan Lokal</option>
                                                            </select>
                                                        </div>
                                                        <div class="form-group">
                                                            <label>Kelas</label>
                                                            <input type="text" class="form-control" name="grades" value="{{ $subject->grades }}">
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
                            <tr><td colspan="4" class="text-center">Belum ada data mata pelajaran.</td></tr>
                            @endforelse
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
