<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta2/css/all.min.css" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/style.css')}}">

    <title>Web Profile</title>
  </head>

  <body> 
    <div class="container">
        <div class="row" >
            <div class="col-md-8" style="padding-top:3%">
                <h1>Muhammad Nurwidya Ardiansyah</h1>
                <hr width="85%">
                <h3 class="text-muted">Web Developer, Data Engineer</h3>
            </div>
            <div class="col-md-4">
                <div class="text-center">
                    <img src="{{ asset('image/cv-profil.png') }}" width="50%" height="50%" alt="profile picture" class="profile img-fluid rounded-circle">
                </div>
            </div>
            <div class="col-md-8">
                @yield('menuHalaman') 
            </div>
            <div class="col-md-1">

            </div>
            <div class="col-md-3" style="padding: 1%;">
              <h6>m.n.ardian@gmail.com</h6>
              <h6>+6281328875312</h6>
              <h6>Bantul, D.I. Yogyakarta</h6>
            </div>                       
        </div>
        <br>
        @yield('menuDeskripsi')
        @yield('menuDataPersonal')
        @yield('menuRiwayatPendidikan')
        @yield('menuBahasa')
        @yield('menuSkills') 
        @yield('menuRiwayatOrganisasi') 
        @yield('menuRiwayatPekerjaan') 
        @yield('menuPenghargaan') 
        @yield('menuPortofolio') 
        @yield('menuGaleriVideo') 
        
        
    </div>
    

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <!-- <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-/bQdsTh/da6pkI1MST/rWKFNjaCP5gBSY4sEBT38Q/9RBh9AH40zEOg7Hlq2THRZ" crossorigin="anonymous"></script> -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta2/js/all.min.js" ></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js" integrity="sha384-W8fXfP3gkOKtndU4JGtKDvXbO53Wy8SZCQHczT5FMiiqmQfUpWbYdTil/SxwZgAN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.min.js" integrity="sha384-skAcpIdS7UcVUC05LJ9Dxay8AXcDYfBJqt1CJ85S/CFujBsIzCIv+l9liuYLaMQ/" crossorigin="anonymous"></script>
    
  </body>
</html>