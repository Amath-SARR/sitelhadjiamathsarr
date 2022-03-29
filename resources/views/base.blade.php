<!DOCTYPE html>
<html>

<head>
    <!-- Site made with Mobirise Website Builder v5.6.3, https://mobirise.com -->
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="generator" content="Mobirise v5.6.3, mobirise.com">
    <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1">
    <link rel="shortcut icon" href="assets/images/mbr-121x72.jpg" type="image/x-icon">
    <meta name="description" content="">
    <title>@yield('title')</title>
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap-grid.min.css">
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap-reboot.min.css">
    <link rel="stylesheet" href="assets/dropdown/css/style.css">
    <link rel="stylesheet" href="assets/socicon/css/styles.css">
    <link rel="stylesheet" href="assets/theme/css/style.css">
    <link rel="preload"
        href="https://fonts.googleapis.com/css?family=Jost:100,200,300,400,500,600,700,800,900,100i,200i,300i,400i,500i,600i,700i,800i,900i&display=swap"
        as="style" onload="this.onload=null;this.rel='stylesheet'">
    <noscript>
        <link rel="stylesheet"
            href="https://fonts.googleapis.com/css?family=Jost:100,200,300,400,500,600,700,800,900,100i,200i,300i,400i,500i,600i,700i,800i,900i&display=swap">
    </noscript>
    <link rel="preload" as="style" href="assets/mobirise/css/mbr-additional.css">
    <link rel="stylesheet" href="assets/mobirise/css/mbr-additional.css" type="text/css">
    <!-- Bootstrap CSS -->
    <style >
        li {
            color: blue;
        }
        h6 {
            color: black
        }
     </style>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>

<body>
    <section data-bs-version="5.1" class="menu cid-s48OLK6784" once="menu" id="menu1-h">
        <nav class="navbar navbar-dropdown navbar-fixed-top navbar-expand-lg">
            <div class="container">
                <div class="navbar-brand">
                    <span class="navbar-logo">
                        <img src="assets/images/imgId.jpg" alt="" style="height: 40px">
                    </span>
                    <span class="navbar-caption-wrap"><a class="navbar-caption text-black display-7"
                            href="" ><br>EL Hadji Amath SARR</a></span>
                </div>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-bs-toggle="collapse"
                    data-target="#navbarSupportedContent" data-bs-target="#navbarSupportedContent"
                    aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                    <div class="hamburger">
                        <span></span>
                        <span></span>
                        <span></span>
                        <span></span>
                    </div>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav nav-dropdown nav-right" data-app-modern-menu="true">
                        <li class="nav-item"><a class="nav-link link text-black display-7"
                                href="/">A propos</a></li>
                        <li class="nav-item"><a class="nav-link link text-black display-7"
                                href="/cv">CV</a></li>
                        <li class="nav-item"><a class="nav-link link text-black display-7"
                                href="projet">Projets</a></li>
                        <li class="nav-item"><a class="nav-link link text-black display-7"
                                href="/contact">Contact</a></li>
                        @auth
                        <li class="nav-item dropdown mt-4">
                            <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                {{ Auth::user()->name }}
                            </a>

                            <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                                <a class="dropdown-item" href="{{ route('logout') }}"
                                   onclick="event.preventDefault();
                                                 document.getElementById('logout-form').submit();">
                                    {{ __('Logout') }}
                                </a>

                                <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                    @csrf
                                </form>
                            </div>
                        </li>
                        @endauth
                    </ul>
                </div>
            </div>
        </nav>
    </section>
    <section data-bs-version="5.1" class="testimonials1 cid-t0CCJM1fCT" id="testimonials1-s" style="background-color: rgb(238, 232, 232)" >
        <div class="container">
            @yield('content')
        </div>
    </section>
    <section data-bs-version="5.1" class="footer5 cid-t0CC9BDpbu" once="footers" id="footer5-r">
        <div class="container">
            <div class="footer-lower">
                <div class="media-container-row">
                    <div class="col-md-12">
                        <hr>
                    </div>
                </div>
                <div class="media-container-row">
                    <div class="col-md-6 copyright">
                        <p class="mbr-text mbr-fonts-style display-7">
                            © 2022 EL Hadji Amath SARR
                        </p>
                    </div>
                    <div class="col-md-6">
                        <div class="social-list align-right">
                            <div class="soc-item">
                                <a href="https://twitter.com/mobirise" target="_blank">
                                    <span class="socicon-twitter socicon mbr-iconfont mbr-iconfont-social"></span>
                                </a>
                            </div>
                            <div class="soc-item">
                                <a href="https://www.facebook.com/pages/Mobirise/1616226671953247" target="_blank">
                                    <span class="socicon-facebook socicon mbr-iconfont mbr-iconfont-social"></span>
                                </a>
                            </div>
                            <div class="soc-item">
                                <a href="https://www.youtube.com/c/mobirise" target="_blank">
                                    <span class="socicon-youtube socicon mbr-iconfont mbr-iconfont-social"></span>
                                </a>
                            </div>
                            <div class="soc-item">
                                <a href="https://instagram.com/mobirise" target="_blank">
                                    <span class="socicon-instagram socicon mbr-iconfont mbr-iconfont-social"></span>
                                </a>
                            </div>
                            <div class="soc-item">
                                <a href="https://www.behance.net/Mobirise" target="_blank">
                                    <span class="socicon-behance socicon mbr-iconfont mbr-iconfont-social"></span>
                                </a>
                            </div>
                            <div class="soc-item">
                                <a href="https://vimeo.com/mobirise" target="_blank">
                                    <span class="socicon-vimeo socicon mbr-iconfont mbr-iconfont-social"></span>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="media-container-row">
                    <div class="offset-3 col-10 col-6">
                        <p class="mbr-text align-right links mbr-fonts-style display-7">
                            <a href="#" class="text-black">Tel: 77 298 36 28</a>
                        </p>
                    </div>
                </div>
                <div class="media-container-row">
                    <div class="offset-3 col-10 col-6">
                        <p class="mbr-text align-right links mbr-fonts-style display-7">
                            <a href="#" class="text-black">E-mail: sarrelhadjiamath@gmail.com</a>
                        </p>
                    </div>
                </div>
                <div class="media-container-row">
                    <div class="offset-3 col-10 col-6">
                        <p class="mbr-text align-right links mbr-fonts-style display-7">
                            <a href="#" class="text-black">Pays: Sénégal</a>
                        </p>
                    </div>
                </div>
                <div class="media-container-row">
                    <div class="offset-3 col-10 col-6">
                        <p class="mbr-text align-right links mbr-fonts-style display-7">
                            <a href="#" class="text-black">Adrèsse: Médina Baye-Kaolack</a>
                        </p>
                    </div>
                </div>
                <!-- </div>
            </div> -->
            </div>

        </div>
    </section>
    <section class="display-7"
        style="padding: 0;align-items: center;justify-content: center;flex-wrap: wrap;    align-content: center;display: flex;position: relative;height: 4rem;">
        <a href="https://mobiri.se/2711894"
            style="flex: 1 1;height: 4rem;position: absolute;width: 100%;z-index: 1;"><img alt="" style="height: 4rem;"
                src="data:image/gif;base64,R0lGODlhAQABAIAAAP///wAAACH5BAEAAAAALAAAAAABAAEAAAICRAEAOw=="></a>
        <p style="margin: 0;text-align: center;" class="display-7"> &#8204;</p><a
            style="z-index:1" href="https://mobirise.com/html-builder.html"></a>
    </section>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

    <script src="assets/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="assets/smoothscroll/smooth-scroll.js"></script>
    <script src="assets/ytplayer/index.js"></script>
    <script src="assets/dropdown/js/navbar-dropdown.js"></script>
    <script src="assets/theme/js/script.js"></script>
    <script src="assets/formoid/formoid.min.js"></script>

</body>

</html>
