@extends('layouts.admin')

@section('content')
<div class="row">
    <div class="col-lg-12 grid-margin stretch-card">
        <div class="card">
            <div class="card-body">
                <div class="d-flex justify-content-between align-items-center mb-3">
                    <h4 class="card-title">Data Siswa</h4>
                    <a href="{{ route('admin.siswa.index') }}?export=true" class="btn btn-outline-success btn-sm me-2 disabled">Export Excel (Coming Soon)</a>
                    <a href="{{ route('admin.siswa.create') }}" class="btn btn-primary btn-sm">
                        <i class="mdi mdi-plus"></i> Tambah Siswa
                    </a>
                </div>

                @if(session('success'))
                    <div class="alert alert-success alert-dismissible fade show" role="alert">
                        {{ session('success') }}
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    </div>
                @endif

                <div class="table-responsive">
                    <table class="table table-striped">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Foto</th>
                                <th>NISN</th>
                                <th>Nama</th>
                                <th>L/P</th>
                                <th>Kelas</th>
                                <th>Status</th>
                                <th>Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            @forelse($siswas as $index => $siswa)
                            <tr>
                                <td>{{ $index + $siswas->firstItem() }}</td>
                                <td>
                                    @if($siswa->photo)
                                        <img src="{{ asset('storage/' . $siswa->photo) }}" alt="Foto" style="width: 40px; height: 40px; object-fit: cover; border-radius: 50%;">
                                    @else
                                        <div class="bg-secondary rounded-circle d-flex align-items-center justify-content-center text-white" style="width: 40px; height: 40px; font-size: 12px;">
                                            {{ substr($siswa->name, 0, 1) }}
                                        </div>
                                    @endif
                                </td>
                                <td>{{ $siswa->nisn }}</td>
                                <td>{{ $siswa->name }}</td>
                                <td>{{ $siswa->gender }}</td>
                                <td>{{ $siswa->class_name }}</td>
                                <td>
                                    @if($siswa->is_active)
                                        <label class="badge badge-success">Aktif</label>
                                    @else
                                        <label class="badge badge-danger">Tidak Aktif</label>
                                    @endif
                                </td>
                                <td>
                                    <a href="{{ route('admin.siswa.edit', $siswa->id) }}" class="btn btn-warning btn-sm">
                                        <i class="mdi mdi-pencil"></i>
                                    </a>
                                    <form action="{{ route('admin.siswa.destroy', $siswa->id) }}" method="POST" class="d-inline" onsubmit="return confirm('Yakin ingin menghapus data siswa ini?')">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-danger btn-sm">
                                            <i class="mdi mdi-delete"></i>
                                        </button>
                                    </form>
                                </td>
                            </tr>
                            @empty
                            <tr>
                                <td colspan="8" class="text-center">Belum ada data siswa.</td>
                            </tr>
                            @endforelse
                        </tbody>
                    </table>
                </div>
                
                <div class="mt-3">
                    {{ $siswas->links() }}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection