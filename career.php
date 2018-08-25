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
    <title>VCANSOFTSOL</title>
    <style type="text/css">
    .header-bg{
        background-image: url("img/legal-career-path.jpg");
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
        <div class="fs"></div>
            <div class="header-text">
                <h1 style="color:white">CAREERS</h1>
            </div>
        </div>
    </header>

        <section>
        <div class="contact-container">
            <div class="contact-text">
                <div class="form-container">
                    <p>Fill your informations bellow:</p>
                    <form method="post" enctype="multipart/form-data" id="career-form">
                         <div>
                             <label>Full Name</label><br>
                             <input type="text" name="name" id="name">
                        </div>
                        <div>
                             <label>Mobile No</label><br>
                             <input type="text" name="phone" id="phone">
                        </div>
                         <div>
                             <label>Your Email</label><br>
                             <input type="mail" name="mail" id="mail">
                        </div>
                        <div>
                            <label>Your Address</label><br>
                            <textarea id="address"></textarea>
                        </div>
                        <div>
                             <label>Qualifications</label><br>
                             <input type="text" name="qualification" id="qualification">
                        </div>
                        <div style="margin-bottom:20px">
                             <label>Your Resume</label><br>
                             <input type="file" name="file" id="resume">
                        </div>
                        <div>
                            <input type="submit" name="" value="Submit">
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>

    <script type="text/javascript">
    
    </script>
    <!--footer of the page-->
	<?php include "footer.php";?>
    <script type="text/javascript">

function sendData(){

   let name = document.getElementById("name");
   let phone = document.getElementById("phone");
   let mail = document.getElementById("mail");
   let address = document.getElementById("address");
   let qualification = document.getElementById('qualification');
   let resume = document.getElementById('resume').files[0];

   let xhr = new XMLHttpRequest();

   xhr.onload = function(){
     if (this.status == 200) {
    //    document.getElementById("hint").textContent = this.responseText;
    alert(this.responseText);
     }
     
   }
   xhr.open("GET","php/career.php?name="+name.value+"&phone="+phone.value+"&mail="+mail.value+"&address="+address.value+"&qualification="+qualification.value+"&resume="+resume,true);
   xhr.send();
   ///reset
   name.value = "";
   mail.value = "";
   phone.value = "";
   address.value = "";
   qualification.value = "";
   resume.value = "";
 }


 var careerForm = document.getElementById("career-form");

 if (careerForm.addEventListener) {

   careerForm.addEventListener('submit',function(e){
       e.preventDefault();
       sendData();
       
   },false);

 }else{

   careerForm.attachEvent('onsubmit',function(e){
       e.returnValue = false;
       sendData();
   },false);
 }
</script>
</body>
</html>