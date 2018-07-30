<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <meta name="description" content="Vcan Software Solutions was founded in Kakinada Andhra Pradesh, We  specializes in Web Development, Website Design Services, Web Hosting, Mobile Website Designs, Mobile Applications Development, Digital Marketing Services (SEO, SEM, SMO, SMM), Animation Designs(2d, 3d), Graphic Designing, branding, logo designs, Brochures, Creative Designs, Bulk & Voice SMS, Whatsapp & Email Marketing softwares.">
  <meta name="keywords" content="Web Development, Website Design, Web Hosting, Mobile Website Designs, Mobile Applications Development, Digital Marketing Services, SEO, SEM, SMO, SMM, Animation Designs 2d, 3d, Graphic Designing, branding, logo designs, Brochures, Creative Designs, Bulk  Voice SMS, Whatsapp and Email Marketing softwares">
  <meta name="author" content="Deng Beny Thon, email dengbeny123@gmail.com">

	<!--Icons-->
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  <!--main theme-->
  <link rel="stylesheet" type="text/css" href="css/theme.css">
  <!--my style-->
	<link rel="stylesheet" type="text/css" href="css/style.css">

  <!--our logo-->
  <link rel="icon" href="img/logo/logo.png" type="image/gif" sizes="16x16">
    <style>
    /* Slideshow container */
        .slideshow-container {
          width: 100%;
          height: inherit;
        }
        
        /* Slides */
        .mySlides {
          width: 100%;
          height: inherit;
          display: none;
          text-align: center;
        }
        .mySlides img{
          width: inherit;
          height: inherit;
          object-fit: cover;
          z-index: 1;
        }
        .slide-caption{
          width: 100%;
          height: 200px;
          padding: 10px;
          position: absolute;
          top: 20%;
          box-sizing: border-box;
          z-index: 50;
        }
        .slide-caption h1{
          font-size: 74px;
          color: #ffffff;
        }
        /* Next & previous buttons */
        .prev, .next {
          cursor: pointer;
          position: absolute;
          top: 45%;
          width: auto;
          margin-top: -30px;
          padding: 10px;
          color: #888;
          font-weight: bold;
          font-size: 20px;
          border-radius: 0 3px 3px 0;
          user-select: none;
          background-color: rgba(0,0,0,0.5);
          z-index: 50;
        }
        
        /* Position the "next button" to the right */
        .next {
          position: absolute;
          right: 0;
          border-radius: 3px 0 0 3px;
        }
        
        /* On hover, add a black background color with a little bit         see-through */
        .prev:hover, .next:hover {
          background-color: rgb(0,0,0);
          color: white;
        }
        
        /* The dot/bullet/indicator container */
        .dot-container {
          width: 100%;
          text-align: center;
          padding: 20px;
          background: #ddd;
        }
        
    </style>

    <title>VCANSOFTSOL</title>

</head>
<body>

	<header id="home" class="header">
		<!--my navigation-->
		<?php include "nav.php";?>
    <div class="fs"></div>
    <!-- Slideshow container -->
    <div class="slideshow-container">
      <!-- Full-width slides/quotes -->
      <div class="mySlides">
        <img src="img/rawpixel-594848-unsplash.jpg">
        <div class="slide-caption">
          <h1></h1>
        </div>
      </div>

      <div class="mySlides">
        <img src="img/goran-ivos-307271-unsplash.jpg">
        <div class="slide-caption">
          <h1>Web Development</h1>
        </div>
      </div>

      <div class="mySlides">
        <img src="img/rami-al-zayat-170349-unsplash.jpg">
        <div class="slide-caption">
          <h1>Mobile Apps Development</h1>
        </div>
      </div>

      <div class="mySlides">
        <img src="img/service-bg/courses-for-small-business-owners.jpg">
        <div class="slide-caption">
          <h1>Bulk and Voice SMS</h1>
        </div>
      </div>

      <div class="mySlides">
        <img src="img/technologies-that-could-change-digital-marketing-forever.jpg">
        <div class="slide-caption">
          <h1>Digital Marketing</h1>
        </div>
      </div>

      <div class="mySlides">
        <img src="img/alice-achterhof-85968-unsplash.jpg">
        <div class="slide-caption">
          <h1>Graphics Design</h1>
        </div>
      </div>

       <div class="mySlides">
        <img src="img/email-3249062_1280.png">
        <div class="slide-caption">
          <h1>Email and Whatsapp Marketing</h1>
        </div>
      </div>



      <!-- Next/prev buttons -->
      <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
      <a class="next" onclick="plusSlides(1)">&#10095;</a>

   </div>

	</header>

	<!--About us section-->
	<section id="about-us">
		<div class="abt-bg">
			<div class="abt-bg-white">
				<div class="abt-text">
					<h2>ABOUT US</h2>
					<p><b>Vcan</b> Software Solutions was founded in Kakinada Andhra Pradesh, We  specializes in Web Development, Website Design Services, Web Hosting, Mobile Website Designs, Mobile Applications Development, Digital Marketing Services (SEO, SEM, SMO, SMM), Animation Designs(2d, 3d), Graphic Designing, branding, logo designs, Brochures, Creative Designs, Bulk & Voice SMS, Whatsapp & Email Marketing softwares. <span><a href="about.php">Read More</a></span></p>
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
                        <div class="s-icon">
                           <img src="img/service-bg/web-develop9090.jpg">
                        </div>
                         <h5>WEB DEVELOPMENT</h5>
                         <div class="row-text">
                             <p>Our website development process is in the making  structured for efficiency and high-quality output</p>
                         </div>
                         <div class="r-bt">
                            <a href="web-development.php">Know More</a>
                         </div>
                     </div>
                     <div class="s-row">
                         <div class="s-icon">
                             <img src="img/service-bg/web-develop2.png" style="width: 100%">
                         </div>
                         <h5>WEB DESIGN</h5>
                         <div class="row-text">
                             <p>The appearance of your website make strong impression on the image of your company. When you own a business</p>                   
                         </div>
                         <div class="r-bt">
                            <a href="web-design.php">Know More</a>
                        </div>  
                     </div>

                     <div class="s-row">
                        <div class="s-icon">
                            <img src="img/service-bg/hybrid.png">
                        </div>
                        <h5>MOBILE APPS DEVELOPMENT</h5>
                        <div class="row-text">
                             <p>Mobile Application Development is an area that goes beyond the creation of a compelling user interface. The scope of work includes ...</p>
                        </div>
                        <div class="r-bt">
                            <a href="mobile-apps-dev.php">Know More</a>
                         </div>
                     </div>
                </div>

                <div class="s-rows">
                     <div class="s-row">
                        <div class="s-icon">
                            <img src="img/service-bg/Digital-marketing.png">
                        </div>
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
                             <a href="digital-marketing.php">Know More</a>
                         </div>
                     </div>
                     <div class="s-row">
                        <div class="s-icon">
                            <img src="img/service-bg/chat.png">
                        </div>
                        <h5>VOICE SMS & BULK SMS</h5>
                        <div class="row-text">
                             <p>Bulk Voice SMS are pre-recorded voice messages to a mobile or landline networks across the country.</p>
                        </div> 
                        <div class="r-bt">
                            <a href="bulk-sms.php">Know More</a>
                        </div>                    
                     </div>
                     <div class="s-row">
                        <div class="s-icon">
                            <img src="img/service-bg/icon-email-marketing-icon-1.png">
                        </div>
                        <h5>EMAIL & WHATSAPP MARKETING</h5>
                        <div class="row-text">
                             <p>We are Bulk EMAIL & WhatsApp Marketing Service Provider based in Kakinada,Andhra Pradesh and leader in providing Bulk WhatsApp ...</p>
                         </div>
                         <div class="r-bt">
                            <a href="email-and-whatsapp-marketing.php">Know More</a>
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
            <div class="ct-boxes"> 
                 <div class="ct-ft-box">
                     <p>We really happy with Perfect Services as we developed our Website and Mobile Apps with Vcan Software Solutions.</p>
                     <h6>Ms: Raje</h6>
                 </div>
                 <div class="ct-ft-box">
                     <p>Becourse of SEO Services and marketing at Vcan now our business in Top amoung many businesses.</p>
                     <h6>Ms: Vanu sharma</h6>
                 </div>
                 <div class="ct-ft-box">
                     <p>I did not know that becourse of E-mail and Whatsapp Marketing our business will grow fast like this.</p>
                     <h6>Mr: Parasad</h6>
                 </div>
            </div>
		</div>
	</section>


	<!--footer of the page-->
	<?php include "footer.php";?>
    <script>
        var slideIndex = 1;
        showSlides(slideIndex);
        
        function plusSlides(n) {
          showSlides(slideIndex += n);
        }
        
        function showSlides(n) {
          var i;
          var slides = document.getElementsByClassName("mySlides");
          var dots = document.getElementsByClassName("dot");
          if (n > slides.length) {slideIndex = 1} 
            if (n < 1) {slideIndex = slides.length}
            for (i = 0; i < slides.length; i++) {
              slides[i].style.display = "none"; 
            }
          slides[slideIndex-1].style.display = "block"; 

        }
    </script>
</body>
</html>