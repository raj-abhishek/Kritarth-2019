<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale = 1.0, maximum-scale=1.0, user-scalable=no" />
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Kritarth| Register</title>
    <link rel="shortcut icon" type="image/ico" href="kritarth.ico"/>
    <!-- F O N T     I C O N S  -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.2.0/css/all.css" integrity="sha384-hWVjflwFxL6sNzntih27bfxkr27PmbbK/iSvJ+a4+0owXq79v+lsFkW54bOGbiDQ" crossorigin="anonymous">
    <!--  G O O G L E    F O N T S  -->
     <link href="https://fonts.googleapis.com/css?family=Dosis" rel="stylesheet">
     <link href="https://fonts.googleapis.com/css?family=Oswald" rel="stylesheet">
    <!-- B O O T S T R A P     C S S   -->
     <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
     <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">


       <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.7.0/animate.min.css" />
       <script src='https://www.google.com/recaptcha/api.js'></script>

     <!--   L  O C A L     C S S     -->
<link rel="stylesheet" href="css\register.css">
 <link rel="stylesheet" href="css\indexer.css">
<style media="screen">
.loaders {
    background: #000;
    background: radial-gradient(#222, #000);
    bottom: 0;
    left: 0;
    overflow: hidden;
    position: fixed;
    right: 0;
    top: 0;
    z-index: 99999;
}

.loaders-inner {
    bottom: 0;
    height: 60px;
    left: 0;
    margin: auto;
    position: absolute;
    right: 0;
    top: 0;
    width: 100px;
}

.loaders-line-wrap {
    animation:
    spin 2000ms cubic-bezier(.175, .885, .32, 1.275) infinite
  ;
    box-sizing: border-box;
    height: 50px;
    left: 0;
    overflow: hidden;
    position: absolute;
    top: 0;
    transform-origin: 50% 100%;
    width: 100px;
}
.loaders-line {
    border: 4px solid transparent;
    border-radius: 100%;
    box-sizing: border-box;
    height: 100px;
    left: 0;
    margin: 0 auto;
    position: absolute;
    right: 0;
    top: 0;
    width: 100px;
}
.loaders-line-wrap:nth-child(1) { animation-delay: -50ms; }
.loaders-line-wrap:nth-child(2) { animation-delay: -100ms; }
.loaders-line-wrap:nth-child(3) { animation-delay: -150ms; }
.loaders-line-wrap:nth-child(4) { animation-delay: -200ms; }
.loaders-line-wrap:nth-child(5) { animation-delay: -250ms; }

.loaders-line-wrap:nth-child(1) .loaders-line {
    border-color: hsl(0, 80%, 60%);
    height: 90px;
    width: 90px;
    top: 7px;
}
.loaders-line-wrap:nth-child(2) .loaders-line {
    border-color: hsl(60, 80%, 60%);
    height: 76px;
    width: 76px;
    top: 14px;
}
.loaders-line-wrap:nth-child(3) .loaders-line {
    border-color: hsl(120, 80%, 60%);
    height: 62px;
    width: 62px;
    top: 21px;
}
.loaders-line-wrap:nth-child(4) .loaders-line {
    border-color: hsl(180, 80%, 60%);
    height: 48px;
    width: 48px;
    top: 28px;
}
.loaders-line-wrap:nth-child(5) .loaders-line {
    border-color: hsl(240, 80%, 60%);
    height: 34px;
    width: 34px;
    top: 35px;
}

@keyframes spin {
    0%, 15% {
    transform: rotate(0);
  }
  100% {
    transform: rotate(360deg);
  }
}

</style>
</head>
 <body>
   <!--  P R E L O A D E R   -->
   <div class="loaders" id="loaders-box">
   <div class="loaders-inner">
     <div class="loaders-line-wrap">
       <div class="loaders-line"></div>
     </div>
     <div class="loaders-line-wrap">
       <div class="loaders-line"></div>
     </div>
     <div class="loaders-line-wrap">
       <div class="loaders-line"></div>
     </div>
     <div class="loaders-line-wrap">
       <div class="loaders-line"></div>
     </div>
     <div class="loaders-line-wrap">
       <div class="loader-line"></div>
     </div>
   </div>
   </div>

<header>
   <!--  NAVBAR -->
   <nav class="navbar navbar-expand-lg fixed-top  navbar-dark " id="nav">
      <div class="container">
        <a href="index.html" class="navbar-brand">
          <img src="img\kritarth white.png" alt="" width="180" height="60">
        </a>
        <button class="navbar-toggler" data-toggle="collapse" data-target="#nav-collapse"><span class=" navbar-toggler-icon"></span></button>

     <div class="collapse navbar-collapse nav-col " id="nav-collapse">
        <ul class="navbar-nav ml-auto">
          <li class="nav-item">
            <a href="index.html" class="nav-link text-white ml-2"><i class="fas fa-home mr-1"></i>Home</a>
          </li>
          <li class="nav-item">
            <a href="#sub-section" class="nav-link text-white ml-2"><i class="fas fa-bullseye  mr-1"></i>Register</a>
          </li>



        </ul>
          </div>
          </div>
    </nav>
    </header>


  <!-- Go to Top Button -->

    <a href="#" id="c-go-top" class="c-go-top">
        <i class="fa fa-arrow-up fa-fw"></i>
      </a>

<!--  OVERLAY AREA -->
     <section id="reg-head">
       <div class="overlay">
         <div class="container inner-content">
           <div class="row">
               <div class="col-md-12">
                 <div class="title">
                   <div class="loader" id="loader"></div>


                 </div>
               </div>
           </div>
         </div>
       </div>
     </section>


     <section id="contact" class="py-3 ">
   <div class="container">
     <div class="row">
       <div class="col-lg-12">
         <div class="form-header my-4">
           <h1 class="display-3 text-center" style="  font-family: 'Dosis', sans-serif">Register Here</h1>
         </div>
       </div>
     </div>
     <div class="row">
       <div class="col-md-4">
         <div class="card p-4" id="offline">
           <div class="card-body">
             <h4>Get In Touch</h4>
             <p>For any queries and offline registration</p>
             <h4>Address</h4>
             <p>KIIT Student Activity Center</p>
             <h4>Email</h4>
             <p>contact@kritarth.org</p>
             <h4>Phone</h4>
             <p>+91-7024711773</p>
           </div>
         </div>
       </div>
       <div class="col-md-8">



         <div class="card p-4" id="reg-on">

           <div class="card-body">
               <form method="post" action="" >
               <fieldset>
             <h3 class="text-center">Please fill out this form to register.</h3>
             <hr>
             <div class="row">
               <div class="col-md-12">
                 <div class="form-group">
                   <input type="text" class="form-control" placeholder="Full Name" name="fullName" required>
                 </div>
                 </div>

               <div class="col-md-6">
                 <div class="form-group">
                   <input type="email" class="form-control" placeholder="Email" name="email" required>
                 </div>
             </div>
             <div class="col-md-6">
               <div class="form-group">
                 <input type="text" class="form-control" placeholder="Phone Number" name="phoneNumber" required>
               </div>
           </div>
           </div>
           <div class="form-row">
             <div class="col-md-12 form-group">

               <label for="qualification">Institution</label>
                 <select class="form-control" id="qualification" name="qualification" required>
                     <option>Select One</option>
                     <option>KIIT</option>
                     <option>School student</option>
                     <option>Corporate</option>
                     <option>Others</option>
                </select>


             </div>
             <div class="col-lg-12 form-group">
                 <input type="text" class="form-control " style="display:none; margin-top:-10px;margin-bottom:60px"  placeholder="Roll No."  id="roll" name="rollNumber" required>
             </div>
          <!-- <div class="col-lg-12 form-group">
               <input type="text" class="form-control " style="display:none;margin-top:-20px;margin-bottom:30px"  placeholder="School Name"  id="school" name="schoolName" required>
             </div>
             <div class="col-lg-12 form-group">
               <input type="text" class="form-control " style="display:none;margin-top:-30px;margin-bottom:50px"  placeholder="Institution Name"  id="corporate" name="corporateName" required>
             </div>
             <div class="col form-group" >
               <input type="text" class="form-control " style="display:none;margin-top:-50px;margin-bottom:50px"  placeholder="College Name" id="college"  required>
             </div>-->
           </div>

           <div class="form-row" style="margin-top:-10px">
             <div class="col-md-6 form-group">
               <label for="event1">Select Events</label>
                 <select class="form-control" id="event1" name="event1" required>
                    <option>Event One</option>
                     <option>Kautuhal</option>
                     <option>Rocket Singh</option>
                      <option>Klick It</option>
                       <option>Devil's Advocate</option>
                       <option>Kritarth's Got Talent</option>
                        <option>Kanvassing</option>
                         <option>Hooch High</option>
                          <option>Klimax</option>
                           <option>Ignite</option>
                       </select>
             </div>
             <div class="col-md-6 form-group">

                 <select class="form-control " id="event2" style="margin-top: 30px" name="event2">
                    <option>Event Two (Optional)</option>
                     <option>Prayag</option>
                     <option>Rocket Singh</option>
                      <option>Klick It</option>
                       <option>Devil's Advocate</option>
                       <option>Kritarth's Got Talent</option>
                        <option>Kanvassing</option>
                         <option>Navreeti</option>
                          <option>Klimax</option>

                       </select>
             </div>

           </div>
           <div class="form-row">

             <div class="col-md-12 form-group ">
               <div class="g-recaptcha d-inline-block cap"   data-sitekey="6LfAEpYUAAAAAFN6Dwoju4nqGNxh9MFsQUjsihv2"></div>
               <!-- SECRET KEY :6LfAEpYUAAAAAKOeJFvNcFvUEQJz-PM48Ov1_6aK  -->
               </div></div>
               <div class="form-group">
                <div class="col-md-12">
                 <button type = "submit" class="btn btn-outline-danger btn-block" name= "regButton">SUBMIT</button>
                   </div></div>
                   </fieldset>
               </form>

               <?php

               include_once 'php/connect.php';
               echo 'IN PHP';

               if(isset($_POST['regButton'])){
                   //echo 'in php2';
                   if (!($_POST['fullName'])||(empty($_POST['fullName']))) {
                       $error = "Enter your name";
                       echo "<script type='text/javascript'>alert('$error');</script>";
                   }
                   else{
                       $uFname = $_POST['fullName'];
                       //echo $uFname;
                   }
                   $filter = '/^(?:(?:\+|0{0,2})91(\s*[\-]\s*)?|[0]?)?[789]\d{9}$/';
                   if(!preg_match($filter, $_POST['phoneNumber']))
                   {
                       $error ="Enter a valid contact no. of 10 digits";
                       echo "<script type='text/javascript'>alert('$error');</script>";
                   }else{
                       $uPhone = $_POST['phoneNumber'];
                   }
                   if (filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)) {
                       $email = $_POST['email'];
                   } else {$error ="Enter a valid email";
                           echo "<script type='text/javascript'>alert('$error');</script>";
                          }
                   // $email = $_POST['email'];
                   $uInsti = $_POST['qualification'];
                   if($uInsti=='KIIT'){
                       $uInstiName = $_POST['rollNumber'];
                   }
                   if($uInsti=='School student'){
                       $uInstiName = $_POST['schoolName'];
                   }
                   if($uInsti=='Corporate'){
                       $uInstiName = $_POST['corporateName'];
                   }
                   if($uInsti=='Others'){
                       $uInstiName = $_POST['institution'];
                       if($uInstiName=='Others'){
                           $uInstiName=$_POST['otherInstitution'];
                       }
                   }
                   $event_1=$_POST['event1'];
                   if($event_1=='Event One'){
                       $message = 'Please select An event';
                       echo "<script type='text/javascript'>alert('$message');</script>";
                   }else{}
                   $event_2=$_POST['event2'];
                   if($event_2=='Event Two (Optional)'){
                       $event_2='';
                   }

                   if (mysqli_num_rows(mysqli_query($db,"SELECT * FROM `users` WHERE e_mail = '$email'"))>0){
                       $message = 'User Already Exists';
                       echo "<script type='text/javascript'>alert('$message');</script>";
                   }
                   else{

                       $insertUserSql= "INSERT INTO `users`(`f_name`, `e_mail`, `phone_number`, `institution`,`institution_name`,`event_1`,`event_2`) VALUES

        ('$uFname','$email','$uPhone','$uInsti','$uInstiName','$event_1','$event_2')";
                      // echo $insertUserSql;
                       $result = mysqli_query($db, $insertUserSql);
                      }
               }


               ?>

         </div>

       </div>

     </div>
   </div>
         </div></section>




 <section id="end-footer">

   <div id="footer-social">
    <a href="https://www.facebook.com/kritarth.kiit/" target="_blank" class="socio"><i class="fab fa-facebook-f"><span >Facebook</span></i></a>
    <a href="https://www.twitter.com/KritarthKIIT/" target="_blank" class="socio"><i class="fab fa-twitter"><span>Twitter</span></i></a>
    <a href="https://www.instagram.com/kritarth.kiit/" target="_blank" class="socio"><i class="fab fa-instagram"><span>Instagram</span></i></a>
    </div>iv>

    <div class="foo-content">
      <p class="lead text-white text-center">Copyright &copy; KRITARTH</p>
    </div>
 </section>


 <!-- jQuery first, then Popper.js, then Bootstrap JS -->
 <script src="https://code.jquery.com/jquery-3.3.1.js" integrity="sha256-2Kok7MbOyxpgUVvAk/HJ2jigOSYS2auK4Pfzbm7uH60=" crossorigin="anonymous"></script>
 <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
 <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js" integrity="sha384-smHYKdLADwkXOn1EmN1qk/HfnUcbVRZyYmZ4qpPea6sjB/pTJ0euyQp0Mk8ck+5T" crossorigin="anonymous"></script>

  <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/2.0.1/TweenMax.min.js"></script>

<script src="js\main.js">

</script>
<script src="js\random.js" ></script>
  <script>
  //For smooth scrolling
  $('#nav a').on('click', function (e) {
      // Check for a hash value
      if (this.hash !== '') {
        // Prevent default behavior
        e.preventDefault();

        // Store hash
        const hash = this.hash;

        // Animate smooth scroll
        $('html, body').animate({
          scrollTop: $(hash).offset().top
        }, 800, function () {
          // Add hash to URL after scroll
          window.location.hash = hash;
        });
      }
    });

    $('#qualification').change(function() {

     var x = $("#qualification option:selected").text();
     if(x=="KIIT"){
       console.log("hello");
       $('#roll').css("display","block");
        var pc= document.getElementById('roll');
        pc.value='';
         pc.placeholder='Roll No.';
       $('#roll').css("margin-bottom","0");

      /* $('#school').css("display","none");
          $('#corporate').css("display","none");
           $('#college').css("display","none");
             $('#others').css("display","none");*/
     }
     else if (x=="School student") {
       /*$('#school').css("display","block");
       $('#roll').css("display","none");

          $('#corporate').css("display","none");
           $('#college').css("display","none");
             $('#others').css("display","none");*/
         $('#roll').css("display","block");
         var pc= document.getElementById('roll');
         pc.value='';
         pc.placeholder='School Name';
         $('#roll').css("margin-bottom","0");
     }
     else if (x=="Corporate") {
     /*  $('#corporate').css("display","block");
       $('#roll').css("display","none");
       $('#school').css("display","none");

           $('#college').css("display","none");
             $('#others').css("display","none");*/
         $('#roll').css("display","block");
         var pc= document.getElementById('roll');
         pc.value='';
         pc.placeholder='Institution Name';
         $('#roll').css("margin-bottom","0");
     }
     else if (x=="Others") {/*
       $('#college').css("display","block");
       $('#roll').css("display","none");
       $('#school').css("display","none");
          $('#corporate').css("display","none");
            $('#others').css("display","none");*/
         $('#roll').css("display","block");
         var pc= document.getElementById('roll');
         pc.value='';
         pc.placeholder='College Name';
         $('#roll').css("margin-bottom","0");

     }
     else{
       console.log("bye");
       $('#roll').css("display","none");
       $('#school').css("display","none");
          $('#corporate').css("display","none");
           $('#college').css("display","none");
             $('#others').css("display","none");
     }
});
 $('#myOptions').change(function() {
   console.log("hello");
  var val = $("#myOptions option:selected").text();
  if(val=="Others"){
    $('#others').css("display","block");
  }
  else{
    $('#others').css("display","none");
  }
});



var overlay = document.getElementById("loaders-box");

window.addEventListener('load', function(){
  overlay.style.display = 'none';
})

$(document).ready(function() {
      // Transition effect for navbar
      $(window).scroll(function() {
        // checks if window is scrolled more than 500px, adds/removes solid class
        if($(this).scrollTop() > 20) {
            $('.navbar').addClass('solid');
        } else {
            $('.navbar').removeClass('solid');
        }
      });
});


  </script>
   </body>
 </html>
