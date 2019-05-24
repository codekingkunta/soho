<!DOCTYPE html>
<html class="wide wow-animation" lang="en">
  <head>
    <title>Welcome to Soho</title>
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

      <?php  
        $uri['home'] = "active" ;
        $uri['about'] = $uri['rooms'] = $uri['team'] = $uri['contact'] = NULL ;
        include_once 'widgets/header.php'; 
      ?>
       
      <!-- Swiper-->
      <section class="section section-lg section-main-bunner section-main-bunner-filter">
        <div class="main-bunner-img" style="background-image: url(images/bed-bedroom-curtains-26139.jpg); background-size: cover;"></div>
        <div class="main-bunner-inner">
          <div class="container">
            <div class="row row-50 justify-content-lg-center align-items-lg-center">
              <div class="col-lg-12">
                <div class="bunner-content-modern text-center">
                  <h1>Welcome to SOHO</h1>
                  <div class="star-section offset-top-60"><span class="icon mdi-star"></span><span class="icon mdi-star"></span><span class="icon mdi-star"></span><span class="icon mdi-star"></span><span class="icon mdi-star"></span></div>
                  <p>A Place to call home, Unforgettable experience, and uniterrupted privacy :)</p>
                </div>
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
      <section class="section section-sm bg-gray-light">
        <div class="container">
          <div class="row row-50 justify-content-xl-between align-items-lg-center">
            <div class="col-lg-6 wow-outer">
              <div class="wow slideInLeft">
                <div class="block-decorate-img-modern block-decorate-img">
                  <div class="block-decorate-inner"><img src="images/breakfast-champagne-hotel-6685.jpg" alt="" width="483" height="327"/>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-lg-6 col-xl-5 wow-outer">
              <div class="wow slideInRight">
                <h3>Soho - A Place to be</h3>
                <p>Soho is a 4 star rated hotel that desires to cater and provide guests with personalized hospitality based on what their preferrences.</p>
                <p>While we aim to give you an authentic experience  whenever you stay with us, we also guarantee consistent high standards of customer service at Soho. Contemporary amenities and timeless elegance are reflected throughout every guest room at our luxury hotel. We hope to make your stay unforgettable in the best way.</p>
              </div>
            </div>
          </div>
        </div>
      </section>
      <section class="section section-lg bg-default">
        <div class="container">
          <div class="row justify-content-center text-center">
            <div class="col-md-9 col-lg-7 wow-outer">
              <div class="wow slideInDown">
                <h3>Rooms & Suites</h3>
                <p class="text-opacity-80">At our hotel, there is a variety of rooms to choose from. Whether you are a casual traveler or a person demanding luxury wherever you go, you won’t be disappointed.</p>
              </div>
            </div>
          </div>
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
      <section class="section section-lg bg-gray-light">
        <div class="container">
          <h3 class="text-center">Our Restaurant Menu</h3>
          <div class="row">
            <div class="col-12">
              <div class="tabs-custom tabs-horizontal tabs-classic" id="tabs-1">
                <ul class="nav nav-tabs nav-tabs-classic">
                  <li class="nav-item" role="presentation"><a class="nav-link active" href="#tabs-1-1" data-toggle="tab">Mains</a></li>
                  <li class="nav-item" role="presentation"><a class="nav-link" href="#tabs-1-2" data-toggle="tab">Desserts</a></li>
                  <li class="nav-item" role="presentation"><a class="nav-link" href="#tabs-1-3" data-toggle="tab">Drinks</a></li>
                </ul>
                <div class="tab-content">
                  <div class="tab-pane fade show active" id="tabs-1-1">
                    <div class="box-event-modern">
                      <div class="event-item-modern event-active"> <span class="event-dot"></span>
                        <p class="event-time">$45.89</p>
                        <h4 class="event-item-modern-title"><a href="#">Crayfish Tail &amp; Prawn Cocktail</a></h4>
                        <div class="event-item-modern-text">
                          <p>Succulent cold water prawns & crayfish tails on baby gem, coated in Marie Rose sauce served with brown bread and butter.</p>
                        </div>
                      </div>
                      <div class="event-item-modern"> <span class="event-dot"></span>
                        <p class="event-time">$44.89</p>
                        <h4 class="event-item-modern-title"><a href="#">Chicken Broccoli Penne</a></h4>
                        <div class="event-item-modern-text">
                          <p>Oven-roasted seasoned chicken, fresh broccoli and penne tossed in a creamy four cheese sauce. Served with warm Rustic Bread.</p>
                        </div>
                      </div>
                      <div class="event-item-modern"> <span class="event-dot"></span>
                        <p class="event-time">$43.89</p>
                        <h4 class="event-item-modern-title"><a href="#">Apple Harvest Chicken Salad</a></h4>
                        <div class="event-item-modern-text">
                          <p>Fresh crisp greens tossed in a creamy ciderhouse dressing. Topped with flame-broiled chicken, green apples, dried cranberries and sliced almonds.</p>
                        </div>
                      </div>
                      <div class="event-item-modern"> <span class="event-dot"></span>
                        <p class="event-time">$42.89</p>
                        <h4 class="event-item-modern-title"><a href="#">Seared Steak &amp; Four Cheese Flatbread</a></h4>
                        <div class="event-item-modern-text">
                          <p>Thin flatbread, glazed with a smoked gouda cheese sauce topped with caramelized onions, fresh peppers, seared sirloin steak, provolone, mozzarella and bleu cheese.</p>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="tab-pane fade" id="tabs-1-2">
                    <div class="box-event-modern">
                      <div class="event-item-modern event-active"> <span class="event-dot"></span>
                        <p class="event-time">$40.89</p>
                        <h4 class="event-item-modern-title"><a href="#">Towering Midnight Fudge Cake</a></h4>
                        <div class="event-item-modern-text">
                          <p>Moist chocolate cake with Oreo® cookie crumbles baked inside. Served warm with creamy vanilla bean ice cream, hot fudge and whipped cream.</p>
                        </div>
                      </div>
                      <div class="event-item-modern"> <span class="event-dot"></span>
                        <p class="event-time">$46.89</p>
                        <h4 class="event-item-modern-title"><a href="#">Apple Caramel Streusel Pie</a></h4>
                        <div class="event-item-modern-text">
                          <p>Flaky pie crust filled with caramel and sweet and tart apples. Skillet-baked, topped with a sweet oat streusel and served with creamy vanilla bean ice cream.</p>
                        </div>
                      </div>
                      <div class="event-item-modern"> <span class="event-dot"></span>
                        <p class="event-time">$47.89</p>
                        <h4 class="event-item-modern-title"><a href="#">Hot Fudge Sundae</a></h4>
                        <div class="event-item-modern-text">
                          <p>Creamy vanilla bean ice cream topped with hot fudge, whipped cream and a cherry. A perfect dessert to finish  your evening at our restaurant.</p>
                        </div>
                      </div>
                      <div class="event-item-modern event-active"> <span class="event-dot"></span>
                        <p class="event-time">$48.89</p>
                        <h4 class="event-item-modern-title"><a href="#">Baked Chocolate Chip Cookie Skillet</a></h4>
                        <div class="event-item-modern-text">
                          <p>A warm and gooey New England classic. A fresh skillet-baked chocolate chip cookie topped with creamy vanilla bean ice cream and a drizzle of chocolate sauce.</p>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="tab-pane fade" id="tabs-1-3">
                    <div class="box-event-modern">
                      <div class="event-item-modern event-active"> <span class="event-dot"></span>
                        <p class="event-time">$50.89</p>
                        <h4 class="event-item-modern-title"><a href="#">Fresh Fruit Sangria</a></h4>
                        <div class="event-item-modern-text">
                          <p>Handcrafted blend of Camila Malbec red wine and fruit juice. Served chilled over ice with seasonal fresh fruit.</p>
                        </div>
                      </div>
                      <div class="event-item-modern event-active"> <span class="event-dot"></span>
                        <p class="event-time">$55.89</p>
                        <h4 class="event-item-modern-title"><a href="#">Patrón Agave Martini</a></h4>
                        <div class="event-item-modern-text">
                          <p>Patrón Silver 100% Agave Tequila, Connecticut’s own RIPE® Cold-Pressed Agave margarita mix and freshly squeezed lime juice. Served straight up and chilled.</p>
                        </div>
                      </div>
                      <div class="event-item-modern event-active"> <span class="event-dot"></span>
                        <p class="event-time">$62.89</p>
                        <h4 class="event-item-modern-title"><a href="#">Mango Mai Tai</a></h4>
                        <div class="event-item-modern-text">
                          <p>Small batch Privateer Silver Rum made in Ipswich, MA, mixed with Gosling’s Black Seal Rum, Amaretto, all-natural mango puree, pineapple juice and sour mix.</p>
                        </div>
                      </div>
                      <div class="event-item-modern event-active"> <span class="event-dot"></span>
                        <p class="event-time">$60.89</p>
                        <h4 class="event-item-modern-title"><a href="#">Apple Fire</a></h4>
                        <div class="event-item-modern-text">
                          <p>A handcrafted combo of Angry Orchard Hard Cider and Jack Daniel’s Fire Whiskey. A great way to warm up on a crisp day.</p>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
      <section class="section">
        <div class="row isotope-wrap">
          <!-- Isotope Content-->
          <div class="col-lg-12">
            <div class="isotope" data-isotope-layout="fitRows" data-isotope-group="gallery" data-lightgallery="group" data-lg-thumbnail="false">
              <div class="row no-gutters row-condensed">
                <div class="col-12 col-sm-6 col-md-4 isotope-item wow-outer" data-filter="*">
                  <div class="wow slideInDown">
                    <div class="gallery-item-classic"><img src="images/gallery-masonry-1-640x429.jpg" alt="" width="640" height="429"/>
                      <div class="gallery-item-classic-caption"><a href="images/gallery-masonry-1-original.jpg" data-lightgallery="item">zoom</a></div>
                    </div>
                  </div>
                </div>
                <div class="col-12 col-sm-6 col-md-4 isotope-item wow-outer" data-filter="Category 3">
                  <div class="wow slideInDown">
                    <div class="gallery-item-classic"><img src="images/gallery-masonry-2-640x429.jpg" alt="" width="640" height="429"/>
                      <div class="gallery-item-classic-caption"><a href="images/gallery-masonry-2-original.jpg" data-lightgallery="item">zoom</a></div>
                    </div>
                  </div>
                </div>
                <div class="col-12 col-sm-12 col-md-4 isotope-item wow-outer" data-filter="Category 3">
                  <div class="wow slideInDown">
                    <div class="gallery-item-classic"><img src="images/gallery-masonry-3-640x429.jpg" alt="" width="640" height="429"/>
                      <div class="gallery-item-classic-caption"><a href="images/gallery-masonry-3-original.jpg" data-lightgallery="item">zoom</a></div>
                    </div>
                  </div>
                </div>
                <div class="col-12 col-sm-12 col-md-6 isotope-item wow-outer" data-filter="Category 3">
                  <div class="wow fadeInUp">
                    <div class="gallery-item-classic"><img src="images/gallery-masonry-13-960x429.jpg" alt="" width="960" height="429"/>
                      <div class="gallery-item-classic-caption"><a href="images/gallery-masonry-13-original.jpg" data-lightgallery="item">zoom</a></div>
                    </div>
                  </div>
                </div>
                <div class="col-12 col-sm-12 col-md-6 isotope-item wow-outer" data-filter="Category 2">
                  <div class="wow fadeInUp">
                    <div class="gallery-item-classic"><img src="images/gallery-masonry-5-960x429.jpg" alt="" width="960" height="429"/>
                      <div class="gallery-item-classic-caption"><a href="images/gallery-masonry-5-original.jpg" data-lightgallery="item">zoom</a></div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
      <section class="section section-lg text-center">
        <div class="container">
          <div class="row row-50">
            <div class="col-md-6 col-lg-4 wow-outer">
              <div class="wow slideInLeft">
                <div class="box-icon-classic">
                  <div class="box-icon-inner decorate-triangle decorate-color-secondary"><span class="icon-xl linearicons-woman"></span></div>
                  <div class="box-icon-caption">
                    <h4><a href="#">Qualified Team</a></h4>
                    <p>We employ the best people in the hospitality industry that are highly qualified and treat our guests kindly.</p>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-md-6 col-lg-4 wow-outer">
              <div class="wow slideInDown">
                <div class="box-icon-classic">
                  <div class="box-icon-inner decorate-circle decorate-color-secondary-2"><span class="icon-xl linearicons-platter"></span></div>
                  <div class="box-icon-caption">
                    <h4><a href="#">Restaurant</a></h4>
                    <p>Feel free to visit our restaurant to enjoy the best dishes and appetizers as well as  exclusive dishes from our chef.</p>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-md-6 col-lg-4 wow-outer">
              <div class="wow slideInRight">
                <div class="box-icon-classic">
                  <div class="box-icon-inner decorate-rectangle decorate-color-primary"><span class="icon-xl linearicons-leaf"></span></div>
                  <div class="box-icon-caption">
                    <h4><a href="#">SPA Salon</a></h4>
                    <p>Indulge yourself with the best relaxation available at our hotel’s SPA salon. Trust us, you won’t regret!</p>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
      <section class="section parallax-container" data-parallax-img="images/architecture-carpet-chandeliers-573552.jpg">
        <div class="parallax-content section-xl context-dark text-center bg-dark-filter">
          <div class="container">
            <div class="row justify-content-md-center">
              <div class="col-md-10 wow-outer">
                <div class="wow fadeInUp">
                  <h3 class="font-family-serif font-weight-medium">Providing High-quality Accommodation</h3><a class="button button-lg button-primary offset-top-60" href="#">Book now</a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
      <section class="section-lg bg-default">
        <div class="container wow-outer">
          <h3 class="text-center wow slideInDown">Recent News</h3>
          <!-- Owl Carousel-->
          <div class="owl-carousel owl-dots-dark wow fadeInUp" data-items="1" data-md-items="2" data-lg-items="3" data-dots="true" data-nav="false" data-stage-padding="15" data-loop="false" data-margin="30" data-mouse-drag="false">
            <div class="post-corporate"><a class="badge post-corporate-badge" href="#">Jul 02, 2018</a>
              <h4 class="post-corporate-title"><a href="blog-post.html">6 Tips on Booking the Best Hotel for You This Season</a></h4>
              <div class="post-corporate-text">
                <p>Travelers today are spoiled for choice when it comes to booking a hotel. Booking the best hotel goes beyond just booking the cheapest...</p>
              </div><a class="post-corporate-link" href="blog-post.html">Read more<span class="icon linearicons-arrow-right"></span></a>
            </div>
            <div class="post-corporate"><a class="badge post-corporate-badge" href="#">Jul 02, 2018</a>
              <h4 class="post-corporate-title"><a href="blog-post.html">Hotel Safety Tips You Should Not Ignore Wherever You Travel</a></h4>
              <div class="post-corporate-text">
                <p>These days, travel is no Sunday picnic and when you finally stumble into the lobby of your hotel, you may be tired, dirty, and in a hurry to get...</p>
              </div><a class="post-corporate-link" href="blog-post.html">Read more<span class="icon linearicons-arrow-right"></span></a>
            </div>
            <div class="post-corporate"><a class="badge post-corporate-badge" href="#">aug 02, 2018</a>
              <h4 class="post-corporate-title"><a href="blog-post.html">5 Simple Tips for Getting Stellar Hotel Service
</a></h4>
              <div class="post-corporate-text">
                <p>While good service at a hotel, even a pricey one, isn’t a guarantee, there are a few ways to increase your odds of getting treated well. Here’s how you...</p>
              </div><a class="post-corporate-link" href="blog-post.html">Read more<span class="icon linearicons-arrow-right"></span></a>
            </div>
            <div class="post-corporate"><a class="badge post-corporate-badge" href="#">Sept 02, 2018</a>
              <h4 class="post-corporate-title"><a href="blog-post.html">10 Ways to Sleep Better at a Hotel</a></h4>
              <div class="post-corporate-text">
                <p>We’ve compiled one of the most comprehensive guides available to sleeping in a hotel, covering everything from what you should ask when you’re booking...</p>
              </div><a class="post-corporate-link" href="blog-post.html">Read more<span class="icon linearicons-arrow-right"></span></a>
            </div>
            <div class="post-corporate"><a class="badge post-corporate-badge" href="#">Oct 23, 2018</a>
              <h4 class="post-corporate-title"><a href="blog-post.html">How Much Should You Tip Your Bellman?</a></h4>
              <div class="post-corporate-text">
                <p>Whether you're traveling around the United States or somewhere across the pond, you're likely to encounter a helpful bellman during your hotel stay. No…</p>
              </div><a class="post-corporate-link" href="blog-post.html">Read more<span class="icon linearicons-arrow-right"></span></a>
            </div>
            <div class="post-corporate"><a class="badge post-corporate-badge" href="#">Nov 20, 2018</a>
              <h4 class="post-corporate-title"><a href="blog-post.html">12 Hotel Hacks That Will Save You Money</a></h4>
              <div class="post-corporate-text">
                <p>Anyone can book a hotel room — but not everyone can save big while doing it. Travel like a genius with these 12 hotel hacks that will help you save money on…</p>
              </div><a class="post-corporate-link" href="blog-post.html">Read more<span class="icon linearicons-arrow-right"></span></a>
            </div>
          </div>
        </div>
      </section>
      <section class="section parallax-container" data-parallax-img="images/coffee-cup-information-97050.jpg">
        <div class="parallax-content section-xxl context-dark text-center bg-dark-filter">
          <div class="container">
            <div class="row justify-content-md-center">
              <div class="col-md-9 col-lg-8 col-xl-7 wow-outer">
                <div class="wow slideInDown">
                  <h3 class="text-capitalize">Subscribe to Stay Informed</h3>
                  <form class="rd-form rd-mailform rd-form-inline" data-form-output="form-output-global" data-form-type="subscribe" method="post" action="bat/rd-mailform.php">
                    <div class="form-wrap">
                      <input class="form-input" id="subscribe-form-email" type="email" name="email" data-constraints="@Email @Required">
                      <label class="form-label" for="subscribe-form-email">Your E-mail</label>
                    </div>
                    <div class="form-button">
                      <button class="button button-primary button-lg" type="submit">Subscribe</button>
                    </div>
                  </form>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
      <?php include_once 'widgets/footer.php'; ?>
    </div>
    <div class="snackbars" id="form-output-global"></div>
    <script src="js/core.min.js"></script>
    <script src="js/script.js"></script>
	
	<!--LIVEDEMO_00 -->

	<script type="text/javascript">
	 var _gaq = _gaq || [];
	  _gaq.push(['_setAccount', 'UA-7078796-5']);
	  _gaq.push(['_trackPageview']);
	  (function() {
		var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
		ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
		var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
	  })();</script>
	
  </body><!-- Google Tag Manager --><noscript><iframe src="//www.googletagmanager.com/ns.html?id=GTM-P9FT69"height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript><script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start': new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src='//www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);})(window,document,'script','dataLayer','GTM-P9FT69');</script><!-- End Google Tag Manager -->
</html>