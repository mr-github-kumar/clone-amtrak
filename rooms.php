<?php session_start();  ?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <link
      rel="icon"
      type="image/x-icon"
      href="https://www.amtrak.com/etc/designs/dotcom-assets/images/favicon.ico"
    />
    <title>Amtrak Hotel Rooms</title>
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
    <link href="css/roomStyle.css" rel="stylesheet" />
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
			  <li><a><?php echo $_SESSION['name']; ?></a></li>
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

    <!--- Header --->

    <div class="container-fluid room-page">
      <div class="row align-items-center">
        <div class="col-5 align-self-center">
          <h3 class="text-info">
            Residence Inn by Marriott San Diego Downtown
          </h3>
          <p class="text-dark">
            Fri, Mar 27, 2020 - Sat, Mar 28, 2020, 1 Night 2 adults
          </p>
          <div>
            <a class="text-info" href="#"
              ><img class="myIcon" src="Images/smallSearch.png" />Change
              Search</a
            >
          </div>
        </div>
        <div class="col-2 align-self-center d-sm-none d-md-block">
          <p class="text-muted display-5">Earn</p>
          <h3 class="text-info">1,400</h3>
          <p class="text-dark">Point/Booking</p>
        </div>
        <div class="col-2 border-left h-75 align-self-center">
          <h3 class="text-info">$229</h3>
          <p class="text-dark">Avg. Nightly Rate</p>
        </div>
        <div class="col-2 align-self-center">
          <a href="home.php" type="button" class="btn btn-info btn-lg"
            >Select Room</a
          >
        </div>
      </div>
    </div>
    <!--- Secondary Info -->
    <div class="container-fluid rating">
      <div class="row align-items-center no-gutters">
        <div class="col-2">
          <p class="test-dark">
            <span class="fa fa-star text-info"></span>
            <span class="fa fa-star text-info"></span>
            <span class="fa fa-star text-info"></span>
            <span class="fa fa-star checked"></span>
            <span class="fa fa-star checked"></span>
            <small>3 star</small>
          </p>
        </div>
        <div class="col-4">
          <p class="text-warning">
            Free Wifi, Free breakfast, Free airort transportation
          </p>
        </div>
      </div>
    </div>
    <!---main cover with hotel image and map --->
    <div class="container-fluid padding">
      <div class="row padding">
        <div class="col-lg-7 col-md-6 col-sm-12">
          <img
            id="coverImg1Pg2"
            src="Images/residenceHotel.png"
            class="img-fluid border border-secondary"
            alt="Hotel Residence"
          />
          <figcaption class="figure-caption">
            38 images |<a href="#">view all images >></a>
          </figcaption>
        </div>
        <div class="col-lg-5 col-md-6 d-none d-sm-block">
          <img
            id="coverImg2Pg2"
            src="Images/mapResidence.png"
            class="img-fluid border border-secondary"
            alt="Hotel Residence Map"
          />
          <figcaption class="figure-caption">
            <a href="#">view map >></a>
          </figcaption>
        </div>
      </div>
    </div>

    <!--- Room Details, room-1 ---->
    <div class="container-fluid">
      <h2 class="col-4 text-info">Select Room Rate</h2>
    </div>
    <div class="container-fluid border-top border-bottom padding m-3">
      <div class="row align-items-center">
        <div class="vl"></div>
        <div class="col-3 align-self-center">
          <img
            src="Images/residenceRoom1.png"
            class="w-100 h-75 img-fluid border border-secondary mt-0"
            alt="Hotel residence room 1"
          />
        </div>
        <div class="col-3 align-self-center">
          <p class="text-dark"><small>Big earn</small></p>
          <h5 class="text-info">Studio, 1 Queen bed With Sofa Bed</h5>
          <p><small>1 Queen Bed and 1 Double Sofa Bed</small></p>
          <h6 class="text-info">Non-refundable</h6>
          <h6 class="text-warning">
            <small
              >Free High-Speed Internet, Breakfast Buffet, Full Kitchen</small
            >
          </h6>
          <p class="text-info">
            <small> Show room and cancellation info</small>
          </p>
        </div>
        <div class="col-2 align-self-center">
          <p class="text-muted px-0">Earn</p>
          <h3 class="text-info">1,400</h3>
          <p class="text-dark"><small>Points/ Booking</small></p>
        </div>
        <div class="col-2 border-left h-75 align-self-center">
          <h3 class="text-info">$229</h3>
          <p class="text-dark">Avg. Nightly Rate</p>
          <p class="text-dark"><small>$267 total</small></p>
        </div>
        <div class="col-1.5 align-self-center">
          <a href="hotels.html" type="button" class="btn btn-info btn-lg"
            >Book Now</a
          >
        </div>
      </div>
    </div>
    <!--- Room Details, room-2 ---->
    <div class="container-fluid border-top border-bottom padding m-3">
      <div class="row align-items-center">
        <div class="vl"></div>
        <div class="col-3 align-self-center">
          <img
            src="Images/residenceRoom2.png"
            class="w-100 h-75 img-fluid border border-secondary mt-0"
            alt="Hotel residence room 1"
          />
        </div>
        <div class="col-3 align-self-center">
          <p class="text-dark"><small>Big earn</small></p>
          <h5 class="text-info">Studio, 1 Queen bed With Sofa Bed</h5>
          <p><small>1 Queen Bed and 1 Double Sofa Bed</small></p>
          <h6 class="text-info">Non-refundable</h6>
          <h6 class="text-warning">
            <small
              >Free High-Speed Internet, Breakfast Buffet, Full Kitchen</small
            >
          </h6>
          <p class="text-info">
            <small> Show room and cancellation info</small>
          </p>
        </div>
        <div class="col-2 align-self-center">
          <p class="text-muted px-0">Earn</p>
          <h3 class="text-info">1,400</h3>
          <p class="text-dark"><small>Points/ Booking</small></p>
        </div>
        <div class="col-2 border-left h-75 align-self-center">
          <h3 class="text-info">$229</h3>
          <p class="text-dark">Avg. Nightly Rate</p>
          <p class="text-dark"><small>$267 total</small></p>
        </div>
        <div class="col-1.5 align-self-center">
          <a href="#" type="button" class="btn btn-info btn-lg">Book Now</a>
        </div>
      </div>
    </div>
    <!--- Room Details, room-3 ---->
    <div class="container-fluid border-top border-bottom m-3">
      <div class="row align-items-center">
        <div class="vl"></div>
        <div class="col-3 align-self-center">
          <img
            src="Images/residenceRoom3.png"
            class="w-100 h-75 img-fluid border border-secondary mt-0"
            alt="Hotel residence room 1"
          />
        </div>
        <div class="col-3 align-self-center">
          <p class="text-dark"><small>Big earn</small></p>
          <h5 class="text-info">Studio, 1 Queen bed With Sofa Bed</h5>
          <p><small>1 Queen Bed and 1 Double Sofa Bed</small></p>
          <h6 class="text-info">Non-refundable</h6>
          <h6 class="text-warning">
            <small
              >Free High-Speed Internet, Breakfast Buffet, Full Kitchen</small
            >
          </h6>
          <p class="text-info">
            <small> Show room and cancellation info</small>
          </p>
        </div>
        <div class="col-2 align-self-center">
          <p class="text-muted px-0">Earn</p>
          <h3 class="text-info">1,400</h3>
          <p class="text-dark"><small>Points/ Booking</small></p>
        </div>
        <div class="col-2 border-left h-75 align-self-center">
          <h3 class="text-info">$229</h3>
          <p class="text-dark">Avg. Nightly Rate</p>
          <p class="text-dark"><small>$267 total</small></p>
        </div>
        <div class="col-1.5 align-self-center">
          <a href="#" type="button" class="btn btn-info btn-lg">Book Now</a>
        </div>
      </div>
    </div>

    <!---- Show more options --->
    <div class="container-fluid">
      <a href="#"
        ><p class="col-3 text-warning">
          Show more room types
          <img
            class="myIcon"
            src="Images/smallDownArrow.png"
            alt="Hotel residence room 1"
          /></p
      ></a>
    </div>

    <!--- Unorderlist--->
    <!--- Three Column Section -->
    <div class="container-fluid border-bottom">
      <div class="row">
        <div class="col">
          <h5 class="text-info">Overview</h5>
        </div>
      </div>
      <div class="row">
        <div class="col">
          <h6 class="text-info">Hotel Amenities</h6>
        </div>
      </div>
      <div class="row">
        <div class="col-4">
          <ul class="list-unstyled">
            <li class="text-dark">
              <img class="myIcon" src="Images/smallOk.png" />Barbecue grill(s)
            </li>
            <li class="text-dark">
              <img class="myIcon" src="Images/smallOk.png" />Visual alarms in
              hallways
            </li>
            <li class="text-dark">
              <img class="myIcon" src="Images/smallOk.png" />Free airport
              transportation
            </li>
            <li class="text-dark">
              <img class="myIcon" src="Images/smallOk.png" />Free breakfast
            </li>
          </ul>
        </div>
        <div class="col-4">
          <ul class="list-unstyled">
            <li class="text-dark">
              <img class="myIcon" src="Images/smallOk.png" />Picnic area
            </li>
            <li class="text-dark">
              <img class="myIcon" src="Images/smallOk.png" />Coffee/tea in
              common areas
            </li>
            <li class="text-dark">
              <img class="myIcon" src="Images/smallOk.png" />24-hour front desk
            </li>
            <li class="text-dark">
              <img class="myIcon" src="Images/smallOk.png" />Business center
            </li>
          </ul>
        </div>
        <div class="col-4">
          <ul class="list-unstyled">
            <li class="text-dark">
              <img class="myIcon" src="Images/smallOk.png" />Express check-in
            </li>
            <li class="text-dark">
              <img class="myIcon" src="Images/smallOk.png" />Elevator
            </li>
            <li class="text-dark">
              <img class="myIcon" src="Images/smallOk.png" />Express check-out
            </li>
          </ul>
        </div>
      </div>
    </div>

    <div class="container-fluid">
      <a href="#"
        ><p class="col-3 text-warning">
          Show all amenities
          <img
            class="myIcon"
            src="Images/smallDownArrow.png"
            alt="Hotel residence room 1"
          /></p
      ></a>
    </div>

    <div class="container-fluid text-dark">
      <h4 class="text-info">Special Check-in Instructions</h4>
      <h5 class="text-info">Special Check-in Instructions</h5>
      <p>
        Airport shuttle service is available on request from 8:00 AM to 8:00 PM.
        Fees may apply. Contact the property in advance to make arrangements.
      </p>
      <h5 class="text-info">Check-in Instructions</h5>
      <p>
        Extra-person charges may apply and vary depending on property policy.
      </p>
      <p>
        Government-issued photo identification and a credit card, debit card, or
        cash deposit are required at check-in for incidental charges.
      </p>
      <p>
        Special requests are subject to availability upon check-in and may incur
        additional charges. Special requests cannot be guaranteed.
      </p>
      <p>
        Please note that cultural norms and guest policies may differ by country
        and by property. The policies listed are provided by the property.
      </p>

      <hr />

      <h4 class="text-info">About The Hotel</h4>
      <h5 class="text-info">Property Location</h5>
      <p>
        A stay at Residence Inn by Marriott San Diego Downtown places you in the
        heart of San Diego, within a 10-minute walk of Waterfront Park and
        Maritime Museum of San Diego. This hotel is 0.5 mi (0.9 km) from B
        Street Cruise Ship Terminal and 0.5 mi (0.9 km) from Port of San Diego.
      </p>
      <h5 class="text-info">Rooms</h5>
      <p>
        Make yourself at home in one of the 121 air-conditioned rooms featuring
        kitchens with refrigerators and stovetops. Your bed comes with Egyptian
        cotton sheets, and all rooms are furnished with sofa beds. Wired and
        wireless Internet access is complimentary, while 32-inch flat-screen
        televisions with cable programming provide entertainment. Private
        bathrooms with shower/tub combinations feature deep soaking bathtubs and
        complimentary toiletries.
      </p>
      <h5 class="text-info">Amenities</h5>
      <p>
        Be sure to enjoy recreational amenities, including an outdoor pool, a
        spa tub, and a 24-hour fitness center. Additional amenities at this
        hotel include complimentary wireless Internet access, tour/ticket
        assistance, and a picnic area.
      </p>
      <h5 class="text-info">Dining</h5>
      <p>
        Grab a bite from the snack bar/deli serving guests of Residence Inn by
        Marriott San Diego Downtown. Mingle with other guests at the
        complimentary reception, held daily. A complimentary buffet breakfast is
        included.
      </p>
      <h5 class="text-info">Business, Other Amenities</h5>
      <p>
        Featured amenities include a business center, express check-in, and
        express check-out. Planning an event in San Diego? This hotel has
        facilities measuring 650 square feet (60 square meters), including a
        meeting room. A roundtrip airport shuttle is complimentary (available on
        request).
      </p>
    </div>

    <!--- Footer -->
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
