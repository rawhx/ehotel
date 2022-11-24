<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>E-HOTEL | profile</title>
    <link rel="icon" href="assets/logo.png">
    
    <link rel="stylesheet" href="css/admin.css">
    <link rel="stylesheet" href="css/profile.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">
    <link rel="stylesheet" href="https://fonts.google.com/specimen/Lilita+One?query=lilit">

    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
    <script src="js/imgp.js"></script>

</head>
<body>
    <div class="o" style="position: absolute">@include('item/modal') @include('item/alert')</div>

    @if (auth()->user()->lvl=='admin')
    <div class="header">
        <div class="logo">
            <a class="nav-link text-white" href="/profile"><h1 style="margin: 0;">E-HOTEL</h1></a>
        </div>
    </div> 
    @else
    <div class="header">
        <div class="logo">
            <a class="nav-link text-white" href="/"><h1 style="margin: 0;">E-HOTEL</h1></a>
        </div>
    </div> 
    @endif

    <div class="konten">
        @if (auth()->user()->lvl=='admin')
            <div class="petun">
                <div class="isinav" style="margin: 35px;">
                    <div class="transasi" style="padding: 5px 0;">
                        <a href="/users" class="nav-link text-dark">
                            <h4 style="font-size: 13pt">DAFTAR PENGGUNA</h4>
                        </a>
                    </div>
                    <div class="properti" style="padding: 5px 0;">
                        <a href="/properti" class="nav-link text-dark">
                            <h4 style="font-size: 13pt">DAFTAR PROPERTI</h4>
                        </a>
                    </div>
                    <div class="masalah" style="padding: 5px 0;">
                        <a href="/report" class="nav-link text-dark">
                            <h4 style="font-size: 13pt">LAPORAN PERMASALAHAN</h4>
                        </a>
                    </div>
                    <div class="ratting" style="padding: 5px 0;">
                        <a href="/ratting" class="nav-link text-dark">
                            <h4 style="font-size: 13pt">DAFTAR RATTING</h4>
                        </a>
                    </div>
                    <div class="transaksi" style="padding: 5px 0;">
                        <a href="/transaksi" class="nav-link text-dark">
                            <h4 style="font-size: 13pt">DAFTAR TRANSAKSI</h4>
                        </a>
                    </div>
                    <div class="logout" style="padding: 5px 0; border: none;">
                        <a href="logout" class="nav-link text-danger" style="border: none">
                            <h4 style="font-size: 13pt">KELUAR</h4>
                        </a>
                    </div>
                </div>
            </div>
        @elseif (auth()->user()->lvl=='admin_hotel')
        <div class="petun">
            <div class="isinav" style="margin: 35px;">
                <div class="transasi" style="padding: 15px 0;">
                    <a href="/data-transaksi" class="nav-link text-dark">
                        <h4>TRANSAKSI</h4>
                    </a>
                </div>
                <div class="properti" style="padding: 15px 0;">
                    <a href="/edit" class="nav-link text-dark">
                        <h4>PROPERTI SAYA</h4>
                    </a>
                </div>
                <div class="logout" style="padding: 15px 0; border: none;">
                    <a href="logout" class="nav-link text-danger" style="border: none">
                        <h4>KELUAR</h4>
                    </a>
                </div>
            </div>
        </div>
        @else
            <div class="petun">
                <div class="isinav" style="margin: 35px;">
                    <div class="transasi" style="padding: 15px 0;">
                        <a href="/data-transaksi" class="nav-link text-dark">
                            <h4>TRANSAKSI</h4>
                        </a>
                    </div>
                    <div class="properti" style="padding: 15px 0;">
                        <a href="#dp" data-toggle="modal" class="nav-link text-dark">
                            <h4>DAFTAR PROPERTI</h4>
                        </a>
                    </div>
                    <div class="logout" style="padding: 15px 0; border: none;">
                        <a href="logout" class="nav-link text-danger" style="border: none">
                            <h4>KELUAR</h4>
                        </a>
                    </div>
                </div>
            </div>
        @endif
        <form action="update/{{auth()->user()->id}}" method="POST" class="po">
            @method('put')
            @csrf
            <div class="macam">
                <div class="frm" style="display: flex; justify-content: center">
                    <div id='profile-upload'>
                        <div class="hvr-profile-img">
                            <input type="file" name="logo" id='getval' class="upload" id="imag">
                            <div class="icon">
                                <div class="camera4"><span></span></div>
                            </div>
                        </div>
                    </div>
                </div>
                {{-- <div class="gambar">
                    
                </div> --}}
                <div class="fm">
                    <div style="display: flex; flex-direction: column; justify-content: center">
                        <div class="nama">
                            <input type="text" name="name" id="name" value="{{auth()->user()->name}}">
                            <label for="name" style="cursor: pointer;"><i class="bi bi-pencil-square"></i></label>
                        </div>
                        <div class="email">
                            <input type="email" name="email" id="email" value="{{auth()->user()->email}}">
                            <label for="email" style="cursor: pointer;"><i class="bi bi-pencil-square"></i></label>
                        </div>
                        <div class="password">
                            <input type="password" name="password" id="password" placeholder="Masukkan Kata Sandi Lama Atau Baru" min="8" required>
                            <label for="password" style="cursor: pointer;"><i class="bi bi-pencil-square"></i></label>
                        </div>
                        <div class="kk" style="display: flex; justify-content: center; padding: 0; box-shadow: none">
                            <input type="submit" value="SIMPAN" type="simpan" style=" background-color: #CFA446; color: white; height: 40px; width: 8rem; border-radius: 15px;">
                        </div>
                    </div>
                </div>
            </div>
        </form>
    </div>

    <footer>
        <h5>© ACHMAD HASBIL </h5>
    </footer>
    
</body>
</html>

<script>
    $("document").ready(function () {
        var textmax = 500;
        $("#count").text(textmax + ' character left');
        $("#bio").keyup(function () {
            var userlenght = $("#bio").val().length;
            var remain = textmax - userlenght;
            $("#count").text(remain + ' characters left');
        });
    });

    document.getElementById('getval').addEventListener('change', readURL, true);
    function readURL() {
        var file = document.getElementById("getval").files[0];
        var reader = new FileReader();
        reader.onloadend = function () {
            document.getElementById('profile-upload').style.backgroundImage = "url(" + reader.result + ")";
        }
        if (file) {
            reader.readAsDataURL(file);
        } else {
        }
    }

    $(function () {
        var $text = $('#texte');
        var $input = $('.texte');
        $input.on('keydown', function () {
            setTimeout(function () {
                $text.html($input.val());
            }, 0);
        });
    })
</script>