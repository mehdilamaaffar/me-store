<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="A Lightroom Preset set the moody photos">
    <meta name="author" content="Mehdi lamaaffar">
    <meta name="csrf-token" content="{{ csrf_token() }}">

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

<body id="page-top app">

    <!-- Navigation -->
    <nav class="navbar navbar-expand-lg navbar-light fixed-top" id="mainNav">
        <div class="container">
            <a class="navbar-brand js-scroll-trigger" href="#page-top">MoodyBlue</a>
            <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarResponsive">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item">
                        <a class="nav-link js-scroll-trigger" href="#example">example</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link js-scroll-trigger" href="#download">download</a>
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

    <section class="p-0" id="example" style="margin-bottom: 12em;">
        <div class="container p-0">
            <div class="row">
                <div class="col-lg-10 mx-auto">
                    <h1 class="text-uppercase ba-heading">Before / After</h1>
                    <hr>
                </div>
            </div>

            <div class="row no-gutters popup-gallery gallery-example images-box">
                <div class="col-lg-6 col-sm-12">
                    <a class="portfolio-box" href="img/example/moodyblue-1.jpg">
                        <img class="img-fluid img-crop" src="img/example/thumbnails/moodyblue-1.jpg" alt="">
                    </a>
                </div>

                <div class="col-lg-6 col-sm-12">
                    <a class="portfolio-box" href="img/example/moodyblue-3.jpg">
                        <img class="img-fluid img-crop" src="img/example/thumbnails/moodyblue-3.jpg" alt="">
                    </a>
                </div>

                <div class="col-lg-6 col-sm-12">
                    <a class="portfolio-box" href="img/example/moodyblue-2.jpg">
                        <img class="img-fluid img-crop" src="img/example/thumbnails/moodyblue-2.jpg" alt="">
                    </a>
                </div>

                <div class="col-lg-6 col-sm-12">
                    <a class="portfolio-box" href="img/example/moodyblue-4.jpg">
                        <img class="img-fluid img-crop" src="img/example/thumbnails/moodyblue-4.jpg" alt="">
                    </a>
                </div>
            </div>
        </div>
    </section>

    <section class="bg-dark text-white" id="download">
        <div class="container text-center">
            <div class="download-instruction">
                <h3 class="download-instruction__heading"><i class="fa fa-info-circle"></i> Installing the presets: <br /></h3>
                <div class="download-instruction__subsection">
                    <p><i class="fa fa-arrow-right"></i> the presets in Lightroom CC</p>
                    <p class="download-instruction__subsection__text">
                        <i class="fa fa-check-square"></i> Open Lightroom CC <br />
                        <i class="fa fa-check-square"></i> Click on the Preset Develop icon <br />
                        <i class="fa fa-check-square"></i> Click Presets <br />
                        <i class="fa fa-check-square"></i> Click the … icon <br />
                        <i class="fa fa-check-square"></i> Select ‘Import Presets’ <br />
                        <i class="fa fa-check-square"></i> Select the files and hit ‘Import’ 💪 <br />
                    </p>
                </div>
                <p>
                    <p><i class="fa fa-arrow-right"></i> Installing the prsets in Lightroom Classic CC</p>
                    <p class="download-instruction__subsection__text">
                        <i class="fa fa-check-square"></i> Open Lightroom Classic CC<br />
                        <i class="fa fa-check-square"></i> Go to the Develop tab<br />
                        <i class="fa fa-check-square"></i> In the Presets tab, on the left hand side, click the + icon, then ‘Import Presets’<br />
                        <i class="fa fa-check-square"></i> Select the files and hit ‘Import’ 💪<br />
                    </p>
                    <p>
                        <i class="fa fa-info-circle"></i> Adobe have recently updated Lightroom, and have replaced the old .lrt files with .xmp files. This change will mean that if you are installing to Lightroom Classic CC the presets will end up in the ‘User Presets’ folder, as opposed to their own folder.
                    </p>
                </p>
            </div>
            <h2 class="mb-4">Download now the preset and enjoy the blueness!</h2>
            <a class="btn btn-light btn-xl sr-button download-btn" href="/files/moodyblue.zip" onclick="addClick()">Download Now!</a>
        </div>
    </section>

    <section id="contact">
        <div class="container contact-text">
            <div class="row">
                <div class="col-lg-8 mx-auto text-center">
                    <h2 class="section-heading">Let's Get In Touch!</h2>
                    <hr class="my-4">
                    <p class="mb-5">Ready to start your next project with us? That's great! Give us a call or send us an email and we will get back to you as soon as possible!</p>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-3 ml-auto text-center">
                    <a href="https://www.instagram.com/lamaaffar_mehdi/"><i class="fa fa-instagram fa-3x mb-3 sr-contact contact-icons"></i></a>
                </div>

                <div class="col-lg-3 ml-auto text-center">
                    <a href="https://www.facebook.com/mehdi.lamaaffar.90"><i class="fa fa-facebook fa-3x mb-3 sr-contact contact-icons"></i></a>
                </div>

                <div class="col-lg-3 ml-auto text-center">
                    <a href="https://twitter.com/mehdilamaaffar"><i class="fa fa-twitter fa-3x mb-3 sr-contact contact-icons"></i></a>
                </div>

                <div class="col-lg-3 ml-auto text-center">
                    <a href="mailto:mehdilamaafar@gmail.com"><i class="fa fa-envelope fa-3x mb-3 sr-contact contact-icons"></i></a>
                </div>
            </div>
        </div>
    </section>

    <!-- Custom scripts for this template -->
    <script src="{{ asset('js/vendor.js') }}" type="text/javascript"></script>
    <script src="{{ asset('js/app.js') }}" type="text/javascript"></script>
    <script>
        function addClick() {
            $.post({
                url: '/api/click',
                data: {
                    '_token': $('meta[name="csrf-token"]').attr('content'),
                }
            })
        }
    </script>
</body>

</html>
