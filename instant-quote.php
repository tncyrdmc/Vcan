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
        <div class="fs"></div>
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
                    <h1 id="hint" style="color: green"></h1>
                    <form id="quote-form">
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
                            <li><input type="checkbox" name="service" value="web development">WEB DEVELOPMENT</li>
                            <li><input type="checkbox" name="service" value="web design">WEB DESIGN</li>
                            <li><input type="checkbox" name="service" value="web hosting services">WEB HOSTING SERVICES</li>
                            <li><input type="checkbox" name="service" value="bulk sms">BULK SMS</li>
                            <li><input type="checkbox" name="service" value="voice sms">VOICE SMS</li>
                            <li><input type="checkbox" name="service" value="email marketing">EMAIL MARKETING</li>
                            <li><input type="checkbox" name="service" value="search engine optimization">SEARCH ENGINE OPTIMIZATION</li>
                            <li><input type="checkbox" name="service" value="ppc managment">PPC MANAGMENT</li>
                            <li><input type="checkbox" name="service" value="social media marketing">SOCIAL MEDIA MARKETING</li>
                            <li><input type="checkbox" name="service" value="social media optimization">SOCIAL MEDIA OPTIMIZATION</li>
                            <li><input type="checkbox" name="service" value="link building">LINK BUILDING</li>
                            <li><input type="checkbox" name="service" value="content marketing">CONTENT MARKETING</li>
                            <li><input type="checkbox" name="service" value="logo design">LOGO DESIGN</li>
                            <li><input type="checkbox" name="service" value="seo copywriting">SEO COPYWRITING</li>
                            <li><input type="checkbox" name="service" value="brochure design">BROCHURE DESIGN</li>
                            <li><input type="checkbox" name="service" value="2d animation">2D ANIMATION</li>
                            <li><input type="checkbox" name="service" value="3d animation">3D ANIMATION</li>
                        </ul>
                        <div>
                            <label>Tell More About The Project</label>
                            <textarea id="message"></textarea>
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
   <script type="text/javascript">

   function sendData(){

      let name = document.getElementById("name");
      let mail = document.getElementById("mail");
      let phone = document.getElementById("phone");
      let service = document.getElementsByName("service");
      let services = "";
      let message = document.getElementById("message");


      let xhr = new XMLHttpRequest();

      xhr.onload = function(){
        if (this.status == 200) {
          document.getElementById("hint").textContent = this.responseText;
        }
        
      }

      for (let i = 0; i < service.length; i++){
        if (service[i].checked) {

          services += service[i].value + ","; 

        }
      }

      xhr.open("GET","php/quote.php?name="+name.value+"&phone="+phone.value+"&mail="+mail.value+"&message="+message.value+"&services="+services,true);
      xhr.send();

     ////reset all the input fields.......
     for (let i = 0; i < service.length; i++){
        if (service[i].checked) {

          service[i].checked = false; 

        }
      }
      name.value = "";
      mail.value = "";
      phone.value = "";
      message.value = "";

  }


    var quote = document.getElementById("quote-form");

    if (quote.addEventListener) {

      quote.addEventListener('submit',function(e){
          e.preventDefault();
          sendData();
          
      },false);

    }else{

      quote.attachEvent('onsubmit',function(e){
          e.returnValue = false;
          sendData();
      },false);
    }


 </script>
</body>
</html>