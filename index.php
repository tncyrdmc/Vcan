<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="" content="">
    <meta name="" content="">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">

	<!--Icons-->
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <!--main theme-->
    <link rel="stylesheet" type="text/css" href="css/theme.css">
    <!--my style-->
	<link rel="stylesheet" type="text/css" href="css/style.css">

    <title>HOME</title>

</head>
<body>

	<header id="header" class="header">
		<!--my navigation-->
		<?php include "nav.php";?>
		<div class="full-bg"></div>
		<!--slide show container-->
		<div class="slide-show">
		</div>
	</header>

	<!--About us section-->
	<section id="about-us">
		<div class="abt-bg">
			<div class="abt-bg-white">
				<div class="abt-text">
					<h2>ABOUT US</h2>
					<p>Zenith Software Solutions was founded in Kakinada Andhra Pradesh, which  specializes in Web Development, Website Design Services, Web Hosting, Mobile Website Designs, Mobile Applications Development, Digital Marketing Services (SEO, SEM, SMO, SMM), Animation Designs(2d, 3d), Graphic Designing, branding, logo designs, Brochures, Creative Designs, Bulk & Voice SMS, Whatsapp & Email Marketing softwares. <span><a href="about.php">Read More</a></span></p>
				</div>
			</div>
		</div>
	</section>

	<!--Our serices section-->
	<section id="our-services">
		<div class="services-container">
			<h2>OUR SERVICES</h2>
			<div class="box-container">
                 <div class="s-rows">
                     <div class="s-row">
                        <div class="s-icon"></div>
                         <h5>WEB DEVELOPMENT</h5>
                         <div class="row-text">
                             <p>Our website development process is in the making  structured for efficiency and high-quality output</p>
                         </div>
                         <div class="r-bt">
                            <a href="web-development.php">Know More</a>
                         </div>
                     </div>
                     <div class="s-row">
                         <div class="s-icon"></div>
                         <h5>WEB DESIGN</h5>
                         <div class="row-text">
                             <p>The appearance of your website make strong impression on the image of your company. When you own a business</p>                   
                         </div>
                         <div class="r-bt">
                            <a href="web-design.php">Know More</a>
                        </div>  
                     </div>
                     <div class="s-row">
                        <div class="s-icon"></div>
                        <h5>WEB HOSTING SERVICES</h5>
                        <div class="row-text">
                             <p> In Zenith,the best place to host your business or personal website. We do everything for you from domain names, web design ...</p>
                        </div>
                        <div class="r-bt">
                          <a href="web-hosting-service.php">Know More</a>
                        </div>
                     </div>
                </div>

                <div class="s-rows">
                     <div class="s-row">
                        <div class="s-icon"></div>
                        <h5>DIGITAL MARKETING</h5>
                        <div class="row-text">
                             <p>SEO Services, 
                                Search Engine Marketing, 
                                Social Media Marketing, 
                                Pay Per Click Advertising, 
                                SEO Copywriting, 
                                Link Building...</p>
                         </div>
                         <div class="r-bt">
                             <a href="http://">Know More</a>
                         </div>
                     </div>
                     <div class="s-row">
                        <div class="s-icon"></div>
                        <h5>VOICE SMS & BULK SMS</h5>
                        <div class="row-text">
                             <p>Bulk Voice SMS are pre-recorded voice messages to a mobile or landline networks across the country.</p>
                        </div> 
                        <div class="r-bt">
                            <a href="bulk-sms.php">Know More</a>
                        </div>                    
                     </div>
                     <div class="s-row">
                        <div class="s-icon"></div>
                        <h5>EMAIL MARKETING</h5>
                        <div class="row-text">
                             <p>On this competitive world everyone wants to send bulk emails to get more business</p>
                         </div>
                         <div class="r-bt">
                            <a href="http://">Know More</a>
                         </div>
                     </div>
                </div>
			<div class="s-bt">
				<a href="services.php">More services</a>
			</div>
		</div>
	</section>

	<!--Recent works-->
	<section id="recent-work">
		<div class="rt-wt-container">
		<h2>RECENT WORKS</h2>

		</div>
	</section>

	<!--What our costumer say about us-->
	<section id="ct-fb">
		<div class="ct-fb">
			<h2>THEY SAY ABOUT US</h2>

		</div>
	</section>


	<!--footer of the page-->
	<?php include "footer.php";?>
</body>
</html>