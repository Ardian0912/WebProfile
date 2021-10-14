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
      <a class="nav-link" href="{{ url('v2/portofolio') }}" tabindex="-1" aria-disabled="false">Portofolio</a>
    </li>
    <li class="nav-item">
      <a class="nav-link active" href="{{ url('v2/galeri-video') }}" tabindex="-1" aria-disabled="false">Galeri Video</a>
    </li>
  </ul>
@endsection


@section('halamanKonten')
<div class="row">
    <div class="col-lg-8">
      <div class="container">
          <p class="lead">Galeri Video</p>
          <iframe width="560" height="315" src="https://www.youtube.com/embed/5uDzxreVkf4" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
      </div>
    </div>
</div>
@endsection