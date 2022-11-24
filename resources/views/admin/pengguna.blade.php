<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>E-HOTEL | PENGGUNA</title>
    <link rel="icon" href="assets/logo.png">

    <link rel="stylesheet" href="css/profile.css">
    <link rel="stylesheet" href="css/admin.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">
    <link rel="stylesheet" href="https://fonts.google.com/specimen/Lilita+One?query=lilit">

    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

    <script src="https://code.iconify.design/3/3.0.0/iconify.min.js"></script>
</head>
<style>
    .isinav h4 {font-size: 13pt}
</style>
<body>
    <div class="header">
        <div class="logo">
            <a class="nav-link text-white" href="/profile"><h1 style="margin: 0;">E-HOTEL</h1></a>
        </div>
    </div>

    <div class="konten">
        <div class="petun">
            <div class="isinav" style="margin: 35px;">
                <div class="transasi" style="padding: 5px 0;">
                    <a href="/users" class="nav-link" style="color: #C88109">
                        <h4>DAFTAR PENGGUNA</h4>
                    </a>
                </div>
                <div class="properti" style="padding: 5px 0;">
                    <a href="/properti" class="nav-link text-dark">
                        <h4>DAFTAR PROPERTI</h4>
                    </a>
                </div>
                <div class="masalah" style="padding: 5px 0;">
                    <a href="" data-toggle="modal" class="nav-link text-dark">
                        <h4>LAPORAN PERMASALAHAN</h4>
                    </a>
                </div>
                <div class="ratting" style="padding: 5px 0;">
                    <a href="" data-toggle="modal" class="nav-link text-dark">
                        <h4>DAFTAR RATTING</h4>
                    </a>
                </div>
                <div class="logout" style="padding: 5px 0; border: none;">
                    <a href="logout" class="nav-link text-danger" style="border: none">
                        <h4>KELUAR</h4>
                    </a>
                </div>
            </div>
        </div>
        <div class="isi">
            <h4>DAFTAR PENGGUNA</h4>
            <div class="cari">
                <span class="iconify" data-icon="bi:search" style="color: white;" data-width="16"></span>
                <form action="">
                    <input type="search" name="" id="" placeholder="CARI">
                </form>
            </div>
            <div class="pp">
                <div class="judul-column">
                    <div class="no"><h6 style="width: 50px">NO</h6></div>
                    <div class="ehp"><h6  style="width: 250px">EMAIL</h6></div>
                    <div class="password"><h6  style="width: 250px">NAMA</h6></div>
                    <div class="tindakan"><h6  style="width: 150px">TINDAKAN</h6></div>
                </div>
                <div class="xx">
                    @foreach ($data as $item)
                        {{-- @for ($i = 0; $i < 100; $i++) --}}
                        <div class="isi-column">
                            <div class="no"><P style="width: 50px">{{ $loop->iteration}}</P></div>
                            <div class="ehp"><P style="width: 250px">{{$item['email']}}</P></div>
                            <div class="password"><P style="width: 250px; overflow: hidden;">{{$item['name']}}</P></div>
                            <div class="tindakan"><p style="width: 150px; display: flex; justify-content: space-evenly">
                                <a><span class="iconify" data-icon="fluent:delete-16-regular" style="color: red;" data-width="20"></span></a>
                                <a href=""><span class="iconify" data-icon="grommet-icons:update" style="color: blue;" data-width="20"></span></a>     
                            </p></div>
                        </div>
                        {{-- @endfor --}}
                    @endforeach
                </div>
            </div>
        </div>
    </div>

    <footer>
        <h5>© ACHMAD HASBIL </h5>
    </footer>
</body>
</html>