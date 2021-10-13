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
    <div class="col-md-8">
        <div class="">
            <p class="lead">Riwayat Organisasi</p>
            <p>Mahasiswa semester 5, lahir di Bantul 4 November 1999. 
                Saat ini sedang menempuh pendidikan Strata 1 pada Program Studi Teknologi Informasi 
                di Universitas Negeri Yogyakarta. 
                Berpengalaman dalam berpartisipasi di berbagai kegiatan kemahasiswaan 
                dan ikut serta dalam penelitian yang dilakukan oleh dosen.  
                Dapat bekerja dengan baik dalam tim maupun secara mandiri.</p>
        </div>
    </div>
</div>
@endsection