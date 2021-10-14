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
      <a class="nav-link active" href="{{ url('v2/portofolio') }}" tabindex="-1" aria-disabled="false">Portofolio</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="{{ url('v2/galeri-video') }}" tabindex="-1" aria-disabled="false">Galeri Video</a>
    </li>
  </ul>
@endsection


@section('halamanKonten')
<div class="row">
    <div class="col-lg-8">
      <div class="container">
          <p class="lead">Data Portofolio</p>
          <div class="row">
              <div class="col-md-4">
                  <p>November 2020</p><br><br>
                  <p>Maret 2021</p><br><br><br>
                  <p>3 Agustus 2021 - Masa berlaku habis</p>
                  <p>11 September 2021 - Masa berlaku habis</p>
              </div>
              <div class="col-md-8">
                  <p>Jurnal "Traversal Struktur Data Bipartite Graph dalam Graph Database menggunakan Depth-First Search" <br><span class="text-muted">Elinvo (<i>Electronics, Informatics, and Vocational Education</i>)</span></p>
                  <p>Jurnal "Development and Performance Analysis of the Gunungkidul Cultural Potential Application Based on Progressive Web Apps" <br><span class="text-muted">JEATech (<i>Journal of Engineering and Applied Technology</i>)</span></p>
                  <p>HaKI Emodul Funteach</p>
                  <p>HaKI Sistem Peringatan Deteksi Kerumunan Berbasis <i>Deep Convolutional Neural Network</i>  Dengan Menggunakan CCTV</p>
              </div>
          </div>                
      </div>
    </div>
</div>
@endsection