<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	 <link href='https://fonts.googleapis.com/css?family=Raleway:400,300,500,700,900' rel='stylesheet' type='text/css'>
        <!-- FontAwesome CSS -->
        <link href="assets/fonts/font-awesome/css/font-awesome.min.css" rel="stylesheet">
        <!-- Material Icons CSS -->
        <link href="assets/fonts/iconfont/material-icons.css" rel="stylesheet">
        <!-- owl.carousel -->
        <link href="assets/owl.carousel/assets/owl.carousel.css" rel="stylesheet">
        <link href="assets/owl.carousel/assets/owl.theme.default.min.css" rel="stylesheet">
        <!-- flexslider -->
        <link href="assets/flexSlider/flexslider.css" rel="stylesheet">
        <!-- materialize -->
        <link href="assets/materialize/css/materialize.min.css" rel="stylesheet">
        <!-- Bootstrap -->
        <link href="assets/bootstrap/css/bootstrap.min.css" rel="stylesheet">
        <!-- shortcodes -->
        <link href="assets/css/shortcodes/shortcodes.css" rel="stylesheet">
        <!-- Style CSS -->
        <link href="style.css" rel="stylesheet">
	<title>email</title>
</head>
<body>
	<form method="POST" action="sendemail.php">
		<div class="row">
                        <div class="col-md-6">
                          <div class="input-field">
                            <input type="text" name="name" class="validate" id="name">
                            <label for="name">Name</label>
                          </div>

                        </div><!-- /.col-md-6 -->

                        <div class="col-md-6">
                          <div class="input-field">
                            <label class="sr-only" for="email">Email</label>
                            <input id="email" type="email" name="email" class="validate" >
                            <label for="email" data-error="wrong" data-success="right">Email</label>
                          </div>
                        </div><!-- /.col-md-6 -->
                      </div><!-- /.row -->

                      <div class="row">
                        <div class="col-md-6">
                          <div class="input-field">
                            <input id="phone" type="tel" name="phone" class="validate" >
                            <label for="phone">Phone Number</label>
                          </div>
                        </div><!-- /.col-md-6 -->

                        <div class="col-md-6">
                          <div class="input-field">
                            <input id="website" type="text" name="website" class="validate" >
                            <label for="website">Your Website</label>
                          </div>
                        </div><!-- /.col-md-6 -->
                      </div><!-- /.row -->
                      

                      <div class="input-field">
                        <textarea name="message" id="message" class="materialize-textarea" ></textarea>
                        <label for="message">Message</label>
                      </div>
						<div class="col-md-6">
                          <div class="input-field">
                            <input id="subject" type="text" name="subject" class="validate" >
                            <label for="subject">Subject</label>
                          </div>
                        </div><!-- /.col-md-6 -->
                     
                      <button type="submit" name="submit" class="waves-effect waves-light btn submit-button pink mt-30">Send Message</button>
	</form>
	 <!-- jQuery -->
        <script src="assets/js/jquery-2.1.3.min.js"></script>
        <script src="assets/bootstrap/js/bootstrap.min.js"></script>
        <script src="assets/materialize/js/materialize.min.js"></script>
        <script src="assets/js/menuzord.js"></script>
        <script src="assets/js/bootstrap-tabcollapse.min.js"></script>
        <script src="assets/js/jquery.easing.min.js"></script>
        <script src="assets/js/jquery.sticky.min.js"></script>
        <script src="assets/js/smoothscroll.min.js"></script>
        <script src="assets/js/jquery.stellar.min.js"></script>
        <script src="assets/js/jquery.inview.min.js"></script>
        <script src="assets/owl.carousel/owl.carousel.min.js"></script>
        <script src="assets/flexSlider/jquery.flexslider-min.js"></script>
        <script src="assets/magnific-popup/jquery.magnific-popup.min.js"></script>
        <script src="https://maps.googleapis.com/maps/api/js"></script>
        <script src="assets/js/scripts.js"></script>

</body>
</html>