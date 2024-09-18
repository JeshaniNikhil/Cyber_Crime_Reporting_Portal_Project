<?php
session_start();
if(!isset($_SESSION['email'])){
    header("Location: index.php"); 
    exit(); 
}
?>
<!DOCTYPE html>
<html lang="zxx">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Cyber Armor</title>
   <script
   src="https://code.jquery.com/jquery-3.6.0.min.js"
   integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4="
   crossorigin="anonymous">
 </script>
 <script
   src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.3/jquery.validate.min.js"
   integrity="sha512-37T7leoNS06R80c8Ulq7cdCDU5MNQBwlYoy1TX/WUsLFC2eYNqtKlV0QjH7r8JpG/S0GUMZwebnVFLPd6SU5yg=="
   crossorigin="anonymous"
   referrerpolicy="no-referrer">
 </script>
 <script
   src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.3/additional-methods.min.js"
   integrity="sha512-XZEy8UQ9rngkxQVugAdOuBRDmJ5N4vCuNXCh8KlniZgDKTvf7zl75QBtaVG1lEhMFe2a2DuA22nZYY+qsI2/xA=="
   crossorigin="anonymous"
   referrerpolicy="no-referrer"
 ></script>
  
    <link rel="stylesheet" href="assets/css/bootstrap.min.css" />
    <link rel="stylesheet" href="assets/css/owl.carousel.min.css" />
    <link rel="stylesheet" href="assets/css/owl.theme.default.min.css" />
    <link rel="stylesheet" href="assets/css/scrollCue.css" />
    <link rel="stylesheet" href="assets/css/remixicon.css" />
    <link rel="stylesheet" href="assets/css/meanmenu.min.css" />
    <link rel="stylesheet" href="assets/css/odometer.min.css" />
    <link rel="stylesheet" href="assets/css/magnific.popup.css" />
    <link rel="stylesheet" href="assets/css/style.css" />
    <link rel="stylesheet" href="assets/css/logoname.css" />
    <link rel="stylesheet" href="assets/css/responsive.css" />
    <link href="assets/images/white-logo.png" type="image/x-icon" rel="icon" />
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.12.1/css/all.min.css" rel="stylesheet">
	<script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.4.1/js/bootstrap.min.js" ></script>
  <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

  <script>
		$(document).ready(function () {
			$("#loginForm").validate({
				rules: {
					email: {
						required: true,
						email: true
					},
					password: {
						required: true,
						minlength: 8,
						strongPassword: true
					}
				},
				messages: {
					email: {
						required: "Email Required. Please enter your email address to proceed with your request",
						email: "Invalid email address. Please enter a valid email."
					},
					password: {
						required: "Password Required. Please enter your Password to proceed with your request",
						minlength: "Your password must be at least 8 characters long"
					}
				}
			});
			$("#registerForm").validate({
				rules: {
					name: {
						required: true,
						minlength: 2
					},
					email: {
						required: true,
						email: true
					},
					password: {
						required: true,
						minlength: 8,
						strongPassword: true
					},
					password_confirmation: {
						required: true,
						minlength: 8,
						equalTo: "[name='password']"
					}
				},
				messages: {
					name: {
						required: "name Required. Please enter your name to proceed with your request",
						minlength: "Your name must be at least 2 characters long"
					},
					email: {
						required: "Invalid email address. Please enter a valid email.",
						email: "Email Required. Please enter your email address to proceed with your request"
					},
					password: {
						required: "Password Required. Please enter your Password to proceed with your request",
						minlength: "Your password must be at least 8 characters long"
					},
					password_confirmation: {
						required: "Confirm Password Required. Please enter your Confirm Password to proceed with your request",
						minlength: "Your password confirmation must be at least 8 characters long",
						equalTo: "Passwords do not match"
					}
				}
			});
      $.validator.addMethod("strongPassword", function(value, element) {
            return this.optional(element) || /^(?=(.*[a-z]){3,})(?=(.*[A-Z]){2,})(?=(.*[0-9]){2,})(?=(.*[!@#$%^&*()\-__+.]){1,}).{8,}$/.test(value);
        }, "Your password must contain at least three lowercase letters, two uppercase letters, two digits, one special character (!@#$%^&*()-__+.), and be at least 8 characters long.");
		});
	</script>
    <style>
        ::-webkit-scrollbar {
    display: none;
}
h1 {
  font-weight: 400;
  text-align: center;
  text-transform: uppercase;
}
:root {
  font-size: calc(1vw + 1vh + 1.5vmin);
  --style-2-color: #009688;
}

 .hero {
      position: relative;
      width: 100%;
      height: 100vh;
      display: flex;
      justify-content: center;
      align-items: center;
      color: white;
      text-align: center;
    }
    .error {
			color: red;
			font-size: 12px;
			margin-top: 5px;
		}


    .background-video {
      position: absolute;
      top: 50%;
      left: 50%;
      width: 100%;
      height: 100%;
      object-fit: cover;
      transform: translate(-50%, -50%);
      z-index: -1;
    }

    .hero-content {
      z-index: 1;
    }

    h1 {
      font-size: 3em;
      margin: 0;
    }

    p {
      font-size: 1.5em;
    }
    .modal-style-2 .modal-login {
    width: 350px;
}

.modal-style-2 .modal-login a{
    text-decoration: none !important;
}

.modal-style-2 .modal-login .modal-content {
    padding: 20px;
    border-radius: 5px;
    border: none;
}

.modal-style-2 .modal-login .modal-header {
    border-bottom: none;
    position: relative;
    justify-content: center;
}

.modal-style-2 .modal-login .close {
    position: absolute;
    top: -10px;
    right: -10px;
}
.modal-style-2  .close:focus, .modal-style-2 .close:active {
   outline: none !important;
   box-shadow: none;
}
.modal-style-2 .modal-login h4 {
    color: var(--style-2-color);
    text-align: center;
    font-size: 18px;
    margin-top: 0;
    border-bottom: 0;
    text-transform: uppercase;
    line-height: 1;
    letter-spacing: 3px;
    font-weight: bold;
}

.modal-style-2 .modal-login .modal-content {
    color: #999;
    margin-bottom: 15px;
    background: #fff;
    box-shadow: 0px 2px 2px rgba(0, 0, 0, 0.3);
    padding: 25px;
}

.modal-style-2 .modal-login .form-group {
    margin-bottom: 20px;
}

.modal-style-2 .modal-login label {
    font-weight: normal;
    font-size: 13px;
}

.modal-style-2 .modal-login .modal-body {
    padding: 0;
}

.modal-style-2 .modal-login .form-control {
    min-height: 38px;
    padding-left: 5px;
    box-shadow: none !important;
    border-width: 0 0 1px 0;
    border-radius: 0;
    font-size: 13px
}

.modal-style-2 .modal-login .form-control:focus {
    border-color: #ccc;
}

.modal-style-2 .modal-login .input-group-addon {
    max-width: 42px;
    text-align: center;
    background: none;
    border-width: 0 0 1px 0;
    padding-left: 5px;
    border-radius: 0;
    margin-right: 10px;
    padding-top: 15px;
}

.modal-style-2 .modal-login .btn {
    font-size: 15px;
    font-weight: bold;
    background: var(--style-2-color);
    border-radius: 25px;
    border: none;
    min-width: 140px;
    padding: 10px;
    outline: none !important;
}

.modal-style-2 .modal-login .btn:hover,
.modal-style-2 .modal-login .btn:focus {
    background: var(--style-2-color);
}
.modal-style-2  input:-internal-autofill-selected {
    background-color: transparent !important;
}
.modal-style-2 .modal-login .hint-text {
    text-align: center;
    padding-top: 5px;
    font-size: 13px;
}

.modal-style-2 .modal-login .modal-footer {
    color: #999;
    border-color: #dee4e7;
    text-align: center;
    margin: 0 -25px -25px;
    font-size: 13px;
    justify-content: center;
}

.modal-style-2 .modal-login a {
    color: #fff;
    text-decoration: underline;
}

.modal-style-2 .modal-login a:hover {
    text-decoration: none;
}

.modal-style-2 .modal-login a {
    color: var(--style-2-color);
    text-decoration: none;
}

.modal-style-2 .modal-login a:hover {
    text-decoration: underline;
}

.modal-style-2 .modal-login .fa {
    font-size: 16px;
}


.dark.modal-style-2 .modal-content{
    background: #0b0b1f !important;
    color: #fff!important;
}
.dark.modal-style-2 .close, .modal-style-2.dark .modal-login h4{
    color:#fff!important;
}
.dark.modal-style-2 .modal-login .form-control{
    background: transparent !important;
    color: #fff;
    border-color: #777;
}
.dark.modal-style-2 .modal-login .input-group-addon{
    color:#9E9E9E;
}
.dark.modal-style-2 .modal-login .modal-footer{
    border: none;
}
.dark.modal-style-2 .modal-login .btn{
    background: #70807e;
}
.dark .text-danger{
    color: #777!important;
}

@media only screen and (max-width: 360px) {
    .modal-style-2 .modal-login {width: 100%; margin:5px;}
    .modal-style-2 .modal-login form{width: 100%;}
}
/*------extra css----------*/

.main-container{
    width:1140px;
    margin: 0 auto;
}
.text-12{
    font-size: 12px;
}

.button-card {
    margin: 0 auto;
    box-shadow: 1px 2px 5px 2px #d1d1d1;
    padding: 20px;
    border-radius: 5px;
}
.button-card img {
    border: 1px solid #f1f1f1;
    border-radius: 5px;
    max-height: 350px;
    position: relative;
}

.btn-theme{
    width: 100px;
    height: 35px;
    padding: 3px;
    border-radius: 26px;
}

@media only screen and (max-width: 1140px) {
    .main-container{ width: 100%; margin: 0 15px;}
}

@media only screen and (max-width: 480px) {
    .button-card img {width: 100%; height: auto;}
}

    </style>
  </head>
  <body>
    <!-- Start Modal -->
    <div
      class="modal search-modal fade"
      id="exampleModal"
      tabindex="-1"
      aria-hidden="true"
    >
      <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
          <div class="modal-header"></div>
          <div class="modal-body">
            <form>
              <div class="form-group">
                <input type="text" class="form-control" placeholder="Search" />
                <button type="submit"><i class="ri-search-2-line"></i></button>
              </div>
            </form>
          </div>
        </div>
      </div>
      <button
        type="button"
        class="btn-close"
        data-bs-dismiss="modal"
        aria-label="Close"
      >
        <i class="ri-close-line"></i>
      </button>
    </div>
    <div id="registerModal2" class="modal-style-2 dark modal mt-5">
      <div class="modal-dialog modal-login">
        <div class="modal-content">
          <div class="modal-header p-0">				
            <h4 class="modal-title">Register</h4>
            <i class="fa fa-window-close close" data-dismiss="modal" aria-hidden="true" aria-hidden="true"></i>
          </div>
          <div class="modal-body">
            <form action="" id="registerForm" method="post" class="mt-3">
                <div class="input-group">
                  <span class="input-group-addon"><i class="fa fa-user"></i></span>
                  <input type="text" class="form-control" name="name" placeholder="Enter your name" required="required">
                </div>
              
              <br>
                <div class="input-group">
                  <span class="input-group-addon"><i class="fa fa-envelope"></i></span>
                  <input type="text" class="form-control" name="email" placeholder="Enter email address" required="required">
                </div>
            
              <br>
                <div class="input-group">
                  <span class="input-group-addon"><i class="fa fa-lock"></i></span>
                  <input type="password" class="form-control" name="password" placeholder="Enter password" required="required" autocomplete="on">
                </div>
              <br>
                <div class="input-group">
                  <span class="input-group-addon"><i class="fa fa-eye-slash"></i></span>
                  <input type="password" class="form-control" name="password_confirmation" placeholder="Retype password" required="required" autocomplete="on">
                </div>
              <br>
  
              <div class="text-center">
                <button id="signup-button" type="submit" style="background-color: cyan;" class="btn btn-primary btn-sm">Register</button>  
              </div>
            </form>
          </div>
          <!-- social icons -->  
          <div class="modal-footer">Already have an account? <a href="#loginModal2" data-dismiss="modal" data-toggle="modal"> Login</a></div>
        </div>
      </div>
    </div> 
    <script>
      $(document).ready(function(){
        $("#registerForm").submit(function(e) {
          e.preventDefault();
          var formData = new FormData(this);
      
          $.ajax({
            url: "insert_user.php",
            type: "POST",
            data: formData,
            dataType: 'json',
            contentType: false,
            cache: false,
            processData: false,
            success: function(data) {
              if(data.status=="success") {
                Swal.fire({
                title: "Register Successful",
                text: "Success",
                icon: "success"
              });
              }
              if(data.status=="error"){
                Swal.fire({
                  title: "Register Failed",
                  text: "All Fields Are Required",
                  icon: "error"
                  });
              }
            },
            error: function(xhr, status, error) {
              console.error("Error: " + status + " " + error);
            }
          });
        });
        $("#loginForm").submit(function(e) {
          e.preventDefault();
          var formData = new FormData(this);
          $.ajax({
            url: "login.php",
            type: "POST",
            data: formData,
            dataType: 'json',
            contentType: false,
            cache: false,
            processData: false,
            success: function(data) {
              if(data.status=="success") {
                Swal.fire({
                title: "Register Successful",
                text: "Success",
                icon: "success"
              });
              }
              if(data.status=="error"){
                Swal.fire({
                  title: "Register Failed",
                  text: "All Fields Are Required",
                  icon: "error"
                  });
              }
            },
            error: function(xhr, status, error) {
              console.error("Error: " + status + " " + error);
            }
          });
        });
      });
      </script>

    <div class="navbar-area style-2">
      <div class="mobile-responsive-nav">
        <div class="container">
          <div class="mobile-responsive-menu">
            <div class="logo">
              <a href="index.php">
                <img
                  src="assets/images/white-logo.png"
                  class="main-logo"
                  height="40px"
                  width="80px"
                  alt="logo"
                />
              </a>
            </div>
          </div>
        </div>
      </div>
      <div class="desktop-nav style-2" >
        <div class="container-fluid">
          <nav class="navbar navbar-expand-md navbar-light">
            <a class="navbar-brand me-0" href="index.php">
                <div class="cyber-armor">
                    <img src="assets/images/white-logo.png" class="black-logo" height="50px" width="100px" alt="logo" />
                    <span class="text">Cyber Armor</span>
                  </div>
            </a>
            <div
              class="collapse navbar-collapse mean-menu"
              id="navbarSupportedContent"
            >
              <ul class="navbar-nav m-auto">
                <li class="nav-item">
                  <a href="#" class="nav-link" active> Home </a>
                </li>

                <li class="nav-item">
                  <a href="about.html" class="nav-link">About</a>
                </li>
                <li class="nav-item">
                  <a href="#" class="nav-link dropdown-toggle"> Services </a>
                  <ul class="dropdown-menu">
                    <li class="nav-item">
                        <a href="web-testing.html" class="nav-link">Web Testing</a>
                    </li>
                    <li class="nav-item">
                        <a href="App-testing.html" class="nav-link">App Testing</a>
                    </li>
                    <li class="nav-item">
                        <a href="Network-Penetration-Testing.html" class="nav-link">Network Penetration</a>
                    </li>
                    <li class="nav-item">
                        <a href="Digital-Forensics-Testing.html" class="nav-link">Digital Forensics</a>
                    </li>
                  </ul>
                </li>
                <li class="nav-item">
                    <a href="#" class="nav-link dropdown-toggle">
                        Report A Cyber Crime
                    </a>
                    <ul class="dropdown-menu">
                        <li class="nav-item">
                            <a href="financial_fraud.html" class="nav-link">Financial Fraud Report</a>
                        </li>
                        <li class="nav-item">
                            <a href="Social-Media-Fraud.html" class="nav-link">Social Media Fraud Report</a>
                        </li>
                        <li class="nav-item">
                            <a href="RansomeWare.html" class="nav-link">Ransomware Attacks Report</a>
                        </li>
                        <li class="nav-item">
                            <a href="OtherFraudReport.html" class="nav-link">Other Fraud Report</a>
                        </li>
                    </ul>
                </li>
                <li class="nav-item">
                  <a href="#" class="nav-link dropdown-toggle"> Pages </a>

                  <ul class="dropdown-menu">
                    <li class="nav-item">
                      <a href="faq.html" class="nav-link">FAQ</a>
                    </li>
                    <li class="nav-item">
                      <a href="team.html" class="nav-link">Team</a>
                    </li>
                    <li class="nav-item">
                      <a href="pricing.html" class="nav-link">Pricing</a>
                    </li>
                    <li class="nav-item">
                      <a href="privacy-policy.html" class="nav-link"
                        >Privacy Policy</a>
                    </li>
                    <li class="nav-item">
                      <a href="terms-conditions.html" class="nav-link"
                        >Terms & Conditions</a
                      >
                    </li>
                  </ul>
                </li>
              
                <li class="nav-item">
                  <a href="contact.html" class="nav-link">Contact</a>
                </li>
                <li class="nav-item">
                  <a href="logout.php" class="nav-link">Logout</a>
                </li>
              </ul>

              <div class="others-options">
                <ul>
                  <li>
                    <button
                      type="button"
                      class="btn btn-primary"
                      data-bs-toggle="modal"
                      data-bs-target="#exampleModal"
                    >
                      <i class="ri-search-line"></i>
                    </button>
                  </li>
                  <li>
                    <a
                      class="default-btn text-decoration-none"
                      href="#loginModal2" data-toggle="modal" 
                    >
                      <i class="ri-arrow-right-line"></i>
                      Track Report Status
                    </a>

                    <a
                      class="quote d-none text-decoration-none"
                      href="contact.html"
                    >
                      <i class="ri-chat-quote-line"></i>
                    </a>
                  </li>
                </ul>
              </div>
            </div>
          </nav>
        </div>
      </div>
      <div class="others-option-for-responsive">
        <div class="container">
          <div class="dot-menu">
            <div class="inner">
              <div class="circle circle-one"></div>
              <div class="circle circle-two"></div>
              <div class="circle circle-three"></div>
            </div>
          </div>

          <div class="container">
            <div class="option-inner">
              <div
                class="others-options justify-content-center d-flex align-items-center"
              >
                <ul>
                  <li>
                    <button
                      type="button"
                      class="btn btn-primary"
                      data-bs-toggle="modal"
                      data-bs-target="#exampleModal"
                    >
                      <i class="ri-search-2-line"></i>
                    </button>
                  </li>
                  <li>
                    <a class="quote text-decoration-none" href="contact.html">
                      <i class="ri-chat-quote-line"></i>
                    </a>
                  </li>
                </ul>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- End Navbar Area -->

    <!-- Start Banner Area -->
    
      <div class="container-fluid">
        <div class="row" data-cues="slideInUp">
            <div class="hero">
                <video autoplay loop muted playsinline class="background-video">
                  <source src="assets/images/hero/herovideo.webm" >
                </video>
                <div class="hero-content">
                  <div class="cyber-armor">
                  <h1 class="text" style="font-size: 2rem;">Cyber Armor</h1>
                  </div>
                  <!-- <div class="container">
                    <h3 class="neon">I'Am Talking About Cyber Security.India Must Take The Lead In Cyber Security Through Innovation.Can We Secure the World From A Bloodless War?<br>on the other side of fear</h3>
                  </div> -->
                </div>
              </div>
          <!-- <div class="col-lg-6"> -->
            <!-- <div class="banner-content">
              <div class="title">
                <h1>Essential Policy for Cyber security Protection.</h1>
                <p>
                  In today's increasingly digital world, cybersecurity has
                  become paramount. With the rapid expansion of online
                  activities,
                </p>
              </div>
              <div class="banner-button d-flex align-items-center">
                <a class="demo text-decoration-none" href="contact.html"
                  >Request A Demo</a
                >
                <div class="play-btn d-flex align-items-center">
                  <a
                    href="https://www.youtube.com/watch?v=0O2aH4XLbto"
                    class="text-decoration-none popup-youtube icon"
                  >
                    <i class="ri-play-mini-fill"></i>
                  </a>
                  <a
                    class="text-decoration-none popup-youtube"
                    href="https://www.youtube.com/watch?v=0O2aH4XLbto"
                  >
                    Watch Intro Video
                  </a>
                </div>
              </div>
            </div> -->
          <!-- </div> -->
          <!-- <div class="col-lg-6">
            <div class="banner-image">
              <img src="assets/images/hero/hero-2.png" alt="banner-image" />
            </div>
          </div> -->
        </div>
      </div>
      <!-- <div class="shape">
        <div class="shape-2">
          <img src="assets/images/shape/shape-2.png" alt="shape" />
        </div>
      </div> -->
    
    <!-- End Banner Area -->

    <!-- Start Security Area -->
    <div class="security-area style-2 pt-100 pb-75">
      <div class="container">
        <div class="section-title text-center style-2" data-cue="slideInUp">
          <span class="d-block">What We Do</span>
          <h2>Our Cyber Crime Reporting Services</h2>
        </div>
        <div class="row justify-content-center" data-cues="fadeIn">
          <div class="col-lg-3 col-md-6">
            <div class="single-security-item d-flex align-items-center">
              <div class="icon">
                <svg
                  xmlns="http://www.w3.org/2000/svg"
                  width="86"
                  height="86"
                  viewBox="0 0 86 86"
                  fill="none"
                >
                  <g clip-path="url(#clip0_404_5)">
                    <mask
                      id="mask0_404_5"
                      style="mask-type: luminance"
                      maskUnits="userSpaceOnUse"
                      x="0"
                      y="0"
                      width="86"
                      height="86"
                    >
                      <path d="M86 0H0V86H86V0Z" fill="white" />
                    </mask>
                    <g mask="url(#mask0_404_5)">
                      <path
                        fill-rule="evenodd"
                        clip-rule="evenodd"
                        d="M21.5 0H0V43H21.5C9.62589 43 0 52.626 0 64.5V86H43V64.5C43 76.374 52.626 86 64.5 86H86V43H64.5C76.374 43 86 33.3741 86 21.5V0H43V21.5C43 9.62589 33.3741 0 21.5 0ZM43 43H21.5C33.3741 43 43 52.626 43 64.5V43ZM43 43V21.5C43 33.3741 52.626 43 64.5 43H43Z"
                        fill="url(#paint0_linear_404_5)"
                      />
                    </g>
                  </g>
                  <defs>
                    <linearGradient
                      id="paint0_linear_404_5"
                      x1="43"
                      y1="0"
                      x2="43"
                      y2="86"
                      gradientUnits="userSpaceOnUse"
                    >
                      <stop stop-color="#A7B5FF" />
                      <stop offset="1" stop-color="#F3ACFF" />
                    </linearGradient>
                    <clipPath id="clip0_404_5">
                      <rect width="86" height="86" fill="white" />
                    </clipPath>
                  </defs>
                </svg>
              </div>
              <div class="content">
                <h3>
                  <a class="text-decoration-none" href="financial_fraud.html"
                    >Financial Fraud Report</a
                  >
                </h3>
                <a
                  class="read-more text-decoration-none"
                  href="service-details.html"
                >
                  Read More
                  <i class="ri-arrow-right-line"></i>
                </a>
              </div>
            </div>
          </div>
          <div class="col-lg-3 col-md-6">
            <div class="single-security-item d-flex align-items-center">
              <div class="icon">
                <svg
                  xmlns="http://www.w3.org/2000/svg"
                  width="86"
                  height="86"
                  viewBox="0 0 86 86"
                  fill="none"
                >
                  <g clip-path="url(#clip0_404_5)">
                    <mask
                      id="mask0_404_5"
                      style="mask-type: luminance"
                      maskUnits="userSpaceOnUse"
                      x="0"
                      y="0"
                      width="86"
                      height="86"
                    >
                      <path d="M86 0H0V86H86V0Z" fill="white" />
                    </mask>
                    <g mask="url(#mask0_404_5)">
                      <path
                        fill-rule="evenodd"
                        clip-rule="evenodd"
                        d="M21.5 0H0V43H21.5C9.62589 43 0 52.626 0 64.5V86H43V64.5C43 76.374 52.626 86 64.5 86H86V43H64.5C76.374 43 86 33.3741 86 21.5V0H43V21.5C43 9.62589 33.3741 0 21.5 0ZM43 43H21.5C33.3741 43 43 52.626 43 64.5V43ZM43 43V21.5C43 33.3741 52.626 43 64.5 43H43Z"
                        fill="url(#paint0_linear_404_5)"
                      />
                    </g>
                  </g>
                  <defs>
                    <linearGradient
                      id="paint0_linear_404_5"
                      x1="43"
                      y1="0"
                      x2="43"
                      y2="86"
                      gradientUnits="userSpaceOnUse"
                    >
                      <stop stop-color="#A7B5FF" />
                      <stop offset="1" stop-color="#F3ACFF" />
                    </linearGradient>
                    <clipPath id="clip0_404_5">
                      <rect width="86" height="86" fill="white" />
                    </clipPath>
                  </defs>
                </svg>
              </div>
              <div class="content">
                <h3>
                  <a class="text-decoration-none" href="Social-Media-Fraud.html"
                    >Social Media Fraud Report</a
                  >
                </h3>
                <a
                  class="read-more text-decoration-none"
                  href="service-details.html"
                >
                  Read More
                  <i class="ri-arrow-right-line"></i>
                </a>
              </div>
            </div>
          </div>
          <div class="col-lg-3 col-md-6">
            <div class="single-security-item d-flex align-items-center">
              <div class="icon">
                <svg
                  xmlns="http://www.w3.org/2000/svg"
                  width="86"
                  height="86"
                  viewBox="0 0 86 86"
                  fill="none"
                >
                  <g clip-path="url(#clip0_404_5)">
                    <mask
                      id="mask0_404_5"
                      style="mask-type: luminance"
                      maskUnits="userSpaceOnUse"
                      x="0"
                      y="0"
                      width="86"
                      height="86"
                    >
                      <path d="M86 0H0V86H86V0Z" fill="white" />
                    </mask>
                    <g mask="url(#mask0_404_5)">
                      <path
                        fill-rule="evenodd"
                        clip-rule="evenodd"
                        d="M21.5 0H0V43H21.5C9.62589 43 0 52.626 0 64.5V86H43V64.5C43 76.374 52.626 86 64.5 86H86V43H64.5C76.374 43 86 33.3741 86 21.5V0H43V21.5C43 9.62589 33.3741 0 21.5 0ZM43 43H21.5C33.3741 43 43 52.626 43 64.5V43ZM43 43V21.5C43 33.3741 52.626 43 64.5 43H43Z"
                        fill="url(#paint0_linear_404_5)"
                      />
                    </g>
                  </g>
                  <defs>
                    <linearGradient
                      id="paint0_linear_404_5"
                      x1="43"
                      y1="0"
                      x2="43"
                      y2="86"
                      gradientUnits="userSpaceOnUse"
                    >
                      <stop stop-color="#A7B5FF" />
                      <stop offset="1" stop-color="#F3ACFF" />
                    </linearGradient>
                    <clipPath id="clip0_404_5">
                      <rect width="86" height="86" fill="white" />
                    </clipPath>
                  </defs>
                </svg>
              </div>
              <div class="content">
                <h3>
                  <a class="text-decoration-none" href="RansomeWare.html"
                    >Ransomware Attacks Report</a
                  >
                </h3>
                <a
                  class="read-more text-decoration-none"
                  href="service-details.html"
                >
                  Read More
                  <i class="ri-arrow-right-line"></i>
                </a>
              </div>
              
            </div>
          </div>
          <div class="col-lg-3 col-md-6">
            <div class="single-security-item d-flex align-items-center">
              <div class="icon">
                <svg
                  xmlns="http://www.w3.org/2000/svg"
                  width="86"
                  height="86"
                  viewBox="0 0 86 86"
                  fill="none"
                >
                  <g clip-path="url(#clip0_404_5)">
                    <mask
                      id="mask0_404_5"
                      style="mask-type: luminance"
                      maskUnits="userSpaceOnUse"
                      x="0"
                      y="0"
                      width="86"
                      height="86"
                    >
                      <path d="M86 0H0V86H86V0Z" fill="white" />
                    </mask>
                    <g mask="url(#mask0_404_5)">
                      <path
                        fill-rule="evenodd"
                        clip-rule="evenodd"
                        d="M21.5 0H0V43H21.5C9.62589 43 0 52.626 0 64.5V86H43V64.5C43 76.374 52.626 86 64.5 86H86V43H64.5C76.374 43 86 33.3741 86 21.5V0H43V21.5C43 9.62589 33.3741 0 21.5 0ZM43 43H21.5C33.3741 43 43 52.626 43 64.5V43ZM43 43V21.5C43 33.3741 52.626 43 64.5 43H43Z"
                        fill="url(#paint0_linear_404_5)"
                      />
                    </g>
                  </g>
                  <defs>
                    <linearGradient
                      id="paint0_linear_404_5"
                      x1="43"
                      y1="0"
                      x2="43"
                      y2="86"
                      gradientUnits="userSpaceOnUse"
                    >
                      <stop stop-color="#A7B5FF" />
                      <stop offset="1" stop-color="#F3ACFF" />
                    </linearGradient>
                    <clipPath id="clip0_404_5">
                      <rect width="86" height="86" fill="white" />
                    </clipPath>
                  </defs>
                </svg>
              </div>
              <div class="content">
                <h3>
                  <a class="text-decoration-none" href="OtherFraudReport.html"
                    >Other Fraud Report</a
                  >
                </h3>
                <a
                  class="read-more text-decoration-none"
                  href="OtherFraudReport.html"
                >
                  Read More
                  <i class="ri-arrow-right-line"></i>
                </a>
              </div>
              
            </div>
          </div>
        </div>
      </div>
      <div class="background-ellipse"></div>
    </div>
    <!-- End Security Area -->

    <!-- Start About Area -->
    <div class="about-area style-2 pb-75">
      <div class="container">
        <div class="row align-items-center" data-cue="slideInUp">
          <div class="col-lg-6">
            <div class="about-image style-2">
              <div class="image-1">
                <img src="assets/images/about/about-4.jpg" alt="about-image" />
              </div>
              <div class="image-two">
                <img src="assets/images/about/3d-internet-secuirty-badge_1048-18106.avif" alt="about-image" />
              </div>
            </div>
          </div>
          <div class="col-lg-6">
            <div class="about-content style-2">
              <div class="title">
                <span class="d-block">About Cyber Armor</span>
                <h2>The Comprehensive Solution for Your Needs.</h2>
                <p>
                  Organizations are now compelled to complete comprehensive
                  cybersecurity strategies to safeguard their systems, networks,
                  and data from the relentless onslaught of cyber threats,
                  ensuring the protection of privacy...
                </p>
              </div>
              <div class="content-card d-flex align-items-center">
                <div class="icon">
                  <svg
                    xmlns="http://www.w3.org/2000/svg"
                    width="30"
                    height="30"
                    viewBox="0 0 30 30"
                    fill="none"
                  >
                    <g clip-path="url(#clip0_179_4)">
                      <path
                        d="M15 20C14.0111 20 13.0444 19.7068 12.2221 19.1574C11.3999 18.6079 10.759 17.8271 10.3806 16.9134C10.0022 15.9998 9.90315 14.9945 10.0961 14.0246C10.289 13.0546 10.7652 12.1637 11.4645 11.4645C12.1637 10.7652 13.0546 10.289 14.0245 10.0961C14.9945 9.90315 15.9998 10.0022 16.9134 10.3806C17.827 10.759 18.6079 11.3999 19.1573 12.2222C19.7068 13.0444 20 14.0111 20 15C20 16.3261 19.4732 17.5979 18.5355 18.5355C17.5979 19.4732 16.3261 20 15 20ZM15 12.5C14.5055 12.5 14.0222 12.6466 13.6111 12.9213C13.2 13.196 12.8795 13.5865 12.6903 14.0433C12.5011 14.5001 12.4516 15.0028 12.548 15.4877C12.6445 15.9727 12.8826 16.4181 13.2322 16.7678C13.5819 17.1174 14.0273 17.3555 14.5123 17.452C14.9972 17.5484 15.4999 17.4989 15.9567 17.3097C16.4135 17.1205 16.804 16.8001 17.0787 16.3889C17.3534 15.9778 17.5 15.4945 17.5 15C17.5 14.337 17.2366 13.7011 16.7678 13.2322C16.2989 12.7634 15.663 12.5 15 12.5ZM22.5 28.75C22.5 26.7609 21.7098 24.8532 20.3033 23.4467C18.8968 22.0402 16.9891 21.25 15 21.25C13.0109 21.25 11.1032 22.0402 9.6967 23.4467C8.29018 24.8532 7.5 26.7609 7.5 28.75C7.5 29.0815 7.6317 29.3995 7.86612 29.6339C8.10054 29.8683 8.41848 30 8.75 30C9.08152 30 9.39946 29.8683 9.63388 29.6339C9.8683 29.3995 10 29.0815 10 28.75C10 27.4239 10.5268 26.1522 11.4645 25.2145C12.4021 24.2768 13.6739 23.75 15 23.75C16.3261 23.75 17.5979 24.2768 18.5355 25.2145C19.4732 26.1522 20 27.4239 20 28.75C20 29.0815 20.1317 29.3995 20.3661 29.6339C20.6005 29.8683 20.9185 30 21.25 30C21.5815 30 21.8995 29.8683 22.1339 29.6339C22.3683 29.3995 22.5 29.0815 22.5 28.75ZM22.5 10C21.5111 10 20.5444 9.70676 19.7221 9.15735C18.8999 8.60794 18.259 7.82705 17.8806 6.91342C17.5022 5.99979 17.4031 4.99446 17.5961 4.02455C17.789 3.05465 18.2652 2.16373 18.9645 1.46447C19.6637 0.765206 20.5546 0.289002 21.5245 0.0960758C22.4945 -0.0968503 23.4998 0.00216641 24.4134 0.380605C25.327 0.759043 26.1079 1.39991 26.6573 2.22215C27.2068 3.0444 27.5 4.0111 27.5 5C27.5 6.32609 26.9732 7.59785 26.0355 8.53554C25.0979 9.47322 23.8261 10 22.5 10ZM22.5 2.5C22.0055 2.5 21.5222 2.64662 21.1111 2.92133C20.7 3.19603 20.3795 3.58648 20.1903 4.04329C20.0011 4.50011 19.9516 5.00278 20.048 5.48773C20.1445 5.97268 20.3826 6.41814 20.7322 6.76777C21.0819 7.1174 21.5273 7.3555 22.0123 7.45197C22.4972 7.54843 22.9999 7.49892 23.4567 7.3097C23.9135 7.12048 24.304 6.80005 24.5787 6.38893C24.8534 5.9778 25 5.49446 25 5C25 4.33696 24.7366 3.70108 24.2678 3.23224C23.7989 2.76339 23.163 2.5 22.5 2.5ZM30 18.75C29.998 16.7615 29.2072 14.855 27.8011 13.4489C26.395 12.0428 24.4885 11.252 22.5 11.25C22.1685 11.25 21.8505 11.3817 21.6161 11.6161C21.3817 11.8505 21.25 12.1685 21.25 12.5C21.25 12.8315 21.3817 13.1495 21.6161 13.3839C21.8505 13.6183 22.1685 13.75 22.5 13.75C23.8261 13.75 25.0979 14.2768 26.0355 15.2145C26.9732 16.1521 27.5 17.4239 27.5 18.75C27.5 19.0815 27.6317 19.3995 27.8661 19.6339C28.1005 19.8683 28.4185 20 28.75 20C29.0815 20 29.3995 19.8683 29.6339 19.6339C29.8683 19.3995 30 19.0815 30 18.75ZM7.5 10C6.51109 10 5.54439 9.70676 4.72215 9.15735C3.8999 8.60794 3.25904 7.82705 2.8806 6.91342C2.50216 5.99979 2.40315 4.99446 2.59607 4.02455C2.789 3.05465 3.2652 2.16373 3.96447 1.46447C4.66373 0.765206 5.55464 0.289002 6.52455 0.0960758C7.49445 -0.0968503 8.49979 0.00216641 9.41342 0.380605C10.327 0.759043 11.1079 1.39991 11.6573 2.22215C12.2068 3.0444 12.5 4.0111 12.5 5C12.5 6.32609 11.9732 7.59785 11.0355 8.53554C10.0979 9.47322 8.82608 10 7.5 10ZM7.5 2.5C7.00555 2.5 6.5222 2.64662 6.11107 2.92133C5.69995 3.19603 5.37952 3.58648 5.1903 4.04329C5.00108 4.50011 4.95157 5.00278 5.04804 5.48773C5.1445 5.97268 5.3826 6.41814 5.73223 6.76777C6.08186 7.1174 6.52732 7.3555 7.01227 7.45197C7.49723 7.54843 7.99989 7.49892 8.45671 7.3097C8.91352 7.12048 9.30397 6.80005 9.57867 6.38893C9.85338 5.9778 10 5.49446 10 5C10 4.33696 9.73661 3.70108 9.26777 3.23224C8.79893 2.76339 8.16304 2.5 7.5 2.5ZM2.5 18.75C2.5 17.4239 3.02678 16.1521 3.96447 15.2145C4.90215 14.2768 6.17392 13.75 7.5 13.75C7.83152 13.75 8.14946 13.6183 8.38388 13.3839C8.6183 13.1495 8.75 12.8315 8.75 12.5C8.75 12.1685 8.6183 11.8505 8.38388 11.6161C8.14946 11.3817 7.83152 11.25 7.5 11.25C5.51149 11.252 3.60498 12.0428 2.19889 13.4489C0.792799 14.855 0.00198554 16.7615 0 18.75C0 19.0815 0.131696 19.3995 0.366117 19.6339C0.600537 19.8683 0.918479 20 1.25 20C1.58152 20 1.89946 19.8683 2.13388 19.6339C2.3683 19.3995 2.5 19.0815 2.5 18.75Z"
                        fill="black"
                      />
                    </g>
                  </svg>
                </div>
                <div class="content">
                  <h3>Highly Professional Members</h3>
                  <p>
                    Organizations are now forced to implement comprehensive
                    cyber security strategies to protect their systems,
                  </p>
                </div>
              </div>
              <div class="content-card d-flex align-items-center">
                <div class="icon">
                  <svg
                    xmlns="http://www.w3.org/2000/svg"
                    width="30"
                    height="30"
                    viewBox="0 0 30 30"
                    fill="none"
                  >
                    <g clip-path="url(#clip0_179_2)">
                      <path
                        d="M25 13.75C25 14.4412 24.44 15 23.75 15C23.06 15 22.5 14.4412 22.5 13.75C22.5 10.3038 19.6963 7.5 16.25 7.5C15.56 7.5 15 6.94125 15 6.25C15 5.55875 15.56 5 16.25 5C21.075 5 25 8.92625 25 13.75ZM17.5 13.75C17.5 14.4412 18.06 15 18.75 15C19.44 15 20 14.4412 20 13.75C20 11.6825 18.3175 10 16.25 10C15.56 10 15 10.5588 15 11.25C15 11.9412 15.56 12.5 16.25 12.5C16.94 12.5 17.5 13.06 17.5 13.75ZM16.25 0C15.56 0 15 0.55875 15 1.25C15 1.94125 15.56 2.5 16.25 2.5C22.4525 2.5 27.5 7.54625 27.5 13.75C27.5 14.4412 28.06 15 28.75 15C29.44 15 30 14.4412 30 13.75C30 6.16875 23.8313 0 16.25 0ZM20.3075 22.9387C20.9975 23.6287 21.3338 24.58 21.2325 25.5513C21.1288 26.5325 20.5938 27.4037 19.7638 27.9437C17.65 29.3175 15.2325 29.9875 12.8275 29.9875C9.51 29.9875 6.21251 28.7137 3.75001 26.2512C-0.498745 22.0037 -1.21124 15.2687 2.05751 10.235C2.59626 9.40625 3.46751 8.87 4.44876 8.7675C5.41876 8.6625 6.37251 9.00125 7.06251 9.69125L12.8013 15.43L14.1163 14.115C14.605 13.6262 15.395 13.6262 15.8838 14.115C16.3725 14.6038 16.3725 15.3938 15.8838 15.8825L14.5688 17.1975L20.3075 22.9363V22.9387ZM18.54 24.7062L5.29376 11.46C5.12001 11.2863 4.92376 11.25 4.78751 11.25C4.47126 11.25 4.28 11.4025 4.15376 11.5963C1.52376 15.645 2.09751 21.0638 5.51626 24.4825C8.93501 27.9013 14.355 28.4737 18.4013 25.8463C18.5963 25.72 18.7213 25.5175 18.745 25.29C18.7588 25.1625 18.7513 24.9162 18.54 24.7062Z"
                        fill="#0C0B0B"
                      />
                    </g>
                  </svg>
                </div>
                <div class="content">
                  <h3>Infrastructure Integration Technology</h3>
                  <p>
                    Organizations are now forced to implement comprehensive
                    cyber security strategies to protect their systems,
                  </p>
                </div>
              </div>
              <a class="default-btn text-decoration-none" href="about.html">
                <i class="ri-arrow-right-line"></i>
                Know More About
              </a>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- End About Area -->

    <!-- Start Services Area -->
    <div class="services-area style-2 pb-75">
      <div class="container">
        <div class="section-title text-center style-2" data-cue="slideInUp">
          <span class="d-block">Our Services</span>
          <h2>From Your Cyber Security Services.</h2>
        </div>
        <div class="row" data-cues="fadeIn">
          <div class="col-lg-4 col-sm-6">
            <div class="single-services-info">
              <div class="icon">
                <svg
                  xmlns="http://www.w3.org/2000/svg"
                  width="90"
                  height="90"
                  viewBox="0 0 90 90"
                  fill="none"
                >
                  <g clip-path="url(#clip0_418_20)">
                    <path
                      fill-rule="evenodd"
                      clip-rule="evenodd"
                      d="M28.7999 0H89.5499V60.75H85.5882V30.375C85.5882 15.7875 73.7626 3.96196 59.1749 3.96196C44.5874 3.96196 32.7619 15.7874 32.7619 30.375V60.75H28.7999V0ZM61.2 29.25V90H0.449951L0.449956 29.25H4.41191V59.625C4.41191 74.2126 16.2374 86.0382 30.825 86.0382C45.4126 86.0382 57.2381 74.2126 57.2381 59.625V29.25H61.2Z"
                      fill="url(#paint0_linear_418_20)"
                    />
                  </g>
                  <defs>
                    <linearGradient
                      id="paint0_linear_418_20"
                      x1="12.7012"
                      y1="8.55"
                      x2="67.5067"
                      y2="77.9904"
                      gradientUnits="userSpaceOnUse"
                    >
                      <stop stop-color="#FFD9A0" />
                      <stop offset="1" stop-color="#FFF5F1" />
                    </linearGradient>
                    <clipPath id="clip0_418_20">
                      <rect width="90" height="90" fill="white" />
                    </clipPath>
                  </defs>
                </svg>
              </div>
              <h3>
                <a class="text-decoration-none" href="web-testing.html"
                  >Web testing</a
                >
              </h3>
              <p>
                Web security protects websites from cyber threats through encryption, secure authentication, and regular updates. It ensures data confidentiality, integrity, and user trust.
              </p>
              <a
                class="read-more text-decoration-none"
                href="web-testing.html"
              >
                Read More
                <i class="ri-arrow-right-line"></i>
              </a>
            </div>
          </div>
          <div class="col-lg-4 col-sm-6">
            <div class="single-services-info">
              <div class="icon">
                <svg
                  xmlns="http://www.w3.org/2000/svg"
                  width="90"
                  height="90"
                  viewBox="0 0 90 90"
                  fill="none"
                >
                  <g clip-path="url(#clip0_419_41)">
                    <mask
                      id="mask0_419_41"
                      style="mask-type: luminance"
                      maskUnits="userSpaceOnUse"
                      x="0"
                      y="0"
                      width="90"
                      height="90"
                    >
                      <path d="M0 0L0 90H90V0H0Z" fill="white" />
                    </mask>
                    <g mask="url(#mask0_419_41)">
                      <path
                        fill-rule="evenodd"
                        clip-rule="evenodd"
                        d="M19.4651 78.5938L19.465 90H25.535V78.5938C25.535 74.1429 29.1432 70.5348 33.5941 70.5348H33.616H45H56.3832H56.4061C60.8566 70.5348 64.4652 74.1429 64.4652 78.5938V90H70.5348V78.5938C70.5348 74.1429 74.1433 70.5348 78.5943 70.5348H78.6159H90V64.4652H78.6159H78.5943C74.1433 64.4652 70.5348 60.8571 70.5348 56.4062V45V33.594C70.5348 29.1431 74.1433 25.5349 78.5943 25.5349L78.6159 25.5349H90V19.4651H78.6159H78.5943C74.1433 19.4651 70.5348 15.8569 70.5348 11.406V0L64.4652 2.6532e-07V11.406C64.4652 15.8569 60.8566 19.4651 56.4061 19.4651H56.3841H45H33.616H33.5941C29.1432 19.4651 25.535 15.8569 25.535 11.406V1.96701e-06L19.465 2.23234e-06V11.406C19.465 15.8569 15.8568 19.4651 11.4059 19.4651L11.384 19.4651H0L3.37725e-08 25.5349H11.3834L11.4059 25.5349C15.8568 25.5349 19.4651 29.1431 19.4651 33.594L19.465 45L19.4651 56.4062C19.4651 60.8571 15.8568 64.4652 11.4059 64.4652H11.384H0L3.37725e-08 70.5348H11.3834H11.4059C15.8568 70.5348 19.4651 74.1429 19.4651 78.5938ZM64.4652 45V33.594C64.4652 29.1431 60.8566 25.5349 56.4061 25.5349L56.3832 25.5349H45H33.616L33.5941 25.5349C29.1432 25.5349 25.535 29.1431 25.535 33.594V45V56.4062C25.535 60.8571 29.1432 64.4652 33.5941 64.4652H33.616H45H56.3841H56.4061C60.8566 64.4652 64.4652 60.8571 64.4652 56.4062V45Z"
                        fill="url(#paint0_linear_419_41)"
                      />
                    </g>
                  </g>
                  <defs>
                    <linearGradient
                      id="paint0_linear_419_41"
                      x1="-1.08239e-06"
                      y1="45"
                      x2="90"
                      y2="45"
                      gradientUnits="userSpaceOnUse"
                    >
                      <stop stop-color="#A7B5FF" />
                      <stop offset="1" stop-color="#F3ACFF" />
                    </linearGradient>
                    <clipPath id="clip0_419_41">
                      <rect width="90" height="90" fill="white" />
                    </clipPath>
                  </defs>
                </svg>
              </div>
              <h3>
                <a class="text-decoration-none" href="App-testing.html"
                  >App Testing</a
                >
              </h3>
              <p>
                App testing involves evaluating a mobile application for functionality, usability, and performance to ensure it meets user expectations and requirements.
              </p>
              <a
                class="read-more text-decoration-none"
                href="App-testing.html"
              >
                Read More
                <i class="ri-arrow-right-line"></i>
              </a>
            </div>
          </div>
          <div class="col-lg-4 col-sm-6">
            <div class="single-services-info">
              <div class="icon">
                <svg
                  xmlns="http://www.w3.org/2000/svg"
                  width="90"
                  height="90"
                  viewBox="0 0 90 90"
                  fill="none"
                >
                  <g clip-path="url(#clip0_419_47)">
                    <mask
                      id="mask0_419_47"
                      style="mask-type: luminance"
                      maskUnits="userSpaceOnUse"
                      x="0"
                      y="0"
                      width="90"
                      height="90"
                    >
                      <path d="M90 0H0V90H90V0Z" fill="white" />
                    </mask>
                    <g mask="url(#mask0_419_47)">
                      <path
                        fill-rule="evenodd"
                        clip-rule="evenodd"
                        d="M59.4612 74.0416C55.0944 81.3199 49.8136 84.6 45 84.6C40.1862 84.6 34.9055 81.3199 30.5386 74.0416C26.2361 66.8709 23.4 56.6158 23.4 45C23.4 33.384 26.2361 23.1292 30.5386 15.9585C34.9055 8.68027 40.1862 5.4 45 5.4C49.8136 5.4 55.0944 8.68027 59.4612 15.9585C63.7636 23.1292 66.6 33.384 66.6 45C66.6 56.6158 63.7636 66.8709 59.4612 74.0416ZM90 45C90 20.1472 69.8526 0 45 0C20.1472 0 0 20.1472 0 45C0 69.8526 20.1472 90 45 90C69.8526 90 90 69.8526 90 45ZM5.4 45C5.4 61.1685 15.0897 75.0735 28.9788 81.225C22.3192 73.03 18 59.8559 18 45C18 30.1443 22.3192 16.9699 28.9788 8.77477C15.0897 14.9265 5.4 28.8317 5.4 45ZM84.6 45C84.6 61.1685 74.9101 75.0735 61.0213 81.225C67.6809 73.03 72 59.8559 72 45C72 30.1443 67.6809 16.9699 61.0213 8.77477C74.9101 14.9265 84.6 28.8317 84.6 45ZM45 49.95C47.7337 49.95 49.95 47.7337 49.95 45C49.95 42.2662 47.7337 40.05 45 40.05C42.2662 40.05 40.05 42.2662 40.05 45C40.05 47.7337 42.2662 49.95 45 49.95Z"
                        fill="url(#paint0_linear_419_47)"
                      />
                    </g>
                  </g>
                  <defs>
                    <linearGradient
                      id="paint0_linear_419_47"
                      x1="45"
                      y1="0"
                      x2="45"
                      y2="90"
                      gradientUnits="userSpaceOnUse"
                    >
                      <stop stop-color="#B8DBFC" />
                      <stop offset="1" stop-color="#F8FBFE" />
                    </linearGradient>
                    <clipPath id="clip0_419_47">
                      <rect width="90" height="90" fill="white" />
                    </clipPath>
                  </defs>
                </svg>
              </div>
              <h3>
                <a class="text-decoration-none" href="Network-Penetration-Testing.html"
                  >Network Penetration</a
                >
              </h3>
              <p>
                Network security is crucial for protecting data from unauthorized access and cyber threats, utilizing firewalls and encryption to maintain data integrity and confidentiality.
              </p>
              <a
                class="read-more text-decoration-none"
                href="service-details.html"
              >
                Read More
                <i class="ri-arrow-right-line"></i>
              </a>
            </div>
          </div>
          <div class="col-lg-4 col-sm-6">
            <div class="single-services-info">
              <div class="icon">
                <svg
                  xmlns="http://www.w3.org/2000/svg"
                  width="90"
                  height="90"
                  viewBox="0 0 90 90"
                  fill="none"
                >
                  <g clip-path="url(#clip0_419_101)">
                    <mask
                      id="mask0_419_101"
                      style="mask-type: luminance"
                      maskUnits="userSpaceOnUse"
                      x="0"
                      y="0"
                      width="90"
                      height="90"
                    >
                      <path d="M90 0H0V90H90V0Z" fill="white" />
                    </mask>
                    <g mask="url(#mask0_419_101)">
                      <path
                        d="M45 90C41.25 90 38.125 88.789 35.625 86.3671C33.125 83.9453 31.875 81.0157 31.875 77.5782C31.875 75.6252 32.2656 73.8671 33.0469 72.3046C33.8281 70.7422 35.1953 69.0232 37.1484 67.1485C39.1797 65.2734 40.7812 63.5157 41.9531 61.875C43.2031 60.1564 43.8281 58.6719 43.8281 57.4218V53.203C42.1094 52.8124 40.5859 52.0312 39.2578 50.8595C38.0078 49.6094 37.1875 48.1248 36.7969 46.4062H32.5781C31.25 46.4062 29.6875 47.0313 27.8906 48.2814C26.0937 49.531 24.375 51.0547 22.7344 52.8516C21.0938 54.6484 19.4531 55.9764 17.8125 56.8359C16.25 57.6954 14.4531 58.1252 12.4219 58.1252C8.90627 58.1252 5.93748 56.875 3.51562 54.3748C1.17188 51.8751 0 48.7498 0 45C0 41.25 1.17188 38.125 3.51562 35.625C5.93748 33.125 8.90627 31.875 12.4219 31.875C15.7031 31.875 18.5156 33.0469 20.8594 35.3906C23.2031 37.7344 25.3125 39.7265 27.1875 41.3672C29.0625 43.0078 30.8594 43.8281 32.5781 43.8281H36.7969C37.1875 42.0313 38.0078 40.5468 39.2578 39.375C40.5859 38.125 42.1094 37.3437 43.8281 37.0312V32.8125C43.8281 30.7813 42.2656 28.2031 39.1406 25.0781L36.6797 22.6172C33.4766 19.4141 31.875 16.0156 31.875 12.4219C31.875 8.90627 33.125 5.97654 35.625 3.63281C38.2031 1.21094 41.3281 0 45 0C48.7498 0 51.8751 1.21094 54.3748 3.63281C56.875 6.05471 58.1252 8.98439 58.1252 12.4219C58.1252 16.4062 56.1717 20.1563 52.2657 23.6719C48.3592 27.2656 46.4062 30.3125 46.4062 32.8125V37.0312C48.2031 37.3437 49.6876 38.125 50.8595 39.375C52.1096 40.5468 52.8907 42.0313 53.203 43.8281H57.4218C60.0781 43.8281 63.1251 41.8359 66.5627 37.8516C70.078 33.8672 73.75 31.875 77.5782 31.875C81.0936 31.875 84.0236 33.1641 86.3671 35.7422C88.789 38.2422 90 41.3281 90 45C90 48.7498 88.789 51.8751 86.3671 54.3748C83.9453 56.875 81.0157 58.1252 77.5782 58.1252C74.2968 58.1252 71.5235 56.992 69.2577 54.7267C66.9924 52.461 64.8828 50.508 62.9298 48.8673C60.9763 47.2266 59.1408 46.4062 57.4218 46.4062H53.203C52.578 50.1561 50.3127 52.4218 46.4062 53.203V57.4218C46.4062 59.7654 48.3592 62.7737 52.2657 66.4452C56.1717 70.1172 58.1252 73.8279 58.1252 77.5782C58.1252 81.0936 56.8359 84.0236 54.2578 86.3671C51.7576 88.789 48.672 90 45 90Z"
                        fill="url(#paint0_linear_419_101)"
                      />
                    </g>
                  </g>
                  <defs>
                    <linearGradient
                      id="paint0_linear_419_101"
                      x1="70.875"
                      y1="14.4"
                      x2="19.8"
                      y2="66.375"
                      gradientUnits="userSpaceOnUse"
                    >
                      <stop offset="0.0509862" stop-color="#FFB6E1" />
                      <stop offset="1" stop-color="#FBE3EA" />
                    </linearGradient>
                    <clipPath id="clip0_419_101">
                      <rect width="90" height="90" fill="white" />
                    </clipPath>
                  </defs>
                </svg>
              </div>
              <h3>
                <a class="text-decoration-none" href="service-details.html"
                  >Endpoint Detection and Response (EDR)</a
                >
              </h3>
              <p>
                EDR monitors and responds to endpoint threats in real-time, enhancing cybersecurity defenses.
              </p>
              <a
                class="read-more text-decoration-none"
                href="service-details.html"
              >
                Read More
                <i class="ri-arrow-right-line"></i>
              </a>
            </div>
          </div>
          <div class="col-lg-4 col-sm-6">
            <div class="single-services-info">
              <div class="icon">
                <svg
                  xmlns="http://www.w3.org/2000/svg"
                  width="90"
                  height="90"
                  viewBox="0 0 90 90"
                  fill="none"
                >
                  <g clip-path="url(#clip0_419_89)">
                    <mask
                      id="mask0_419_89"
                      style="mask-type: luminance"
                      maskUnits="userSpaceOnUse"
                      x="0"
                      y="0"
                      width="90"
                      height="90"
                    >
                      <path d="M90 0H0V90H90V0Z" fill="white" />
                    </mask>
                    <g mask="url(#mask0_419_89)">
                      <path
                        fill-rule="evenodd"
                        clip-rule="evenodd"
                        d="M46.4143 0C47.4084 0 48.2143 0.805887 48.2143 1.8V19.2037C48.2143 21.1821 50.9422 21.7124 51.6834 19.878L58.2025 3.74155C58.5751 2.81983 59.6241 2.37451 60.5461 2.74691L63.1687 3.80651C64.0903 4.17892 64.5359 5.22801 64.1633 6.14974L57.213 23.3527C56.4781 25.1707 58.7677 26.6863 60.1546 25.2998L73.2739 12.1801C73.9773 11.4772 75.1167 11.4772 75.8196 12.1801L77.8198 14.1802C78.5228 14.8832 78.5228 16.0228 77.8198 16.7258L66.0384 28.5072C64.6321 29.9137 66.2094 32.2258 68.0319 31.4294L83.2995 24.7588C84.2107 24.3608 85.2719 24.7766 85.6696 25.6876L86.8023 28.2796C87.2001 29.1906 86.7843 30.2517 85.8735 30.6497L68.2803 38.3363C66.4929 39.1171 67.0505 41.7857 69.0007 41.7857H88.2C89.194 41.7857 90 42.5916 90 43.5857V46.4143C90 47.4084 89.194 48.2143 88.2 48.2143H69.0012C67.0504 48.2143 66.4933 50.8828 68.2803 51.6636L85.8735 59.3505C86.7843 59.7483 87.2001 60.8094 86.8023 61.7202L85.6696 64.3122C85.2719 65.2234 84.2107 65.6392 83.2995 65.241L68.0319 58.5706C66.2094 57.7741 64.6321 60.0863 66.0384 61.493L77.8198 73.2739C78.5228 73.9773 78.5228 75.1167 77.8198 75.8196L75.8196 77.8198C75.1167 78.5228 73.9773 78.5228 73.2739 77.8198L60.1546 64.7001C58.7677 63.3136 56.4781 64.8292 57.213 66.6472L64.1633 83.8503C64.5359 84.7719 64.0903 85.8208 63.1687 86.1935L60.5461 87.2532C59.6241 87.6253 58.5751 87.1803 58.2025 86.2582L51.6834 70.1221C50.9422 68.2875 48.2143 68.818 48.2143 70.7962V88.2C48.2143 89.194 47.4084 90 46.4143 90H43.5857C42.5916 90 41.7857 89.194 41.7857 88.2V70.7962C41.7857 68.818 39.0579 68.2875 38.3168 70.1221L31.7972 86.2582C31.4248 87.1803 30.3757 87.6253 29.454 87.2532L26.8314 86.1935C25.9097 85.8208 25.4644 84.7719 25.8368 83.8503L32.7872 66.6472C33.5218 64.8292 31.2321 63.3136 29.8455 64.7001L16.7258 77.8198C16.0229 78.5228 14.8832 78.5228 14.1803 77.8198L12.1801 75.8196C11.4772 75.1167 11.4772 73.9773 12.1801 73.2739L23.9616 61.4925C25.368 60.0862 23.7907 57.7741 21.9681 58.5706L6.70027 65.241C5.78934 65.6392 4.72819 65.2234 4.33019 64.3122L3.19773 61.7202C2.79972 60.8094 3.21556 59.7483 4.12652 59.3505L21.7196 51.6636C23.5068 50.8828 22.9493 48.2143 20.9989 48.2143H1.8C0.805887 48.2143 0 47.4084 0 46.4143V43.5857C0 42.5916 0.805887 41.7857 1.8 41.7857H20.999C22.9494 41.7857 23.5069 39.1171 21.7197 38.3363L4.1265 30.6497C3.21554 30.2517 2.79971 29.1906 3.19772 28.2796L4.33018 25.6876C4.72819 24.7766 5.78929 24.3608 6.70027 24.7588L21.9681 31.4294C23.7907 32.2258 25.368 29.9137 23.9616 28.5072L12.1801 16.7258C11.4772 16.0229 11.4772 14.8832 12.1801 14.1802L14.1802 12.1801C14.8832 11.4772 16.0229 11.4772 16.7258 12.1801L29.8455 25.2998C31.232 26.6863 33.5218 25.1708 32.7872 23.3527L25.8368 6.14974C25.4644 5.22801 25.9097 4.17892 26.8314 3.80651L29.454 2.74691C30.3757 2.37451 31.4248 2.81983 31.7972 3.74155L38.3168 19.878C39.0579 21.7124 41.7857 21.1821 41.7857 19.2037V1.8C41.7857 0.805887 42.5916 0 43.5857 0H46.4143ZM45 64.2856C55.6511 64.2856 64.2856 55.6511 64.2856 45C64.2856 34.3488 55.6511 25.7143 45 25.7143C34.3488 25.7143 25.7143 34.3488 25.7143 45C25.7143 55.6511 34.3488 64.2856 45 64.2856Z"
                        fill="url(#paint0_linear_419_89)"
                      />
                    </g>
                  </g>
                  <defs>
                    <linearGradient
                      id="paint0_linear_419_89"
                      x1="9.225"
                      y1="7.2"
                      x2="45"
                      y2="90"
                      gradientUnits="userSpaceOnUse"
                    >
                      <stop stop-color="#ACAAFF" />
                      <stop offset="1" stop-color="#C0E8FF" />
                    </linearGradient>
                    <clipPath id="clip0_419_89">
                      <rect width="90" height="90" fill="white" />
                    </clipPath>
                  </defs>
                </svg>
              </div>
              <h3>
                <a class="text-decoration-none" href="service-details.html"
                  >Security Awareness Training</a
                >
              </h3>
              <p>
                This service focuses on securing end-user devices like laptops,
                desktops, and mobile devices from cybersecurity threats.
              </p>
              <a
                class="read-more text-decoration-none"
                href="service-details.html"
              >
                Read More
                <i class="ri-arrow-right-line"></i>
              </a>
            </div>
          </div>
          <div class="col-lg-4 col-sm-6">
            <div class="single-services-info">
              <div class="icon">
                <svg
                  xmlns="http://www.w3.org/2000/svg"
                  width="90"
                  height="90"
                  viewBox="0 0 90 90"
                  fill="none"
                >
                  <g clip-path="url(#clip0_419_95)">
                    <mask
                      id="mask0_419_95"
                      style="mask-type: luminance"
                      maskUnits="userSpaceOnUse"
                      x="0"
                      y="0"
                      width="90"
                      height="90"
                    >
                      <path d="M90 0H0V90H90V0Z" fill="white" />
                    </mask>
                    <g mask="url(#mask0_419_95)">
                      <path
                        fill-rule="evenodd"
                        clip-rule="evenodd"
                        d="M45 90C69.8526 90 90 69.8526 90 45C90 20.1472 69.8526 0 45 0C20.1472 0 0 20.1472 0 45C0 69.8526 20.1472 90 45 90ZM45 84.6C66.8704 84.6 84.6 66.8704 84.6 45C84.6 23.1295 66.8704 5.4 45 5.4C23.1295 5.4 5.4 23.1295 5.4 45C5.4 66.8704 23.1295 84.6 45 84.6ZM45 79.2C63.8883 79.2 79.2 63.8883 79.2 45C79.2 26.1119 63.8883 10.8 45 10.8C26.1119 10.8 10.8 26.1119 10.8 45C10.8 63.8883 26.1119 79.2 45 79.2ZM45 73.8C60.9057 73.8 73.8 60.9057 73.8 45C73.8 29.0942 60.9057 16.2 45 16.2C29.0942 16.2 16.2 29.0942 16.2 45C16.2 60.9057 29.0942 73.8 45 73.8ZM68.4 45C68.4 57.9235 57.9235 68.4 45 68.4C32.0765 68.4 21.6 57.9235 21.6 45C21.6 32.0765 32.0765 21.6 45 21.6C57.9235 21.6 68.4 32.0765 68.4 45ZM63 45C63 54.9409 54.9409 63 45 63C35.0589 63 27 54.9409 27 45C27 35.0589 35.0589 27 45 27C54.9409 27 63 35.0589 63 45Z"
                        fill="url(#paint0_linear_419_95)"
                      />
                    </g>
                  </g>
                  <defs>
                    <linearGradient
                      id="paint0_linear_419_95"
                      x1="12.375"
                      y1="8.55"
                      x2="67.05"
                      y2="78.525"
                      gradientUnits="userSpaceOnUse"
                    >
                      <stop stop-color="#FFD9A0" />
                      <stop offset="1" stop-color="#FFF5F1" />
                    </linearGradient>
                    <clipPath id="clip0_419_95">
                      <rect width="90" height="90" fill="white" />
                    </clipPath>
                  </defs>
                </svg>
              </div>
              <h3>
                <a class="text-decoration-none" href="Digital-Forensics-Testing.html"
                  >Digital Forensics Testing</a
                >
              </h3>
              <p>
                Digital forensics analyzes digital devices for legal evidence, crucial in investigations and cybersecurity incidents.
              </p>
              <a
                class="read-more text-decoration-none"
                href="Digital-Forensics-Testing.html"
              >
                Read More
                <i class="ri-arrow-right-line"></i>
              </a>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- End Services Area -->

    <!-- Start Projects Area -->
    <div class="projects-area pb-75">
      <div class="container">
        <div class="projects-section-title">
          <div class="row align-items-center" data-cue="slideInUp">
            <div class="col-lg-7 col-md-8">
              <div class="title">
                <span class="d-block">Our Projects</span>
                <h2>
                  Feat to Celebrate: Showcasing Some of Our Proud Projects.
                </h2>
              </div>
            </div>
          </div>
        </div>
        <div class="projects-box-info" data-cue="slideInUp">
          <ul class="main-box">
            <li class="box bg-1">
              <span>
                <img
                  src="assets/images/projects/projects-1.jpg"
                  alt="projects-image"
                />
              </span>
              <div class="detail">
                <div class="content">
                  <h3>
                    <a class="text-decoration-none" href="service-details.html"
                      >Data Loss Prevention (DLP)</a
                    >
                  </h3>
                  <p>
                    This includes implementing strategies and tools to prevent
                    sensitive data...
                  </p>
                </div>
              </div>
            </li>
            <li class="box bg-2">
              <span>
                <img
                  src="assets/images/projects/projects-2.jpg"
                  alt="projects-image"
                />
              </span>
              <div class="detail">
                <div class="content">
                  <h3>
                    <a class="text-decoration-none" href="service-details.html"
                      >Vanguard Insight Initiative:</a
                    >
                  </h3>
                  <p>
                    Dedicated to providing threat intelligence and proactive monitoring services to anticipate and mitigate emerging cyber threats before they impact clients.
                  </p>
                </div>
              </div>
            </li>
            <li class="box bg-3">
              <span>
                <img
                  src="assets/images/projects/projects-3.jpg"
                  alt="projects-image"
                />
              </span>
              <div class="detail">
                <div class="content">
                  <h3>
                    <a class="text-decoration-none" href="service-details.html"
                      >Operation Phoenix Shield</a
                    >
                  </h3>
                  <p>
                    Focuses on incident response and recovery strategies, helping businesses quickly recover from breaches and minimizing operational disruptions.
                  </p>
                </div>
              </div>
            </li>
            <li class="box bg-4">
              <span>
                <img
                  src="assets/images/projects/projects-4.jpg"
                  alt="projects-image"
                />
              </span>
              <div class="detail">
                <div class="content">
                  <h3>
                    <a class="text-decoration-none" href="service-details.html"
                      >Project Ironclad</a
                    >
                  </h3>
                  <p>
                    Aimed at creating and implementing comprehensive cybersecurity frameworks for private companies, ensuring robust protection against various forms of cyberattacks.
                  </p>
                </div>
              </div>
            </li>
            <li class="box active">
              <span>
                <img
                  src="assets/images/projects/projects-3.jpg"
                  alt="projects-image"
                />
              </span>
              <div class="detail active">
                <div class="content">
                  <h3>
                    <a class="text-decoration-none" href="RansomeWare.html"
                      >Operation Titan Guard</a
                    >
                  </h3>
                  <p>
                    Aimed at strengthening cybersecurity protocols for critical infrastructure and major enterprises to prevent and respond to ransomware attacks.
                  </p>
                </div>
              </div>
            </li>
          </ul>
        </div>
      </div>
    </div>
    <!-- End Projects Area -->

    <!-- Start Faq Area -->
    <div class="faq-area pb-75">
      <div class="container">
        <div class="row" data-cue="slideInUp">
          <div class="col-lg-6">
            <div class="faq-content">
              <div class="title">
                <span class="d-block">FAQs</span>
                <h2>A Dedication to Supporting All Aspects of Your Life.</h2>
              </div>
              <p>Can’t find what you are looking for?</p>
              <h3>
                Let's Talk: Engage with Us in a Conversation Tailored Just for
                You.
              </h3>
              <div class="icon">
                <svg
                  xmlns="http://www.w3.org/2000/svg"
                  width="25"
                  height="25"
                  viewBox="0 0 25 25"
                  fill="none"
                >
                  <g clip-path="url(#clip0_428_39)">
                    <path
                      d="M9.375 11.458C8.8 11.458 8.33333 10.9924 8.33333 10.4164C8.33333 9.05387 9.41458 8.45908 9.87604 8.20492C10.1781 8.03929 10.4958 7.64762 10.399 7.0945C10.3271 6.68616 9.98021 6.33929 9.57292 6.26846C9.25417 6.21012 8.94583 6.29137 8.70625 6.49346C8.46875 6.69137 8.33333 6.98304 8.33333 7.29242C8.33333 7.86846 7.86667 8.33408 7.29167 8.33408C6.71667 8.33408 6.25 7.86846 6.25 7.29242C6.25 6.36637 6.65729 5.49346 7.36667 4.89762C8.07604 4.30179 9.00937 4.04971 9.93229 4.21741C11.1917 4.43721 12.2281 5.47262 12.45 6.73512C12.6823 8.06012 12.0521 9.38408 10.8812 10.031C10.4156 10.2872 10.4156 10.3622 10.4156 10.4174C10.4156 10.9935 9.94896 11.4591 9.37396 11.4591L9.375 11.458ZM9.375 12.4997C8.65625 12.4997 8.07292 13.083 8.07292 13.8018C8.07292 14.5205 8.65625 15.1039 9.375 15.1039C10.0938 15.1039 10.6771 14.5205 10.6771 13.8018C10.6771 13.083 10.0938 12.4997 9.375 12.4997ZM20.8292 9.45804C20.8229 10.2591 20.7344 11.0393 20.5708 11.7935C21.999 12.9403 22.9167 14.6966 22.9167 16.6664V21.8747C22.9167 22.4497 22.45 22.9164 21.875 22.9164H16.6667C14.6969 22.9164 12.9406 21.9987 11.7937 20.5705C11.0396 20.733 10.2594 20.8226 9.45833 20.8289C10.901 23.3174 13.5885 24.9997 16.6667 24.9997H21.875C23.601 24.9997 25 23.6007 25 21.8747V16.6664C25 13.5882 23.3177 10.9007 20.8292 9.45804ZM18.726 10.0528C18.9187 7.33096 17.926 4.66742 16.0042 2.7445C14.0823 0.821582 11.4208 -0.174251 8.69687 0.0236655C3.98229 0.356999 0 4.77991 0 9.68304V14.931C0 17.0362 1.71042 18.7497 3.81354 18.7497H8.47708C13.8802 18.7497 18.3823 14.9299 18.726 10.0528ZM14.5312 4.21846C16.0271 5.71325 16.7979 7.78617 16.649 9.90596C16.3854 13.633 12.7198 16.6653 8.47708 16.6653H3.81354C2.85938 16.6653 2.08333 15.8872 2.08333 14.9299V9.682C2.08333 5.832 5.17917 2.36012 8.84375 2.10075C9.01771 2.08825 9.19063 2.082 9.36354 2.082C11.299 2.082 13.1594 2.8445 14.5312 4.21846Z"
                      fill="#FF8408"
                    />
                  </g>
                </svg>
                <div class="shape">
                  <svg
                    xmlns="http://www.w3.org/2000/svg"
                    width="101"
                    height="58"
                    viewBox="0 0 101 58"
                    fill="none"
                  >
                    <path
                      d="M100.761 0.479282C101.995 11.8276 98.3964 23.4807 91.2334 32.3202C86.2601 38.4516 79.4232 41.7694 72.6445 39.0847C66.6928 49.1903 55.6047 55.7086 43.4218 50.3041C41.6281 49.5069 39.9742 48.4049 38.4834 47.1035C38.297 47.2325 38.1107 47.3615 37.9243 47.4787C27.9194 53.9852 15.818 53.657 5.04436 49.6475C6.75649 51.9336 8.46862 54.2197 10.1924 56.5058C10.9611 57.5257 9.40039 58.4401 8.5618 57.7719C6.52354 56.1423 -0.651108 51.8984 0.047722 48.4986C0.711609 45.263 7.9678 42.8128 10.4021 41.4059C11.5668 40.726 12.6267 42.5431 11.4503 43.2231C10.0293 44.0437 6.36049 45.5678 4.31059 47.1739C12.7897 50.6909 22.3288 51.9219 31.1107 48.6393C32.951 47.9594 34.9659 46.9277 36.9576 45.6264C32.6365 40.9722 30.377 34.3484 32.2056 28.0998C34.1506 21.4174 43.2937 15.5791 48.5349 22.6953C54.0673 30.2217 46.4966 40.6791 40.114 45.8726C47.9409 52.3674 59.8093 50.6089 66.9374 43.7741C68.568 42.2149 69.9773 40.386 71.1537 38.393C70.1287 37.8537 69.1038 37.162 68.0905 36.3179C62.0107 31.2417 56.4433 18.0528 60.9508 10.456C65.5397 2.73019 74.2868 8.93191 76.1853 15.286C78.3283 22.496 77.0704 30.6555 73.5297 37.4786C76.3483 38.5806 79.4698 38.7213 82.5912 37.4082C87.0987 35.4973 90.6627 30.8431 93.1668 26.775C98.1052 18.7679 99.9455 9.81117 99.7708 0.479282C99.7591 -0.177231 100.703 -0.142059 100.761 0.479282ZM48.0224 27.6895C46.7762 19.9285 38.5882 20.2802 35.2804 25.8841C34.0225 28.0177 33.4867 30.679 33.5683 33.1292C33.708 37.3731 35.6997 41.4411 38.5998 44.4775C44.2021 40.3508 49.059 34.1726 48.0224 27.6895ZM74.5081 16.7163C74.2285 15.2978 73.7277 13.9613 73.0056 12.6951C70.5597 8.52159 67.0772 8.09954 62.5581 11.4173C61.3584 13.1758 61.3235 15.8839 61.4516 17.8886C61.7195 22.3905 63.3967 27.3729 65.8659 31.0893C67.4615 33.4926 69.6046 35.5208 72.0389 36.8221C75.1487 30.6672 76.162 23.2228 74.5081 16.7163Z"
                      fill="url(#paint0_linear_431_44)"
                    />
                    <defs>
                      <linearGradient
                        id="paint0_linear_431_44"
                        x1="101"
                        y1="29"
                        x2="3.45822e-07"
                        y2="29"
                        gradientUnits="userSpaceOnUse"
                      >
                        <stop stop-color="#FF8408" />
                        <stop offset="0.499797" stop-color="#FA3988" />
                        <stop offset="1" stop-color="#6600FC" />
                      </linearGradient>
                    </defs>
                  </svg>
                </div>
              </div>
            </div>
          </div>
          <div class="col-lg-6">
            <div class="faq-questions">
              <div class="questions-content">
                <div class="accordion" id="accordionExample">
                  <div class="accordion-item">
                    <h2 class="accordion-header" id="headingTwo">
                      <button
                        class="accordion-button collapsed"
                        type="button"
                        data-bs-toggle="collapse"
                        data-bs-target="#collapseTwo"
                        aria-expanded="false"
                        aria-controls="collapseTwo"
                      >
                        <span>What should I study for cybersecurity?</span>
                      </button>
                    </h2>
                    <div
                      id="collapseTwo"
                      class="accordion-collapse collapse"
                      aria-labelledby="headingTwo"
                      data-bs-parent="#accordionExample"
                    >
                      <div class="accordion-body">
                        These services collectively help organizations establish
                        a comprehensive cybersecurity framework and protect
                        their digital assets from various cyber threats. This
                        service focuses on securing end-user devices like.
                      </div>
                    </div>
                  </div>
                  <div class="accordion-item">
                    <h2 class="accordion-header" id="headingOne">
                      <button
                        class="accordion-button"
                        type="button"
                        data-bs-toggle="collapse"
                        data-bs-target="#collapseOne"
                        aria-expanded="true"
                        aria-controls="collapseOne"
                      >
                        <span>How do I choose a cybersecurity career?</span>
                      </button>
                    </h2>
                    <div
                      id="collapseOne"
                      class="accordion-collapse collapse show"
                      aria-labelledby="headingOne"
                      data-bs-parent="#accordionExample"
                    >
                      <div class="accordion-body">
                        These services collectively help organizations establish
                        a comprehensive cybersecurity framework and protect
                        their digital assets from various cyber threats. This
                        service focuses on securing end-user devices like.
                      </div>
                    </div>
                  </div>
                  <div class="accordion-item">
                    <h2 class="accordion-header" id="headingThree">
                      <button
                        class="accordion-button collapsed"
                        type="button"
                        data-bs-toggle="collapse"
                        data-bs-target="#collapseThree"
                        aria-expanded="false"
                        aria-controls="collapseThree"
                      >
                        <span>Can I learn cyber security in 6 months?</span>
                      </button>
                    </h2>
                    <div
                      id="collapseThree"
                      class="accordion-collapse collapse"
                      aria-labelledby="headingThree"
                      data-bs-parent="#accordionExample"
                    >
                      <div class="accordion-body">
                        These services collectively help organizations establish
                        a comprehensive cybersecurity framework and protect
                        their digital assets from various cyber threats. This
                        service focuses on securing end-user devices like.
                      </div>
                    </div>
                  </div>
                  <div class="accordion-item">
                    <h2 class="accordion-header" id="headingFour">
                      <button
                        class="accordion-button collapsed"
                        type="button"
                        data-bs-toggle="collapse"
                        data-bs-target="#collapseFour"
                        aria-expanded="false"
                        aria-controls="collapseFour"
                      >
                        <span
                          >What is the highest paying job in cyber
                          security?</span
                        >
                      </button>
                    </h2>
                    <div
                      id="collapseFour"
                      class="accordion-collapse collapse"
                      aria-labelledby="headingFour"
                      data-bs-parent="#accordionExample"
                    >
                      <div class="accordion-body">
                        These services collectively help organizations establish
                        a comprehensive cybersecurity framework and protect
                        their digital assets from various cyber threats. This
                        service focuses on securing end-user devices like.
                      </div>
                    </div>
                  </div>
                  <div class="accordion-item">
                    <h2 class="accordion-header" id="headingFive">
                      <button
                        class="accordion-button collapsed"
                        type="button"
                        data-bs-toggle="collapse"
                        data-bs-target="#collapseFive"
                        aria-expanded="false"
                        aria-controls="collapseFive"
                      >
                        <span
                          >What is the lowest salary in cyber security?</span
                        >
                      </button>
                    </h2>
                    <div
                      id="collapseFive"
                      class="accordion-collapse collapse"
                      aria-labelledby="headingFive"
                      data-bs-parent="#accordionExample"
                    >
                      <div class="accordion-body">
                        These services collectively help organizations establish
                        a comprehensive cybersecurity framework and protect
                        their digital assets from various cyber threats. This
                        service focuses on securing end-user devices like.
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- End Faq Area -->

    <!-- Start Counter Area -->
    <div class="counter-area pb-75 style-2">
      <div class="container">
        <div class="row" data-cues="fadeIn">
          <div class="col-lg-3 col-sm-6">
            <div class="single-counter-card style-2">
              <h2><span class="counter">36</span>+</h2>
              <p>YEARS' EXPERIENCE</p>
            </div>
          </div>
          <div class="col-lg-3 col-sm-6">
            <div class="single-counter-card style-2">
              <h2><span class="counter">645</span>+</h2>
              <p>CYBER SECURITY EXPERTS</p>
            </div>
          </div>
          <div class="col-lg-3 col-sm-6">
            <div class="single-counter-card style-2">
              <h2><span class="counter">100</span>%</h2>
              <p>CUSTOMER SATISFACTION</p>
            </div>
          </div>
          <div class="col-lg-3 col-sm-6">
            <div class="single-counter-card style-2">
              <h2>
                <span class="counter">35</span>
                M
              </h2>
              <p>CUSTOMER SERVED GLOBALLY</p>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- End Counter Area -->

    <!-- Start Team Area -->
    <div class="team-area pb-75">
      <div class="container">
        <div class="section-title text-center style-2" data-cue="slideInUp">
          <span class="d-block">Our Team</span>
          <h2>Meet Our Awesome Team Members.</h2>
        </div>
        <div class="row" data-cues="fadeIn">
          <div class="col-lg-3 col-sm-6">
            <div class="single-team-card">
              <div class="image">
                <a class="text-decoration-none" href="team.html">
                  <img src="assets/images/team/team-1.jpg" alt="team-image" />
                </a>
              </div>
              <h3>
                <a class="text-decoration-none" href="team.html"
                  >Bonnie Acosta</a
                >
              </h3>
              <p>Security Administrator</p>
              <div class="social-list">
                <ul class="list-unstyled ps-0 mb-0">
                  <li>
                    <a
                      class="text-decoration-none"
                      target="_blank"
                      href="https://www.facebook.com/"
                    >
                      <i class="ri-facebook-circle-line"></i>
                    </a>
                  </li>
                  <li>
                    <a
                      class="text-decoration-none"
                      target="_blank"
                      href="https://twitter.com/"
                    >
                      <i class="ri-twitter-x-line"></i>
                    </a>
                  </li>
                  <li>
                    <a
                      class="text-decoration-none"
                      target="_blank"
                      href="https://www.instagram.com/"
                    >
                      <i class="ri-instagram-line"></i>
                    </a>
                  </li>
                  <li>
                    <a
                      class="text-decoration-none"
                      target="_blank"
                      href="https://www.pinterest.com/"
                    >
                      <i class="ri-pinterest-line"></i>
                    </a>
                  </li>
                </ul>
              </div>
            </div>
          </div>
          <div class="col-lg-3 col-sm-6">
            <div class="single-team-card">
              <div class="image">
                <a class="text-decoration-none" href="team.html">
                  <img src="assets/images/team/team-2.jpg" alt="team-image" />
                </a>
              </div>
              <h3>
                <a class="text-decoration-none" href="team.html"
                  >Warren Riner</a
                >
              </h3>
              <p>CEO & Founder</p>
              <div class="social-list">
                <ul class="list-unstyled ps-0 mb-0">
                  <li>
                    <a
                      class="text-decoration-none"
                      target="_blank"
                      href="https://www.facebook.com/"
                    >
                      <i class="ri-facebook-circle-line"></i>
                    </a>
                  </li>
                  <li>
                    <a
                      class="text-decoration-none"
                      target="_blank"
                      href="https://twitter.com/"
                    >
                      <i class="ri-twitter-x-line"></i>
                    </a>
                  </li>
                  <li>
                    <a
                      class="text-decoration-none"
                      target="_blank"
                      href="https://www.instagram.com/"
                    >
                      <i class="ri-instagram-line"></i>
                    </a>
                  </li>
                  <li>
                    <a
                      class="text-decoration-none"
                      target="_blank"
                      href="https://www.pinterest.com/"
                    >
                      <i class="ri-pinterest-line"></i>
                    </a>
                  </li>
                </ul>
              </div>
            </div>
          </div>
          <div class="col-lg-3 col-sm-6">
            <div class="single-team-card">
              <div class="image">
                <a class="text-decoration-none" href="team.html">
                  <img src="assets/images/team/team-3.jpg" alt="team-image" />
                </a>
              </div>
              <h3>
                <a class="text-decoration-none" href="team.html">Helen Kurt</a>
              </h3>
              <p>Penetration Tester</p>
              <div class="social-list">
                <ul class="list-unstyled ps-0 mb-0">
                  <li>
                    <a
                      class="text-decoration-none"
                      target="_blank"
                      href="https://www.facebook.com/"
                    >
                      <i class="ri-facebook-circle-line"></i>
                    </a>
                  </li>
                  <li>
                    <a
                      class="text-decoration-none"
                      target="_blank"
                      href="https://twitter.com/"
                    >
                      <i class="ri-twitter-x-line"></i>
                    </a>
                  </li>
                  <li>
                    <a
                      class="text-decoration-none"
                      target="_blank"
                      href="https://www.instagram.com/"
                    >
                      <i class="ri-instagram-line"></i>
                    </a>
                  </li>
                  <li>
                    <a
                      class="text-decoration-none"
                      target="_blank"
                      href="https://www.pinterest.com/"
                    >
                      <i class="ri-pinterest-line"></i>
                    </a>
                  </li>
                </ul>
              </div>
            </div>
          </div>
          <div class="col-lg-3 col-sm-6">
            <div class="single-team-card">
              <div class="image">
                <a class="text-decoration-none" href="team.html">
                  <img src="assets/images/team/team-4.jpg" alt="team-image" />
                </a>
              </div>
              <h3>
                <a class="text-decoration-none" href="team.html"
                  >Wanda Wagner</a
                >
              </h3>
              <p>Digital forensic Examiner</p>
              <div class="social-list">
                <ul class="list-unstyled ps-0 mb-0">
                  <li>
                    <a
                      class="text-decoration-none"
                      target="_blank"
                      href="https://www.facebook.com/"
                    >
                      <i class="ri-facebook-circle-line"></i>
                    </a>
                  </li>
                  <li>
                    <a
                      class="text-decoration-none"
                      target="_blank"
                      href="https://twitter.com/"
                    >
                      <i class="ri-twitter-x-line"></i>
                    </a>
                  </li>
                  <li>
                    <a
                      class="text-decoration-none"
                      target="_blank"
                      href="https://www.instagram.com/"
                    >
                      <i class="ri-instagram-line"></i>
                    </a>
                  </li>
                  <li>
                    <a
                      class="text-decoration-none"
                      target="_blank"
                      href="https://www.pinterest.com/"
                    >
                      <i class="ri-pinterest-line"></i>
                    </a>
                  </li>
                </ul>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="bg-ellipse"></div>
    </div>
    <!-- End Team Area -->

    <!-- Start Blog Area -->
    <div class="blog-area pb-75 style-2">
      <div class="container">
        <div class="section-title text-center style-2" data-cue="slideInUp">
          <span class="d-block">Our Blog</span>
          <h2>Latest Blog & Articles</h2>
        </div>
        <div class="row justify-content-center" data-cues="fadeIn">
          <div class="col-lg-4 col-md-6">
            <div class="single-blog-card style-2">
              <div class="image">
                <a href="blog-details.html">
                  <img src="assets/images/blog/blog-1.jpg" alt="blog-image" />
                </a>
              </div>
              <div class="content">
                <ul class="list-unstyled ps-0 list">
                  <li class="d-inline-block">
                    <i class="ri-user-line"></i>
                    By
                    <a class="text-decoration-none" href="author.html">Admin</a>
                  </li>
                  <li class="d-inline-block">
                    <i class="ri-calendar-2-line"></i>
                    November 6, 2024
                  </li>
                </ul>
                <h3>
                  <a class="text-decoration-none" href="blog-details.html"
                    >Ensuring Data Security Amid Office Transitions The Emerging
                    Trend of 2024.</a
                  >
                </h3>
                <a
                  class="read-more text-decoration-none"
                  href="blog-details.html"
                >
                  Read More
                  <i class="ri-arrow-right-line"></i>
                </a>
              </div>
            </div>
          </div>
          <div class="col-lg-4 col-md-6">
            <div class="single-blog-card style-2">
              <div class="image">
                <a href="blog-details.html">
                  <img src="assets/images/blog/blog-2.jpg" alt="blog-image" />
                </a>
              </div>
              <div class="content">
                <ul class="list-unstyled ps-0 list">
                  <li class="d-inline-block">
                    <i class="ri-user-line"></i>
                    By
                    <a class="text-decoration-none" href="author.html">Admin</a>
                  </li>
                  <li class="d-inline-block">
                    <i class="ri-calendar-2-line"></i>
                    November 8, 2024
                  </li>
                </ul>
                <h3>
                  <a class="text-decoration-none" href="blog-details.html"
                    >Navigating the Impact of Blockchain Technology in the
                    Logistics Sector.</a
                  >
                </h3>
                <a
                  class="read-more text-decoration-none"
                  href="blog-details.html"
                >
                  Read More
                  <i class="ri-arrow-right-line"></i>
                </a>
              </div>
            </div>
          </div>
          <div class="col-lg-4 col-md-6">
            <div class="single-blog-card style-2">
              <div class="image">
                <a href="blog-details.html">
                  <img src="assets/images/blog/blog-3.jpg" alt="blog-image" />
                </a>
              </div>
              <div class="content">
                <ul class="list-unstyled ps-0 list">
                  <li class="d-inline-block">
                    <i class="ri-user-line"></i>
                    By
                    <a class="text-decoration-none" href="author.html">Admin</a>
                  </li>
                  <li class="d-inline-block">
                    <i class="ri-calendar-2-line"></i>
                    November 6, 2024
                  </li>
                </ul>
                <h3>
                  <a class="text-decoration-none" href="blog-details.html"
                    >Securing the Future: How AI Redefines Customer Workload
                    Protection.</a
                  >
                </h3>
                <a
                  class="read-more text-decoration-none"
                  href="blog-details.html"
                >
                  Read More
                  <i class="ri-arrow-right-line"></i>
                </a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- End Blog Area -->

    <!-- Start Partner Area -->
    <div class="partner-area style-2 pb-75">
      <div class="container">
        <div class="partner-slider-info" data-cue="slideInUp">
          <div class="partner-slider owl-carousel owl-theme">
            <div class="single-partner-logo">
              <img src="assets/images/partner/partner-6.png" alt="partner-2" />
            </div>
            <div class="single-partner-logo">
              <img src="assets/images/partner/partner-7.png" alt="partner-2" />
            </div>
            <div class="single-partner-logo">
              <img src="assets/images/partner/partner-8.png" alt="partner-3" />
            </div>
            <div class="single-partner-logo">
              <img src="assets/images/partner/partner-9.png" alt="partner-4" />
            </div>
            <div class="single-partner-logo">
              <img src="assets/images/partner/partner-10.png" alt="partner-5" />
            </div>
            <div class="single-partner-logo">
              <img src="assets/images/partner/partner-6.png" alt="partner-2" />
            </div>
            <div class="single-partner-logo">
              <img src="assets/images/partner/partner-7.png" alt="partner-2" />
            </div>
            <div class="single-partner-logo">
              <img src="assets/images/partner/partner-8.png" alt="partner-3" />
            </div>
            <div class="single-partner-logo">
              <img src="assets/images/partner/partner-9.png" alt="partner-4" />
            </div>
            <div class="single-partner-logo">
              <img src="assets/images/partner/partner-10.png" alt="partner-5" />
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- End Partner Area -->

    <!-- Start Contact Area -->
    <div class="contact-area">
      <div class="container">
        <div class="contact-info-area">
          <div class="row align-items-center" data-cues="fadeIn">
            <div class="col-lg-3 col-sm-6 pe-0">
              <div class="single-contact-info">
                <div class="contact-call d-flex align-items-center">
                  <div class="icon">
                    <svg
                      xmlns="http://www.w3.org/2000/svg"
                      width="25"
                      height="25"
                      viewBox="0 0 25 25"
                      fill="none"
                    >
                      <g clip-path="url(#clip0_288_89)">
                        <path
                          d="M13.5416 1.04162C13.5416 0.765354 13.6514 0.500402 13.8467 0.305052C14.0421 0.109701 14.307 -4.54765e-05 14.5833 -4.54765e-05C17.345 0.00298744 19.9928 1.10143 21.9456 3.05428C23.8985 5.00712 24.9969 7.65488 24.9999 10.4166C24.9999 10.6929 24.8902 10.9578 24.6948 11.1532C24.4995 11.3485 24.2345 11.4583 23.9583 11.4583C23.682 11.4583 23.4171 11.3485 23.2217 11.1532C23.0264 10.9578 22.9166 10.6929 22.9166 10.4166C22.9141 8.20725 22.0354 6.08907 20.4731 4.5268C18.9108 2.96454 16.7927 2.08577 14.5833 2.08329C14.307 2.08329 14.0421 1.97354 13.8467 1.77819C13.6514 1.58284 13.5416 1.31789 13.5416 1.04162ZM14.5833 6.24995C15.6883 6.24995 16.7482 6.68894 17.5296 7.47034C18.311 8.25174 18.7499 9.31155 18.7499 10.4166C18.7499 10.6929 18.8597 10.9578 19.055 11.1532C19.2504 11.3485 19.5153 11.4583 19.7916 11.4583C20.0679 11.4583 20.3328 11.3485 20.5282 11.1532C20.7235 10.9578 20.8333 10.6929 20.8333 10.4166C20.8316 8.75953 20.1726 7.17077 19.0009 5.99903C17.8291 4.82729 16.2404 4.16828 14.5833 4.16662C14.307 4.16662 14.0421 4.27637 13.8467 4.47172C13.6514 4.66707 13.5416 4.93202 13.5416 5.20829C13.5416 5.48455 13.6514 5.74951 13.8467 5.94486C14.0421 6.14021 14.307 6.24995 14.5833 6.24995ZM24.0552 17.4364C24.6588 18.0417 24.9978 18.8617 24.9978 19.7166C24.9978 20.5715 24.6588 21.3915 24.0552 21.9968L23.1072 23.0895C14.576 31.2572 -6.18443 10.502 1.85724 1.9437L3.05515 0.902038C3.66116 0.315243 4.47383 -0.00936935 5.31734 -0.00157168C6.16086 0.00622599 6.96739 0.345807 7.56245 0.943705C7.59474 0.975996 9.52495 3.48329 9.52495 3.48329C10.0977 4.08498 10.4165 4.88426 10.4152 5.71496C10.4138 6.54566 10.0924 7.34388 9.51765 7.9437L8.3114 9.46037C8.97895 11.0824 9.96043 12.5565 11.1994 13.798C12.4384 15.0395 13.9106 16.0239 15.5312 16.6947L17.0572 15.4812C17.6571 14.9069 18.4552 14.5859 19.2857 14.5847C20.1161 14.5836 20.9151 14.9024 21.5166 15.475C21.5166 15.475 24.0229 17.4041 24.0552 17.4364ZM22.6218 18.951C22.6218 18.951 20.1291 17.0333 20.0968 17.001C19.8822 16.7882 19.5923 16.6688 19.29 16.6688C18.9878 16.6688 18.6979 16.7882 18.4833 17.001C18.4552 17.0302 16.3541 18.7041 16.3541 18.7041C16.2125 18.8168 16.044 18.8907 15.8652 18.9185C15.6864 18.9462 15.5034 18.9269 15.3343 18.8625C13.2348 18.0808 11.3278 16.857 9.74248 15.274C8.15717 13.691 6.93057 11.7858 6.14578 9.68746C6.07619 9.51605 6.05351 9.32921 6.08005 9.14614C6.1066 8.96307 6.18142 8.79037 6.29682 8.64579C6.29682 8.64579 7.97078 6.5437 7.9989 6.51662C8.21168 6.30202 8.33107 6.01205 8.33107 5.70985C8.33107 5.40765 8.21168 5.11768 7.9989 4.90308C7.96661 4.87183 6.0489 2.37704 6.0489 2.37704C5.83109 2.18173 5.54682 2.07714 5.25437 2.08469C4.96192 2.09224 4.68343 2.21137 4.47599 2.41766L3.27807 3.45933C-2.59901 10.526 15.3916 27.5187 21.5843 21.6666L22.5333 20.5729C22.7557 20.3669 22.8892 20.0825 22.9057 19.7799C22.9223 19.4772 22.8204 19.18 22.6218 18.951Z"
                          fill="#6600FC"
                        />
                      </g>
                    </svg>
                  </div>
                  <div class="content">
                    <h3>Give Us A Call</h3>
                    <a class="text-decoration-none" href="tel:999-999-9999"
                      >+999-999-9999</a
                    >
                  </div>
                </div>
              </div>
            </div>
            <div class="col-lg-3 col-sm-6 p-0">
              <div class="single-contact-info">
                <div class="contact-social">
                  <ul class="list-unstyled ps-0 mb-0 list">
                    <li class="d-inline-block">
                      <a
                        class="text-decoration-none"
                        target="_blank"
                        href="https://www.facebook.com/"
                      >
                        <i class="ri-facebook-circle-line"></i>
                      </a>
                    </li>
                    <li class="d-inline-block">
                      <a
                        class="text-decoration-none"
                        target="_blank"
                        href="https://twitter.com/"
                      >
                        <i class="ri-twitter-x-line"></i>
                      </a>
                    </li>
                    <li class="d-inline-block">
                      <a
                        class="text-decoration-none"
                        target="_blank"
                        href="https://www.instagram.com/"
                      >
                        <i class="ri-instagram-line"></i>
                      </a>
                    </li>
                    <li class="d-inline-block">
                      <a
                        class="text-decoration-none"
                        target="_blank"
                        href="https://www.pinterest.com/"
                      >
                        <i class="ri-pinterest-line"></i>
                      </a>
                    </li>
                  </ul>
                </div>
              </div>
            </div>
          
          </div>
        </div>
      </div>
    </div>
    <!-- End Contact Area -->

    <!-- Start Footer Area -->
    <div class="footer-area">
      <div class="container">
        <div class="footer-info-area" data-cue="slideInUp">
          <div class="row">
            <div class="col-lg-4">
              <div class="single-footer-info ms-0">
                <a class="text-decoration-none logo" href="index.php">
                  <img src="assets/images/white-logo.png" alt="logo" />
                </a>
                <p>
                  Cybersecurity is crucial in today's digital age, where many
                  individuals and organizations store a significant amount of
                  sensitive data on computers...
                </p>
              </div>
            </div>
            <div class="col-lg-8">
              <div class="row justify-content-center">
                <div class="col-lg-4 col-sm-6 col-md-4">
                  <div class="single-footer-info">
                    <h3>Contact Us</h3>
                    <ul class="list-unstyled ps-0 mb-0">
                      <li>
                        <strong>Address : </strong>521684 Majadra Street
                        Victoria Road, Gujarat.
                      </li>
                      <li>
                        <strong>Email:</strong>
                        <a href="mailto:info@yourdomain.com"
                          >info@cyberarmor.com</a
                        >
                      </li>
                      <li>
                        <strong>Phone:</strong>
                        <a class="text-decoration-none" href="tel:55472543526"
                          >+5-547-254-3526</a
                        >
                      </li>
                    </ul>
                  </div>
                </div>
               
                <div class="col-lg-4 col-sm-6 col-md-4">
                  <div class="single-footer-info">
                    <h3>Resourses</h3>
                    <ul class="list-unstyled ps-0 mb-0">
                      <li>
                        <a class="text-decoration-none" href="faq.html">FAQs</a>
                      </li>
                      <li>
                        <a
                          class="text-decoration-none"
                          href="privacy-policy.html"
                          >Privacy Policy</a
                        >
                      </li>
                      <li>
                        <a
                          class="text-decoration-none"
                          href="terms-conditions.html"
                          >Terms & Conditions</a
                        >
                      </li>
                      <li>
                        <a class="text-decoration-none" href="contact.html"
                          >Contact Us</a
                        >
                      </li>
                    </ul>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- End Footer Area -->

    <!-- Start Copyright Area -->
    <div class="copyright-area">
      <div class="container">
        <div class="copyright-content text-center" data-cue="slideInUp">
          <p>
            Copyright @ 2024 <strong>Cyber Armor</strong>, All Rights Reserved
          </p>
        </div>
      </div>
    </div>
    <!-- End Copyright Area -->

    <!-- Back to Top -->
    <div class="go-top">
      <i class="ri-arrow-up-line"></i>
    </div>
    <!-- Demo  -->
    <!-- <div class="ahs-demo">
			
		</div> -->
    <a href="#" target="_blank" class="ahs-purchase hide-on-mobile">Buy Now</a>
    <!-- Demo  -->
    <!-- Js Files -->
    <script
      data-cfasync="false"
      src="../../../cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"
    ></script>
    <!-- <script src="assets/js/jquery.min.js"></script> -->
    <script src="assets/js/bootstrap.bundle.min.js"></script>
    <script src="assets/js/odometer.min.js"></script>
    <script src="assets/js/meanmenu.min.js"></script>
    <script src="assets/js/scrollCue.min.js"></script>
    <script src="assets/js/owl.carousel.min.js"></script>
    <script src="assets/js/jquery.magnific.popup.js"></script>
    <script src="assets/js/custom.js"></script>
  </body>
</html>
