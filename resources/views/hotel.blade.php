<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>E-HOTEL</title>
    <link rel="icon" href="assets/logo.png">

    <link rel="stylesheet" href="css/hotel.css">
    <link rel="stylesheet" href="css/navall.css">
    <link rel="stylesheet" href="https://fonts.google.com/specimen/Lilita+One?query=lilit">

    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

    <script src="https://code.iconify.design/3/3.0.0/iconify.min.js"></script>
</head>
<body>
    <div class="xx" style="position: absolute;">@include('item/modal') @include('item/alert')</div>

    <div class="header">
        <div class="logo">
            <a class="nav-link text-white" href="/"><h1 style="margin: 0;">E-HOTEL</h1></a>
        </div>
    </div>

    <div class="tampilan">
        @auth
        <div class="icon">
            <div class="like" style="margin-right: 25px">
                <a href="">
                    <span class="iconify" data-icon="icon-park-outline:like" style="color: black" data-width="25"></span>
                </a>
            </div>
            <div class="report">
                <a href="" data-toggle="modal" data-target="#rp">
                    <span class="iconify" data-icon="ic:baseline-report-gmailerrorred" style="color: red;" data-width="25"></span>
                </a>
            </div>
        </div>
        @else
        <div class="icon">
            <div class="like" style="margin-right: 25px">
                <a href="" data-toggle="modal" data-target="#pg">
                    <span class="iconify" data-icon="icon-park-outline:like" style="color: black" data-width="25"></span>
                </a>
            </div>
            <div class="report">
                <a href="" data-toggle="modal" data-target="#pg">
                    <span class="iconify" data-icon="ic:baseline-report-gmailerrorred" style="color: red;" data-width="25"></span>
                </a>
            </div>
        </div>
        @endauth

        <div class="isi">
            <div class="gambar">
                <div class="as">
                    <div class="ab" style="background-image: url('https://images.unsplash.com/photo-1618773928121-c32242e63f39?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=870&q=80')"></div>
                    <div class="ab" style="background-image: url('https://images.unsplash.com/photo-1576354302919-96748cb8299e?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=329&q=80')"></div>
                    <div class="ab" style="background-image: url('https://images.unsplash.com/photo-1521783593447-5702b9bfd267?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=604&q=80')"></div>
                    <div class="ab" style="background-image: url('https://images.unsplash.com/photo-1485686531765-ba63b07845a7?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=867&q=80')"></div>
                </div>
                <div class="b">
                    <div class="ba" style="background-image: url('https://images.unsplash.com/photo-1563911302283-d2bc129e7570?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=435&q=80')"></div>
                    <div class="ca">
                        <div class="cb" style="background-image: url('https://images.unsplash.com/photo-1463797221720-6b07e6426c24?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=871&q=80')"></div>  
                        <div class="cb" style="background-image: url('https://images.unsplash.com/photo-1582719508461-905c673771fd?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=725&q=80')"></div>  
                        <div class="cb" style="background-image: url('https://images.unsplash.com/photo-1601893211509-81b6d03e46a0?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=870&q=80')"></div>  
                    </div>
                </div>
            </div>
            <div class="keterangan">
                <div class="maps" onclick="location.href='/maps'">
                    <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d986.077262926225!2d115.26324613590414!3d-8.662129532490276!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e0!3m2!1sid!2sid!4v1668823610966!5m2!1sid!2sid" width="602" height="120" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                </div>
                <div class="text">
                    <div class="ratting">
                        <div class="judul">
                            <h4 style="margin: 0">METRO GARDEN</h4>
                        </div>
                        @auth
                        <form action="" method="post">
                            <div class="bintang">
                                <div class="rating">
                                    <input type="radio" name="rating" value="5" id="5"><label for="5">☆</label>
                                    <input type="radio" name="rating" value="4" id="4"><label for="4">☆</label>
                                    <input type="radio" name="rating" value="3" id="3"><label for="3">☆</label>
                                    <input type="radio" name="rating" value="2" id="2"><label for="2">☆</label>
                                    <input type="radio" name="rating" value="1" id="1"><label for="1">☆</label>
                                  </div>
                            </div>
                        </form>
                        @else
                        <div class="bintang">
                            <div class="rating" data-toggle="modal" data-target="#pg">
                                <input type="radio" name="rating" value="5" id="5" disabled><label for="5">☆</label>
                                <input type="radio" name="rating" value="4" id="4" disabled><label for="4">☆</label>
                                <input type="radio" name="rating" value="3" id="3" disabled><label for="3">☆</label>
                                <input type="radio" name="rating" value="2" id="2" disabled><label for="2">☆</label>
                                <input type="radio" name="rating" value="1" id="1" disabled><label for="1">☆</label>
                              </div>
                        </div>
                        @endauth
                    </div>
                    <div class="des">
                        <p style="font-size: 11pt; font-family: 'Crimson Pro'">hotel metro garden berada di denpasar bali, indonesia. hotel ini menawarkan keindahan view yang langsung menghadap ke laut.  serta kami menawarkan fasilitas hotel yang cukup lengkap.</p>
                        <h6 style="margin-top: 10px; text-align: right">Rp 230.000,00</h6>
                    </div>
                    <div class="pesan">
                        @auth
                            <input type="submit" value="PESAN" onclick="location.href='/pesan'">  
                        @else
                            <input type="submit" value="PESAN" data-toggle="modal" data-target="#pg">  
                        @endauth  
                    </div>
                </div>
            </div>
        </div>
    </div>

    <footer>
        <h5>© ACHMAD HASBIL </h5>
    </footer>
</body>
</html>