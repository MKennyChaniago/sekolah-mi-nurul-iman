@extends('layouts.admin')

@section('content')
<div class="row">
    <div class="col-md-4 grid-margin stretch-card">
        <div class="card">
            <div class="card-body">
                <h4 class="card-title">Tambah Ekstrakurikuler</h4>
                <form class="forms-sample" action="{{ route('admin.ekstrakurikuler.store') }}" method="POST">
                    @csrf
                    <div class="form-group">
                        <label for="name">Nama Ekskul</label>
                        <input type="text" class="form-control" id="name" name="name" required placeholder="Contoh: Pramuka">
                    </div>
                    <div class="form-group">
                        <label for="schedule">Jadwal Latihan</label>
                        <input type="text" class="form-control" id="schedule" name="schedule" placeholder="Contoh: Sabtu, 14.00 WIB">
                    </div>
                    <div class="form-group">
                        <label for="instructor">Pembina / Pelatih</label>
                        <input type="text" class="form-control" id="instructor" name="instructor" placeholder="Nama Pembina">
                    </div>
                    <button type="submit" class="btn btn-primary me-2">Simpan</button>
                </form>
            </div>
        </div>
    </div>

    <div class="col-md-8 grid-margin stretch-card">
        <div class="card">
            <div class="card-body">
                <h4 class="card-title">Daftar Ekstrakurikuler</h4>
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
                                <th>Nama Ekskul</th>
                                <th>Jadwal</th>
                                <th>Pembina</th>
                                <th>Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            @forelse($ekskuls as $ekskul)
                            <tr>
                                <td>{{ $ekskul->name }}</td>
                                <td>{{ $ekskul->schedule ?? '-' }}</td>
                                <td>{{ $ekskul->instructor ?? '-' }}</td>
                                <td>
                                    <button type="button" class="btn btn-warning btn-sm" data-bs-toggle="modal" data-bs-target="#editModal{{ $ekskul->id }}">
                                        <i class="mdi mdi-pencil"></i>
                                    </button>
                                    <form action="{{ route('admin.ekstrakurikuler.destroy', $ekskul->id) }}" method="POST" class="d-inline" onsubmit="return confirm('Hapus ekskul ini?')">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-danger btn-sm">
                                            <i class="mdi mdi-delete"></i>
                                        </button>
                                    </form>

                                    <!-- Edit Modal -->
                                    <div class="modal fade" id="editModal{{ $ekskul->id }}" tabindex="-1" aria-hidden="true">
                                        <div class="modal-dialog">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h5 class="modal-title">Edit Ekstrakurikuler</h5>
                                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                </div>
                                                <form action="{{ route('admin.ekstrakurikuler.update', $ekskul->id) }}" method="POST">
                                                    @csrf
                                                    @method('PUT')
                                                    <div class="modal-body">
                                                        <div class="form-group">
                                                            <label>Nama Ekskul</label>
                                                            <input type="text" class="form-control" name="name" value="{{ $ekskul->name }}" required>
                                                        </div>
                                                        <div class="form-group">
                                                            <label>Jadwal</label>
                                                            <input type="text" class="form-control" name="schedule" value="{{ $ekskul->schedule }}">
                                                        </div>
                                                        <div class="form-group">
                                                            <label>Pembina</label>
                                                            <input type="text" class="form-control" name="instructor" value="{{ $ekskul->instructor }}">
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
                            <tr><td colspan="4" class="text-center">Belum ada data ekstrakurikuler.</td></tr>
                            @endforelse
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
