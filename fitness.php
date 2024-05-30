<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script src="https://kit.fontawesome.com/bca19b6e15.js" crossorigin="anonymous"></script>
    <style>
.topnav{
    
    box-sizing: border-box;
    overflow: hidden;
    z-index: 1; 
    /* background-color: rgba(255, 255, 255, 0.8); */
}
 .topnav a{
    float: right;
    color:black;
    text-align: center;
    padding: 18px 35px;
    font-size: 23px;
    text-decoration: none;
    font-family:Georgia, 'Times New Roman', Times, serif;
    display: block;
    cursor: default;

}

.topnav a:hover{
    color:rgb(242, 0, 255);
}

ul {
    list-style-type: none;
    margin: 0;
    padding: 0;
  }
  
  li {
    display: inline;
    float: right;
  }
  li a{
    color:black;
    text-align: center;
    padding: 18px 35px;
    font-size: 23px;
    text-decoration: none;
    font-family:Georgia, 'Times New Roman', Times, serif;
    display: block;
    cursor: default;
    transition: 0.3s;

}
li a:hover{
    color:#CD5C5C;
    border-radius: 10px;
    border-color: black;
    background-color:snow;
   
  color:#CD5C5C;
  -webkit-border-radius: 15pxpx;
  -moz-border-radius: 15px;
  border-radius: 26px;
    
}
    
/*.video-container video{
    right: 0;
    left: 0;
    top: 0;
    width: 100%;
    height: 100vh;
    background-position: center;
    overflow: hidden;
    z-index: -100;
    position: absolute;
}*/
/*.overlay {
    position: absolute;
    top: 0;
    left: 0;
    width: 50%;
    height: 100%;
    background-image: linear-gradient(to left, rgba(0, 0, 0, 0.6), rgba(0, 0, 0, 0.2));
  }*/
  /* .video-cont{
    position: relative;
  } */
  /* .video-cont1{
    position: absolute;
    height: 100%;
    width: 100%;
    
  } */
  .video-container {
    position: relative;
    width: 100vh;
    height: 100vh;
    background-size: cover;
  }
  #myvideo{
    position: absolute;
    right: 0;
    bottom: 0;
    /* min-width: 100vh;
    min-height: 100vh; */
    width: 100%;
    z-index: -100;
    background-image: linear-gradient(to right, rgba(0, 0, 0, 1), rgba(0, 0, 0, 0.1));

  }
  .video-container video {
    position: absolute;
    top: 0;
    left: 0;
    width: 100vh;
    height: 100vh;
    z-index: -100;
    overflow: hidden;
    background-position: center;
    background-size: cover;
  }
  
  .overlay {
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    background-image: linear-gradient(to right, rgba(0, 0, 0, 1), rgba(0, 0, 0, 0.1));
  }
body{
    margin: 0;
    background-size: cover;
    background: linear-gradient(lightpink, lavender);
}
.textbox{
    position: relative;
    width: 45%;
    height: 50%;
    color:indianred;
    padding-left: 50px;
    padding-top: 40px;
    font-size: 26px;

}
.textbox .text{
    font-size: 25px;
    line-height: 1.5;
    font-weight: 80;
    color: lavender;
}
#scroll-down-btn{
    position: absolute;
    cursor: pointer;
    margin-top: 70px;
    margin-left: 200px;
    padding-top: 10px;
    padding-bottom: 10px;
    padding-left: 10px;
    padding-right: 10px;
    border-radius: 20px;
    border:3px solid #CD5C5C;
    background: transparent;
    z-index: 1;
    transform: translate(-50%,-50%);
}
#scroll-down-btn .text1{
    font-size: 20px;
    font-weight: 500;
    font-family: Georgia, 'Times New Roman', Times, serif;
    transition: .3s;
    color: lavender;
    
}
#scroll-down-btn:hover{
    box-shadow: 0 0 5px 0 #CD5C5C inset, 0 0 4px 2px #CD5C5C;
  border: 3px solid #CD5C5C;
}
 #yoga{
    width: 420px;
    top: 100%;
    padding-top: 15%;
    padding-left: 65%;
    padding-bottom: 10%;
    position: absolute;
}
.choose{
    position: absolute;
    color: rgb(12, 11, 11);
    top: 100%;
   padding-left: 40%;
   padding-top: 5%;
   font-family: Georgia, 'Times New Roman', Times, serif;
   font-size: 30px;
   font-weight: 80;
} 
.yogah{
    position: absolute;
    color: rgb(12, 11, 11);
    top: 100%;
   padding-left: 19%;
   padding-top: 16%;
   font-family: Georgia, 'Times New Roman', Times, serif;
   font-size: 30px;
   font-weight: 80;
   width: 40%;
}
.yoga-content{
    position: absolute;
    color: rgb(12, 11, 11);
    top: 100%;
   padding-left: 5%;
   padding-top: 22%;
   font-family: Georgia, 'Times New Roman', Times, serif;
   font-size: 25px;
   font-weight: 80;
   width: 40%;
}
.my-button{
    position: absolute;
    top: 100%;
   margin-top: 31%;
   margin-left: 17%;
   border-radius: 20px;
    border: 3px solid #CD5C5C;
    background: transparent;
    padding: 10px 20px;
    cursor: pointer;
    font-size: 18px;
    font-weight: 550;
    transition: 0.4s;
}
.my-button:hover{
    color: black;
    font-size: 1.2rem;
    background-color:#CD5C5C;
    color: aliceblue;
}

.b1 {
    border: 2px solid #7f4545;
    padding: 20px;
    width: 700px;
    height: 300px;
    top: 100%;
    margin-top: 35%;
    margin-left: 7% ;
    box-shadow: 0px 0px 4px;
   
  }

.b2{
    border: 2px solid #7f4545;
    padding: 20px;
    width: 700px;
    height: 300px;
    top: 80%;
    margin-left: 40%;
    margin-top: 7%;
    margin-bottom: 10%;
    box-shadow: 0px 0px 4px;
   
  }
  #strength-training_compressed{
    width: 30%;
  
    padding-top: 8%;
    padding-right: 65%;
    padding-left: 6%;
    padding-bottom: 10%;
    position: absolute;
    height: 300px;

  }

.strh{
    padding-left: 35%;
    padding-top: 5%;
    font-family: Georgia, 'Times New Roman', Times, serif;
   font-size: 30px;
   font-weight: 80;
}
.str-content{

    padding-top: 5%;
    font-family: Georgia, 'Times New Roman', Times, serif;
    font-size: 25px;
    font-weight: 80;
    width: 80%;
    padding-left: 7%;
    
}
.str-button{
   border-radius: 20px;
    border: 3px solid #CD5C5C;
    background: transparent;
    cursor: pointer;
    position: absolute;
    top: 100%;
   margin-top: 63%;
   margin-left: 20%;
   border-radius: 20px;
   font-size: 18px;
    font-weight: 550;
    padding: 10px 20px;
    transition: 0.4s;
    
}
.str-button:hover{
    color: black;
    font-size: 1.2rem;
    background-color:#CD5C5C;
    color: aliceblue;
}
#cardio{
width: 420px;
  
    padding-left: 65%;
    padding-bottom: 10%;
    position: absolute;
    margin-top: 4%;
    
}
.b3{
    border: 2px solid #7f4545;
    padding: 20px;
    width: 700px;
    height: 300px;
    margin-left: 7%;
    margin-top: 4%;
    margin-bottom: 10%;
    box-shadow: 0px 0px 4px;
 
}
.cardioh{
    padding-left: 40%;
    padding-top: 5%;
    font-family: Georgia, 'Times New Roman', Times, serif;
   font-size: 30px;
   font-weight: 80;
}
.cardio{
    padding-top: 5%;
    font-family: Georgia, 'Times New Roman', Times, serif;
    font-size: 25px;
    font-weight: 80;
    width: 80%;
    padding-left: 10%;
}
.cardio-button{
    border-radius: 20px;
    border: 3px solid #CD5C5C;
    background: transparent;
    cursor: pointer;
    position: absolute;
    top: 100%;
   margin-top: 97%;
   margin-left: 18%;
   border-radius: 20px;
   font-size: 18px;
    font-weight: 550;
    padding: 10px 20px;
    transition: 0.4s;
    
}
.cardio-button:hover{
    color: black;
    font-size: 1.2rem;
    background-color:#CD5C5C;
    color: aliceblue;
}
.footer{
    -webkit-filter: blur(4px);
    backdrop-filter: blur(4px);
    position: relative;
    background-image: url("/Users/akshataingalahalli/Desktop/web/footer.jpg");
    background-size: cover;
    background-repeat: no-repeat;
    background-position: center;
    min-height: 500px;
    width: 100%;


}
.contact{
    color:azure;

    backdrop-filter: blur;
}
@media (max-width: 768px) {
  /* Adjust your styles for mobile here */
  body {
      font-size: 14px;
  }

  li {
      display: block;
  }

  li a {
      padding: 10px;
      font-size: 18px;
  }



  .textbox {
      width: 100%;
      padding-left: 20px;
      text-align: center;
  }

  .textbox .text {
      font-size: 18px;
  }

  #scroll-down-btn {
      display: none;
  }

  .choose {
      padding-left: 10px;
  }

  .yogah {
      width: 100%;
      text-align: center;
  }

  .yoga-content {
      width: 100%;
      text-align: center;
  }

  .my-button {
      margin-left: 35%;
  }

  .b1, .b2, .b3 {
      width: 90%;
      margin-left: 5%;
  }

  .strh, .cardioh {
      text-align: center;
  }

  .str-content, .cardio {
      width: 100%;
      text-align: center;
  }

  .str-button, .cardio-button {
      margin-left: 30%;
  }

  .footer {
      background-size: contain;
      background-position: top;
  }
}

/* Media query for screens with a maximum width of 480px (smaller mobile devices) */
@media (max-width: 480px) {

  /* Further adjustments for smaller screens go here */
  body {
      font-size: 10px;
      background-color: rgba(0,0,0,0.5);
  }

  li a {
      padding: 1px;
      font-size: 15px;
  }

  .textbox {
      font-size: 12px;
  }

  .yogah, .strh, .cardioh {
      font-size: 10px;
  }

  .yoga-content, .str-content, .cardio {
      font-size: 10px;
  }

  .my-button, .str-button, .cardio-button {
      font-size: 8px;
  }
  ul {
    list-style-type: none;
    margin: 0;
    padding: 0;
  }
  
  li {
    display: block;
    float: right;
  }
  li a{
    color:black;
    text-align: center;
    padding: 1px;
    font-size: 17px;
    text-decoration: none;
    font-family:Georgia, 'Times New Roman', Times, serif;
    display: block;
    cursor: default;
    transition: 0.3s;

}
li a:hover{
    color:#CD5C5C;
    border-radius: 3px;
    border-color: black;
    background-color:snow;
}
h1{
    font-size: 37px;
    padding-top: 30px;

}
.video-container {
    position: relative;
    width: 100vh;
    height: 100vh;
    background-size: cover;
    display: none;
  }
text{
    padding-left: 5px;
    padding-right: 8px;
}
.choose {
      font-size: 10px;
      padding-top: 7px;
  }

  .container {
      display: flex;
      flex-direction: column;
      align-items: center;
  }

  .card {
      width: 90%;
      padding: 10px;
      margin: 10px;
  }
  #yoga,
  #strength-training_compressed,
  #cardio {
      display: none;
  }

  
  .contact {
      text-align: center;
  }
  .video-container {
      display: none;
  }
  #yoga{
    width: 420px;
    top: 100%;
    padding-top: 15%;
    padding-left: 65%;
    padding-bottom: 10%;
    position: absolute;
}
.choose{
    position: absolute;
    color: rgb(12, 11, 11);
    top: 100%;
   padding-left: 40%;
   padding-top: 5%;
   font-family: Georgia, 'Times New Roman', Times, serif;
   font-size: 30px;
   font-weight: 80;
} 
.yogah{
    position: absolute;
    color: rgb(12, 11, 11);
    top: 100%;
   padding-left: 18%;
   padding-top: 16%;
   font-family: Georgia, 'Times New Roman', Times, serif;
   font-size: 30px;
   font-weight: 80;
   width: 40%;
}
.yoga-content{
    position: absolute;
    color: rgb(12, 11, 11);
    top: 100%;
   padding-left: 5%;
   padding-top: 21%;
   font-family: Georgia, 'Times New Roman', Times, serif;
   font-size: 25px;
   font-weight: 80;
   width: 40%;
}
.my-button{
    position: absolute;
    top: 100%;
   margin-top: 27%;
   margin-left: 17%;
   border-radius: 20px;
    border: 3px solid #CD5C5C;
    background: transparent;
    padding: 10px 20px;
    cursor: pointer;
    font-size: 18px;
    font-weight: 550;
    transition: 0.4s;
}
.my-button:hover{
    color: black;
    font-size: 1.2rem;
    background-color:#CD5C5C;
    color: aliceblue;
}
.b1, .b2, .b3 {
      width: 90%;
      margin-left: 5%;
  }
  .b1 {
    border: 0.5px solid #7f4545;
    padding: 10px;
    width: 300px;
    height: 100px;
    top: 100%;
    margin-top: 47%;
    margin-left: 7% ;
    box-shadow: 0px 0px 4px;
   
  }

.b2{
    border: 0.5px solid #7f4545;
    padding: 10px;
    width: 300px;
    height: 100px;
    top: 80%;
    margin-left: 40%;
    margin-top: 7%;
    margin-bottom: 10%;
    box-shadow: 0px 0px 4px;
   
  }
  .b3{
    border: 0.5px solid #7f4545;
    padding: 10px;
    width: 300px;
    height: 100px;
    margin-left: 7%;
    margin-top: 4%;
    margin-bottom: 10%;
    box-shadow: 0px 0px 4px;
 
}


}
</style>
</head>
<link rel="stylesheet" href="fitness.css">
<body>
    <!-- <nav>

    <div class="topnav">
        <a href="login.html">Program</a>
        <a href="">About</a>
        <a href="">Login</a>
        <a href="">Sign Up</a>
    </div>
</nav> -->
<!--
<ul>
    <li><a href="login-2.html">Login</a></li>
    <li><a href="program.html">Program</a></li>
    <li><a href="bmi.html">BMI</a></li>
    <li><a href="about.html">About</a></li>
  </ul>
  --->
  <?php
  $menuItems = [
            'login.php' => 'Login',
            'program.php' => 'Program',
            'bmi.php' => 'BMI',
            'about.php' => 'About',
            'fitness_chatbot.html' => 'Chatbot'
        ];

        // Loop through the menu items and create navigation links
        foreach ($menuItems as $link => $label) {
            echo '<li><a href="' . $link . '">' . $label . '</a></li>';
        }
        ?>
  <div class="video-cont">

    <video autoplay muted loop id="myvideo">
        <source src="D:\XAMPP\htdocs\WP2" type="video/mp4">
    </video>

     <div class="video-cont1" style="position: absolute; height: 100%; width: 60%; top: 0; background-image: linear-gradient(90deg,black,rgba(0, 0, 0, 0.7), rgba(0,0,0,0)) "></div>
     </div>



     <div class="video-cont">
    <video autoplay muted loop id="myvideo">
        <source src="fitness.mp4" type="video/mp4">
    </video>
    <div class="video-cont1" style="position: absolute; height: 100%; width: 60%; top: 0; background-image: linear-gradient(90deg, black, rgba(0, 0, 0, 0.7), rgba(0, 0, 0, 0));"></div>
</div>

    <div class="textbox">
        <h1>UNOFIT</h1>
<div class="text"> Welcomes and unites people of all ages, abilities, and goals around a methodology that is accessible and effective for all. We train, persevere, and progress together.
</div>    
</div>
<button id="scroll-down-btn">
    <div class="text1">Explore more</div>
</button>

	<script>
		var scrollDownBtn = document.getElementById('scroll-down-btn');

		scrollDownBtn.addEventListener('click', function() {
			window.scrollBy({
				top: 720,
				behavior:"smooth"
			});
		});
	</script>
<div class="choose">Choose your workout type</div>
<video autoplay muted loop id="yoga">
    <source src="yoga.mp4" type="video/mp4">
</video>
<div class="b1">
<div class="yogah">Yoga</div>
<div class="yoga-content">Yoga for Beginners to Advanced. First free session available. Click to know more.</div>
<button class="my-button" onclick="location.href='program.html'">Know More</button>
</div>

<video autoplay muted loop id="strength-training_compressed">
    <source src="strength-training_compressed.mp4" type="video/mp4">
</video>
<div class="b2">
    <div class="strh">Strength Training</div>
    <div class="str-content">Strength training sessions available from Mon-Sat. Click to know the timings.</div>
    <button class="str-button" onclick="location.href='program.php'">Know More</button>
</div>
<video autoplay muted loop id="cardio">
    <source src="cardio.mp4" type="video/mp4">
</video>
 <div class="b3">

    <div class="cardioh">Cardio</div>
    <div class="cardio">First free session available for Cardio. Click to know more. </div>
    <button class="cardio-button" onclick="location.href='program.php'">Know More</button>
 </div> 

 <div style="display: flex;align-items: center ; width: 100%; justify-content: center;min-height: 500px; background-image: url('footer.jpg'); background-repeat: no-repeat; background-size: cover; background-position: center;">
    

    <div style="min-height: 500px; min-width: 100%; background-color: rgba(0,0,0,0.5); display: flex;  ">
        <h1 style="color: #fff; font-family: 'Times New Roman', Times, serif;  margin-left: 6%;margin-top: 40px;">Contact</h1>
        <h3 style="color: lavender; font-family: 'Times New Roman', Times, serif; padding-top: 7%; margin-left: -96px;">Instagram</h3><i class="fa-brands fa-instagram" style="color: rgb(181, 123, 166); margin-top: 122px;margin-left: 10px;"></i>
        <h3 style="color: lavender; font-family: 'Times New Roman', Times, serif; padding-top: 10%; margin-left: -105px;">Facebook</h3><i class="fa-brands fa-facebook" style="color: rgb(181, 123, 166) ;margin-top: 165px;margin-left: 12px;"></i>
        <h3 style="color: lavender; font-family: 'Times New Roman', Times, serif; padding-top: 13%; margin-left: -100px;">Twitter</h3><i class="fa-brands fa-twitter" style="color: rgb(181, 123, 166);margin-top: 210px;margin-left: 14px;"></i>
        <h3 style="color: lavender; font-family: 'Times New Roman', Times, serif; padding-top: 16%; margin-left: -100px;">Phone number</h3><i class="fa-solid fa-phone" style="color: rgb(181, 123, 166);margin-top: 250px;margin-left: 15px;"></i>
        <h3 style="color: lavender; font-family: 'Times New Roman', Times, serif; padding-top: 19%; margin-left: -130px;">Email</h3><i class="fa-solid fa-envelope" style="color: rgb(181, 123, 166);margin-top: 293px;margin-left: 17px;"></i>
        <h1 style="color: #fff; font-family: 'Times New Roman', Times, serif;  margin-left: 12%;margin-top: 40px;">Quick Links</h1>
        <h3 style="color: lavender; font-family: 'Times New Roman', Times, serif; padding-top: 7%; margin-left: -106px;">Login</h3><i class="fa-solid fa-right-to-bracket" style="color: rgb(181, 123, 166); margin-top: 122px;margin-left: 11px;"></i>
        <h3 style="color: lavender; font-family: 'Times New Roman', Times, serif; padding-top: 10%; margin-left: -76px;">Cardio</h3><i class="fa-solid fa-heart-circle-bolt" style="color: rgb(181, 123, 166) ;margin-top: 165px;margin-left: 12px;"></i>
        <h3 style="color: lavender; font-family: 'Times New Roman', Times, serif; padding-top: 13%; margin-left: -100px;">Strength Training</h3><i class="fa-solid fa-dumbbell" style="color: rgb(181, 123, 166);margin-top: 210px;margin-left: 14px;"></i>
        <h3 style="color: lavender; font-family: 'Times New Roman', Times, serif; padding-top: 16%; margin-left: -148px;">Yoga</h3><i class="fa-regular fa-heart" style="color: rgb(181, 123, 166);margin-top: 250px;margin-left: 15px;"></i>
        <h3 style="color: lavender; font-family: 'Times New Roman', Times, serif; padding-top: 7%; margin-left: 150px;">chat with us</h3><i class="fa-solid fa-message" style="color: rgb(181, 123, 166); margin-top: 122px;margin-left: 20px;"></i>
        <h3 style="color: lavender; font-family: 'Times New Roman', Times, serif; padding-top: 10%; margin-left: -130px;">Explore more</h3>
        <h3 style="color: lavender; font-family: 'Times New Roman', Times, serif; padding-top: 13%; margin-left: -120px;">Our Community</h3>
        <h3 style="color: lavender; font-family: 'Times New Roman', Times, serif; padding-top: 16%; margin-left: -130px;">What is UNOFIT</h3>
        <h3 style="color: lavender; font-family: 'Times New Roman', Times, serif; padding-top: 7%; margin-left: 75px;">Join our community</h3>
        <h3 style="color: lavender; font-family: 'Times New Roman', Times, serif; padding-top: 10%; margin-left: -120px;">Trainers</h3>
        <h3 style="color: lavender; font-family: 'Times New Roman', Times, serif; padding-top: 13%; margin-left: -70px;">About us</h3>
        <h1 style="color: #fff; font-family: 'Times New Roman', Times, serif;  margin-left: 12%;margin-top: 40px;">Address</h1>
        <h3 style="color: lavender; font-family: 'Times New Roman', Times, serif; padding-top: 7%; margin-left: -120px;">Unofit, B/vijaypath<br><br> - Delhi-110065</h3>
    </div>

</div>


</body>
</html>