<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>E-HOTEL | Maps</title>
    <link rel="icon" href="assets/logo.png">

    <link rel="stylesheet" href="css/nav.css">
    <link rel="stylesheet" href="https://fonts.google.com/specimen/Lilita+One?query=lilit">

    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

    <script src="https://code.iconify.design/3/3.0.0/iconify.min.js"></script>

    <script async
        src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBgDGPx8jrYDUZZ6b9vMY4d5O-9RT86tZA&callback=initMap">
    </script>
    <script>
        var map;
        var service;
        var infowindow;

        function initMap() {
            var malang = new google.maps.LatLng( -7.982188,112.621883);

            infowindow = new google.maps.InfoWindow();

            map = new google.maps.Map(
                document.getElementById('map'), {center: malang, zoom: 15});

            var request = {
                query: 'Museum of Contemporary Art Australia',
                fields: ['name', 'geometry'],
            };

            var peta = new google.maps.places.PlacesService(map);

            service.findPlaceFromQuery(request, function(results, status) {
                if (status === google.maps.places.PlacesServiceStatus.OK) {
                for (var i = 0; i < results.length; i++) {
                    createMarker(results[i]);
                }
                map.setCenter(results[0].geometry.location);
                }
            });
        }
        google.maps.event.addDomListener(window, 'load', initialize);
    </script>
</head>
<body>
    <div class="log" style="position: absolute">@include('item/modal') @include('item/alert')</div>

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
                <h6 style="margin: 0;">HAI, HASBIL</h6>
                {{-- {{auth()->user->'name'}} --}}
            </button>
        @else
            <button type="button" id="btn" class="btn btn-primary" data-toggle="modal" data-target="#login">
                <h6 style="margin: 0;">MASUK | DAFTAR</h6>
            </button>
        @endauth
    </div>
    
    <div class="petun">
        <div class="isinav">
            @auth
                <div class="sukai" style="padding: 15px 0;">
                    <a href="/sukai" class="nav-link text-dark">
                        <span class="iconify" data-icon="icon-park-outline:like" data-width="35" style="margin-right: 20"></span>
                        <h4>SUKAI</h4>
                    </a>
                </div>
                <div class="pemesanan" style="padding: 15px 0;">
                    <a href="/tiket" class="nav-link text-dark">
                        <span class="iconify" data-icon="uiw:date" data-width="35" style="margin-right: 20px;"></span>
                        <h4>PEMESANAN</h4>
                    </a>
                </div>
            @else
                <div class="sukai" style="padding: 15px 0;">
                    <a href="" class="nav-link text-dark" data-target="#pg" data-toggle="modal">
                        <span class="iconify" data-icon="icon-park-outline:like" data-width="35" style="margin-right: 20"></span>
                        <h4>SUKAI</h4>
                    </a>
                </div>
                <div class="pemesanan" style="padding: 15px 0;">
                    <a href="" class="nav-link text-dark" data-target="#pg" data-toggle="modal">
                        <span class="iconify" data-icon="uiw:date" data-width="35" style="margin-right: 20px;"></span>
                        <h4>PEMESANAN</h4>
                    </a>
                </div>
            @endauth
            <div class="peta" style="padding: 15px 0; border: none;">
                <a href="" class="nav-link" style="color: #CFA446; border: none">
                    <span class="iconify" data-icon="akar-icons:location" style="margin-right: 20px;" data-width="35"></span>
                    <h4>PETA</h4>
                </a>
            </div>
        </div>
    </div>

    <div class="maps" id="map" style="height: 100vh;"></div>

    <footer>
        <h5>© ACHMAD HASBIL </h5>
    </footer>
</body>
</html>