@extends('layouts.admin')

@section('content')
<div class="row">
    <div class="col-12 grid-margin stretch-card">
        <div class="card">
            <div class="card-body">
                <h4 class="card-title">Edit Struktur Organisasi</h4>
                <p class="card-description">Update gambar struktur organisasi sekolah</p>
                
                @if(session('success'))
                    <div class="alert alert-success alert-dismissible fade show" role="alert">
                        {{ session('success') }}
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    </div>
                @endif

                @if(session('info'))
                    <div class="alert alert-info alert-dismissible fade show" role="alert">
                        {{ session('info') }}
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    </div>
                @endif

                <form class="forms-sample" action="{{ route('admin.struktur.update') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')
                    
                    <div class="form-group">
                        <label for="structure_image">Gambar Bagan Struktur</label>
                        <input type="file" class="form-control @error('structure_image') is-invalid @enderror" id="structure_image" name="structure_image" accept="image/*">
                        <small class="text-muted">Format: JPG, PNG. Maks: 5MB.</small>
                        @if($profile->structure_image)
                            <div class="mt-4 mb-4 text-center border p-3">
                                <p>Gambar Saat Ini:</p>
                                <img src="{{ asset('storage/' . $profile->structure_image) }}" alt="Current Structure" class="img-fluid" style="max-height: 500px;">
                            </div>
                        @else
                            <div class="mt-4 mb-4 text-center text-muted">Belum ada gambar struktur yang diupload.</div>
                        @endif
                        @error('structure_image')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>

                    <button type="submit" class="btn btn-primary me-2">Upload Update Struktur</button>
                    
                </form>
            </div>
        </div>
    </div>
</div>
@endsection