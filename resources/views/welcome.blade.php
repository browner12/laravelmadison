<!doctype html>
<html lang="{{ config('app.locale') }}">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">

<title>Laravel Madison</title>

<link rel="icon" href="/images/favicon.png" />
<link rel="apple-touch-icon" href="/images/apple.png" />

<!-- Bootstrap -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/css/bootstrap.min.css" integrity="sha384-rwoIResjU2yc3z8GV/NPeZWAv56rSmLldC3R/AZzGRnGxQQKnKkoFVhFQhNUwEyJ" crossorigin="anonymous">

<!-- Fonts -->
<link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">

<!-- Styles -->
<link rel="stylesheet" href="/css/info.css" />

<!-- Styles -->
<style>
    html, body {
        background-color: #fff;
        color: #636b6f;
        font-family: 'Raleway', sans-serif;
        font-weight: 100;
        height: 100vh;
        margin: 0;
    }

    .full-height {
        height: 100vh;
    }

    .flex-center {
        align-items: center;
        display: flex;
        justify-content: center;
    }

    .content {
        text-align: center;
    }

    .title {
        font-size: 84px;
    }

    .links > a {
        color: #636b6f;
        padding: 0 25px;
        font-size: 12px;
        font-weight: 600;
        letter-spacing: .1rem;
        text-decoration: none;
        text-transform: uppercase;
    }

    footer {
        background-color: #444;
        color: #fff;
        font-family: 'Raleway', sans-serif;
        padding: 2em 0;
    }

    .even {
        background-color: #fff;
    }

    .odd {
        background-color: #ddd;
    }

</style>
</head>
<body>

<div class="flex-center full-height">
    <div class="content">

        <div>
            <img src="/images/apple.png" />
        </div>

        <div class="title mb-4">Laravel Madison</div>

        <div class="links">
            <a href="#about">About</a>
            <a href="#upcoming">Upcoming</a>
            <a href="#location">Location</a>
            <a href="#sponsors">Sponsors</a>
        </div>

    </div>
</div>

<section id="about" class="flex-center full-height odd">
    <div>
        <div class="title mb-4">About</div>
        <div>This is the about us information.</div>
    </div>
</section>

<section id="upcoming" class="flex-center full-height even">

    <div class="title mb-4">Upcoming</div>

</section>

<section id="location" class="full-height odd">
    <div class="text-center">
        <div class="title mb-4">Location</div>
        <div>9 Odana Court, Madison WI 53719</div>
        <div id="map" style="height: 70vh; width: 80%; "></div>
    </div>
</section>

<section id="sponsors" class="flex-center full-height even">
    <div>
        <div class="title mb-4">Sponsors</div>

        <div class="row">
            <div class="col-12 col-sm-6 col-md-4">Kennedy Communications</div>
        </div>
    </div>
</section>

<div class="info">
    <div class="container">
        <div class="row">

            <div class="col-12 col-lg-4">
                <div class="branding">
                    <div class="logo"></div>
                    <div class="company" style="align-self: center;">Laravel Madison</div>
                </div>
                <div class="blurb">Learn, share with, and meet people interested in the <a href="https://laravel.com">Laravel Framework</a>.</div>
            </div>

            <div class="hidden-md-down col-lg-1"></div>

            <div class="col-12 col-sm-8 col-lg-4 links mb-4 mb-sm-0">
                <div class="header">Proudly Built With</div>
                <div><a href="https://forge.laravel.com" target="_blank">Forge</a></div>
                <div><a href="https://envoyer.io" target="_blank">Envoyer</a></div>
                <div><a href="https://m.do.co/c/24fe7ffc745f" target="_blank">Digital Ocean</a></div>
            </div>

            <div class="col-12 col-sm-4 col-lg-3 links">
                <div class="header">Contact Us</div>
                <div class="text-nowrap"><i class="fa fa-fw fa-map-marker"></i> <a href="https://google.com/maps/place/Madison+WI" target="_blank">Madison WI</a></div>
                <div class="text-nowrap"><i class="fa fa-fw fa-envelope"></i> <a href="mailto:info@laravelmadison.com" target="_blank">info@laravelmadison.com</a></div>
                <div class="text-nowrap"><i class="fa fa-fw fa-github"></i> <a href="https://github.com/laravelmadison" target="_blank">/laravelmadison</a></div>
            </div>

        </div>
    </div>
</div>

<footer class="flex-center">
    Copyright &copy; {{ date('Y') }} Laravel Madison
</footer>

<script>
    var map;
    function initMap() {

        var myLatLng = {lat: 43.0550959, lng: -89.4904666};

        var map = new google.maps.Map(document.getElementById('map'), {
            zoom: 13,
            center: myLatLng
        });

        var marker = new google.maps.Marker({
            position: myLatLng,
            map: map,
            title: 'Laravel Madison'
        });
    }
</script>


<!--scripts-->
<script src="https://code.jquery.com/jquery-3.1.1.slim.min.js" integrity="sha384-A7FZj7v+d/sdmMqp/nOQwliLvUsJfDHW+k9Omg/a/EheAdgtzNs3hpfag6Ed950n" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/tether/1.4.0/js/tether.min.js" integrity="sha384-DztdAPBWPRXSA/3eYEEUWrWCy7G5KFbe8fFjk5JAIxUYHKkDx6Qin1DkWx51bBrb" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/js/bootstrap.min.js" integrity="sha384-vBWWzlZJ8ea9aCX4pEW3rVHjgjt7zpkNpZk+02D9phzyeVkE+jo0ieGizqPLForn" crossorigin="anonymous"></script>
<script src="https://use.fontawesome.com/9323a85e58.js"></script>
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAcHeTYValQW53lKB4kZIc6wV4gBBttjew&callback=initMap" async defer></script>

</body>
</html>
