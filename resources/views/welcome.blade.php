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

<!-- Fontawesome -->
<script src="https://use.fontawesome.com/9323a85e58.js"></script>

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

    .position-ref {
        position: relative;
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

    .m-b-md {
        margin-bottom: 30px;
    }

    footer {
        background-color: #444;
        color: #fff;
        font-family: 'Raleway', sans-serif;
        padding: 2em 0;
    }

</style>
</head>
<body>

<div class="flex-center position-ref full-height">
    <div class="content">

        <div>
            <img src="/images/apple.png" />
        </div>

        <div class="title m-b-md">Laravel Madison</div>

        <div class="links">
            <a href="#aboutUs">About Us</a>
            <a href="#upcoming">Upcoming</a>
            <a href="#locationTime">Location / Time</a>
            <a href="#sponsors">Sponsors</a>
        </div>

    </div>
</div>

<section id="aboutUs" class="flex-center position-ref full-height" style="background-color: #ddd; ">

    <div class="title m-b-md">About Us</div>

</section>

<section id="upcoming" class="flex-center position-ref full-height" style="background-color: #fff; ">

    <div class="title m-b-md">Upcoming</div>

</section>

<section id="locationTime" class="flex-center position-ref full-height" style="background-color: #ddd; ">

    <div class="title m-b-md">Location / Time</div>

</section>

<section id="sponsors" class="flex-center position-ref full-height" style="background-color: #fff; ">

    <div class="title m-b-md">Sponsors</div>

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

            <div class="col-12 col-sm-8 col-lg-4 links mb-2 mb-sm-0">
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

<script src="https://code.jquery.com/jquery-3.1.1.slim.min.js" integrity="sha384-A7FZj7v+d/sdmMqp/nOQwliLvUsJfDHW+k9Omg/a/EheAdgtzNs3hpfag6Ed950n" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/tether/1.4.0/js/tether.min.js" integrity="sha384-DztdAPBWPRXSA/3eYEEUWrWCy7G5KFbe8fFjk5JAIxUYHKkDx6Qin1DkWx51bBrb" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/js/bootstrap.min.js" integrity="sha384-vBWWzlZJ8ea9aCX4pEW3rVHjgjt7zpkNpZk+02D9phzyeVkE+jo0ieGizqPLForn" crossorigin="anonymous"></script>

</body>
</html>
