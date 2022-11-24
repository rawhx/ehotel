<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>E-HOTEL | DAFTAR TRANSAKSI</title>
    <link rel="icon" href="assets/logo.png">
    
    <link rel="stylesheet" href="css/riwayat.css">
    <link rel="stylesheet" href="css/nav.css">
    <link rel="stylesheet" href="https://fonts.google.com/specimen/Lilita+One?query=lilit">

    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

    <script src="https://code.iconify.design/3/3.0.0/iconify.min.js"></script>
</head>
<body>
    <div class="o" style="position: absolute;">@include('item/modal')</div>

    <div class="header">
        <div class="logo">
            <a class="nav-link text-white" href="/"><h1 style="margin: 0;">E-HOTEL</h1></a>
        </div>

        <div class="search">
            <label for="search">
                <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" fill="grey" class="bi bi-search" viewBox="0 0 16 16">
                    <path d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001c.03.04.062.078.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1.007 1.007 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0z"/>
                </svg> 
            </label>
            <input type="search" name="search" id="search" placeholder="Cari" >
        </div>

        @auth
            <button type="button" id="btn" class="btn btn-primary" onclick="location.href='/profile'">
                <h6 style="margin: 0; text-transform: uppercase">hai, {{auth()->user()->name}}</h6>
            </button>
        @endauth
    </div>

    <div class="rt">
        <div class="riwayat">
            <h3 style="margin: 10px 0 10px 20px">RIWAYAT TRANSAKSI</h3>
            <div class="tabel">
                <div class="judul">
                    <h6 style="margin-left: 0">Id Pemesanan</h6>
                    <h6>Nama Hotel</h6>
                    <h6>Tanggal</h6>
                </div>
                <div class="isitab">
                    @for ($i = 0; $i < 100; $i++)
                    <div class="hasil">
                        <p style="margin-left: 0">1902</p>
                        <p>METRO GARDEN</p>
                        <p>22/9/2022</p>
                    </div>
                    @endfor
                </div>
            </div>
        </div>
        <div class="rp">
            <div class="gtw" style="display: flex; justify-content: center; flex-direction: column; align-items: center">
                @if (auth()->user()->lvl=='admin_hotel')
                <h3 style="margin: 10px 0 10px 20px;">TRANSAKSI DITERIMA</h3>
                <div class="tabel">
                    <div class="judul">
                        <h6 style="margin-left: 0">Id Pemesanan</h6>
                        <h6>Email</h6>
                        <h6>Tanggal</h6>
                    </div>
                    <div class="isitab">
                        @for ($i = 0; $i < 100; $i++)
                        <div class="hasil">
                            <p style="margin-left: 0">1902</p>
                            <p>luffy@gmail.com</p>
                            <p>22/9/2022</p>
                        </div>
                        @endfor
                    </div>
                </div>
                @else
                <h1>DAFTARKAN PROPERTI ANDA</h1>
                <button data-target="#dp" data-toggle="modal">DAFTAR</button>
                @endif
            </div>
        </div>
    </div>

    <footer>
        <h5>© ACHMAD HASBIL </h5>
    </footer>
</body>
</html>