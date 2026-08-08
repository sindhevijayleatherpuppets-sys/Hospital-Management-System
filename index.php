<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<title>Dhanvanthari Ayurveda Hospital - Dr. Krishnamoorthy BS, B.A.M.S. | Chief Ayurvedic Physician</title>
	<meta name="description" content="Dhanvanthari Ayurveda Hospital, led by Chief Ayurvedic Physician Dr. Krishnamoorthy BS, B.A.M.S. 16+ Years of trusted experience in Panchakarma Therapy, Nadi Pariksha, and authentic holistic healing.">
	<meta name="keywords" content="Ayurvedic Hospital, Dr. Krishnamoorthy BS, BAMS, Panchakarma Specialist, Nadi Pariksha, Dhanvanthari Ayurveda">
	
	<!-- Open Graph Meta Tags -->
	<meta property="og:title" content="Dhanvanthari Ayurveda Hospital - Chief Doctor Dr. Krishnamoorthy BS, B.A.M.S.">
	<meta property="og:description" content="Authentic Ayurvedic treatments, Panchakarma therapies, and holistic healing with over 16+ years of trusted experience.">
	<meta property="og:image" content="images/logo.png">
	<meta property="og:type" content="website">
	<meta property="og:url" content="index.php">

	<!-- Medical Organization & Physician JSON-LD Schema -->
	<script type="application/ld+json">
	{
	  "@context": "https://schema.org",
	  "@type": "MedicalOrganization",
	  "name": "Dhanvanthari Ayurveda Hospital",
	  "url": "index.php",
	  "logo": "images/logo.png",
	  "foundingDate": "2010",
	  "description": "Authentic Ayurvedic healthcare, Panchakarma therapies, and long-term wellness.",
	  "medicalSpecialty": "Ayurvedic Medicine",
	  "employee": {
	    "@type": "Physician",
	    "name": "Dr. Krishnamoorthy BS",
	    "honorificSuffix": "B.A.M.S.",
	    "jobTitle": "Chief Ayurvedic Physician & Panchakarma Specialist",
	    "medicalSpecialty": "Ayurvedic Medicine",
	    "description": "Dedicated to authentic Ayurvedic treatments through personalized consultations, traditional Panchakarma therapies, preventive healthcare, and holistic healing practices."
	  }
	}
	</script>

	<link rel="shortcut icon" type="image/x-icon" href="images/favicon.png" />
	<link rel="stylesheet" type="text/css" href="style1.css">
	<link href="https://fonts.googleapis.com/css2?family=IBM+Plex+Sans:wght@300;400;500;600;700;800&display=swap" rel="stylesheet">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
	<link rel="stylesheet" href="vendor/fontawesome/css/font-awesome.min.css">
	<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">

	<style>
		/* === Herbal Sapphire — Page-Level Tokens === */
		.btn-cta {
			transition: all 0.4s cubic-bezier(0.25, 0.46, 0.45, 0.94);
			position: relative;
			overflow: hidden;
		}
		.btn-cta:hover {
			transform: translateY(-3px);
			box-shadow: 0 8px 25px rgba(0,0,0,0.2);
		}
		.btn-cta:active {
			transform: translateY(-1px);
		}

		/* Specialization pills */
		.spec-badge {
			background: rgba(27, 138, 74, 0.08);
			color: #1b8a4a;
			border: 1.5px solid rgba(27, 138, 74, 0.2);
			border-radius: 50px;
			padding: 8px 16px;
			font-size: 0.82rem;
			font-weight: 600;
			display: inline-block;
			margin: 4px;
			transition: all 0.35s ease;
			letter-spacing: 0.2px;
		}
		.spec-badge:hover {
			background: #1b8a4a;
			color: #ffffff;
			transform: translateY(-2px);
			box-shadow: 0 4px 12px rgba(27, 138, 74, 0.25);
		}

		/* Dynamic navbar */
		.navbar-dynamic {
			transition: all 0.5s cubic-bezier(0.25, 0.46, 0.45, 0.94) !important;
			background: rgba(26, 60, 42, 0.8) !important;
			backdrop-filter: blur(16px) saturate(180%);
			-webkit-backdrop-filter: blur(16px) saturate(180%);
		}
		.navbar-scrolled {
			background: rgba(18, 45, 30, 0.97) !important;
			box-shadow: 0 4px 30px rgba(0,0,0,0.25) !important;
			padding: 6px 20px !important;
		}

		/* Hero card */
		.hero-card {
			background: #faf9f7;
			border-radius: 24px;
			padding: 40px;
			box-shadow: 0 20px 60px rgba(0, 0, 0, 0.12);
			border-left: 6px solid #1b8a4a;
			position: relative;
			overflow: hidden;
		}
		.hero-card::before {
			content: '';
			position: absolute;
			top: 0;
			right: 0;
			width: 200px;
			height: 200px;
			background: radial-gradient(circle, rgba(27, 138, 74, 0.06) 0%, transparent 70%);
			border-radius: 50%;
			pointer-events: none;
		}

		/* Profile card */
		.profile-card {
			background: #faf9f7;
			border-radius: 24px;
			overflow: hidden;
			box-shadow: 0 12px 40px rgba(0, 0, 0, 0.08);
			border: 1px solid rgba(0,0,0,0.04);
			transition: transform 0.3s ease, box-shadow 0.3s ease;
		}
		.profile-card:hover {
			transform: translateY(-4px);
			box-shadow: 0 20px 50px rgba(0, 0, 0, 0.12);
		}

		/* Footer */
		.site-footer {
			background: linear-gradient(135deg, #122d1e 0%, #1a3c2a 50%, #2d4a35 100%);
			color: rgba(255,255,255,0.9);
			padding: 40px 0 20px;
			margin-top: 50px;
			border-top: 3px solid rgba(139, 115, 85, 0.4);
		}
		.site-footer a {
			color: rgba(255,255,255,0.7);
			transition: color 0.3s ease;
		}
		.site-footer a:hover {
			color: #c9a96e;
			text-decoration: none;
		}

		/* Nav links */
		.navbar .nav-link h6 {
			position: relative;
			margin: 0;
		}
		.navbar .nav-link h6::after {
			content: '';
			position: absolute;
			bottom: -4px;
			left: 50%;
			width: 0;
			height: 2px;
			background: #c9a96e;
			transition: all 0.3s ease;
			transform: translateX(-50%);
			border-radius: 2px;
		}
		.navbar .nav-link:hover h6::after {
			width: 100%;
		}

		/* Reduce motion */
		@media (prefers-reduced-motion: reduce) {
			*, *::before, *::after {
				animation-duration: 0.01ms !important;
				transition-duration: 0.01ms !important;
			}
		}
	</style>

	<script>
	    var check = function() {
		  if (document.getElementById('password').value ==
		    document.getElementById('cpassword').value) {
		    document.getElementById('message').style.color = '#5dd05d';
		    document.getElementById('message').innerHTML = 'Matched';
		  } else {
		    document.getElementById('message').style.color = '#f55252';
		    document.getElementById('message').innerHTML = 'Not Matching';
		  }
		}

		function alphaOnly(event) {
		  var key = event.keyCode;
		  return ((key >= 65 && key <= 90) || key == 8 || key == 32);
		};

		function checklen()
		{
		    var pass1 = document.getElementById("password");  
		    if(pass1.value.length<6){  
		        alert("Password must be at least 6 characters long. Try again!");  
		        return false;  
		  }  
		}

		window.addEventListener('scroll', function() {
		  var nav = document.getElementById('mainNav');
		  if (nav) {
		    if (window.scrollY > 40) {
		      nav.classList.add('navbar-scrolled');
		    } else {
		      nav.classList.remove('navbar-scrolled');
		    }
		  }
		});
	</script>
</head>

<body>
<nav class="navbar navbar-expand-lg navbar-dark fixed-top navbar-dynamic" id="mainNav" style="padding: 12px 20px;">
    <div class="container-fluid px-md-4">
      <a class="navbar-brand js-scroll-trigger" href="index.php" style="font-family: 'IBM Plex Sans', sans-serif; display: flex; align-items: center; gap: 12px;">
        <img src="images/logo.png" alt="Dhanvanthari Logo" style="height: 45px; width: auto; object-fit: contain;">
        <h3 style="margin: 0; font-weight: 700; color: #ffffff; letter-spacing: 0.5px; font-size: 1.25rem; text-shadow: 0 2px 4px rgba(0,0,0,0.3);">DHANVANTHARI AYURVEDA HOSPITAL</h3>
      </a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarResponsive">
        <ul class="navbar-nav ml-auto">
          <li class="nav-item" style="margin-right: 30px;">
            <a class="nav-link js-scroll-trigger" href="index.php" style="color: white; font-family: 'IBM Plex Sans', sans-serif; font-weight: 600;"><h6>HOME</h6></a>
          </li>
          <li class="nav-item" style="margin-right: 30px;">
            <a class="nav-link js-scroll-trigger" href="services.html" style="color: white; font-family: 'IBM Plex Sans', sans-serif; font-weight: 600;"><h6>ABOUT US</h6></a>
          </li>
          <li class="nav-item">
            <a class="nav-link js-scroll-trigger" href="contact.html" style="color: white; font-family: 'IBM Plex Sans', sans-serif; font-weight: 600;"><h6>CONTACT</h6></a>
          </li>
        </ul>
      </div>
    </div>
  </nav>

  <!-- HERO SECTION - CHIEF DOCTOR SPOTLIGHT -->
  <div class="container" style="margin-top: 100px; margin-bottom: 28px; font-family: 'IBM Plex Sans', sans-serif;">
    <div class="row align-items-center hero-card">
      <div class="col-lg-3 text-center mb-4 mb-lg-0">
        <img src="images/doctor-image.png" alt="Dr. Krishnamoorthy BS" style="width: 170px; height: 170px; border-radius: 50%; object-fit: cover; box-shadow: 0 12px 35px rgba(27,138,74,0.25); border: 5px solid #1b8a4a; padding: 4px; background: white;">
        <p style="margin-top: 12px; font-size: 0.8rem; color: #64748b; font-weight: 500;">16+ Years Experience</p>
      </div>
      <div class="col-lg-9">
        <span style="display: inline-block; background: rgba(27,138,74,0.1); color: #1b8a4a; font-size: 0.78rem; font-weight: 700; letter-spacing: 1.5px; text-transform: uppercase; padding: 6px 16px; border-radius: 50px; margin-bottom: 10px;">Chief Ayurvedic Physician</span>
        <h2 style="color: #0f1b3d; font-weight: 800; font-size: 2.1rem; margin-bottom: 4px; line-height: 1.2;">Dr. Krishnamoorthy BS, <span style="color: #1b8a4a;">B.A.M.S.</span></h2>
        <p style="color: #1b8a4a; font-weight: 600; margin-bottom: 14px; font-size: 1.05rem;">Panchakarma Specialist &bull; Nadi Pariksha Expert</p>
        <p style="color: #64748b; font-size: 0.95rem; line-height: 1.7; margin-bottom: 20px; max-width: 640px;">
          Dedicated to authentic Ayurvedic treatments through personalized consultations, traditional Panchakarma therapies, and holistic healing. Focused on natural healing, patient-centered care, and long-term wellness.
        </p>
        <div class="d-flex flex-wrap align-items-center" style="gap: 12px;">
          <a href="#appointment-section" class="btn btn-cta font-weight-bold px-4 py-2" style="border-radius: 50px; font-size: 0.95rem; background: linear-gradient(135deg, #1b8a4a, #28a745); color: white; border: none; box-shadow: 0 4px 15px rgba(27,138,74,0.3);"><i class="fa fa-calendar-check-o"></i> Book Appointment</a>
          <a href="tel:+919035931500" class="btn btn-cta font-weight-bold px-4 py-2" style="border-radius: 50px; font-size: 0.95rem; border: 2px solid #1b8a4a; color: #1b8a4a; background: transparent;"><i class="fa fa-phone"></i> Call Now</a>
          <a href="https://wa.me/919035931500?text=Hello%20Dr.%20Krishnamoorthy,%20I%20would%20like%20to%20book%20a%20consultation" target="_blank" class="btn btn-cta font-weight-bold px-4 py-2" style="background: #25D366; border: none; color: white; border-radius: 50px; font-size: 0.95rem; box-shadow: 0 4px 15px rgba(37,211,102,0.3);"><i class="fa fa-whatsapp"></i> WhatsApp</a>
        </div>
      </div>
    </div>
  </div>

  <!-- HOMEPAGE CHIEF DOCTOR PROFILE & SPECIALIZATION CARD -->
  <div class="container mb-4" style="font-family: 'IBM Plex Sans', sans-serif;">
    <div class="profile-card">
      <div class="p-4">
        <div class="row">
          <div class="col-md-5" style="border-right: 1px solid rgba(0,0,0,0.06);">
            <h5 style="color: #0f1b3d; font-weight: 700; margin-bottom: 16px;"><i class="fa fa-user-md" style="color: #1b8a4a;"></i>&ensp;Doctor Profile</h5>
            <table class="table table-borderless table-sm" style="font-size: 0.92rem;">
              <tr><td style="width: 120px; font-weight: 600; color: #64748b;">Name</td><td style="color: #0f1b3d; font-weight: 700;">Dr. Krishnamoorthy BS</td></tr>
              <tr><td style="font-weight: 600; color: #64748b;">Qualification</td><td>B.A.M.S.</td></tr>
              <tr><td style="font-weight: 600; color: #64748b;">Designation</td><td>Chief Ayurvedic Physician</td></tr>
              <tr><td style="font-weight: 600; color: #64748b;">Experience</td><td><span style="background: rgba(27,138,74,0.1); color: #1b8a4a; padding: 3px 10px; border-radius: 20px; font-weight: 600; font-size: 0.85rem;">16+ Years</span></td></tr>
              <tr><td style="font-weight: 600; color: #64748b;">Timings</td><td style="font-size: 0.88rem;">Mon–Sat: 9 AM – 1 PM &amp; 4 – 8 PM</td></tr>
            </table>
          </div>
          <div class="col-md-7 pl-md-4 mt-3 mt-md-0">
            <h5 style="color: #0f1b3d; font-weight: 700; margin-bottom: 16px;"><i class="fa fa-medkit" style="color: #1b8a4a;"></i>&ensp;Specializations</h5>
            <div>
              <span class="spec-badge">Panchakarma Therapy</span>
              <span class="spec-badge">Nadi Pariksha</span>
              <span class="spec-badge">Ayurvedic Consultation</span>
              <span class="spec-badge">PCOS / PCOD</span>
              <span class="spec-badge">Spine &amp; Joint Disorders</span>
              <span class="spec-badge">Arthritis &amp; Rheumatic Care</span>
              <span class="spec-badge">Diabetes Management</span>
              <span class="spec-badge">Weight Loss Counselling</span>
              <span class="spec-badge">Allergy Treatment</span>
              <span class="spec-badge">Digestive Disorders</span>
              <span class="spec-badge">Lifestyle Wellness</span>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

<div class="container register" id="appointment-section" style="font-family: 'IBM Plex Sans', sans-serif;">
                <div class="row">
                    <div class="col-md-3 register-left" style="margin-top: 8%; right: 3%; text-align: center;">
                        <img src="images/logo.png" alt="Dhanvanthari Logo" style="width: 190px; height: auto; object-fit: contain; margin-bottom: 20px;"/>
                        <h3>Welcome</h3>
                    </div>
                    <div class="col-md-9 register-right" style="margin-top: 40px;left: 80px;">
                        <ul class="nav nav-tabs nav-justified" id="myTab" role="tablist" style="width: 40%;">
                            <li class="nav-item">
                                <a class="nav-link active" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="true">Patient</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" id="profile-tab" data-toggle="tab" href="#profile" role="tab" aria-controls="profile" aria-selected="false">Doctor</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" id="profile-tab" data-toggle="tab" href="#admin" role="tab" aria-controls="admin" aria-selected="false">Receptionist</a>
                            </li>
                        </ul>
                        <div class="tab-content" id="myTabContent">
                            <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
                                <h3 class="register-heading">Register as Patient</h3>
                                <form method="post" action="func2.php">
                                <div class="row register-form">
                                    
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <input type="text" class="form-control" placeholder="First Name *" name="fname" onkeydown="return alphaOnly(event);" required/>
                                        </div>
                                        <div class="form-group">
                                            <input type="email" class="form-control" placeholder="Your Email *" name="email" />
                                        </div>
                                        <div class="form-group">
                                            <input type="password" class="form-control" placeholder="Password *" id="password" name="password" onkeyup='check();' required/>
                                        </div>
                                        
                                        <div class="form-group">
                                            <div class="maxl">
                                                <label class="radio inline"> 
                                                    <input type="radio" name="gender" value="Male" checked>
                                                    <span> Male </span> 
                                                </label>
                                                <label class="radio inline"> 
                                                    <input type="radio" name="gender" value="Female">
                                                    <span>Female </span> 
                                                </label>
                                            </div>
                                            <a href="index1.php">Already have an account?</a>
                                        </div>
                                    </div>
                                
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <input type="text" class="form-control" placeholder="Last Name *" name="lname" onkeydown="return alphaOnly(event);" required/>
                                        </div>
                                        
                                        <div class="form-group">
                                            <input type="tel" minlength="10" maxlength="10" name="contact" class="form-control" placeholder="Your Phone *" />
                                        </div>
                                        <div class="form-group">
                                            <input type="password" class="form-control" id="cpassword" placeholder="Confirm Password *" name="cpassword" onkeyup='check();' required/><span id='message'></span>
                                        </div>
                                        <input type="submit" class="btnRegister" name="patsub1" onclick="return checklen();" value="Register"/>
                                    </div>

                                </div>
                            </form>
                            </div>

                            
                            <div class="tab-pane fade show" id="profile" role="tabpanel" aria-labelledby="profile-tab">
                                <h3 class="register-heading">Login as Doctor</h3>
                                <form method="post" action="func1.php">
                                <div class="row register-form">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <input type="text" class="form-control" placeholder="User Name *" name="username3" onkeydown="return alphaOnly(event);" required/>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <input type="password" class="form-control" placeholder="Password *" name="password3" required/>
                                        </div>
                                        
                                        <input type="submit" class="btnRegister" name="docsub1" value="Login"/>
                                    </div>
                                </div>
                            </form>
                            </div>


                            <div class="tab-pane fade show" id="admin" role="tabpanel" aria-labelledby="profile-tab">
                                <h3 class="register-heading">Login as Admin</h3>
                                <form method="post" action="func3.php">
                                <div class="row register-form">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <input type="text" class="form-control" placeholder="User Name *" name="username1" onkeydown="return alphaOnly(event);" required/>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <input type="password" class="form-control" placeholder="Password *" name="password2" required/>
                                        </div>
                                        
                                        <input type="submit" class="btnRegister" name="adsub" value="Login"/>
                                    </div>
                                </div>
                            </form>
                            </div>
                        </div>

                    </div>
                </div>

            </div>

    <!-- FOOTER -->
    <footer class="site-footer" style="font-family: 'IBM Plex Sans', sans-serif;">
      <div class="container">
        <div class="row">
          <div class="col-md-4 mb-3 mb-md-0">
            <div style="display: flex; align-items: center; gap: 10px; margin-bottom: 12px;">
              <img src="images/logo.png" alt="Logo" style="height: 36px; width: auto; object-fit: contain;">
              <span style="font-weight: 700; font-size: 1rem; color: white;">Dhanvanthari Ayurveda</span>
            </div>
            <p style="font-size: 0.85rem; color: rgba(255,255,255,0.6); line-height: 1.6; margin: 0;">Authentic Ayurvedic healthcare since 2010. Focused on natural healing and patient-centered care.</p>
          </div>
          <div class="col-md-4 mb-3 mb-md-0">
            <h6 style="font-weight: 700; color: #c9a96e; margin-bottom: 10px; font-size: 0.85rem; letter-spacing: 1px; text-transform: uppercase;">Chief Physician</h6>
            <p style="margin: 0 0 4px 0; font-weight: 600; color: white; font-size: 0.95rem;">Dr. Krishnamoorthy BS, B.A.M.S.</p>
            <p style="margin: 0; font-size: 0.82rem; color: rgba(255,255,255,0.6);">Panchakarma Specialist &bull; 16+ Years Experience</p>
          </div>
          <div class="col-md-4 text-md-right">
            <h6 style="font-weight: 700; color: #c9a96e; margin-bottom: 10px; font-size: 0.85rem; letter-spacing: 1px; text-transform: uppercase;">Quick Links</h6>
            <a href="index.php" style="display: block; font-size: 0.85rem; margin-bottom: 4px;">Home</a>
            <a href="services.html" style="display: block; font-size: 0.85rem; margin-bottom: 4px;">About Us</a>
            <a href="contact.html" style="display: block; font-size: 0.85rem;">Contact</a>
          </div>
        </div>
        <hr style="border-color: rgba(255,255,255,0.1); margin: 20px 0 15px;">
        <p style="text-align: center; margin: 0; font-size: 0.8rem; color: rgba(255,255,255,0.45);">&copy; 2010–2026 Dhanvanthari Ayurveda Hospital. All rights reserved.</p>
      </div>
    </footer>

    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>
</html>

  