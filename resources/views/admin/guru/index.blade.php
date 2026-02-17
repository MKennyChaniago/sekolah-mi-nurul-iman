@extends('layouts.admin')

@section('content')
<div class="row">
    <div class="col-lg-12 grid-margin stretch-card">
        <div class="card">
            <div class="card-body">
                <div class="d-flex justify-content-between align-items-center mb-3">
                    <h4 class="card-title">Data Guru & Staff</h4>
                    <a href="{{ route('admin.guru.create') }}" class="btn btn-primary btn-sm">
                        <i class="mdi mdi-plus"></i> Tambah Guru/Staff
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
                                <th>Nama</th>
                                <th>NIP</th>
                                <th>Jabatan</th>
                                <th>Status</th>
                                <th>Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            @forelse($gurus as $index => $guru)
                            <tr>
                                <td>{{ $index + $gurus->firstItem() }}</td>
                                <td>
                                    @if($guru->photo)
                                        <img src="{{ asset('storage/' . $guru->photo) }}" alt="Foto" style="width: 50px; height: 50px; object-fit: cover; border-radius: 50%;">
                                    @else
                                        <img src="{{ asset('admin/images/faces/face1.jpg') }}" alt="Default" style="width: 50px; height: 50px; object-fit: cover; border-radius: 50%;">
                                    @endif
                                </td>
                                <td>{{ $guru->name }}</td>
                                <td>{{ $guru->nip ?? '-' }}</td>
                                <td>{{ $guru->position }}</td>
                                <td>
                                    @php
                                        $badgeColor = match($guru->status) {
                                            'PNS' => 'success',
                                            'GTY' => 'info',
                                            'Honorer' => 'warning',
                                            default => 'secondary'
                                        };
                                    @endphp
                                    <label class="badge badge-{{ $badgeColor }}">{{ $guru->status }}</label>
                                </td>
                                <td>
                                    <a href="{{ route('admin.guru.edit', $guru->id) }}" class="btn btn-warning btn-sm">
                                        <i class="mdi mdi-pencil"></i>
                                    </a>
                                    <form action="{{ route('admin.guru.destroy', $guru->id) }}" method="POST" class="d-inline" onsubmit="return confirm('Yakin ingin menghapus data ini?')">
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
                                <td colspan="7" class="text-center">Belum ada data guru/staff.</td>
                            </tr>
                            @endforelse
                        </tbody>
                    </table>
                </div>
                
                <div class="mt-3">
                    {{ $gurus->links() }}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection