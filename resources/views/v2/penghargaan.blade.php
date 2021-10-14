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
      <a class="nav-link active" href="{{ url('v2/penghargaan') }}" tabindex="-1" aria-disabled="false">Penghargaan</a>
    </li>
    <li class="nav-item">
      <a class="nav-link " href="{{ url('v2/portofolio') }}" tabindex="-1" aria-disabled="false">Portofolio</a>
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
          <p class="lead">Data Penghargaan / Hibah / Penelitian / Pengabdian pada Masyarakat</p>
          <div class="row">
              <div class="col-md-3">
                  <p>Agustus 2016</p><br>
                  <p>Desember 2016</p><br>
                  <p>November 2017</p><br>
                  <p>April 2021</p><br>
                  <p>April 2021</p><br>
                  <p>Mei 2021</p><br>
              </div>
              <div class="col-md-8">
                  <p>LKS Matematika Teknologi Tingkat Kabupaten Sleman <br><span class="text-muted">Juara 1</span></p>
                  <p>UPY Mathemathics Competition <br><span class="text-muted">Juara 2</span></p>
                  <p>LKS IT/Software Development Tingkat DI Yogyakarta <br><span class="text-muted">Juara 3</span></p>
                  <p>Dana Hibah "PKM-KC" 2021 <br><span class="text-muted">Kemendikbud-ristekdikti</span></p>
                  <p>Dana Hibah "PKM-RSH" 2021 <br><span class="text-muted">Kemendikbud-ristekdikti</span></p>
                  <p>Dana Hibah "KBMI" 2021 <br><span class="text-muted">Kemendikbud-dirjendikti</span></p>
              </div>
          </div>
      </div>
    </div>
</div>
@endsection