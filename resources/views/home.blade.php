<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="A Lightroom Preset set the moody photos">
    <meta name="author" content="Mehdi lamaaffar">

    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-119898124-1"></script>
    <script>
    window.dataLayer = window.dataLayer || [];
    function gtag(){dataLayer.push(arguments);}
    gtag('js', new Date());

    gtag('config', 'UA-119898124-1');
    </script>

    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name') }}</title>

    <link href='https://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Merriweather:400,300,300italic,400italic,700,700italic,900,900italic' rel='stylesheet' type='text/css'>

    <!-- Custom styles for this template -->
    <link href="{{ asset('css/vendor.css') }}" rel="stylesheet">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>

<body id="page-top">

    <!-- Navigation -->
    <nav class="navbar navbar-expand-lg navbar-light fixed-top" id="mainNav">
        <div class="container">
            <a class="navbar-brand js-scroll-trigger" href="#page-top">MoodyBlue Lightroom preset</a>
            <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarResponsive">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item">
                        <a class="nav-link js-scroll-trigger" href="#example">example</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link js-scroll-trigger" href="#contact">Contact</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <header class="masthead text-center text-white d-flex">
        <div class="container my-auto">
            <div class="row">
                <div class="col-lg-10 mx-auto">
                    <h1 class="text-uppercase">
                        <strong>A moody Lightroom Preset for give a deep and dreamy vibe</strong>
                    </h1>
                    <hr>
                </div>
                <div class="col-lg-8 mx-auto">
                    <p class="text-faded mb-5">Integrate a preset in you workflow can really speed up your editing process.</p>
                    <a class="btn btn-primary btn-xl js-scroll-trigger" href="#example">Find Out More</a>
                </div>
            </div>
        </div>
    </header>

    <section class="p-0" id="example">
        <div class="container-fluid p-0">
            <div class="row">
                <div class="col-lg-10 mx-auto">
                    <h1 class="text-uppercase">
                       <div class="ba-heading">Before / After</div>
                    </h1>
                    <hr>
                </div>
            </div>

            <div class="row no-gutters popup-gallery">
                <div class="col-lg-6 col-sm-12">
                    <div class="portfolio-box" href="img/portfolio/fullsize/1.jpg">
                        <img class="img-fluid img-crop" src="img/example/moodyblue-1.jpg" alt="">
                    </div>
                </div>

                <div class="col-lg-6 col-sm-12">
                    <div class="portfolio-box" href="img/portfolio/fullsize/1.jpg">
                        <img class="img-fluid img-crop" src="img/example/moodyblue-2.jpg" alt="">
                    </div>
                </div>

                <div class="col-lg-6 col-sm-12">
                    <div class="portfolio-box" href="img/portfolio/fullsize/1.jpg">
                        <img class="img-fluid img-crop" src="img/example/moodyblue-3.jpg" alt="">
                    </div>
                </div>

                <div class="col-lg-6 col-sm-12">
                    <div class="portfolio-box" href="img/portfolio/fullsize/1.jpg">
                        <img class="img-fluid img-crop" src="img/example/moodyblue-4.jpg" alt="">
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="bg-dark text-white">
        <div class="container text-center">
            <h2 class="mb-4">Download now the preset and enjoy the blueness!</h2>
            <a class="btn btn-light btn-xl sr-button" href="/files/moodyblue.zip">Download Now!</a>
        </div>
    </section>

    <section id="contact">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 mx-auto text-center">
                    <h2 class="section-heading">Let's Get In Touch!</h2>
                    <hr class="my-4">
                    <p class="mb-5">Ready to start your next project with us? That's great! Give us a call or send us an email and we will get back to you as soon as possible!</p>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-3 ml-auto text-center">
                    <a href="https://www.instagram.com/lamaaffar_mehdi/"><i class="fa fa-instagram fa-3x mb-3 sr-contact"></i></a>
                </div>

                <div class="col-lg-3 ml-auto text-center">
                    <a href="https://www.facebook.com/mehdi.lamaaffar.90"><i class="fa fa-facebook fa-3x mb-3 sr-contact"></i></a>
                </div>

                <div class="col-lg-3 ml-auto text-center">
                    <a href="https://twitter.com/mehdilamaaffar"><i class="fa fa-twitter fa-3x mb-3 sr-contact"></i></a>
                </div>

                <div class="col-lg-3 ml-auto text-center">
                    <a href="mailto:mehdilamaafar@gmail.com"><i class="fa fa-envelope fa-3x mb-3 sr-contact"></i></a>
                </div>
            </div>
        </div>
    </section>

    <!-- Custom scripts for this template -->
    <script src="{{ asset('js/vendor.js') }}" type="text/javascript"></script>
    <script src="{{ asset('js/app.js') }}" type="text/javascript"></script>
</body>

</html>
