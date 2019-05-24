<!DOCTYPE html>
<html class="wide wow-animation" lang="en">
  <head>
    <title>Browse Rooms | Soho</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, height=device-height, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <script src="/cdn-cgi/apps/head/3ts2ksMwXvKRuG480KNifJ2_JNM.js"></script><link rel="icon" href="images/favicon.ico" type="image/x-icon">
    <link rel="stylesheet" type="text/css" href="//fonts.googleapis.com/css?family=Poppins:300,300i,400,500,600,700,800,900,900i%7CPlayfair+Display:400,700">
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="css/fonts.css">
    <link rel="stylesheet" href="css/style.css">
    <style>.ie-panel{display: none;background: #212121;padding: 10px 0;box-shadow: 3px 3px 5px 0 rgba(0,0,0,.3);clear: both;text-align:center;position: relative;z-index: 1;} html.ie-10 .ie-panel, html.lt-ie-10 .ie-panel {display: block;}</style>
  </head>
  <body>
    <div class="ie-panel"><a href="http://windows.microsoft.com/en-US/internet-explorer/"><img src="images/ie8-panel/warning_bar_0000_us.jpg" height="42" width="820" alt="You are using an outdated browser. For a faster, safer browsing experience, upgrade for free today."></a></div>
    <div class="preloader">
      <div class="preloader-body">
        <div class="cssload-container">
          <div class="cssload-speeding-wheel"></div>
        </div>
        <p>Loading...</p>
      </div>
    </div>
    <div class="page">
      <!-- Page Header-->
      <?php  
        $uri['rooms'] = "active" ;
        $uri['about'] = $uri['home'] = $uri['team'] = $uri['contact'] = NULL ;
        include_once 'widgets/header.php'; 
      ?>
      <section class="parallax-container media-sizing" data-parallax-img="images/breadcrumbs-bg-3.jpg">
        <div class="parallax-content breadcrumbs-custom context-dark"> 
          <div class="container">
            <div class="row justify-content-center">
              <div class="col-12 col-lg-9">
                <h2 class="breadcrumbs-custom-title">Rooms</h2>
                <ul class="breadcrumbs-custom-path">
                  <li><a href="index">Home</a></li>
                  <li class="active">Rooms</li>
                </ul>
              </div>
            </div>
          </div>
        </div>
      </section>
      <section class="section-transform-top bg-gray-light">
        <div class="container">
          <div class="box-countdown-dark">
            <div class="row row-30 justify-content-xl-between justify-content-start align-content-lg-center align-content-start">
              <div class="col-xl-3 col-md-6 col-12">
                <div class="form-wrap form-date form-devider"><span>Arrival</span>
                  <label class="form-label form-label-outside" for="rd-arrival-time"></label>
                  <input class="form-input" id="rd-arrival-time" type="text" name="time" data-time-picker="" placeholder="Check-in date">
                </div>
              </div>
              <div class="col-xl-3 col-md-6 col-12">
                <div class="form-wrap form-date form-devider"><span>Departure</span>
                  <label class="form-label form-label-outside" for="rd-departure-time"></label>
                  <input class="form-input" id="rd-departure-time" type="text" name="time" data-time-picker="" placeholder="Check-out date">
                </div>
              </div>
              <div class="col-xl-2 col-md-6 col-12">
                <div class="form-wrap form-date form-devider"><span>Adults</span>
                  <select class="form-input select" name="find-job-location" data-minimum-results-for-search="Infinity">
                    <option value="1">1</option>
                    <option value="2">2</option>
                    <option value="3">3</option>
                    <option value="4">4</option>
                  </select>
                </div>
              </div>
              <div class="col-xl-4 col-md-6 col-12">
                <div class="form-wrap form-date"><span>Children</span>
                  <div class="form-btn-section">
                    <select class="form-input select" name="find-job-location" data-minimum-results-for-search="Infinity">
                      <option value="1">1</option>
                      <option value="2">2</option>
                      <option value="3">3</option>
                      <option value="4">4</option>
                    </select><a class="button button-primary button-lg button-block" href="#">check availability</a>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
      <section class="section section-xs bg-gray-light">
        <div class="container">
          <div class="row row-50">
            <div class="col-md-6 col-lg-4 wow-outer">
              <div class="wow fadeInUp">
                <div class="team-minimal">
                  <div class="team-minimal-figure"><img src="images/room-minimal-1-370x395.jpg" alt="" width="370" height="395"/><a class="button button-primary" href="single-room-page.html">Book now</a>
                  </div>
                  <div class="team-minimal-caption">
                    <h4><a class="team-name" href="single-room-page.html">Suite</a></h4>
                    <p>$90\per night</p>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-md-6 col-lg-4 wow-outer">
              <div class="wow fadeInUp">
                <div class="team-minimal">
                  <div class="team-minimal-figure"><img src="images/room-minimal-2-370x395.jpg" alt="" width="370" height="395"/><a class="button button-primary" href="single-room-page.html">Book now</a>
                  </div>
                  <div class="team-minimal-caption">
                    <h4><a class="team-name" href="single-room-page.html">Double Room</a></h4>
                    <p>$60\per night</p>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-md-6 col-lg-4 wow-outer">
              <div class="wow fadeInUp">
                <div class="team-minimal">
                  <div class="team-minimal-figure"><img src="images/room-minimal-3-370x395.jpg" alt="" width="370" height="395"/><a class="button button-primary" href="single-room-page.html">Book now</a>
                  </div>
                  <div class="team-minimal-caption">
                    <h4><a class="team-name" href="single-room-page.html">Family Room</a></h4>
                    <p>$40\per night</p>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
      <div class="section-md bg-gray-light"></div>
      <!-- Page Footer-->
      <?php include_once 'widgets/footer.php'; ?>
    </div>
    <div class="snackbars" id="form-output-global"></div>
    <script src="js/core.min.js"></script>
    <script src="js/script.js"></script>
  </body><!-- Google Tag Manager --><noscript><iframe src="//www.googletagmanager.com/ns.html?id=GTM-P9FT69"height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript><script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start': new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src='//www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);})(window,document,'script','dataLayer','GTM-P9FT69');</script><!-- End Google Tag Manager -->
</html>