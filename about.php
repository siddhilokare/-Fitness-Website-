<!DOCTYPE html>
<html>
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About</title>
    <link rel="stylesheet" href="style1.css">
    <style>
        body {
            margin: 0;
        }

        header {
            background: linear-gradient(rgb(26, 20, 20), rgb(23, 17, 17));
            color: whitesmoke;
            /* padding: 20px; */
        }

        h1 {
            margin: 0;
            text-align: right;
        }

        .container {
            display: flex;
            align-items: center;
            height: 200vh;
            background-image: linear-gradient(rgba(104, 104, 104, 0.973), rgba(79, 31, 57, 0.393));
            background-size: cover;
        }

        .image-box {
            flex: 1;
            text-align: center;
            margin-top: -15%;
            background-image: none;
          
        }

        .image-box img {
            max-width: 80%;
            border-radius: 10px;
            padding-right: -60%;
        }

        .right {
            flex: 1;
            padding: 20px;
            text-align: center;
            margin-top: -10%;
        }

        #slogan {
            font-size: 30px;
            color: lavender;
            margin-top: -5%;
        }

        .btn-field {
            display: flex;
            justify-content: center;
            margin-top: -50%;
            width : 60%;
            padding-left : 50%;
        }

        .btn-field button {
            background: rgb(36, 34, 34);
            color: lavender;
            border: 0;
            outline: 0;
            cursor: pointer;
            transition: background 1s;
            flex: 1;
            padding: 10px;
            border-radius: 20px;
            font-size: 20px;
        }

        .btn-field button:hover {
            background: #555;
        }

        footer {
            position: fixed;
            bottom: 0;
            right: 0;
            background: transparent;
            padding: 10px;
        }

        footer h3 {
            margin: 0;
            font-size: 18px;
            color: #333;
        }

        @media (max-width: 760px) {
            .btn-field button {
                font-size: 16px;
            }
        }

        @media (max-width: 480px) {
            body {
                font-size: 14px;
            }

            .image-box {
                height: 170px;
                width: 250px;
            }

            .image-box img {
                height: 100%;
                width: 100%;
            }

            .right {
                font-size: 20px;
            }

            #slogan {
                font-size: 20px;
            }
        }
    </style>
</head>
<body>
    <header>
        <h1>About Us</h1>
    </header>
    <div class="container">
        <div class="image-box">
            <img alt="..." class="max-w-full rounded-lg shadow-lg" src="about.webp">
        </div>

        <div class="right">
            <p id="slogan">"Fitness is a Journey, Enjoy the Ride"</p>
            <p>
                <?php
                // Include your PHP content here
                include('content.php');
                echo "$websiteName is a dynamic and innovative fitness website that is dedicated to helping people achieve their fitness goals and lead a healthy and active lifestyle. $mission";
                echo "At $websiteName, we believe that fitness should be accessible to everyone, regardless of their age, fitness level, or lifestyle. That's why we offer a range of fitness programs that cater to the needs of users at all levels, from beginners to advanced fitness enthusiasts. Whether you're looking to lose weight, build muscle, or simply improve your overall health and well-being, we have a program that can help you achieve your goals.";
                echo "$teamInfo";
                echo "We believe that fitness is more than just a physical activity - it's a way of life. That's why we offer a range of resources and tools to help users stay motivated, engaged, and committed to their fitness journey. From our online community forums to our fitness tracking tools, we provide users with the support and encouragement they need to stay on track and reach their goals.";
                echo "At $websiteName, we are committed to excellence in everything we do. We strive to create a positive and empowering environment that inspires our users to push themselves to new heights and achieve their full potential. We are passionate about helping people live healthier, happier lives, and we look forward to being a part of your fitness journey.";
                ?>
            </p>
        </div>
        <div class="btn-field">
        <button type="button" id="Home" onclick="location.href='fitness.php'">Home</button>
        <button type="button" id="Program" onclick="location.href='program.php'">Program</button>
        <button type="button" id="Chatbot" onclick="location.href='fitness_chatbot.html'">Fitness Chatbot</button>
    </div>
    </div>
   
    <footer>
        <h3>@Unofit</h3>
    </footer>
</body>
</html>
