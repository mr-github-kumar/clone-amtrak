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
    <title>Amtrak Hotels</title>
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
    <link href="css/hotelStyle.css" rel="stylesheet" />
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

    <div class="hotel-search-page container-fluid ">
      <div class="row">
        <!--- Column-1 start here -->
        <div class="col-sm-4">
          <!---Refine Search start here --->
          <div class="container-fluid">
            <div class="row">
              <div class="search">
                <div id="mapview" class="container">
                  <img
                    id="coverImg1Pg1"
                    src="Images/map.png"
                    class="img-fluid mb-5"
                    alt="Hotel Residence"
                    style="width: 100%;"
                  />
                  <div class="text-block">
                    <p class="text-info">Map View</p>
                  </div>
                </div>
                <h4 class="text-info">Refine your search</h4>
                <p>We found 113 hotels for your trip</p>
                <a href="#"
                  ><img class="myIcon" src="Images/refresh.png" /><small
                    class="text-info"
                    >Reset Filters</small
                  ></a
                >
              </div>
            </div>
          </div>
          <!---Refine Search end here --->
          <!--- Sort start here --->
          <div class="container-fluid mt-5">
            <div class="row">
              <div class="sort">
                <h3 class="text-info">Sort by</h3>
                <div class="form-check mb-2">
                  <input
                    class="form-check-input"
                    type="radio"
                    name="exampleRadios"
                    id="exampleRadios1"
                    value="a"
                    checked
                  />
                  <label
                    class="form-check-label text-info"
                    for="exampleRadios1"
                  >
                    Best
                  </label>
                </div>
                <div class="form-check mb-2">
                  <input
                    class="form-check-input"
                    type="radio"
                    name="exampleRadios"
                    id="exampleRadios2"
                    value="b"
                  />
                  <label
                    class="form-check-label text-info"
                    for="exampleRadios2"
                  >
                    Price Lowest to Highest
                  </label>
                </div>
                <div class="form-check mb-2">
                  <input
                    class="form-check-input"
                    type="radio"
                    name="exampleRadios"
                    id="exampleRadios3"
                    value="c"
                  />
                  <label
                    class="form-check-label text-info"
                    for="exampleRadios3"
                  >
                    Price Highest to Lowest
                  </label>
                </div>
                <div class="form-check mb-2">
                  <input
                    class="form-check-input"
                    type="radio"
                    name="exampleRadios"
                    id="exampleRadios4"
                    value="d"
                  />
                  <label
                    class="form-check-label text-info"
                    for="exampleRadios4"
                  >
                    Point Highest to Lowest
                  </label>
                </div>
                <div class="form-check mb-2">
                  <input
                    class="form-check-input"
                    type="radio"
                    name="exampleRadios"
                    id="exampleRadios4"
                    value="d"
                  />
                  <label
                    class="form-check-label text-info"
                    for="exampleRadios4"
                  >
                    Point Highest to Lowest
                  </label>
                </div>
              </div>
            </div>
          </div>
          <!--- Sort end here --->
          <!--- Amenteties check box start here --->
          <div class="container-fluid mt-5">
            <div class="row">
              <div class="check-am">
                <h6 class="text-info">Amenteties</h6>
                <form>
                  <div class="checkbox">
                    <label class="text-info"
                      ><input type="checkbox" value="all" />All</label
                    >
                  </div>
                  <div class="checkbox">
                    <label class="text-info"
                      ><input type="checkbox" value="free parking" />Free
                      Parking(2)</label
                    >
                  </div>
                  <div class="checkbox">
                    <label class="text-info"
                      ><input type="checkbox" value="free wifi" />Free
                      WiFi(16)</label
                    >
                  </div>
                  <div class="checkbox">
                    <label class="text-info"
                      ><input
                        type="checkbox"
                        value="free airport shuttle"
                      />Free Airport Shuttle(2)</label
                    >
                  </div>
                  <div class="checkbox">
                    <label class="text-info"
                      ><input
                        type="checkbox"
                        value="free airport shuttle"
                      />Free Cancellation Available (56)</label
                    >
                  </div>
                  <div class="checkbox">
                    <label class="text-info"
                      ><input
                        type="checkbox"
                        value="free airport shuttle"
                      />Continental Breakfast (16)
                    </label>
                  </div>
                </form>
              </div>
            </div>
          </div>
          <!--- Amenteties check box end here --->
          <!--- Neighborhood check box start here --->
          <div class="container-fluid mt-5">
            <div class="row">
              <div class="border-top border-bottom">
                <h6 class="text-info">Neighborhood</h6>
                <form>
                  <div class="checkbox">
                    <label class="text-info"
                      ><input type="checkbox" value="all" />All</label
                    >
                  </div>
                  <div class="checkbox">
                    <label class="text-info"
                      ><input type="checkbox" value="free parking" />Downtown
                      San Diego (52)</label
                    >
                  </div>
                  <div class="checkbox">
                    <label class="text-info"
                      ><input type="checkbox" value="free wifi" />Point Loma
                      (16)</label
                    >
                  </div>
                  <div class="checkbox">
                    <label class="text-info"
                      ><input
                        type="checkbox"
                        value="free airport shuttle"
                      />Townsite (10)</label
                    >
                  </div>
                  <div class="checkbox">
                    <label class="text-info"
                      ><input
                        type="checkbox"
                        value="free airport shuttle"
                      />Pacific Beach (6)</label
                    >
                  </div>
                  <div class="checkbox">
                    <label class="text-info"
                      ><input type="checkbox" value="free airport shuttle" />La
                      Jolla Shores (3)</label
                    >
                  </div>
                </form>
              </div>
            </div>
          </div>
          <!--- Neighborhood check box end here --->
        </div>
        <!--- Column-1 end here --->
        <!--- Column-2 start here --->
        <div class="col-sm-8">
          <!--- Change search start here -->
          <div>
            <a class="text-info" href="#"
              ><img class="myIcon" src="Images/smallSearch.png" />Change
              Search</a
            >
          </div>
          <!--- Change search end here -->
          <!--- Hotel-1 start here -->
          <div id="hotelInfoPg1" class="container-fluid col-sm-12">
            <div class="row">
              <div class="col-sm-4">
                <img
                  id="hotelInfoImg"
                  src="Images/residenceHotel.png"
                  class="img-fluid no-gutters"
                />
              </div>
              <div class="col-sm-4">
                <h3 class="text-dark">Residence Inn by Marriott</h3>
                <span class="fa fa-star"></span>
                <span class="fa fa-star"></span>
                <span class="fa fa-star"></span>
                <span class="fa fa-star checked"></span>
                <span class="fa fa-star checked"></span>
                <br /><br />
                <h5 class="text-secondary">Downtown San Diego</h5>
                <br />
                <p class="text-info">
                  1835 Columbia St, San Diego, California( US)<br /><br />1.2 mi
                  to city center<br />3 mi to SAN-San Diego Intl.
                </p>
                <p class="text-warning">
                  <img id="okImg" src="Images/ok.png" />Free cancellation
                  available
                </p>
              </div>
              <div class="col-sm-4 border-left">
                <div class="container-fluid">
                  <h6><span class="badge badge-primary">Big earn</span></h6>
                </div>
                <h5 class="text-secondary">Room Cost</h5>
                <h3 class="text-dark">$ 250</h3>
                <h6><small>per room/ night</small></h6>
                <h6 class="text-info">$ 289 total</h6>
                <hr />
                <h5 class="text-secondary">Earn</h5>
                <h3 class="text-dark">6380</h3>
                <h6><small>Points</small></h6>
                <a href="rooms.php" class="btn btn-primary btn-block"
                  >see rooms + rate</a
                >
              </div>
            </div>
          </div>
          <!--- Hotel-1 end here -->
          <!--- Hotel-2 start here -->
          <div id="hotelInfoPg1" class="container-fluid col-sm-12">
            <div class="row">
              <div class="col-sm-4">
                <img
                  id="hotelInfoImg"
                  src="Images/westin.png"
                  class="img-fluid"
                />
              </div>
              <div class="col-sm-4">
                <h3 class="text-dark">The Westin</h3>
                <span class="fa fa-star"></span>
                <span class="fa fa-star"></span>
                <span class="fa fa-star"></span>
                <span class="fa fa-star checked"></span>
                <span class="fa fa-star checked"></span>
                <br /><br />
                <h5 class="text-secondary">Downtown San Diego</h5>
                <br />
                <p class="text-info">
                  1835 Columbia St, San Diego, California( US)<br /><br />1.2 mi
                  to city center<br />3 mi to SAN-San Diego Intl.
                </p>
                <p class="text-warning">
                  <img id="okImg" src="Images/ok.png" />Free cancellation
                  available
                </p>
              </div>
              <div id="roomRateInfo" class="col-sm-4">
                <div class="container-fluid padding">
                  <h6><span class="badge badge-primary">Big earn</span></h6>
                </div>
                <h5 class="text-secondary">Room Cost</h5>
                <h3 class="text-dark">$ 242</h3>
                <h6><small>per room/ night</small></h6>
                <h6 class="text-info">$ 280 total</h6>
                <hr />
                <h5 class="text-secondary">Earn</h5>
                <h3 class="text-dark">6100</h3>
                <h6><small>Points</small></h6>
                <a href="rooms.php" class="btn btn-primary btn-block"
                  >see rooms + rate</a
                >
              </div>
            </div>
          </div>
          <!--- Hotel-2 end here -->
          <!--- Hotel-3 start here -->
          <div id="hotelInfoPg1" class="container-fluid col-sm-12">
            <div class="row">
              <div class="col-sm-4">
                <img
                  id="hotelInfoImg"
                  src="Images/porto.png"
                  class="img-fluid"
                />
              </div>
              <div class="col-sm-4">
                <h3 class="text-dark">Porto Vista Hotel</h3>
                <span class="fa fa-star"></span>
                <span class="fa fa-star"></span>
                <span class="fa fa-star"></span>
                <span class="fa fa-star checked"></span>
                <span class="fa fa-star checked"></span>
                <br /><br />
                <h5 class="text-secondary">Downtown San Diego</h5>
                <br />
                <p class="text-info">
                  1835 Columbia St, San Diego, California( US)<br /><br />1.2 mi
                  to city center<br />3 mi to SAN-San Diego Intl.
                </p>
                <p class="text-warning">
                  <img id="okImg" src="Images/ok.png" />Free cancellation
                  available
                </p>
              </div>
              <div id="roomRateInfo" class="col-sm-4">
                <div class="container-fluid padding">
                  <h6><span class="badge badge-primary">Big earn</span></h6>
                </div>
                <h5 class="text-secondary">Room Cost</h5>
                <h3 class="text-dark">$ 242</h3>
                <h6><small>per room/ night</small></h6>
                <h6 class="text-info">$ 280 total</h6>
                <hr />
                <h5 class="text-secondary">Earn</h5>
                <h3 class="text-dark">6100</h3>
                <h6><small>Points</small></h6>
                <a href="rooms.php" class="btn btn-primary btn-block"
                  >see rooms + rate</a
                >
              </div>
            </div>
          </div>
          <!--- Hotel-3 end here -->
          <!--- Hotel-4 start here -->
          <div id="hotelInfoPg1" class="container-fluid col-sm-12">
            <div class="row">
              <div class="col-sm-4">
                <img
                  id="hotelInfoImg"
                  src="Images/vero.png"
                  class="img-fluid"
                />
              </div>
              <div class="col-sm-4">
                <h3 class="text-dark">Kimpton Vero Beach</h3>
                <span class="fa fa-star"></span>
                <span class="fa fa-star"></span>
                <span class="fa fa-star"></span>
                <span class="fa fa-star checked"></span>
                <span class="fa fa-star checked"></span>
                <br /><br />
                <h5 class="text-secondary">Downtown San Diego</h5>
                <br />
                <p class="text-info">
                  1835 Columbia St, San Diego, California( US)<br /><br />1.2 mi
                  to city center<br />3 mi to SAN-San Diego Intl.
                </p>
                <p class="card-text text-warning">
                  <img id="okImg" src="Images/ok.png" />Free cancellation
                  available
                </p>
              </div>
              <div id="roomRateInfo" class="col-sm-4">
                <div class="container-fluid padding">
                  <h6><span class="badge badge-primary">Big earn</span></h6>
                </div>
                <h5 class="text-secondary">Room Cost</h5>
                <h3 class="text-dark">$ 242</h3>
                <h6><small>per room/ night</small></h6>
                <h6 class="text-info">$ 280 total</h6>
                <hr />
                <h5 class="text-secondary">Earn</h5>
                <h3 class="text-dark">6100</h3>
                <h6><small>Points</small></h6>
                <a href="rooms.php" class="btn btn-primary btn-block"
                  >see rooms + rate</a
                >
              </div>
            </div>
          </div>
          <!--- Hotel-4 end here -->
          <!--- Hotel-5 start here -->
          <div id="hotelInfoPg1" class="container-fluid col-sm-12">
            <div class="row text-left">
              <div class="col-sm-4">
                <img
                  id="hotelInfoImg"
                  src="Images/Wyndham.png"
                  class="img-fluid"
                />
              </div>
              <div class="col-sm-4">
                <h3 class="text-dark">Wyndham Hotel</h3>
                <span class="fa fa-star"></span>
                <span class="fa fa-star"></span>
                <span class="fa fa-star"></span>
                <span class="fa fa-star checked"></span>
                <span class="fa fa-star checked"></span>
                <br /><br />
                <h5 class="text-secondary">Downtown San Diego</h5>
                <br />
                <p class="text-info">
                  1835 Columbia St, San Diego, California( US)<br /><br />1.2 mi
                  to city center<br />3 mi to SAN-San Diego Intl.
                </p>
                <p class="text-warning">
                  <img id="okImg" src="Images/ok.png" />Free cancellation
                  available
                </p>
              </div>
              <div id="roomRateInfo" class="col-sm-4">
                <div class="container-fluid padding">
                  <h6><span class="badge badge-primary">Big earn</span></h6>
                </div>
                <h5 class="text-secondary">Room Cost</h5>
                <h3 class="text-dark">$ 242</h3>
                <h6><small>per room/ night</small></h6>
                <h6 class="text-info">$ 280 total</h6>
                <hr />
                <h5 class="text-secondary">Earn</h5>
                <h3 class="text-dark">6100</h3>
                <h6><small>Points</small></h6>
                <a href="rooms.php" class="btn btn-primary btn-block"
                  >see rooms + rate</a
                >
              </div>
            </div>
          </div>
          <!--- Hotel-5 end here -->
        </div>
        <!--- Column-2 end here --->
      </div>
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
