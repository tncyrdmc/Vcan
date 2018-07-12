<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">


	<!--Icons-->
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">


    <!--main theme-->
    <link rel="stylesheet" type="text/css" href="css/theme.css">
    <!--my style-->
    <link rel="stylesheet" type="text/css" href="css/style.css">

    <title>CONTACT US</title>
    <style type="text/css">
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
                             <label>Name</label><br>
                             <input type="text" name="name" id="name">
                        </div>
                        <div>
                             <label>Company</label><br>
                             <input type="text" name="company" id="company">
                        </div>
                         <div>
                             <label>E-mail</label><br>
                             <input type="mail" name="mail" id="mail">
                        </div>
                        <div>
                             <label>Phone Number</label><br>
                             <input type="text" name="phone" id="phone">
                        </div>
                        <div>
                             <label>Current Website</label><br>
                             <input type="url" name="website" id="website">
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
                            <label>Project's Budget</label>
                            <select>
                                <option value="">select</option>
                                <option value="">10,000-25,000</option>
                                <option value="">25,000-50,000</option>
                                <option value="">50,000-100,000</option>
                                <option value="">100,000</option>
                            </select>
                        </div>
                        <div>
                            <label>Tell More About The Project</label>
                            <textarea>
                                
                            </textarea>
                        </div>
                        <div>
                            <input type="submit" name="" value="Submit">
                        </div>
                    </form>
                </div>

            <div class="s-rows">
                <div class="row">
                    <iframe allowfullscreen="" frameborder="0" height="300" src="https://www.google.co.in/maps/@16.9806518,82.2531355,16z?hl=en&authuser=0" style="border:0" width="500"></iframe>
                </div>
                <div class="row">
                    
                </div>
            </div>
            </div>
        </div>
    </section>


    <!--footer of the page-->
	<?php include "footer.php";?>
</body>
</html>