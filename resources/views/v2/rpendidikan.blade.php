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
  {{-- <div class="col-lg-4">
    <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-inner">
          <div class="carousel-item active">
            <img src="{{ asset('image/ardian.png') }}" style="margin-left: 30%" width="68%" height="68%" class="d-block"  alt="profil-1">
          </div>
        </div>
    </div>
  </div> --}}
  <div class="col-lg-8">
    <div class="container bg-light" >
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
@endsection