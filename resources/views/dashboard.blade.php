<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Selamat Datang di E-HOTEL</title>
    <link rel="icon" href="assets/logo.png">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="https://fonts.google.com/specimen/Lilita+One?query=lilit">

    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
</head>
<body>
    <div class="log" style="position: absolute">@include('item/modal'); @include('item/alert')</div>

    <div class="gambarbg" >
        <div class="header">
            <div class="logo">
                <h1>E-HOTEL</h1>
            </div>

            @auth
                <button type="button" id="btn" class="btn btn-primary" onclick="location.href='/profile'">
                    <h6 style="margin: 0; text-transform: uppercase">hai, {{auth()->user()->name}}</h6>
                </button>
            @else
                <button type="button" id="btn" class="btn btn-primary" data-toggle="modal" data-target="#login">
                    <h6 style="margin: 0;">MASUK | DAFTAR</h6>
                </button>
            @endauth
        </div>
        <div class="search">
            <form action="" method=""> 
                <div class="pencarian">
                    <div class="kota">
                        <input type="text" style="width: 10cm; margin: 10px 5px 10px 0;" name="cari_kota" id="cari_kota" placeholder="MASUKAN KOTA, LOKASI ATAU HOTEL" required>
                    </div>
                    <div class="checkin">
                        <p style="margin:0 0 0 10px;">CHECK IN</p>
                        <input style="padding-top: 0;" type="date" name="checkin" id="checkin" required>
                    </div>
                    <div class="checkout">
                        <p style="margin:0 0 0 10px;">CHECK OUT</p>
                        <input type="date" style="padding-top: 0;" name="checkout" id="checkout" required>
                    </div>

                    <div class="orang">
                        <select name="orang" id="orang" class="form-select" style="height: 50px; width: 5rem; margin: 10px 20px; background-color: transparent; border: none; text-align: center; color: white;">
                                <option value="1 orang">1 Orang</option>
                                <option value="2 orang">2 Orang</option>
                                <option value="3 orang">3 Orang</option>
                                <option value="4 orang">4 Orang</option>
                                <option value="5 orang">5 Orang</option>
                        </select>
                    </div>

                    <div class="cari" style="border-right: none;">
                        <button class="tambah" style="border: none; cursor: pointer;">
                            <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="currentColor" class="bi bi-search" viewBox="0 0 16 16">
                                <path d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001c.03.04.062.078.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1.007 1.007 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0z"/>
                            </svg> 
                            <span style="margin-left: 20px; font-size: 15pt;">Cari</span>
                        </button>
                    </div>
                </div>
            </form>
        </div>
    </div>

    <div class="populer">
        <h1>TUJUAN POPULER</h1>
        <div class="lokasi">
            <div class="destinasi"> 
                <a href="/cari-bali" style="color: black; text-decoration: none;">
                    <div class="bali">
                        <img src="assets/bali.png" class="rounded float-start" alt="Bali">
                        <p>Bali</p>
                    </div>
                <a href="" style="color: black; text-decoration: none;">
                    <div class="jakarta">
                        <img src="assets/jakarta.png" class="rounded float-start" alt="Jakarta">
                        <p>Jakarta</p>
                    </div>
                <a href="" style="color: black; text-decoration: none;">
                    <div class="malang">
                        <img src="assets/malang.png" class="rounded float-start" alt="Malang">
                        <p>Malang</p>
                    </div>
                <a href="" style="color: black; text-decoration: none;">
                    <div class="bandung">
                        <img src="assets/bandung.png" class="rounded float-start" alt="Bandung">
                        <p>Bandung</p>
                    </div>
                </a>
                <a href="" style="color: black; text-decoration: none;">
                    <div class="palembang">
                        <img src="assets/palembang.png" class="rounded float-start" alt="Palembang">
                        <p>Palembang</p>
                    </div>
                </a>
                <a href="" style="color: black; text-decoration: none;">
                    <div class="jogja">
                        <img src="assets/jogja.png" class="rounded float-start" alt="Jogja">
                        <p>Jogja</p>
                    </div>
                </a>
                <a href="" style="color: black; text-decoration: none;">
                    <div class="surabaya">
                        <img src="assets/surabaya.png" class="rounded float-start" alt="Surabaya">
                        <p>Surabaya</p>
                    </div>
                </a>
                <a href="" style="color: black; text-decoration: none;">
                    <div class="semarang">
                        <img src="assets/semarang.png" class="rounded float-start" alt="Semarang">
                        <p>Semarang</p>
                    </div>
                </a>
                <a href="" style="color: black; text-decoration: none;">
                    <div class="manado">
                        <img src="assets/Manado.png" class="rounded float-start" alt="Manado">
                        <p>Manado</p>
                    </div>
                </a>
                <a href="" style="color: black; text-decoration: none;">
                    <div class="aceh">
                        <img src="assets/aceh.png" class="rounded float-start" alt="Aceh">
                        <p>Aceh</p>
                    </div>
                </a>
            </div>
        </div>
    </div>

    <div class="info">
        <div class="gtw">
            <h4>DAFTAR DAN DAPATKAN PROMO MENARIKNYA</h4>
            <form action="">
                <input type="email" style="width: 12cm; font-size: 15pt;" placeholder="MASUKAN EMAIL ANDA">
                <input type="submit" value="DAFTAR" name="daftar" id="daftar">
            </form>
        </div>
    </div>

    <!-- footer -->
    <footer>
        <h5>© ACHMAD HASBIL </h5>
    </footer>
</body>
</html>