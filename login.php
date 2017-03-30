<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="materialize is a material design based mutipurpose responsive template">
        <meta name="keywords" content="material design, card style, material template, portfolio, corporate, business, creative, agency">
        <meta name="author" content="trendytheme.net">

        <title>Login/Register</title>

        <!--  favicon -->
        <link rel="shortcut icon" href="assets/img/ico/favicon.png">
        <!--  apple-touch-icon -->
        <link rel="apple-touch-icon-precomposed" sizes="144x144" href="assets/img/ico/apple-touch-icon-144-precomposed.png">
        <link rel="apple-touch-icon-precomposed" sizes="114x114" href="assets/img/ico/apple-touch-icon-114-precomposed.png">
        <link rel="apple-touch-icon-precomposed" sizes="72x72" href="assets/img/ico/apple-touch-icon-72-precomposed.png">
        <link rel="apple-touch-icon-precomposed" href="assets/img/ico/apple-touch-icon-57-precomposed.png">


        
        <link href='https://fonts.googleapis.com/css?family=Raleway:400,300,500,700,900' rel='stylesheet' type='text/css'>
        <!-- Material Icons CSS -->
        <link href="assets/fonts/iconfont/material-icons.css" rel="stylesheet">
        <!-- FontAwesome CSS -->
        <link href="assets/fonts/font-awesome/css/font-awesome.min.css" rel="stylesheet">
        <!-- materialize -->
        <link href="assets/materialize/css/materialize.min.css" rel="stylesheet">
        <!-- Bootstrap -->
        <link href="assets/bootstrap/css/bootstrap.min.css" rel="stylesheet">
        <!-- shortcodes -->
        <link href="assets/css/shortcodes/shortcodes.css" rel="stylesheet">
        <link href="assets/css/shortcodes/login.css" rel="stylesheet">
        <!-- Style CSS -->
        <link href="style.css" rel="stylesheet">


        <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
          <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
          <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
        <![endif]-->
    </head>

    <body>
                

        <section class="section-padding banner-wrapper login-alt banner-6 fullscreen-banner">
            <div class="container">

                <div class="login-wrapper">
                  <div class="card-wrapper"></div>
                  <div class="card-wrapper">
                    <h3 class="title">Login Untuk Donasi</h3>
                    <form>
                      <div class="input-container">
                        <input type="text" id="username" required="required"/>
                        <label for="username">Username</label>
                        <div class="bar"></div>
                      </div>
                      <div class="input-container">
                        <input type="password" id="password" required="required"/>
                        <label for="password">Password</label>
                        <div class="bar"></div>
                      </div>
                      <div class="button-container">
                        <a href="#." class="btn btn-lg btn-block waves-effect waves-light">Login</a>
                      </div>
                      <div class="footer"><a href="#">Forgot your password?</a></div>
                    </form>
                  </div>
                  <div class="card-wrapper alt">
                    <div class="toggle"></div>
                    <h1 class="title">Register
                      <div class="close"></div>
                    </h1>
                    <form>
                      <div class="input-container">
                        <input type="text" id="newusername" required="required"/>
                        <label for="newusername">Nama</label>
                        <div class="bar"></div>
                      </div>
                      <div class="input-container">
                        <input type="password" id="newpassword" required="required"/>
                        <label for="newpassword">Password</label>
                        <div class="bar"></div>
                      </div>
                      <div class="input-container">
                        <input type="email" id="email" required="required"/>
                        <label for="email">Email</label>
                        <div class="bar"></div>
                      </div>
                      <div class="input-container">
                        <input type="tel" id="telp" required="required"/>
                        <label for="telp">Telephone</label>
                        <div class="bar"></div>
                      </div>

                      <div class="button-container">
                        <a href="#." class="btn btn-lg btn-block white waves-effect waves-red">Register</a>
                      </div>
                    </form>
                  </div>
                </div>

            </div>
        </section>


        <!-- Preloader -->
        <div id="preloader">
          <div class="preloader-position"> 
            <img src="assets/img/logo-colored.png" alt="logo" >
            <div class="progress">
              <div class="indeterminate"></div>
            </div>
          </div>
        </div>
        <!-- End Preloader -->

        <!-- jQuery -->
        <script src="assets/js/jquery-2.1.3.min.js"></script>
        <script src="assets/bootstrap/js/bootstrap.min.js"></script>
        <script src="assets/materialize/js/materialize.min.js"></script>
        <script src="assets/js/menuzord.js"></script>
        <script src="assets/js/jquery.easing.min.js"></script>
        <script src="assets/js/jquery.sticky.min.js"></script>
        <script src="assets/js/smoothscroll.min.js"></script>
        <script src="assets/js/jquery.stellar.min.js"></script>
        <script src="assets/js/imagesloaded.js"></script>
        <script src="assets/js/animated-headline.js"></script>
        <script src="assets/js/scripts.js"></script>

        <script>
            $('.toggle').on('click', function() {
              $('.login-wrapper').stop().addClass('active');
            });

            $('.close').on('click', function() {
              $('.login-wrapper').stop().removeClass('active');
            });

        </script>
    
    </body>
  
</html>