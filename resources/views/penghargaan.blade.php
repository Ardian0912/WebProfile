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
        <a class="nav-link active" aria-current="page" href="{{ url('penghargaan') }}">Penghargaan</a>
    </li>
    <li class="nav-item">
        <a class="nav-link" href="{{ url('portofolio') }}">Portofolio</a>
    </li>
    <li class="nav-item">
        <a class="nav-link" href="{{ url('galeri-video') }}">Galeri Video</a>
    </li>
</ul>
@endsection

@section('menuPenghargaan')
<div class="row" id="penghargaan">
    <div class="container">
        <div class="col-md-8">
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
</div>
@endsection