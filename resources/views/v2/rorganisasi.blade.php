@extends('v2/layout.main')

@section('menuNavbar')
<ul class="navbar-nav ">
    <li class="nav-item">
      <a class="nav-link" aria-current="page" href="{{ url('/v2') }}">Deskripsi</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="{{ url('v2/biodata') }}">Biodata</a>
    </li>
    <li class="nav-item dropdown">
      <a class="nav-link dropdown-toggle active" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
        Riwayat
      </a>
      <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
        <li><a class="dropdown-item" href="{{ url('v2/riwayat-pendidikan') }}">Riwayat Pendidikan</a></li>
        <li><a class="dropdown-item" href="{{ url('v2/riwayat-organisasi') }}">Riwayat Organisasi/Partisipasi</a></li>
        <li><a class="dropdown-item" href="{{ url('v2/riwayat-pekerja') }}">Riwayat Pekerjaan</a></li>
      </ul>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="{{ url('v2/bahasa') }}" tabindex="-1" aria-disabled="false">Kemampuan Bahasa</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="{{ url('v2/it-skills') }}" tabindex="-1" aria-disabled="false">IT Skills</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="{{ url('v2/penghargaan') }}" tabindex="-1" aria-disabled="false">Penghargaan</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="{{ url('v2/portofolio') }}" tabindex="-1" aria-disabled="false">Portofolio</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="{{ url('v2/galeri-video') }}" tabindex="-1" aria-disabled="false">Galeri Video</a>
    </li>
  </ul>
@endsection


@section('halamanKonten')
<div class="row">
    <div class="col-lg-6">
        <div class="container bg-light" style="margin-top: 5%;">
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
    <div class="col-lg-6">
        <div class="container bg-light" style="margin-top: 5%;">
          <p class="lead">Riwayat Partisipasi</p>
          <div class="row">
            <div class="col-md-4">
                <p>Agustus 2020</p><br>
                <p>September 2020</p><br>
            </div>
            <div class="col-md-8">
                <p>UNY National CARTESION <br><span class="text-muted"> <i>Staff Liaison Officer</i> </span></p>
                <p>Lomba Inovasi Digital Mahasiswa <br><span class="text-muted"> <i>Staff Liaison Officer</i> </span></p>
            </div>
        </div>
        </div>
    </div>
    
</div>
@endsection