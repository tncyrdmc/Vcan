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

    <title>CONTACT US</title>
    <style type="text/css">
    .header-bg{
        background-image: url("img/Contact-Us-1349x378.jpg");
        background-position: bottom;
        background-size: cover;
        background-repeat: no-repeat;
        background-attachment: fixed;
    }
    .contact-container{
    
     width: 80%;
     padding: 10px;
     margin: 100px auto;
     box-sizing: border-box;
    }
    .contact-text {
      width: 80%;
       padding: inherit;
       box-sizing: border-box;
       margin: 0 auto;
    }
    .contact-text  .form-container {
       margin: 40px 0;
    }
   .contact-text  .form-container input ,.contact-text .form-container textarea{
    border: 2px solid #eeeeee;
    padding: 10px;
    width: 80%;

    }
    .contact-text .form-container textarea{
    height: 150px;
  }
    .contact-text  .form-container input[type = "checkbox"]{
        width: auto;
    }
    select {
        margin-left: 10px;
        padding: 10px;
    }
   .contact-text .form-container label{
    margin-top: 10px;
   }
 .contact-text .form-container ul{
    text-transform: capitalize;
    font-size: 12px;
    list-style: none;
    width: 100%;
 }


    </style>
</head>
<body>
    <header>
        <!--my navigation-->
        <?php include "nav.php";?>
        <div class="header-bg">
            <div class="full-bg"></div>
            <div class="header-text">
                <h1 style="color:white">CONTACT US</h1>
            </div>
        </div>
    </header>

        <section>
        <div class="contact-container">
            <div class="contact-text">
                <h2>Let's build your company a digital strategy that works as hard as you.</h2>
                <p></p>
                <div class="form-container">
                    <p>Fill your contact informations :</p>
                    <form action="" method="post">
                         <div>
                             <label>Your Name</label><br>
                             <input type="text" name="name" id="name">
                        </div>
                        <div>
                             <label>Mobile No</label><br>
                             <input type="text" name="company" id="company">
                        </div>
                         <div>
                             <label>Your Email</label><br>
                             <input type="mail" name="mail" id="mail">
                        </div>
                        <div>
                            <label>Contact Type</label>
                            <select>
                                <option value="">select</option>
                                <option value="">feedback</option>
                                <option value="">25,000-50,000</option>
                                <option value="">50,000-100,000</option>
                                <option value="">100,000</option>
                            </select>
                        </div>
                        <div>
                            <label>Your Message</label><br>
                            <textarea></textarea>
                        </div>
                        <div>
                            <input type="submit" name="" value="Submit">
                        </div>
                    </form>
                </div>
                <h2>Check Our Location</h2>
                <div style="width: 85%; margin-top: 50px;">
                    <iframe src="https://www.google.com/maps/embed?pb=!1m16!1m12!1m3!1d2965.0824050173574!2d-93.63905729999999!3d41.998507000000004!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!2m1!1sWebFilings%2C+University+Boulevard%2C+Ames%2C+IA!5e0!3m2!1sen!2sus!4v1390839289319" width="100%" height="200" frameborder="0" style="border:0"></iframe>
                </div>
            </div>
        </div>
    </section>

    <script type="text/javascript">
    
    </script>
    <!--footer of the page-->
	<?php include "footer.php";?>
</body>
</html>