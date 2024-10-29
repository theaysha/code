<!DOCTYPE html>
<html lang="en-US" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!--  
    Document Title
    =============================================
    -->
    <title>Titan | Multipurpose HTML5 Template</title>
    <!--  
    Favicons
    =============================================
    -->
    <link rel="apple-touch-icon" sizes="57x57" href="assets/images/favicons/apple-icon-57x57.png">
    <link rel="apple-touch-icon" sizes="60x60" href="assets/images/favicons/apple-icon-60x60.png">
    <link rel="apple-touch-icon" sizes="72x72" href="assets/images/favicons/apple-icon-72x72.png">
    <link rel="apple-touch-icon" sizes="76x76" href="assets/images/favicons/apple-icon-76x76.png">
    <link rel="apple-touch-icon" sizes="114x114" href="assets/images/favicons/apple-icon-114x114.png">
    <link rel="apple-touch-icon" sizes="120x120" href="assets/images/favicons/apple-icon-120x120.png">
    <link rel="apple-touch-icon" sizes="144x144" href="assets/images/favicons/apple-icon-144x144.png">
    <link rel="apple-touch-icon" sizes="152x152" href="assets/images/favicons/apple-icon-152x152.png">
    <link rel="apple-touch-icon" sizes="180x180" href="assets/images/favicons/apple-icon-180x180.png">
    <link rel="icon" type="image/png" sizes="192x192" href="assets/images/favicons/android-icon-192x192.png">
    <link rel="icon" type="image/png" sizes="32x32" href="assets/images/favicons/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="96x96" href="assets/images/favicons/favicon-96x96.png">
    <link rel="icon" type="image/png" sizes="16x16" href="assets/images/favicons/favicon-16x16.png">
    <link rel="manifest" href="/manifest.json">
    <meta name="msapplication-TileColor" content="#ffffff">
    <meta name="msapplication-TileImage" content="assets/images/favicons/ms-icon-144x144.png">
    <meta name="theme-color" content="#ffffff">
    <!--  
    Stylesheets
    =============================================
    
    -->
    <!-- Default stylesheets-->
    <link href="assets/lib/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Template specific stylesheets-->
    <link href="https://fonts.googleapis.com/css?family=Roboto+Condensed:400,700" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Volkhov:400i" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700,800" rel="stylesheet">
    <link href="assets/lib/animate.css/animate.css" rel="stylesheet">
    <link href="assets/lib/components-font-awesome/css/font-awesome.min.css" rel="stylesheet">
    <link href="assets/lib/et-line-font/et-line-font.css" rel="stylesheet">
    <link href="assets/lib/flexslider/flexslider.css" rel="stylesheet">
    <link href="assets/lib/owl.carousel/dist/assets/owl.carousel.min.css" rel="stylesheet">
    <link href="assets/lib/owl.carousel/dist/assets/owl.theme.default.min.css" rel="stylesheet">
    <link href="assets/lib/magnific-popup/dist/magnific-popup.css" rel="stylesheet">
    <link href="assets/lib/simple-text-rotator/simpletextrotator.css" rel="stylesheet">
    <!-- Main stylesheet and color file-->
    <link href="assets/css/style.css" rel="stylesheet">
    <link id="color-scheme" href="assets/css/colors/default.css" rel="stylesheet">
  </head>
  <body data-spy="scroll" data-target=".onpage-navigation" data-offset="60">
    <main>
      <div class="page-loader">
        <div class="loader">Loading...</div>
      </div>
      <nav class="navbar navbar-custom navbar-fixed-top" role="navigation">
      <div class="container">
        <div class="navbar-header">
          <button class="navbar-toggle" type="button" data-toggle="collapse" data-target="#custom-collapse"><span class="sr-only">Toggle navigation</span><span class="icon-bar"></span><span class="icon-bar"></span><span class="icon-bar"></span></button><a class="navbar-brand" href="index.html">Titan</a>
        </div>
        <div class="collapse navbar-collapse" id="custom-collapse">
          <ul class="nav navbar-nav navbar-right">
            <li><a href="index.php">Home</a></li>
            <li class="dropdown"><a href="about.php" >About Us</a>
            </li>
            <li class="dropdown"><a class="dropdown-toggle" href="#" data-toggle="dropdown">Our Services</a>
              <ul class="dropdown-menu" role="menu">
                <li><a href="#">Stocks PMS & AIF</a></li>
                <li><a href="#">Mutual Funds</a></li>
                <li><a href="#">Startup Investment</a></li>
                <li><a href="#">Insurance</a></li>
              </ul>
            </li>
            <li class="dropdown"><a href="contact.php" >Contact</a></li>
            <li class="dropdown"><a href="blog.php" >Blog</a></li>
            <li class="dropdown"><a href="gallery.php" >Features</a></li>
            <li class="dropdown"><a href="#" >Policy</a></li>
            <li class="dropdown"><a class="dropdown-toggle" href="documentation.html" data-toggle="dropdown">Register & Login</a>
              <ul class="dropdown-menu">
                <li><a href="login_register.php">Register</a></li>
                <li><a href="login_register.php">Login</a></li>
              </ul>
            </li>
          </ul>
        </div>
      </div>
      </nav>
      <div class="main documentation-page">
        <section class="module bg-dark-60 about-page-header" data-background="assets/images/about_bg.jpg">
          <div class="container">
            <div class="row">
              <div class="col-sm-6 col-sm-offset-3">
                <h2 class="module-title font-alt">Documentation</h2>
                <div class="module-subtitle font-serif">Thank you for choosing this template. If you have any questions please feel free to email us</div>
              </div>
            </div>
          </div>
        </section>
        <section class="module-medium" id="contact">
          <div class="container">
            <div class="row">
              <div class="col-sm-6 col-sm-offset-3">
                <h2 class="module-title font-alt">Contact Form</h2>
                <div class="module-subtitle font-serif"></div>
              </div>
            </div>
            <div class="row">
              <div class="col-sm-8 col-sm-offset-2">
                <p>Open the file &nbsp;<strong>assets/php/contact.php</strong>&nbsp; and enter your data:</p>
                <pre class="prettyprint lang-basic">$to = 'info@example.com';  // please change this email id
$subject = 'Contact Form : Titan - The best downloaded template ever';</pre>
                <h4>If Contact form form not working</h4>
                <p>You need to check is PHP mail() function working.</p>
                <p>
                  <textarea rows="4" style="width:100%; text-transform: lowercase;"><?php
mail('you@yourmail.com','Test mail','The mail function is working!');
echo 'Mail sent!';
?></textarea>
                </p>
                <ul>
                  <li>Save this code as mailtest.php</li>
                  <li>change you@yourmail.com to your e-mail address</li>
                  <li>upload mailtest.php to your server</li>
                  <li>open mailtest.php in your browser (http://yourwebsite.com/mailtest.php)</li>
                  <li>check your inbox to see if a test message arrived.</li>
                </ul><strong>If it works:</strong>
                <ul>
                  <li>double-check your form script for errors (like e-mail address misspelling)</li>
                  <li>use the same e-mail address as your form recipient</li>
                  <li>double-check your SPAM filters and SPAM/Junk/Bulk mailboxes</li>
                </ul><strong>If it not</strong>
                <p>Contact your host and ask them to check PHP mail() setting.</p>
              </div>
            </div>
          </div>
        </section>
        <section class="module-medium" id="reservation">
          <div class="container">
            <div class="row">
              <div class="col-sm-6 col-sm-offset-3">
                <h2 class="module-title font-alt">Reservation Form</h2>
                <div class="module-subtitle font-serif"></div>
              </div>
            </div>
            <div class="row">
              <div class="col-sm-8 col-sm-offset-2">
                <p>Open the file &nbsp;<strong>assets/php/reservation.php</strong>&nbsp; and enter your data:</p>
                <pre class="prettyprint lang-basic">$from = $email;
$to = 'info@example.com';  // please change this email id
$subject = 'Table Booking : Titan';

</pre>
              </div>
            </div>
          </div>
        </section>
        <section class="module-medium" id="mailchimp">
          <div class="container">
            <div class="row">
              <div class="col-sm-6 col-sm-offset-3">
                <h2 class="module-title font-alt">Configuring Mailchimp</h2>
                <div class="module-subtitle font-serif"></div>
              </div>
            </div>
            <div class="row">
              <div class="col-sm-8 col-sm-offset-2">
                <p>Open the file &nbsp;<strong>assets/php/subscribe.php</strong>&nbsp; and enter your data:</p>
                <pre class="prettyprint lang-basic">\n// MailChimp
$APIKey = '53bb3bcad3947b9c5b45884b439097******';
$listID = 'fd1b8b****';</pre>
                <div class="alert alert-info">Grab an API Key from http://admin.mailchimp.com/account/api/</div>
                <div class="alert alert-info">Grab your List&apos;s Unique Id by going to http://admin.mailchimp.com/lists/</div>
              </div>
            </div>
          </div>
        </section>
        <section class="module-medium" id="gmap">
          <div class="container">
            <div class="row">
              <div class="col-sm-6 col-sm-offset-3">
                <h2 class="module-title font-alt">Google Maps</h2>
                <div class="module-subtitle font-serif"></div>
              </div>
            </div>
            <div class="row">
              <div class="col-sm-8 col-sm-offset-2">
                <p>Open the file &nbsp;<strong>assets/js/main.js</strong>&nbsp; and enter your latitude &amp; longitude:</p>
                <pre class="prettyprint lang-js">\n/* ---------------------------------------------- /*
 * Google Map
/* ---------------------------------------------- */

var $mapis = $('#map');

if ($mapis.length > 0) {

    var mapLocation = new google.maps.LatLng(34.031428,-118.2071542,17);

</pre>
              </div>
            </div>
          </div>
        </section>
        <section class="module-medium" id="plugin">
          <div class="container">
            <div class="row">
              <div class="col-sm-6 col-sm-offset-3">
                <h2 class="module-title font-alt">Plugin Settings</h2>
                <div class="module-subtitle font-serif"></div>
              </div>
            </div>
            <div class="row">
              <div class="col-sm-8 col-sm-offset-2">
                <p>All plugins setting is in &nbsp;<strong>assets/js/custom.js</strong>&nbsp; file</p>
                <ul>
                  <li><a href="https://github.com/bas2k/jquery.appear/">Appear</a> - Progress bars, CountTo</li>
                  <li><a href="http://www.thepetedesign.com/demos/jquery_super_simple_text_rotator_demo.html">Text rotator</a> - Changes to different text in same place. Mainly used in Header</li>
                  <li><a href="http://isotope.metafizzy.co/">Isotope</a> - Portfolio</li>
                  <li><a href="https://github.com/woothemes/FlexSlider/wiki/FlexSlider-Properties">FlexSlider</a> - Sliders</li>
                  <li><a href="http://owlgraphic.com/owlcarousel/#how-to">OWL Carousel</a> - Team carousel, client logos carousel</li>
                  <li><a href="http://dimsemenov.com/plugins/magnific-popup/">Magnific-popup</a> - Modal window, gallery, modal video</li>
                  <li><a href="https://github.com/pupunzi/jquery.mb.YTPlayer">Video background</a> - Header video background or any section with video</li>
                </ul>
                <p>If you have any questions please feel free to email<a href="mailto:info@themewagon.com">&nbsp; here</a></p>
              </div>
            </div>
          </div>
        </section>
        <section class="module-medium" id="changelog">
          <div class="container">
            <div class="row">
              <div class="col-sm-6 col-sm-offset-3">
                <h2 class="module-title font-alt">Changelog</h2>
                <div class="module-subtitle font-serif"></div>
              </div>
            </div>
            <div class="row">
              <div class="col-sm-8 col-sm-offset-2">
                <p> Version 1.0 - Initial Release</p>
              </div>
            </div>
          </div>
        </section>
      </div>
      <script src="assets/lib/prettify.js"></script>
      <script>
        !function ($) {
            $(function () {
                window.prettyPrint && prettyPrint()
            })
        }(jQuery)
      </script>
    </main>
    <!--  
    JavaScripts
    =============================================
    -->
    <script src="assets/lib/jquery/dist/jquery.js"></script>
    <script src="assets/lib/bootstrap/dist/js/bootstrap.min.js"></script>
    <script src="assets/lib/wow/dist/wow.js"></script>
    <script src="assets/lib/jquery.mb.ytplayer/dist/jquery.mb.YTPlayer.js"></script>
    <script src="assets/lib/isotope/dist/isotope.pkgd.js"></script>
    <script src="assets/lib/imagesloaded/imagesloaded.pkgd.js"></script>
    <script src="assets/lib/flexslider/jquery.flexslider.js"></script>
    <script src="assets/lib/owl.carousel/dist/owl.carousel.min.js"></script>
    <script src="assets/lib/smoothscroll.js"></script>
    <script src="assets/lib/magnific-popup/dist/jquery.magnific-popup.js"></script>
    <script src="assets/lib/simple-text-rotator/jquery.simple-text-rotator.min.js"></script>
    <script src="assets/lib/prettify.js"></script>
    <script>
      !function ($) {
          $(function () {
              window.prettyPrint && prettyPrint()
          })
      }(jQuery)
    </script>
    <script src="assets/js/plugins.js"></script>
    <script src="assets/js/main.js"></script>
  </body>
</html>