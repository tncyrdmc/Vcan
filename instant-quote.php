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
    <style type="text/css">
        .header-bg{
            background-image: url("img/rawpixel-678089-unsplash.jpg");
            background-position: center;
            background-size: cover;
            background-repeat: no-repeat;
            background-attachment: fixed;
        }
    </style>
    <title>INSTANT QUOTE</title>
</head>
<body>
    <header>
        <!--my navigation-->
        <?php include "nav.php";?>
        <div class="header-bg">
            <div class="full-bg"></div>
            <div class="header-text">
                <h1 style="color:white">INSTANT QUOTE</h1>
            </div>
        </div>
    </header>

        <section>
        <div class="contact-container">
            <div class="contact-text">
                <div class="form-container">
                    <p>We're here for you! Let us help you to grow your business Just fill out the form below and we will get right back to you:</p>
                    <form action="" method="post">
                         <div>
                             <label>Name</label><br>
                             <input type="text" name="name" id="name">
                        </div>
                         <div>
                             <label>E-mail</label><br>
                             <input type="mail" name="mail" id="mail">
                        </div>
                        <div>
                             <label>Phone Number</label><br>
                             <input type="text" name="phone" id="phone">
                        </div>
                        <p>I'm looking for  (check all that apply):</p>
                        <ul>
                            <li><input type="checkbox" name="">WEB DEVELOPMENT</li>
                            <li><input type="checkbox" name="">WEB DESIGN</li>
                            <li><input type="checkbox" name="">WEB HOSTING SERVICES</li>
                            <li><input type="checkbox" name="">BULK SMS</li>
                            <li><input type="checkbox" name="">VOICE SMS</li>
                            <li><input type="checkbox" name="">EMAIL MARKETING</li>
                            <li><input type="checkbox" name="">SEARCH ENGINE OPTIMIZATION</li>
                            <li><input type="checkbox" name="">PPC MANAGMENT</li>
                            <li><input type="checkbox" name="">SOCIAL MEDIA MARKETING</li>
                            <li><input type="checkbox" name="">SOCIAL MEDIA OPTIMIZATION</li>
                            <li><input type="checkbox" name="">LINK BUILDING</li>
                            <li><input type="checkbox" name="">CONTENT MARKETING</li>
                            <li><input type="checkbox" name="">LOGO DESIGN</li>
                            <li><input type="checkbox" name="">SEO COPYWRITING</li>
                            <li><input type="checkbox" name="">BROCHURE DESIGN</li>
                            <li><input type="checkbox" name="">2D ANIMATION</li>
                        </ul>
                        <div>
                            <label>Tell More About The Project</label>
                            <textarea></textarea>
                        </div>
                        <div>
                            <input type="submit" name="" value="Submit">
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>


    <!--footer of the page-->
    <?php include "footer.php";?>
</body>
</html>