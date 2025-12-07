@extends('layouts.admin')

@section('title', 'Visi & Misi')

@section('content')
<div class="page-header">
    <h3 class="page-title"> Visi & Misi </h3>
</div>

<div class="row">
    <div class="col-12 grid-margin stretch-card">
        <div class="card">
            <div class="card-body">
                <h4 class="card-title">Edit Visi & Misi Sekolah</h4>
                
                <form class="forms-sample">
                    
                    <div class="form-group">
                        <label for="visi"><strong>Visi</strong> (Cita-cita Sekolah)</label>
                        <textarea class="form-control" id="visi" rows="3" placeholder="Contoh: Terwujudnya generasi yang Islami..."></textarea>
                    </div>

                    <hr>

                    <div class="form-group">
                        <label for="misi"><strong>Misi</strong> (Langkah-langkah)</label>
                        <textarea class="form-control" id="misi" rows="10" placeholder="1. Melaksanakan pembelajaran aktif..."></textarea>
                        <small class="text-muted">Gunakan nomor (1, 2, 3) atau poin-poin untuk memisahkan misi.</small>
                    </div>

                    <button type="submit" class="btn btn-gradient-primary me-2">Simpan Perubahan</button>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection