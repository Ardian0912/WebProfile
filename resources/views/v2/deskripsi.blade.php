@extends('v2/layout.main')

@section('menuNavbar')
<ul class="navbar-nav ">
    <li class="nav-item">
      <a class="nav-link active" aria-current="page" href="{{ url('/v2') }}">Deskripsi</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="{{ url('v2/biodata') }}">Biodata</a>
    </li>
    <li class="nav-item dropdown">
      <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
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
        <div class="container bg-light" style="margin-top: 15%;">
            <h2>Muhammad Nurwidya Ardiansyah <br></h2><h4><span class="text-muted">Web Developer, Data Engineer</span></h4>
            <p>Mahasiswa semester 5, lahir di Bantul 4 November 1999. 
                Saat ini sedang menempuh pendidikan Strata 1 pada Program Studi Teknologi Informasi 
                di Universitas Negeri Yogyakarta. 
                Berpengalaman dalam berpartisipasi di berbagai kegiatan kemahasiswaan 
                dan ikut serta dalam penelitian yang dilakukan oleh dosen.  
                Dapat bekerja dengan baik dalam tim maupun secara mandiri.</p>
        </div>
    </div>
    <div class="col-lg-6">
        <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">
            {{-- <div class="carousel-indicators">
              <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
              <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
              <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
            </div> --}}
            <div class="carousel-inner">
              <div class="carousel-item active">
                <img src="{{ asset('image/cv-profil.png') }}" width="70%" height="70%" class="d-block"  alt="profil-1">
                {{-- <div class="carousel-caption d-none d-md-block">
                  <h5>First slide label</h5>
                  <p>Some representative placeholder content for the first slide.</p>
                </div> --}}
              </div>
              <div class="carousel-item">
                <img src="{{ asset('image/cv-profil.png') }}" width="70%" height="70%" class="d-block" alt="profil-2">
                {{-- <div class="carousel-caption d-none d-md-block">
                  <h5>Second slide label</h5>
                  <p>Some representative placeholder content for the second slide.</p>
                </div> --}}
              </div>
              <div class="carousel-item">
                <img src="{{ asset('image/cv-profil.png') }}" width="70%" height="70%" class="d-block" alt="profil-3">
                {{-- <div class="carousel-caption d-none d-md-block">
                  <h5>Third slide label</h5>
                  <p>Some representative placeholder content for the third slide.</p>
                </div> --}}
              </div>
            </div>
            {{-- <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
              <span class="carousel-control-prev-icon" aria-hidden="true"></span>
              <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
              <span class="carousel-control-next-icon" aria-hidden="true"></span>
              <span class="visually-hidden">Next</span>
            </button> --}}
        </div>
    </div>
</div>
@endsection