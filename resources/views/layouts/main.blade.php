<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <title>UKDW APP</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
    <script src="https://cdn.datatables.net/1.11.5/js/jquery.dataTables.min.js"></script>
    <link rel="stylesheet" href="https://cdn.datatables.net/1.11.5/css/jquery.dataTables.min.css">
    <!-- Bootstrap CSS 
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">-->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css" integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-fQybjgWLrvvRgtW6bFlB7jaZrFsaBXjsOMm/tB9LTS58ONXgqbR9W8oWht/amnpF" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.2/font/bootstrap-icons.css">
</head>
  <body>
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12 bg-info py-1">
            <div class="dropdown float-right" >
                <button class="btn btn-info dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <i class="bi bi-person-fill"></i>User
                </button>
                <div class="dropdown-menu dropdown-menu-right bg-info" aria-labelledby="dropdownMenuButton">
                    <a class="dropdown-item text-white" href="#">{{ Auth::user()->nama_user}}</a>
                    <a class="dropdown-item text-white" href="/user">Data Pengguna</a>
                    <a class="dropdown-item text-white" href="/logout">Logout</a>
                </div>
            </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-2">
                <div class="nav flex-column nav-pills mt-4" id="v-pills-tab" role="tablist" aria-orientation="vertical">
                    <a class="nav-link text-info" href="#">Home</a>
                    <a class="nav-link active bg-info" href="/dosen">Dosen</a>
                    <a class="nav-link text-info" href="/mahasiswa">Mahasiswa</a>
                    <a class="nav-link text-info" href="/skripsi">Skripsi</a>
                </div>
            </div>
            <div class="col-lg-10">
                <div class="card mt-2">
                    <div class="card-header">
                        @yield('title')
                    </div> 
                </div>
            </div>
        <!--<div class="row">
            <div class="col-lg-12 bg-info text-white">
            <span class="badge badge-pill badge-white text-light text-center"><i
            class="bi bi-at"></i>Template UKDW</span>
            </div>
        </div>-->
        <div class="container-fluid">
            <nav class="navbar py-2 bg-info mt-1">
            <div class="row">
                <div class="col-lg-12">
                    <span class="badge badge-pill badge-white text-light text-center">
                    <i class="bi bi-at"></i>Template UKDW</span>
                </div>
            </div>
        </nav>
    </div>
</body>
</html>