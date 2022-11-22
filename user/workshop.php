<?php

session_start();

if(!isset($_SESSION['loggedin']) || $_SESSION['loggedin'] !==true)
{
    header("location: ../index.html");
}


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>OWASP | Workshops</title>

    <link rel="icon" href="./assets/logo/favicon.png" type="image/png" sizes="16x16">

    <link rel="stylesheet" href="../assets/css/dashboard.css">
    <link rel="stylesheet" href="../assets/css/login.css">

    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Barlow+Condensed:wght@500&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>
</head>
<body>   
    <!-- Navigation -->
    <nav id="slide-menu">
        <div class="wrap">
            <ul>
                <li><img src="../assets/logo/img_258083.png" class="user-logo"></li>
                <li>Welcome!</li>
                <li>
                    
                    <a href="home.php"><i class="fas fa-user"></i>Home</a>
                </li>
                <li>
                    
                    <a href="meeting.php"><i class="far fa-calendar-check"></i>Meetings</a>
                </li>
                <li>
                    
                    <a href="#" class="current"><i class="fas fa-laptop-code"></i>Workshops</a>
                </li>
                <li>
                    
                    <a href="./calendar.php"><i class="fas fa-envelope-open-text"></i>Calendar</a>
                </li>
                <li>
                    
                    <a href="team.php"><i class="fas fa-users"></i>Team</a>
                </li>
                <li>
                    
                    <a href="suggestion.php"><i class="fas fa-envelope-open-text"></i>Suggestions</a>
                </li>
                <li>
                    
                    <a href="../auth/logout.php"><i class="fas fa-sign-out-alt"></i>Sign Out</a>
                </li>

            </ul>
        </div>
    </nav>
    <!-- Content panel -->

    
    <div id="content">
        <div class="menu-trigger"></div>
        <div class="category">
        <h1 class="category-heading clothing">Workshops</h1>
        
        </div>
        <div class="container">
            <div class="list">
                <div class="list-items">             
                    <div>
                        <img src="../assets/images/items/coding.jpg" alt="">
                    </div>
                    <div>
                        <h3>Competitive Coding</h3>
                        <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Illo, rem magni minima labore totam eum qui. Necessitatibus eum facilis, tempora repellat maiores hic, aliquid obcaecati deserunt commodi iste quos. Porro, pariatur obcaecati. Doloribus nihil est ullam non alias, quos temporibus architecto ipsum ipsam at, facilis nemo deleniti numquam tempora? Nihil!</p>
                        <a href="#" class="register-btn">Register Now</a>
                    </div>
                </div>
                <div class="list-items">               
                    <div>
                        <img src="../assets/images/items/webd.jpg" alt="">
                    </div>
                    <div>
                        <h3>Web Development</h3>
                        <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Illo, rem magni minima labore totam eum qui. Necessitatibus eum facilis, tempora repellat maiores hic, aliquid obcaecati deserunt commodi iste quos. Porro, pariatur obcaecati. Doloribus nihil est ullam non alias, quos temporibus architecto ipsum ipsam at, facilis nemo deleniti numquam tempora? Nihil!</p>
                        <a href="#" class="register-btn">Register Now</a>
                    </div>
                </div>
                <div class="list-items">                   
                    <div>
                        <img src="../assets/images/items/graphic.png" alt="">
                    </div>
                    <div>
                        <h3>Graphic Designing</h3>
                        <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Illo, rem magni minima labore totam eum qui. Necessitatibus eum facilis, tempora repellat maiores hic, aliquid obcaecati deserunt commodi iste quos. Porro, pariatur obcaecati. Doloribus nihil est ullam non alias, quos temporibus architecto ipsum ipsam at, facilis nemo deleniti numquam tempora? Nihil!</p>
                        <a href="#" class="register-btn">Register Now</a>
                    </div>
                </div>
                <div class="list-items">
                    <div>
                        <img src="../assets/images/items/python.jpg" alt="">
                    </div>
                    <div>
                        <h3>ML and AI with Python</h3>
                        <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Illo, rem magni minima labore totam eum qui. Necessitatibus eum facilis, tempora repellat maiores hic, aliquid obcaecati deserunt commodi iste quos. Porro, pariatur obcaecati. Doloribus nihil est ullam non alias, quos temporibus architecto ipsum ipsam at, facilis nemo deleniti numquam tempora? Nihil! </p>
                        <a href="#" class="register-btn">Register Now</a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script>         
    const button = document.querySelectorAll(".register-btn");   

    button.forEach(function(reg){             
        reg.addEventListener('click', popup);      

    function popup() {                 
        alert("Successfully Registered!");             
        }             
    });     
    
    </script>

    <script src="../assets/js/dashboard.js"></script>
</body>
</html>