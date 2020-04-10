<html class="no-focus" lang="en"><head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0">

        <title>Sign In</title>

        <meta name="description" content="M Fikri - Membantu Anda menjadi Web Developer Profesional">
        <meta name="author" content="M Fikri Setiadi">
        <meta name="robots" content="noindex, nofollow">

        <link rel="shortcut icon" href="./assets/images/favicon.png">

        <!-- Stylesheets -->
        <!-- Codebase framework -->
        <link rel="stylesheet" id="css-main" href="./assets/css/codebase.min.css">

    </head>
    <body>
        <!-- Page Container -->
       
        <div id="page-container" class="main-content-boxed side-trans-enabled">
            <!-- Main Container -->
            <main id="main-container" style="min-height: 376px;">
                <!-- Page Content -->
                <div class="bg-image" style="background-image: url('');">
                    <div class="row mx-0 bg-black-op">
                        <div class="hero-static col-md-6 col-xl-8 d-none d-md-flex align-items-md-end">
                            <div class="p-30 js-appear-enabled animated fadeIn" data-toggle="appear">
                                <p class="font-size-h3 font-w600 text-white">
                                    Welcome to M Hotel
                                </p>
                                <p class="font-italic text-white-op">
                                    Copyright © <span class="js-year-copy">2020</span>
                                </p>
                            </div>
                        </div>
                        <div class="hero-static col-md-6 col-xl-4 d-flex align-items-center bg-white js-appear-enabled animated fadeInRight" data-toggle="appear" data-class="animated fadeInRight">
                            <div class="content content-full">
                                <!-- Header -->
                                <div class="px-30 py-10">
                                    <a class="link-effect font-w700" href="">
                                        <i class=""></i>
                                        <span class="font-size-xl text-primary-dark"></span><span class="font-size-xl text-success">HOTEL</span>
                                    </a>
                                     
                                    <h1 class="h3 font-w700 mt-30 mb-10">Sign In</h1>
                                    <h2 class="h5 font-w400 text-muted mb-0"></h2>
                                </div>
                                <!-- END Header -->

                                <form class="js-validation-signin px-30" action="http://localhost:8080/mhotel/administrator/auth" method="post" novalidate="novalidate">
                                    
                                    <div class="form-group row">
                                        <div class="col-12">
                                            <div class="form-material floating">
                                                <input type="text" class="form-control" id="login-username" name="username" required="">
                                                <label for="login-username">Username</label>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <div class="col-12">
                                            <div class="form-material floating">
                                                <input type="password" class="form-control" id="login-password" name="password" required="">
                                                <label for="login-password">Password</label>
                                            </div>
                                        </div>
                                    </div>
                                    
                                    <div class="form-group">
                                        <button type="submit" class="btn btn-sm btn-hero btn-alt-primary">
                                            <i class="si si-login mr-10"></i> Sign In
                                        </button>
                                       
                                    </div>
                                </form>
                                <!-- END Sign In Form -->
                            </div>
                        </div>
                    </div>
                </div>
                <!-- END Page Content -->
            </main>
            <!-- END Main Container -->
        </div>
        <!-- END Page Container -->

        <!-- Codebase Core JS -->
        <script src="./assets/js/core/jquery.min.js"></script>
        <script src=".assets/js/core/popper.min.js"></script>
        <script src="./assets/js/core/bootstrap.min.js"></script>
        <script src="./assets/js/core/jquery.slimscroll.min.js"></script>
        <script src="./assets/js/core/jquery.scrollLock.min.js"></script>
        <script src="./assets/js/core/jquery.appear.min.js"></script>
        <script src="./assets/js/core/jquery.countTo.min.js"></script>
        <script src="./assets/js/core/js.cookie.min.js"></script>
        <script src="./assets/js/codebase.js"></script>

        <!-- Page JS Plugins -->
        <script src="./assets/js/plugins/jquery-validation/jquery.validate.min.js"></script>

        <!-- Page JS Code -->
        <script src="./assets/js/pages/op_auth_signin.js"></script>
    
</body></html>