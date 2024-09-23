<?php
// Include the database connection from config.php
require_once './db/config.php';

session_start();

// Ensure the user is logged in and has a user_id
if (!isset($_SESSION['user_id'])) {
    echo "Error: User is not logged in.";
    exit;
}

// Get the logged-in user's user_id from the session
$user_id = $_SESSION['user_id'];

// Query to fetch common fields from all tables where user_id matches
$sql = "
SELECT 'Financial Fraud' AS report_type, full_name, email, phone_number, incident_date, incident_time, description
FROM fraud_reports
WHERE user_id = :user_id

UNION

SELECT 'Ransomware' AS report_type, full_name, email, phone_number, incident_date, incident_time, description
FROM ransomware_reports
WHERE user_id = :user_id

UNION

SELECT 'Social Media Fraud' AS report_type, full_name, email, phone_number, incident_date, incident_time, description
FROM social_media_fraud_report
WHERE user_id = :user_id

UNION

SELECT 'Other Fraud' AS report_type, full_name, email, phone_number, incident_date, incident_time, description
FROM other_reports
WHERE user_id = :user_id
";

// Prepare and execute the query with user_id
$stmt = $pdo->prepare($sql);
$stmt->bindParam(':user_id', $user_id, PDO::PARAM_INT);
$stmt->execute();
$reports = $stmt->fetchAll(PDO::FETCH_ASSOC);

?>
<!DOCTYPE html>
<html lang="zxx">
<head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Cyber Armor</title>

		<!-- CSS Files -->
        <link rel="stylesheet" href="assets/css/bootstrap.min.css">
        <link rel="stylesheet" href="assets/css/owl.carousel.min.css">
        <link rel="stylesheet" href="assets/css/owl.theme.default.min.css">
        <link rel="stylesheet" href="assets/css/scrollCue.css">
        <link rel="stylesheet" href="assets/css/remixicon.css">
        <link rel="stylesheet" href="assets/css/meanmenu.min.css">
		<link rel="stylesheet" href="assets/css/odometer.min.css">
        <link rel="stylesheet" href="assets/css/magnific.popup.css">
        <link rel="stylesheet" href="assets/css/style.css">
        <link rel="stylesheet" href="assets/css/responsive.css">

        <link href="assets/images/white-logo.png" type="image/x-icon" rel="icon">
    </head>

    <body>

        <!-- Start Modal -->
        <div class="modal search-modal fade" id="exampleModal" tabindex="-1" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content">
                    <div class="modal-header">
                        
                    </div>
                    <div class="modal-body">
                        <form>
                            <div class="form-group">
                                <input type="text" class="form-control" placeholder="Search">
                                <button type="submit"><i class="ri-search-2-line"></i></button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"><i class="ri-close-line"></i></button>
        </div>
        <!-- End Modal -->

		<!-- Start Navbar Area --> 
		<div class="navbar-area fixed-top">
			<div class="mobile-responsive-nav">
				<div class="container">
					<div class="mobile-responsive-menu">
						<div class="logo">
							<a href="index.php">
								<img src="assets/images/white-logo.png" class="main-logo" height="40px" width="80px" alt="logo">
							</a>
						</div>
					</div>
				</div>
			</div>

			<div class="desktop-nav">
				<div class="container-fluid">
					<nav class="navbar navbar-expand-md navbar-light">
						<a class="navbar-brand me-0" href="index.php">
							<img src="assets/images/black-logo.png" height="50px" width="100px" class="black-logo" alt="logo">
						</a>

						<div class="collapse navbar-collapse mean-menu" id="navbarSupportedContent">
							<ul class="navbar-nav m-auto">
								<li class="nav-item">
									<a href="index.php" class="nav-link">
										Home            
									</a>
								</li>
								
								<li class="nav-item">
									<a href="about.html" class="nav-link active">About</a>
								</li>
                                
								<li class="nav-item">
									<a href="#" class="nav-link dropdown-toggle">
										Services 
									</a>
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
									<a href="#" class="nav-link dropdown-toggle active">
										Pages 
									</a>

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
											<a href="login.html" class="nav-link">Log in</a>
										</li>
										<li class="nav-item">
											<a href="privacy-policy.html" class="nav-link">Privacy Policy</a>
										</li>

										<li class="nav-item">
											<a href="terms-conditions.html" class="nav-link">Terms & Conditions</a>
										</li>
									</ul>
								</li>
								
							

								<li class="nav-item">
									<a href="contact.html" class="nav-link">Contact</a>
								</li>
							</ul>

							<div class="others-options">
								<ul>
                                    <li>
                                        <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
                                            <i class="ri-search-line"></i>
                                        </button>
                                    </li>
									<li>
                                        <a class="default-btn text-decoration-none" href="contact.html">
											<i class="ri-arrow-right-line"></i>
											Get A Quote
										</a>
										
                                        <a class="quote d-none text-decoration-none" href="contact.html">
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
							<div class="others-options justify-content-center d-flex align-items-center">
								<ul>
                                    <li>
                                        <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
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

        <!-- Start Page Title Area -->
        <div class="page-title-area">
            <div class="container">
                <div class="page-title-content text-center">
                    <h1>Track Your Reports</h1>
                    <ul class="list-unstyled ps-0 mb-0">
                        <li class="d-inline-block">
                            <a class="text-decoration-none" href="index.php">Home</a>
                        </li>
                        <li class="d-inline-block">Pages</li>
                        <li class="d-inline-block">Track Your Reports</li>
                    </ul>
                </div>
            </div>
        </div>
        <!-- End Page Title Area -->
        <div class="container">
        <h2 class="mt-5">Fraud Reports</h2>
        <table class="table table-bordered table-striped mt-3">
            <thead>
                <tr>
                    <th>Report Type</th>
                    <th>Full Name</th>
                    <th>Email</th>
                    <th>Phone Number</th>
                    <th>Incident Date</th>
                    <th>Incident Time</th>
                    <th>Description</th>
                </tr>
            </thead>
            <tbody>
                <?php if (count($reports) > 0): ?>
                    <?php foreach ($reports as $report): ?>
                        <tr>
                            <td><?php echo htmlspecialchars($report['report_type']); ?></td>
                            <td><?php echo htmlspecialchars($report['full_name']); ?></td>
                            <td><?php echo htmlspecialchars($report['email']); ?></td>
                            <td><?php echo htmlspecialchars($report['phone_number']); ?></td>
                            <td><?php echo htmlspecialchars($report['incident_date']); ?></td>
                            <td><?php echo htmlspecialchars($report['incident_time']); ?></td>
                            <td><?php echo htmlspecialchars($report['description']); ?></td>
                        </tr>
                    <?php endforeach; ?>
                <?php else: ?>
                    <tr>
                        <td colspan="7">No reports found for this user.</td>
                    </tr>
                <?php endif; ?>
            </tbody>
        </table>
    </div>
        
        <!-- End About Area -->

		<!-- Start Services Area -->
		<div class="services-area pb-75">
			<div class="container">
				<div class="services-title-area">
					<div class="row align-items-center" data-cue="slideInUp">
						<div class="col-lg-6 col-md-7">
							<div class="title">
								<span class="d-block">Our Services</span>
								<h2>What We Do for Your (SIEM) Security in Cyber Armor.</h2>
							</div>
						</div>
					</div>
				</div>
				<div class="row" data-cues="fadeIn">
					<div class="col-lg-3 col-sm-6">
						<div class="single-services-card">
							<div class="image">
								<a href="service-details.html">
									<img src="assets/images/services/services-1.jpg" alt="services-image">
								</a>
							</div>
							<h3>
								<a class="text-decoration-none" href="web-testing.html">Website Security</a>
							</h3>
							<p>Web security protects websites from cyber threats through encryption, secure authentication, and regular updates. It ensures data confidentiality, integrity, and user trust.</p>
							<a class="read-more text-decoration-none" href="web-testing.html">
								Read More
								<i class="ri-arrow-right-line"></i>
							</a>
						</div>
					</div>
					<div class="col-lg-3 col-sm-6">
						<div class="single-services-card">
							<div class="image">
								<a href="service-details.html">
									<img src="assets/images/app-test/mb.jpeg" alt="services-image" width="100%">
								</a>
							</div>
							<h3>
                <a class="text-decoration-none" href="App-testing.html"
                  >Application Security</a
                >
              </h3>
              <p>
                App testing involves evaluating a mobile application for functionality, usability, and performance to ensure it meets user expectations and requirements. It includes identifying bugs, ensuring compatibility, and verifying security.</p>
              <a
                class="read-more text-decoration-none"
                href="App-testing.html"
              >
                Read More
                <i class="ri-arrow-right-line"></i>
              </a>
						</div>
					</div>
					<div class="col-lg-3 col-sm-6">
						<div class="single-services-card">
							<div class="image">
								<a href="service-details.html">
									<img src="assets/images/services/services-3.jpg" alt="services-image">
								</a>
							</div>
							<h3>
								<a class="text-decoration-none" href="service-details.html"></a>
							</h3>
							<p>The Imperative of Cybersecurity in an Interconnected World.</p>
							<a class="read-more text-decoration-none" href="service-details.html">
								Read More
								<i class="ri-arrow-right-line"></i>
							</a>
						</div>
					</div>
					<div class="col-lg-3 col-sm-6">
						<div class="single-services-card">
							<div class="image">
								<a href="service-details.html">
									<img src="assets/images/services/services-4.jpg" alt="services-image">
								</a>
							</div>
							<h3>
								<a class="text-decoration-none" href="service-details.html">Network Security</a>
							</h3>
							<p>The Imperative of Cybersecurity in an Interconnected World.</p>
							<a class="read-more text-decoration-none" href="service-details.html">
								Read More
								<i class="ri-arrow-right-line"></i>
							</a>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!-- End Services Area -->
        
		<!-- Start Partner Area -->
		<div class="partner-area pt-100 pb-75">
			<div class="container">
				<div class="section-title text-center" data-cue="slideInUp">
					<span class="d-block">Partners Cyber Armor</span>
					<h2>2300+ Global Society Place Their Trust in Our Services</h2>
				</div>
				
                <div class="partner-slider-info" data-cue="slideInUp">
                    <div class="partner-slider owl-carousel owl-theme">
                        <div class="single-partner-logo">
                            <img src="assets/images/partner/partner-1.png" alt="partner-2">
                        </div>
                        <div class="single-partner-logo">
                            <img src="assets/images/partner/partner-2.png" alt="partner-2">
                        </div>
                        <div class="single-partner-logo">
                            <img src="assets/images/partner/partner-3.png" alt="partner-3">
                        </div>
                        <div class="single-partner-logo">
                            <img src="assets/images/partner/partner-4.png" alt="partner-4">
                        </div>
                        <div class="single-partner-logo">
                            <img src="assets/images/partner/partner-5.png" alt="partner-5">
                        </div>
                        <div class="single-partner-logo">
                            <img src="assets/images/partner/partner-1.png" alt="partner-2">
                        </div>
                        <div class="single-partner-logo">
                            <img src="assets/images/partner/partner-2.png" alt="partner-2">
                        </div>
                        <div class="single-partner-logo">
                            <img src="assets/images/partner/partner-3.png" alt="partner-3">
                        </div>
                        <div class="single-partner-logo">
                            <img src="assets/images/partner/partner-4.png" alt="partner-4">
                        </div>
                        <div class="single-partner-logo">
                            <img src="assets/images/partner/partner-5.png" alt="partner-5">
                        </div>
                    </div>
                </div>
			</div>
		</div>
		<!-- End Partner Area -->
        
		<!-- Start Testimonial Area -->
		<div class="testimonial-area pt-100 pb-75">
			<div class="container">
				<div class="section-title text-center" data-cue="slideInUp">
					<span class="d-block">Testimonial</span>
					<h2>Our Customer Thought About Us.</h2>
				</div>
				<div class="testimonial-slider-info" data-cue="slideInUp">
					<div class="testimonial-slider owl-carousel owl-theme">
						<div class="single-testimonial-card">
							<div class="testimonial-user d-flex align-items-center justify-content-between">
								<div class="user d-flex align-items-center">
									<div class="image">
										<img src="assets/images/testimonial/testimonial-1.jpg" alt="testimonial-image">
									</div>
									<div class="content">
										<h3>Pamela Downs</h3>
										<span>Developer</span>
									</div>
								</div>
								<div class="star-icon">
									<ul class="list-unstyled ps-0 mb-0">
										<li><i class="ri-star-fill"></i></li>
										<li><i class="ri-star-fill"></i></li>
										<li><i class="ri-star-fill"></i></li>
										<li><i class="ri-star-fill"></i></li>
										<li><i class="ri-star-line"></i></li>
									</ul>
								</div>
							</div>
							<p>“This involves outsourcing some or all of a company's safety potency
								to a service provider. Services may include security monitoring, incident
								response, and managing security devices and systems. And how to
								respond to security incidents."</p>
						</div>
						<div class="single-testimonial-card">
							<div class="testimonial-user d-flex align-items-center justify-content-between">
								<div class="user d-flex align-items-center">
									<div class="image">
										<img src="assets/images/testimonial/testimonial-2.jpg" alt="testimonial-image">
									</div>
									<div class="content">
										<h3>Larry Shoemaker</h3>
										<span>CEO & Founder</span>
									</div>
								</div>
								<div class="star-icon">
									<ul class="list-unstyled ps-0 mb-0">
										<li><i class="ri-star-fill"></i></li>
										<li><i class="ri-star-fill"></i></li>
										<li><i class="ri-star-fill"></i></li>
										<li><i class="ri-star-fill"></i></li>
										<li><i class="ri-star-line"></i></li>
									</ul>
								</div>
							</div>
							<p>“This involves outsourcing some or all of a company's safety potency
								to a service provider. Services may include security monitoring, incident
								response, and managing security devices and systems. And how to
								respond to security incidents."</p>
						</div>
						<div class="single-testimonial-card">
							<div class="testimonial-user d-flex align-items-center justify-content-between">
								<div class="user d-flex align-items-center">
									<div class="image">
										<img src="assets/images/testimonial/testimonial-1.jpg" alt="testimonial-image">
									</div>
									<div class="content">
										<h3>Pamela Downs</h3>
										<span>Developer</span>
									</div>
								</div>
								<div class="star-icon">
									<ul class="list-unstyled ps-0 mb-0">
										<li><i class="ri-star-fill"></i></li>
										<li><i class="ri-star-fill"></i></li>
										<li><i class="ri-star-fill"></i></li>
										<li><i class="ri-star-fill"></i></li>
										<li><i class="ri-star-line"></i></li>
									</ul>
								</div>
							</div>
							<p>“This involves outsourcing some or all of a company's safety potency
								to a service provider. Services may include security monitoring, incident
								response, and managing security devices and systems. And how to
								respond to security incidents."</p>
						</div>
						<div class="single-testimonial-card">
							<div class="testimonial-user d-flex align-items-center justify-content-between">
								<div class="user d-flex align-items-center">
									<div class="image">
										<img src="assets/images/testimonial/testimonial-2.jpg" alt="testimonial-image">
									</div>
									<div class="content">
										<h3>Larry Shoemaker</h3>
										<span>CEO & Founder</span>
									</div>
								</div>
								<div class="star-icon">
									<ul class="list-unstyled ps-0 mb-0">
										<li><i class="ri-star-fill"></i></li>
										<li><i class="ri-star-fill"></i></li>
										<li><i class="ri-star-fill"></i></li>
										<li><i class="ri-star-fill"></i></li>
										<li><i class="ri-star-line"></i></li>
									</ul>
								</div>
							</div>
							<p>“This involves outsourcing some or all of a company's safety potency
								to a service provider. Services may include security monitoring, incident
								response, and managing security devices and systems. And how to
								respond to security incidents."</p>
						</div>
						<div class="single-testimonial-card">
							<div class="testimonial-user d-flex align-items-center justify-content-between">
								<div class="user d-flex align-items-center">
									<div class="image">
										<img src="assets/images/testimonial/testimonial-1.jpg" alt="testimonial-image">
									</div>
									<div class="content">
										<h3>Pamela Downs</h3>
										<span>Developer</span>
									</div>
								</div>
								<div class="star-icon">
									<ul class="list-unstyled ps-0 mb-0">
										<li><i class="ri-star-fill"></i></li>
										<li><i class="ri-star-fill"></i></li>
										<li><i class="ri-star-fill"></i></li>
										<li><i class="ri-star-fill"></i></li>
										<li><i class="ri-star-line"></i></li>
									</ul>
								</div>
							</div>
							<p>“This involves outsourcing some or all of a company's safety potency
								to a service provider. Services may include security monitoring, incident
								response, and managing security devices and systems. And how to
								respond to security incidents."</p>
						</div>
						<div class="single-testimonial-card">
							<div class="testimonial-user d-flex align-items-center justify-content-between">
								<div class="user d-flex align-items-center">
									<div class="image">
										<img src="assets/images/testimonial/testimonial-2.jpg" alt="testimonial-image">
									</div>
									<div class="content">
										<h3>Larry Shoemaker</h3>
										<span>CEO & Founder</span>
									</div>
								</div>
								<div class="star-icon">
									<ul class="list-unstyled ps-0 mb-0">
										<li><i class="ri-star-fill"></i></li>
										<li><i class="ri-star-fill"></i></li>
										<li><i class="ri-star-fill"></i></li>
										<li><i class="ri-star-fill"></i></li>
										<li><i class="ri-star-line"></i></li>
									</ul>
								</div>
							</div>
							<p>“This involves outsourcing some or all of a company's safety potency
								to a service provider. Services may include security monitoring, incident
								response, and managing security devices and systems. And how to
								respond to security incidents."</p>
						</div>
						<div class="single-testimonial-card">
							<div class="testimonial-user d-flex align-items-center justify-content-between">
								<div class="user d-flex align-items-center">
									<div class="image">
										<img src="assets/images/testimonial/testimonial-1.jpg" alt="testimonial-image">
									</div>
									<div class="content">
										<h3>Pamela Downs</h3>
										<span>Developer</span>
									</div>
								</div>
								<div class="star-icon">
									<ul class="list-unstyled ps-0 mb-0">
										<li><i class="ri-star-fill"></i></li>
										<li><i class="ri-star-fill"></i></li>
										<li><i class="ri-star-fill"></i></li>
										<li><i class="ri-star-fill"></i></li>
										<li><i class="ri-star-line"></i></li>
									</ul>
								</div>
							</div>
							<p>“This involves outsourcing some or all of a company's safety potency
								to a service provider. Services may include security monitoring, incident
								response, and managing security devices and systems. And how to
								respond to security incidents."</p>
						</div>
						<div class="single-testimonial-card">
							<div class="testimonial-user d-flex align-items-center justify-content-between">
								<div class="user d-flex align-items-center">
									<div class="image">
										<img src="assets/images/testimonial/testimonial-2.jpg" alt="testimonial-image">
									</div>
									<div class="content">
										<h3>Larry Shoemaker</h3>
										<span>CEO & Founder</span>
									</div>
								</div>
								<div class="star-icon">
									<ul class="list-unstyled ps-0 mb-0">
										<li><i class="ri-star-fill"></i></li>
										<li><i class="ri-star-fill"></i></li>
										<li><i class="ri-star-fill"></i></li>
										<li><i class="ri-star-fill"></i></li>
										<li><i class="ri-star-line"></i></li>
									</ul>
								</div>
							</div>
							<p>“This involves outsourcing some or all of a company's safety potency
								to a service provider. Services may include security monitoring, incident
								response, and managing security devices and systems. And how to
								respond to security incidents."</p>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!-- End Testimonial Area -->

		<!-- Start Blog Area -->
		<div class="blog-area pb-75">
			<div class="container">
				<div class="section-title text-center" data-cue="slideInUp">
					<span class="d-block">Our Blog</span>
					<h2>Latest Blog & Articles</h2>
				</div>
				<div class="row justify-content-center" data-cues="fadeIn">
					<div class="col-lg-4 col-md-6">
						<div class="single-blog-card">
							<div class="image">
								<a href="blog-details.html">
									<img src="assets/images/blog/blog-10.jpg" alt="blog-image">
								</a>
							</div>
							<ul class="list-unstyled ps-0 list">
								<li class="d-inline-block">
									<i class="ri-user-line"></i>
									By <a class="text-decoration-none" href="author.html">Admin</a>
								</li>
								<li class="d-inline-block">
									<i class="ri-calendar-2-line"></i>
									November 6, 2024
								</li>
							</ul>
							<h3>
								<a class="text-decoration-none" href="blog-details.html">Ensuring Data Security Amid Office Transitions The Emerging Trend of 2024.</a>
							</h3>
							<a class="read-more text-decoration-none" href="blog-details.html">
								Read More
								<i class="ri-arrow-right-line"></i>
							</a>
						</div>
					</div>
					<div class="col-lg-4 col-md-6">
						<div class="single-blog-card">
							<div class="image">
								<a href="blog-details.html">
									<img src="assets/images/blog/blog-11.jpg" alt="blog-image">
								</a>
							</div>
							<ul class="list-unstyled ps-0 list">
								<li class="d-inline-block">
									<i class="ri-user-line"></i>
									By <a class="text-decoration-none" href="author.html">Admin</a>
								</li>
								<li class="d-inline-block">
									<i class="ri-calendar-2-line"></i>
									November 8, 2024
								</li>
							</ul>
							<h3>
								<a class="text-decoration-none" href="blog-details.html">How Wireless Technology is Transforming Modern Business and Global Security.</a>
							</h3>
							<a class="read-more text-decoration-none" href="blog-details.html">
								Read More
								<i class="ri-arrow-right-line"></i>
							</a>
						</div>
					</div>
					<div class="col-lg-4 col-md-6">
						<div class="single-blog-card">
							<div class="image">
								<a href="blog-details.html">
									<img src="assets/images/blog/blog-12.jpg" alt="blog-image">
								</a>
							</div>
							<ul class="list-unstyled ps-0 list">
								<li class="d-inline-block">
									<i class="ri-user-line"></i>
									By <a class="text-decoration-none" href="author.html">Admin</a>
								</li>
								<li class="d-inline-block">
									<i class="ri-calendar-2-line"></i>
									November 6, 2024
								</li>
							</ul>
							<h3>
								<a class="text-decoration-none" href="blog-details.html">Securing the Future: How AI Redefines Customer Workload Protection.</a>
							</h3>
							<a class="read-more text-decoration-none" href="blog-details.html">
								Read More
								<i class="ri-arrow-right-line"></i>
							</a>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!-- End Blog Area -->

		<!-- Start Contact Area -->
		<div class="contact-area">
			<div class="container">
				<div class="contact-info-area">
					<div class="row align-items-center" data-cues="fadeIn">
						<div class="col-lg-3 col-sm-6 pe-0">
							<div class="single-contact-info">
								<div class="contact-call d-flex align-items-center">
									<div class="icon">
										<svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" viewBox="0 0 25 25" fill="none">
											<g clip-path="url(#clip0_288_89)">
											  <path d="M13.5416 1.04162C13.5416 0.765354 13.6514 0.500402 13.8467 0.305052C14.0421 0.109701 14.307 -4.54765e-05 14.5833 -4.54765e-05C17.345 0.00298744 19.9928 1.10143 21.9456 3.05428C23.8985 5.00712 24.9969 7.65488 24.9999 10.4166C24.9999 10.6929 24.8902 10.9578 24.6948 11.1532C24.4995 11.3485 24.2345 11.4583 23.9583 11.4583C23.682 11.4583 23.4171 11.3485 23.2217 11.1532C23.0264 10.9578 22.9166 10.6929 22.9166 10.4166C22.9141 8.20725 22.0354 6.08907 20.4731 4.5268C18.9108 2.96454 16.7927 2.08577 14.5833 2.08329C14.307 2.08329 14.0421 1.97354 13.8467 1.77819C13.6514 1.58284 13.5416 1.31789 13.5416 1.04162ZM14.5833 6.24995C15.6883 6.24995 16.7482 6.68894 17.5296 7.47034C18.311 8.25174 18.7499 9.31155 18.7499 10.4166C18.7499 10.6929 18.8597 10.9578 19.055 11.1532C19.2504 11.3485 19.5153 11.4583 19.7916 11.4583C20.0679 11.4583 20.3328 11.3485 20.5282 11.1532C20.7235 10.9578 20.8333 10.6929 20.8333 10.4166C20.8316 8.75953 20.1726 7.17077 19.0009 5.99903C17.8291 4.82729 16.2404 4.16828 14.5833 4.16662C14.307 4.16662 14.0421 4.27637 13.8467 4.47172C13.6514 4.66707 13.5416 4.93202 13.5416 5.20829C13.5416 5.48455 13.6514 5.74951 13.8467 5.94486C14.0421 6.14021 14.307 6.24995 14.5833 6.24995ZM24.0552 17.4364C24.6588 18.0417 24.9978 18.8617 24.9978 19.7166C24.9978 20.5715 24.6588 21.3915 24.0552 21.9968L23.1072 23.0895C14.576 31.2572 -6.18443 10.502 1.85724 1.9437L3.05515 0.902038C3.66116 0.315243 4.47383 -0.00936935 5.31734 -0.00157168C6.16086 0.00622599 6.96739 0.345807 7.56245 0.943705C7.59474 0.975996 9.52495 3.48329 9.52495 3.48329C10.0977 4.08498 10.4165 4.88426 10.4152 5.71496C10.4138 6.54566 10.0924 7.34388 9.51765 7.9437L8.3114 9.46037C8.97895 11.0824 9.96043 12.5565 11.1994 13.798C12.4384 15.0395 13.9106 16.0239 15.5312 16.6947L17.0572 15.4812C17.6571 14.9069 18.4552 14.5859 19.2857 14.5847C20.1161 14.5836 20.9151 14.9024 21.5166 15.475C21.5166 15.475 24.0229 17.4041 24.0552 17.4364ZM22.6218 18.951C22.6218 18.951 20.1291 17.0333 20.0968 17.001C19.8822 16.7882 19.5923 16.6688 19.29 16.6688C18.9878 16.6688 18.6979 16.7882 18.4833 17.001C18.4552 17.0302 16.3541 18.7041 16.3541 18.7041C16.2125 18.8168 16.044 18.8907 15.8652 18.9185C15.6864 18.9462 15.5034 18.9269 15.3343 18.8625C13.2348 18.0808 11.3278 16.857 9.74248 15.274C8.15717 13.691 6.93057 11.7858 6.14578 9.68746C6.07619 9.51605 6.05351 9.32921 6.08005 9.14614C6.1066 8.96307 6.18142 8.79037 6.29682 8.64579C6.29682 8.64579 7.97078 6.5437 7.9989 6.51662C8.21168 6.30202 8.33107 6.01205 8.33107 5.70985C8.33107 5.40765 8.21168 5.11768 7.9989 4.90308C7.96661 4.87183 6.0489 2.37704 6.0489 2.37704C5.83109 2.18173 5.54682 2.07714 5.25437 2.08469C4.96192 2.09224 4.68343 2.21137 4.47599 2.41766L3.27807 3.45933C-2.59901 10.526 15.3916 27.5187 21.5843 21.6666L22.5333 20.5729C22.7557 20.3669 22.8892 20.0825 22.9057 19.7799C22.9223 19.4772 22.8204 19.18 22.6218 18.951Z" fill="#6600FC"/>
											</g>
										</svg>
									</div>
									<div class="content">
										<h3>Give Us A Call</h3>
										<a class="text-decoration-none" href="tel:319-490-4589">+319-490-4589</a>
									</div>
								</div>
							</div>
						</div>
						<div class="col-lg-3 col-sm-6 p-0">
							<div class="single-contact-info">
								<div class="contact-social">
									<ul class="list-unstyled ps-0 mb-0 list">
										<li class="d-inline-block">
											<a class="text-decoration-none" target="_blank" href="https://www.facebook.com/">
												<i class="ri-facebook-circle-line"></i>
											</a>
										</li>
										<li class="d-inline-block">
											<a class="text-decoration-none" target="_blank" href="https://twitter.com/">
												<i class="ri-twitter-x-line"></i>
											</a>
										</li>
										<li class="d-inline-block">
											<a class="text-decoration-none" target="_blank" href="https://www.instagram.com/">
												<i class="ri-instagram-line"></i>
											</a>
										</li>
										<li class="d-inline-block">
											<a class="text-decoration-none" target="_blank" href="https://www.pinterest.com/">
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
									<img src="assets/images/white-logo.png"	 class="black-logo" alt="logo">
								</a>
								<p>Cybersecurity is crucial in today's digital age, where many individuals and organizations store a significant amount of sensitive data on computers...</p>
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
												<a href="mailto:info@yourdomain.com">info@cyberarmor.com</a>
											</li>
											<li>
												<strong>Phone:</strong>
												<a class="text-decoration-none" href="tel:55472543526">+5-547-254-3526</a>
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
												<a class="text-decoration-none" href="privacy-policy.html">Privacy Policy</a>
											</li>
											<li>
												<a class="text-decoration-none" href="terms-conditions.html">Terms & Conditions</a>
											</li>
											<li>
												<a class="text-decoration-none" href="contact.html">Contact Us</a>
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
					<p>Copyright @ 2024 <strong>Cyber Armor</strong>, All Rights Reserved</p>
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
        <script data-cfasync="false" src="../../../cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script><script src="assets/js/jquery.min.js"></script>
        <script src="assets/js/bootstrap.bundle.min.js"></script>
		<script src="assets/js/odometer.min.js"></script>
        <script src="assets/js/meanmenu.min.js"></script>
        <script src="assets/js/scrollCue.min.js"></script>
        <script src="assets/js/owl.carousel.min.js"></script>
        <script src="assets/js/jquery.magnific.popup.js"></script>
        <script src="assets/js/custom.js"></script>
    </body>
</html>