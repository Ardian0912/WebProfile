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
        <a class="nav-link" href="{{ url('riwayat-organisasi') }}">Riwayat Organisasi</a>
    </li>
    <li class="nav-item">
        <a class="nav-link active" aria-current="page" href="{{ url('riwayat-pekerjaan') }}">Riwayat Pekerjaan</a>
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

@section('menuRiwayatPekerjaan')
<div class="row" id="pekerjaan">
    <div class="container">
        <div class="col-md-8">
            <div class="container">
                <p class="lead">Riwayat Pekerjaan</p>
                <div class="row">
                    <div class="col-md-4">
                        <p>Juni 2018 - Juni 2019</p><br>
                        <p>Agustus 2020</p><br>
                        <p>September 2020</p><br>
                    </div>
                    <div class="col-md-8">
                        <p>Praktik Industri di CV. Karya Hidup Sentosa <br><span class="text-muted"> <i>Information and Communication Technologies Department</i> </span></p>
                        <p>UNY National CARTESION <br><span class="text-muted"> <i>Staff Liaison Officer</i> </span></p>
                        <p>Lomba Inovasi Digital Mahasiswa <br><span class="text-muted"> <i>Staff Liaison Officer</i> </span></p>
                    </div>
                </div>
            </div>
        </div>
    </div>    
</div>
@endsection