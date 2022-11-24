<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>E-HOTEL | Pembayaran</title>

    <link rel="icon" href="assets/logo.png">

    <link rel="stylesheet" href="css/transaksi.css">
    <link rel="stylesheet" href="css/navall.css">
    <link rel="stylesheet" href="https://fonts.google.com/specimen/Lilita+One?query=lilit">
    
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

    <script src="https://code.iconify.design/3/3.0.0/iconify.min.js"></script>
</head>
<body>
    <div class="header">
        <div class="logo">
            <a class="nav-link text-white" href="/"><h1 style="margin: 0;">E-HOTEL</h1></a>
        </div>
    </div>

    <div class="tampilan">
        <div class="pembayaran">
            <form action="">
                <div class="aa" style="display: flex">
                    <div class="nama">
                        <input type="text" name="nama" id="nama" placeholder="MASUKKAN NAMA">
                    </div>
                    <div class="email">
                        <input type="email" placeholder="MASUKKAN EMAIL">
                    </div>
                </div>
                <div class="dd" style="display: flex">
                    <div class="hp">
                        <input type="number" min="1" name="orang" id="org" placeholder="MASUKKAN ORANG">
                    </div>
                    <div class="transaksi">
                        <select id="demo-htmlselect">
                            <option value="indo">INDOMARET</option>
                            <option value="alfa">ALFAMART</option>
                        </select>
                    </div>
                </div>
                <div class="xxx" style="display: flex; justify-content: center">
                    <div class="tanggal">
                        <div class="chekin" style="border-right: 2px dashed black; margin: 0; padding-right: 35px">
                            <p style="margin:0; font-size: 10pt">CHECK IN</p>
                            <input style="width: 10rem; padding-top: 0;" type="date" name="checkin" id="checkin" required>
                        </div>
                        <div class="checkout">
                            <p style="margin:0; font-size: 10pt; width: 197">CHECK OUT</p>
                            <input style="width: 10rem; padding-top: 0;" type="date" name="checkout" id="checkout" required>
                        </div>
                    </div>
                </div>
                <div class="bayar">
                    <input type="submit" value="BAYAR">
                </div>
           </form>
        </div>
        <div class="text">
            <div class="judul">
                <div class="aa">
                    <h1 style="font-size: 16pt; border-bottom: 3px dashed #CFA446; width: 180px; padding-bottom: 5px">METRO GARDEN</h1>
                    <h6 style="font-size: 11pt">DENPASAR</h6>
                </div>
                <div class="gambar" style="background-image: url('https://images.unsplash.com/photo-1563911302283-d2bc129e7570?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=435&q=80')"></div>
            </div>
            <div class="bb">
                <p style="font-family: 'Poppins; font-size:11pt;">Hotel metro garden berada di denpasar bali, indonesia. Hotel ini menawarkan keindahan view yang langsung menghadap ke laut, serta kami menawarkan fasilitas hotel yang cukup lengkap.</p>
                <h6>Rp 230.000,00</h6>
            </div>
        </div>
    </div>

    <footer>
        <h5>© ACHMAD HASBIL </h5>
    </footer>

    <script>
    $('#make-it-slick').on('click', function(){
        $('#demo-htmlselect').ddslick();
    });
    </script>
</body>
</html>