<!DOCTYPE html>
<html>
<head>
<title>Programs</title>
<link rel="stylesheet" href="style2.css">
<script src="https://kit.fontawesome.com/bca19b6e15.js" crossorigin="anonymous"></script>
<style>
    body {
        font-family: Georgia, 'Times New Roman', Times, serif;
        background-color: rgb(246, 202, 192);
        background-size: cover;
        background-repeat: no-repeat;
        background-position: center;
        position: relative;
    }

    h1 {
        font-family: Georgia, 'Times New Roman', Times, serif;
        text-align: center;
    }

    #yoga {
        width: 30%;
        top: 12%;
        padding-top: 5%;
        padding-left: 60%;
        padding-bottom: 10%;
        position: absolute;
    }

    .yogah {
        position: absolute;
        color: rgb(12, 11, 11);
        top: 5%;
        padding-left: 18%;
        padding-top: 14%;
        font-family: Georgia, 'Times New Roman', Times, serif;
        font-size: 30px;
        font-weight: 80;
        width: 40%;
    }

    .yoga-content {
        position: absolute;
        color: rgb(12, 11, 11);
        top: 5%;
        padding-left: 2%;
        padding-top: 20%;
        font-family: Georgia, 'Times New Roman', Times, serif;
        font-size: 20px;
        font-weight: 80;
        width: 40%;
    }

    .b1 {
        border: 2px solid #7f4545;
        padding: 20px;
        width: 550px;
        height: 200px;
        top: 10%;
        margin-top: 10%;
        margin-left: 9%;
        box-shadow: 0px 0px 4px;
    }

    .b2 {
        border: 2px solid #7f4545;
        padding: 20px;
        width: 550px;
        height: 200px;
        top: 40%;
        margin-left: 50%;
        margin-top: 7%;
        margin-bottom: 10%;
        box-shadow: 0px 0px 4px;
    }

    #strength-training {
        width: 30%;
        top: 4%;
        padding-top: 40%;
        padding-right: 65%;
        padding-left: 10%;
        padding-bottom: 10%;
        position: absolute;
        height: 220px;
        border-radius: 10px;
    }

    .strh {
        padding-left: 30%;
        padding-top: 5%;
        font-family: Georgia, 'Times New Roman', Times, serif;
        font-size: 30px;
        font-weight: 80;
    }

    .str-content {
        padding-top: 5%;
        font-family: Georgia, 'Times New Roman', Times, serif;
        font-size: 20px;
        font-weight: 80;
        width: 80%;
        padding-left: 10%;
    }

    #cardio {
        width: 30%;
        padding-left: 60%;
        position: absolute;
        margin-bottom: 20%;
        border-radius: 1;
    }

    .b3 {
        border: 2px solid #7f4545;
        padding: 20px;
        width: 550px;
        height: 200px;
        margin-left: 7%;
        margin-top: 4%;
        margin-bottom: 10%;
        box-shadow: 0px 0px 4px;
    }

    .cardioh {
        padding-left: 40%;
        padding-top: 5%;
        font-family: Georgia, 'Times New Roman', Times, serif;
        font-size: 30px;
        font-weight: 80;
    }

    .cardio {
        padding-top: 5%;
        font-family: Georgia, 'Times New Roman', Times, serif;
        font-size: 23px;
        font-weight: 80;
        width: 80%;
        padding-left: 10%;
    }

    #home-link {
        position: absolute;
        top: 0;
        right: 0;
        padding: 10px;
        font-size: 1.5em;
        color: #333;
        text-decoration: none;
    }

    footer h3 {
        margin: 0;
        font-size: 18px;
        color: #333;
        float: right;
    }

    /* Style for the chat icon */
    .chat-icon {
        position: absolute;
        bottom: 20px;
        right: 20px;
        font-size: 2em;
        color: #333;
        cursor: pointer;
    }
</style>
</head>

<body>
<a href="fitness.php" id="home-link"><i class="fas fa-home"></i></a>
<h1>Programs</h1><hr><hr>
<img src="yoga.jpg" alt="Yoga1" id="yoga">
<div class="b1">
    <div class="yogah">Yoga</div>
    <div class="yoga-content">Yoga for Beginners to Advanced. First free session available.<br> Timings:<br> Online: 6:00am-7:00am 8:00am-9:00am <br> Offline: 10:00am-11:00am 4:00pm-5:00pm</div>
</div>

<img src="strength.jpg" alt="strength1" id="strength-training">
<div class="b2">
    <div class="strh">Strength Training</div>
    <div class="str-content">Strength training sessions available from Mon-Sat.<br> Timings: <br> 3:00pm-4:00pm 7:00pm-8:00pm</div>
</div>
<img src="cardio1.jpg" alt="cardio1" id="cardio">
<div class="b3">
    <div class="cardioh">Cardio</div>
    <div class="cardio">First free session available for Cardio.<br> Timings: <br> 6:00pm-8:00pm 8:00pm-10:00pm</div>
</div>
<p>Need more fitness advice? Ask our fitness chatbot!</p>
<a class="chat-icon" href="fitness_chatbot.html"><i class="fas fa-comments"></i></a>
<footer>
    <h3>@Unofit</h3>
</footer>
</body>
</html>
