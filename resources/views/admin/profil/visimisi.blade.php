@extends('layouts.admin')

@section('content')
<div class="row">
    <div class="col-12 grid-margin stretch-card">
        <div class="card">
            <div class="card-body">
                <h4 class="card-title">Edit Visi & Misi</h4>
                <p class="card-description">Update visi dan misi sekolah</p>
                
                @if(session('success'))
                    <div class="alert alert-success alert-dismissible fade show" role="alert">
                        {{ session('success') }}
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    </div>
                @endif

                <form class="forms-sample" action="{{ route('admin.visimisi.update') }}" method="POST">
                    @csrf
                    @method('PUT')
                    
                    <div class="form-group">
                        <label for="vision">Visi Sekolah</label>
                        <textarea class="form-control @error('vision') is-invalid @enderror" id="vision" name="vision" rows="5" placeholder="Tulis visi sekolah..." required>{{ old('vision', $profile->vision) }}</textarea>
                        @error('vision')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="form-group">
                        <label for="mission">Misi Sekolah</label>
                        <textarea class="form-control @error('mission') is-invalid @enderror" id="mission" name="mission" rows="10" placeholder="Tulis misi sekolah..." required>{{ old('mission', $profile->mission) }}</textarea>
                        <small class="text-muted">Disarankan menggunakan poin-poin.</small>
                        @error('mission')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>

                    <button type="submit" class="btn btn-primary me-2">Simpan Perubahan</button>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection