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
      <a class="nav-link active" aria-current="page" href="{{ url('riwayat-pendidikan') }}">Riwayat Pendidikan</a>
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

@section('menuRiwayatPendidikan')
<div class="row" id="pendidikan">
    <div class="container">
        <div class="col-md-8">
            <div class="container">
                <p class="lead">Riwayat Pendidikan</p>
                <div class="row">
                    <div class="col-md-3">
                        <p>2006 - 2012</p>
                        <p>2012 - 2015</p>
                        <p>2015 - 2019</p> <br>
                        <p>2019 - Sekarang</p>
                    </div>
                    <div class="col-md-8">
                        <p>SD Negeri 2 Sanden, Bantul</p>
                        <p>SMP Negeri 1 Sanden, Bantul</p>
                        <p>SMK Negeri 2 Depok, Sleman <br><span class="text-muted">Teknik Komputer dan Jaringan</span></p>
                        <p>Universitas Negeri Yogyakarta <br><span class="text-muted">S1 Teknologi Informasi</span></p>
                    </div>
                </div>
            </div>
        </div>
    </div>    
</div>
@endsection