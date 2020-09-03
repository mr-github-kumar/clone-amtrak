<?php session_start();  ?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link
      rel="icon"
      type="image/x-icon"
      href="https://www.amtrak.com/etc/designs/dotcom-assets/images/favicon.ico"
    />
    <title>Amtrak-Hotel</title>
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css"
    />
    <link
      rel="stylesheet"
      href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css"
      integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh"
      crossorigin="anonymous"
    />
    <script
      src="https://code.jquery.com/jquery-3.4.1.slim.min.js"
      integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n"
      crossorigin="anonymous"
    ></script>
    <script
      src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"
      integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo"
      crossorigin="anonymous"
    ></script>
    <script
      src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"
      integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6"
      crossorigin="anonymous"
    ></script>
    <script src="https://use.fontawesome.com/releases/v5.0.8/js/all.js"></script>
    <link rel="stylesheet" href="css/homeStyle.css" />
  </head>
  <body>
    <!------------------Navigation bar with hamburger menu and logo-------------->
    <div class="heading-banner-nav">
      <a href="#"><img src="Images/amtrakLogo.png" alt="amtral logo" /></a>
    </div>

    <div class="menu-wrap">
      <input type="checkbox" class="toggler" />
      <div class="hamburger">
        <div></div>
      </div>
      <div class="menu">
        <div>
          <div>
            <ul>
			<?php 
			if(!empty($_SESSION['name'])): ?>
			  <li><a>Welcome <?php echo $_SESSION['name']; ?></a></li>
			<?php endif ?>
              <li><a href="hotels.php">Hotels</a></li>
              <li><a href="#">Cars</a></li>
			  <?php 
			if(!empty($_SESSION['name'])): ?>
			  <li><a href=""><i class="fa fa-user-circle mr-2 mt-1"></i></a></li>
			  <li><a href="logout.php">logout</a></li>
			<?php endif ?>
            </ul>
          </div>
        </div>
      </div>
    </div>

    <div class="bookFormBox">
      <!--- Selection label section start here --->
      <div class="bookFormBox-labels">
        <!--- Hotel Option --->
        <a id="bookFormBox-hotel-label" href="hotels.php" role="button">
          <i class="fas fa-bed"></i>
          <span class="bookForm-label-text">HOTELS</span>
        </a>
        <!--- Car Option --->
        <a href="#" role="button">
          <i class="fas fa-car"> </i>
          <span class="bookForm-label-text">CARS</span>
        </a>
      </div>

      <!--------------------------------------------------------------Radio buttons------------------------------------------------------------ --->
      <div class="booking-radio-group">
        <label class="radio">
          <input
            type="radio"
            value="Earn Points"
            name="Points"
            value=""
            checked
          />
          EARN POINTS
          <!--radio button shape formed by this span-->
          <span></span>
        </label>
        <label class="radio">
          <input type="radio" value="Spend Points" name="Points" />
          SPEND POINTS
          <!--radio button shape formed by this span-->
          <span></span>
        </label>
      </div>

      <!---------------------------------------------------------------Fill Input------------------------------------------------------------------->
      <form class="bookForm-fill-input">
        <div class="form-group m-0 p-2">
          <label for="inputDesti">DESTINATION</label>
          <input
            type="text"
            class="form-control"
            id="inputDesti"
            placeholder="e.g. Las Vegas"
            value=""
          />
        </div>
        <div class="bookForm-check-dates m-0 p-2">
          <div class="form-group">
            <label for="inputCheckIn">CHECK-IN</label>
            <input type="date" class="form-control" />
          </div>
          <div class="form-group">
            <label for="inputCheckOut">CHECK-OUT</label>
            <input type="date" class="form-control" />
          </div>
        </div>

        <div class="form-group m-0 p-2">
          <label for="inputGuest">GUESTS</label>
          <input
            type="text"
            class="form-control mb-3"
            id="inputGuest"
            placeholder="2 Adults"
            value=""
          />
        </div>
        <button type="submit" id="searchButton" class="btn">
          SEARCH
        </button>
      </form>
    </div>

    <!-----------------------------------------------------------------Carousel--------------------------------------------------------------------->
    <div
      id="carouselExampleCaptions"
      class="carousel slide"
      data-ride="carousel"
    >
      <ol class="carousel-indicators">
        <li
          data-target="#carouselExampleCaptions"
          data-slide-to="0"
          class="active"
        ></li>
        <li data-target="#carouselExampleCaptions" data-slide-to="1"></li>
      </ol>
      <div class="carousel-inner">
        <div class="carousel-item active">
          <img src="Images/beach.png" class="img-slider d-block" alt="..." />
          <div class="carousel-caption" id="carousel-book-hotels">
            <h3>Book Hotels. Earns Points</h3>
            <p>
              Earn Amtrak Guest Rewards points staying at +350,000 hotels
              worldwide.
            </p>
          </div>
        </div>
        <div class="carousel-item">
          <img
            src="Images/imgSlide4.jpg"
            class="img-slider d-block"
            alt="..."
          />
          <div class="carousel-caption" id="drive-text">
            <h3>Drive Away</h3>
            <p>
              Book your rental car directly via Amtrak and earn Amtral Guest
              Rewards Points
            </p>
          </div>
        </div>
      </div>
      <a
        class="carousel-control-prev"
        href="#carouselExampleCaptions"
        role="button"
        data-slide="prev"
      >
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
      </a>
      <a
        class="carousel-control-next"
        href="#carouselExampleCaptions"
        role="button"
        data-slide="next"
      >
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
      </a>
    </div>

    <!------------------------------------------------------Hotel Deals----------------------------------------------------------------------------->
    <div class="hotel-deals">
      <div class="hotel-deals-head">
        Great Hotel Deals
      </div>
      <div class="hotel-deals-group">
        <div class="hotel-deals-card">
          <span class="deals-card-point">+2,600 Points</span>
          <img
            id="dealPics"
            src="Images/hilton.png"
            class="deals-card-img"
            alt="Hotel hilton new york"
          />
          <div class="deals-card-info">
            <div class="card-info-name">
              <span class="info-name-hotel">Hilton New York Fashion</span>
              <span class="info-name-city">New York</span>
            </div>
            <div class="card-info-rate">
              <span class="info-rate-price">$273</span>
              <span class="info-rate-unit">per night</span>
            </div>
          </div>
        </div>
        <div class="hotel-deals-card">
          <span class="deals-card-point">+2,600 Points</span>
          <img
            id="dealPics"
            src="Images/westin.png"
            class="deals-card-img"
            alt="Hotel hilton new york"
          />
          <div class="deals-card-info">
            <div class="card-info-name">
              <span class="info-name-hotel">Hilton New York Fashion</span>
              <span class="info-name-city">New York</span>
            </div>
            <div class="card-info-rate">
              <span class="info-rate-price">$273</span>
              <span class="info-rate-unit">per night</span>
            </div>
          </div>
        </div>
        <div class="hotel-deals-card">
          <span class="deals-card-point">+2,600 Points</span>
          <img
            id="dealPics"
            src="Images/vero.png"
            class="deals-card-img"
            alt="Hotel hilton new york"
          />
          <div class="deals-card-info">
            <div class="card-info-name">
              <span class="info-name-hotel">Hilton New York Fashion</span>
              <span class="info-name-city">New York</span>
            </div>
            <div class="card-info-rate">
              <span class="info-rate-price">$273</span>
              <span class="info-rate-unit">per night</span>
            </div>
          </div>
        </div>
      </div>
    </div>

    <!----------------------------------------------------How it works------------------------------------------------------------------------------>
    <div class="how-works">
      <div class="hotel-deals-head">
        How it Works
      </div>

      <div class="how-works-group">
        <div class="how-works-info">
          <a href="#"><i class="fas fa-bed fa-3x"></i></a>
          <span class="works-info-head">
            Book and pay
          </span>
          <p>
            We have over 300,000 hotels and independent boutiques around the
            world.
          </p>
        </div>
        <div class="how-works-info">
          <a href="#"><i class="fas fa-credit-card fa-3x"></i></a>
          <span class="works-info-head">
            Search our hotels
          </span>
          <p>
            Feel free to compare our prices - you'll find they're on par with
            other hotel sites
          </p>
        </div>
        <div class="how-works-info">
          <a href="#"><i class="fas fa-tags fa-3x"></i></a>
          <span class="works-info-head">
            Enjoy Rewards
          </span>
          <p>
            Earn thousands of points which will be posted to your account after
            your stay has been completed. Now you can also pay with points to
            stay at any of our hotels.
          </p>
        </div>
      </div>
    </div>

    <!-----------------------------------------------------Footer----------------------------------------------------------------------------------->
    <footer>
      <ul class="footer-component-1">
        <li>
          <a href="#"> <span>FAQ</span></a>
        </li>
        <li>
          <a href="#"> <span>Terms</span></a>
        </li>
        <li>
          <a href="#"> <span>Privacy</span></a>
        </li>
        <li>
          <a href="#"> <span>GDPR</span></a>
        </li>
      </ul>
      <div class="footer-component-2">
        <span>powered by</span>
        <img src="Images/logo_points_footer.svg" />
      </div>
    </footer>
  </body>
</html>
