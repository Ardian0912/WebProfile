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
        <a class="nav-link" href="{{ url('riwayat-pekerjaan') }}">Riwayat Pekerjaan</a>
    </li>
    <li class="nav-item">
        <a class="nav-link" href="{{ url('penghargaan') }}">Penghargaan</a>
    </li>
    <li class="nav-item">
        <a class="nav-link active" aria-current="page" href="{{ url('portofolio') }}">Portofolio</a>
    </li>
    <li class="nav-item">
        <a class="nav-link" href="{{ url('galeri-video') }}">Galeri Video</a>
    </li>
</ul>
@endsection

@section('menuPortofolio')
<div class="row" id="portofolio">
    <div class="container">
        <div class="col-md-8">
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
</div>
@endsection