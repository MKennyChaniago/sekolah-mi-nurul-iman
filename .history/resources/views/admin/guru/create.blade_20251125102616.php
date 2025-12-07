@extends('layouts.admin')

@section('title', 'Tambah Guru Baru')

@section('content')
    <div class="page-header">
        <h3 class="page-title">
            <span class="page-title-icon bg-gradient-primary text-white me-2">
                <i class="mdi mdi-account-plus"></i>
            </span> Tambah Guru & Staff
        </h3>
        <nav aria-label="breadcrumb">
            <ul class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{ route('admin.dashboard') }}">Dashboard</a></li>
                <li class="breadcrumb-item"><a href="{{ route('admin.guru.index') }}">Data Guru</a></li>
                <li class="breadcrumb-item active" aria-current="page">Tambah Baru</li>
            </ul>
        </nav>
    </div>

    <div class="row">
        <div class="col-12 grid-margin stretch-card">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title">Formulir Data Pendidik</h4>
                    <p class="card-description"> Lengkapi data guru atau tenaga kependidikan di bawah ini </p>
                    
                    <form class="forms-sample">
                        
                        <div class="form-group">
                            <label for="nama">Nama Lengkap (Beserta Gelar)</label>
                            <input type="text" class="form-control" id="nama" placeholder="Contoh: Ahmad Fauzi, S.Pd.I">
                        </div>

                        <div class="form-group">
                            <label for="nip">NIP / NUPTK (Opsional)</label>
                            <input type="text" class="form-control" id="nip" placeholder="Nomor Induk Pegawai">
                        </div>

                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="tempat_lahir">Tempat Lahir</label>
                                    <input type="text" class="form-control" id="tempat_lahir" placeholder="Kota Kelahiran">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="tanggal_lahir">Tanggal Lahir</label>
                                    <input type="date" class="form-control" id="tanggal_lahir">
                                </div>
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="jenis_kelamin">Jenis Kelamin</label>
                            <select class="form-control" id="jenis_kelamin">
                                <option>Laki-laki</option>
                                <option>Perempuan</option>
                            </select>
                        </div>

                        <div class="form-group">
                            <label for="jabatan">Jabatan / Tugas</label>
                            <input type="text" class="form-control" id="jabatan" placeholder="Contoh: Guru Kelas 1 / Tata Usaha">
                        </div>

                        <div class="form-group">
                            <label for="status">Status Kepegawaian</label>
                            <select class="form-control" id="status">
                                <option>PNS</option>
                                <option>PPPK</option>
                                <option>Honorer / GTT</option>
                                <option>Tetap Yayasan</option>
                            </select>
                        </div>

                        <div class="form-group">
                            <label>Foto Profil</label>
                            <input type="file" name="img[]" class="file-upload-default">
                            <div class="input-group col-xs-12">
                                <input type="file" class="form-control file-upload-info" placeholder="Upload Image">
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="alamat">Alamat Lengkap</label>
                            <textarea class="form-control" id="alamat" rows="4"></textarea>
                        </div>

                        <button type="submit" class="btn btn-gradient-primary me-2">Simpan Data</button>
                        <a href="{{ route('admin.guru.index') }}" class="btn btn-light">Batal</a>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection