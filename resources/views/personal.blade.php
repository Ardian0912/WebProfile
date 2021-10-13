@extends('layout/main')

@section('menuHalaman')
<ul class="nav nav-pills">
    <li class="nav-item">
      <a class="nav-link" href="{{ url('deskripsi') }}">Deskripsi</a>
    </li>
    <li class="nav-item">
      <a class="nav-link active" aria-current="page" href="{{ url('data-personal') }}">Data Personal</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="{{ url('riwayat-pendidikan') }}">Riwayat Pendidikan</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="{{ url('kemampuan-bahasa') }}">Kemampuan Bahasa</a>
    </li>
    <li class="nav-item">
        <a class="nav-link" href="{{ url('it-skills') }}">IT Skills</a>
    </li>
    <li class="nav-item">
        <a class="nav-link" href="{{ url('riwayat-organisasi') }}">Riwayat Organisasi</a>
    </li>
    <li class="nav-item">
        <a class="nav-link" href="{{ url('riwayat-pekerjaan') }}">Riwayat Pekerjaan</a>
    </li>
    <li class="nav-item">
        <a class="nav-link" href="{{ url('penghargaan') }}">Penghargaan</a>
    </li>
    <li class="nav-item">
        <a class="nav-link" href="{{ url('portofolio') }}">Portofolio</a>
    </li>
    <li class="nav-item">
        <a class="nav-link" href="{{ url('galeri-video') }}">Galeri Video</a>
    </li>
</ul>
@endsection

@section('menuDataPersonal')
<div class="row" id="personal">
    <div class="container">
        <div class="col-md-8">
            <div class="container">
                <p class="lead">Data Personal</p>
                <div class="row">
                    <div class="col-md-3">
                        <p>Nama Lengkap</p>
                        <p>Tempat, Tanggal Lahir</p>
                        <p>Alamat</p>
                        <p>Agama</p>
                        <p>Nomor Telepon</p>
                        <p>Jenis Kelamin</p>
                        <p>Kewarganegaraan</p>
                    </div>
                    <div class="col-md-8">
                        <p>: Muhammad Nurwidya Ardiansyah</p>
                        <p>: Bantul, 4 November 1999</p>
                        <p>: Trisigan II, Murtigading, Sanden, Bantul, DI Yogyakarta</p>
                        <p>: Islam</p>
                        <p>: +6281328875312</p>
                        <p>: Laki-Laki</p>
                        <p>: Indonesia</p>
                    </div>
                </div>
            </div>            
        </div>
    </div>    
</div>
@endsection