<?php	
	session_start();
	if(isset($_SESSION['message'])): ?>
	<div class="alert alert-<?_SESSION['msg_Type']?>">
	<?php 
		echo $_SESSION['message'];
		unset($_SESSION['message'])
		?>
	</div>
	<?php endif 
	
?>
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
    <title>Amtrak-Login</title>
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
    <link rel="stylesheet" href="css/indexStyle.css" />
  </head>
  <body>    
    <!------------------User Registration form--------->
    <div
      class="modal"
      id="registrationForm"
      tabindex="-1"
      role="dialog"
      aria-labelledby="exampleModalLabel"
      aria-hidden="true"
    >
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">
              Register Here
            </h5>
            <button
              type="button"
              class="close"
              data-dismiss="modal"
              aria-label="Close"
            >
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body">
            <form action="registration.php" method="post">
              <div class="form-group">
                <label for="inputName">Name</label>
                <input
                  type="text"
                  class="form-control"
                  id="inputName"
                  aria-describedby="emailHelp"
                  name="name"
                  autocomplete="off"
                />
              </div>
              <div class="form-group">
                <label for="inputEmail">Email address</label>
                <input
                  type="email"
                  class="form-control"
                  id="inputEmail"
                  aria-describedby="emailHelp"
                  name="email"
                  autocomplete="off"
                />
              </div>
              <div class="form-group">
                <label for="inputPassword">Password</label>
                <input
                  type="password"
                  class="form-control"
                  id="inputPassword"
                  name="password"
                  autocomplete="off"
                />
              </div>
              <div class="form-group">
                <button
                  type="submit"
                  class="btn btn-primary"
                  name="registerName"
                >
                  Register
                </button>
              </div>			  
            </form>
          </div>
        </div>
      </div>
    </div>
    <!------------------User login form---------------->
    <div
      class="modal"
      id="loginForm"
      tabindex="-1"
      role="dialog"
      aria-labelledby="exampleModalLabel"
      aria-hidden="true"
    >
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">
                    Login
                    </h5>
                    <button
                    type="button"
                    class="close"
                    data-dismiss="modal"
                    aria-label="Close"
                    >
                    <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form action="validation.php" method="post">
                        <div class="form-group">
                            <label for="inputEmail">Email address</label>
                            <input
                            type="email"
                            class="form-control"
                            id="inputEmail"
                            aria-describedby="emailHelp"
                            name="email"
                            autocomplete="off"
                            />
                        </div>
                        <div class="form-group">
                            <label for="inputPassword">Password</label>
                            <input
                            type="password"
                            class="form-control"
                            id="inputPassword"
                            name="password"
                            autocomplete="off"
                            />
                        </div>
                        <div class="form-group">
                            <button
                            type="submit"
                            class="btn btn-primary"
                            name="loginButton"
                            >
                            Login
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <!------------------top banner-------------->
    <div class="heading-banner-nav">
      <a href="#"><img src="Images/amtrakLogo.png" alt="amtral logo" /></a>
    </div>

    <div class="bookFormBox">
        <div class="amtrak-logo">
            <img src="https://www.amtrak.com/etc/designs/dotcom-assets/images/favicon.ico" alt="">
        </div>
        <div class="login-button">
            <button type="button" class="btn btn-success btn-lg" data-toggle="modal"
                  data-target="#loginForm">Login</button>
            <button type="button" class="btn btn-warning btn-lg" data-toggle="modal"
                  data-target="#registrationForm">Register</button>
        </div>
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

