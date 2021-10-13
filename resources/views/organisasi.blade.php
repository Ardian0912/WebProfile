@extends('layout/main')

@section('menuHalaman')
<ul class="nav nav-pills">
    <li class="nav-item">
      <a class="nav-link" href="{{ url('deskripsi') }}">Deskripsi</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="{{ url('data-personal') }}">Data Personal</a>
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
        <a class="nav-link active" aria-current="page" href="{{ url('riwayat-organisasi') }}">Riwayat Organisasi</a>
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

@section('menuRiwayatOrganisasi')
<div class="row" id="organisasi">
    <div class="container">
        <div class="col-md-8">
            <div class="container">
                <p class="lead">Riwayat Organisasi</p>
                <div class="row">
                    <div class="col-md-4">
                        <p>November 2019 - Sekarang</p><br>
                        <p>Mei 2020 - Sekarang</p><br>
                    </div>
                    <div class="col-md-8">
                        <p>TIM Teknologi Informasi Universitas Negeri Yogyakarta <br><span class="text-muted">Anggota</span></p>
                        <p>PKM Center Universitas Negeri Yogyakarta <br><span class="text-muted">TIM IT / Web Developer</span></p>
                    </div>
                </div>
            </div>
        </div>
    </div>    
</div>
@endsection