@extends('layouts.admin')

@section('content')
<div class="row">
    <div class="col-md-12">
        <div class="card">
            <div class="card-header">
                <h4>Pengaturan Kontak & Media Sosial</h4>
            </div>
            <div class="card-body">
                @if (session('success'))
                    <div class="alert alert-success">
                        {{ session('success') }}
                    </div>
                @endif
                
                <form action="{{ route('admin.kontak.update') }}" method="POST">
                    @csrf
                    @method('PUT')

                    <div class="row">
                        <div class="col-md-6">
                            <h5 class="mb-3">Informasi Kontak</h5>
                            <div class="mb-3">
                                <label>Alamat Lengkap</label>
                                <textarea name="address" class="form-control" rows="3">{{ old('address', $profile->address ?? '') }}</textarea>
                            </div>
                            <div class="mb-3">
                                <label>Nomor Telepon</label>
                                <input type="text" name="phone" class="form-control" value="{{ old('phone', $profile->phone ?? '') }}">
                            </div>
                            <div class="mb-3">
                                <label>Email</label>
                                <input type="email" name="email" class="form-control" value="{{ old('email', $profile->email ?? '') }}">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <h5 class="mb-3">Media Sosial</h5>
                            <div class="mb-3">
                                <label>Link Facebook</label>
                                <input type="url" name="facebook" class="form-control" value="{{ old('facebook', $profile->facebook ?? '') }}" placeholder="https://facebook.com/...">
                            </div>
                            <div class="mb-3">
                                <label>Link Instagram</label>
                                <input type="url" name="instagram" class="form-control" value="{{ old('instagram', $profile->instagram ?? '') }}" placeholder="https://instagram.com/...">
                            </div>
                            <div class="mb-3">
                                <label>Link YouTube</label>
                                <input type="url" name="youtube" class="form-control" value="{{ old('youtube', $profile->youtube ?? '') }}" placeholder="https://youtube.com/...">
                            </div>
                        </div>
                    </div>

                    <div class="row mt-3">
                        <div class="col-md-12">
                            <h5 class="mb-3">Google Maps Embed</h5>
                            <div class="mb-3">
                                <label>Embed Code (Iframe Src)</label>
                                <textarea name="maps_embed" class="form-control" rows="3" placeholder="Paste the src URL from Google Maps Embed code here (e.g., https://www.google.com/maps/embed?...)">{{ old('maps_embed', $profile->maps_embed ?? '') }}</textarea>
                                <small class="text-muted">Masukkan hanya URL di dalam atribut src="" dari kode iframe Google Maps.</small>
                            </div>
                        </div>
                    </div>

                    <div class="mb-3">
                        <button type="submit" class="btn btn-primary">Simpan Perubahan</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection
