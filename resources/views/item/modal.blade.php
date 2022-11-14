<link rel="stylesheet" href="css/modallg.css">
<script src="js/modal.js"></script>

{{-- modal 1 (login) --}}
<div class="modal fade" id="login" tabindex="-1" role="dialog" aria-labelledby="loginlabel" aria-hidden="false">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-body">
                <div class="form">
                    <form action="login" method="post">
                        @csrf
                        <div class="judul">
                            <h1>Masuk Akun</h1>
                        </div>
                        <div class="input">
                            <input type="email" name="email" id="email" placeholder="Masukan Email" required>
                            <input  style="margin-top: 20px;" type="password" name="password" id="password" placeholder="Masukan Password" required>
                        </div>
                        <div class="kirim">
                            <a href="" style="padding-left: 10px;" class="nav-link text-blue">Lupa Password ?</a>
                            {{-- <button type="submit">MASUK</button> --}}
                            <input type="submit" name="masuk" value="Masuk">
                        </div>
                    </form>
                </div>

                <div class="lain">
                    <h6 style="text-align: center;">- ATAU -</h6>

                    <div class="google">
                        <a href="">
                            <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/5/53/Google_%22G%22_Logo.svg/768px-Google_%22G%22_Logo.svg.png" alt="" width="40">
                            <h4 style="margin: 0; font-size: 15pt;">Masuk Dengan Akun Google</h4>
                        </a>
                    </div>

                    <p style="padding-left: 40px; display: flex; align-items: center; margin: 0;">Belum punya akun ? <a class="nav-link text-blue" href="" data-toggle="modal"  id="df">Daftar</a></p>
                </div>
            </div>
        </div>
    </div>
</div>

{{-- modal 2 (registrasi) --}}
<div class="modal fade" id="registrasi" style="overflow-y: scroll;" role="dialog" aria-labelledby="registrasilabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-body">
                <div class="form">
                    <form action="daftar" method="POST">
                        @csrf
                        <div class="judul">
                            <h1>Daftar Akun</h1>
                        </div>
                        <div class="inputreg">
                            <input type="text" name="name" id="name" placeholder="Masukan Nama" required>
                            <input type="email" name="email" id="email" placeholder="Masukan Email" required>
                            <input type="password" name="password" id="password" placeholder="Masukan Password" required>
                            <input type="password" name="password2" id="password2" placeholder="Konfirmasi Password" required>
                        </div>
                        <div class="kirimreg">
                            <p style="display: flex; align-items: center; margin: 0;">Sudah Punya Akun ? <a  class="nav-link text-blue" href="" data-toggle="modal" id="lg">Masuk</a></p>
                            <input type="submit" name="masuk" value="Masuk">
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

{{-- peringatan masuk --}}
<style>
    #pg button {padding: 10px 20px; background-color: #CFA446; color: white; border: none; border-radius: 20px; margin: 25px 10px 0 10px;cursor: pointer;}
</style>
<div class="modal fade" id="pg" tabindex="-1" role="dialog" aria-hidden="false">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-body">
                <h3 style="text-align: center">SILAHKAN MASUKAN AKUN ATAU DAFTARKAN AKUN</h3>
                <div class="a" style="display: flex; align-items: center; flex-direction: column">
                    <button data-toggle="modal" id="mk" data-target="#login">MASUK AKUN</button>
                    <button data-toggle="modal" id="da" data-target="#registrasi">DAFTAR AKUN</button>
                </div>
            </div>
        </div>
    </div>
</div>

{{-- modal daftar properti --}}
<div class="modal fade" id="dp" style="overflow-y: scroll;" role="dialog" aria-labelledby="registrasilabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-body">
                <div class="form">
                    <form action="" method="POST">
                        <div class="judul" style="justify-content: start">
                            <h1>Daftar Properti</h1>
                        </div>
                        <div class="inputreg">
                            <input type="text" name="username" id="username" placeholder="Masukan Nama Hotel" required>
                            <input type="email" name="email" id="email" placeholder="Masukan Kota" required>
                            <input type="text" name="provinsi" id="hp" placeholder="Masukan Provinsi" required>
                            <input type="number" min="0" name="no telp" id="password" placeholder="Masukan No Telphone" required>
                        </div>
                        <div class="kirimdp">
                            <input type="submit" name="masuk" value="Daftar">
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>