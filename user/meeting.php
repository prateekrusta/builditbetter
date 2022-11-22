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
    <title> OWASP | Meetings </title>

    <link rel="icon" href="./assets/logo/favicon.png" type="image/png" sizes="16x16">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css">

    <link rel="stylesheet" href="../assets/css/dashboard.css">
    <link rel="stylesheet" href="../assets/css/login.css">

    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Barlow+Condensed:wght@500&display=swap" rel="stylesheet">

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
                    
                    <a href="#" class="current"><i class="far fa-calendar-check"></i>Meetings</a>
                </li>
                <li>
                    
                    <a href="workshop.php"><i class="fas fa-laptop-code"></i>Workshops</a>
                </li>
                <li>
                    
                    <a href="team.php"><i class="fas fa-users"></i>Team</a>
                </li>
                <li>
                    
                    <a href="./calendar.php"><i class="fas fa-envelope-open-text"></i>Calendar</a>
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
    <div class="meetings">
            <div class="heading"> Ongoing Meetings </div>
        <div class="meetings-out">
            <div class="meetings-in">
                <div></div>
                <div class="meetings-name">
                    <i class="fas fa-edit"></i> Unofficial Meeting
                </div>
                <div class="meetings-attendance">
                    <a href="" title="Click here to mark your attendance"><button class="meetings-button"> <i class="fas fa-calendar-check"></i> Mark your Attendance </button></a>
                </div>
                <div class="meetings-time" id="meetingtimer">
                    <i class="fas fa-clock"></i> 18:00 - 20:00 P.M.
                </div>
                <div></div>
            </div>
        </div>
    </div>


    <div class="meetings">
        <div class="heading"> Upcoming Meetings </div>
    <div class="meetings-out">
        <div class="meetings-in">
            <div></div>
            <div class="meetings-name">
                <i class="fas fa-edit"></i> Future Plans
            </div>
            <div class="meetings-date">
                <i class="fas fa-calendar-week"></i> 26th January 2023
            </div>
            <div class="meetings-time">
                <i class="fas fa-clock"></i> 17:00 - 20:00 
            </div>
            <div></div>
        </div>

        <div class="meetings-in">
            <div></div>
            <div class="meetings-name">
                <i class="fas fa-edit"></i> HackOwasp Meeting
            </div>
            <div class="meetings-date">
                <i class="fas fa-calendar-week"></i> 30th January 2023
            </div>
            <div class="meetings-time">
                <i class="fas fa-clock"></i> 19:00 - 21:00 
            </div>
            <div></div>
        </div>

        <div class="meetings-in">
            <div></div>
            <div class="meetings-name">
                <i class="fas fa-edit"></i> Marketing Meeting
            </div>
            <div class="meetings-date">
                <i class="fas fa-calendar-week"></i> 12th February 2023
            </div>
            <div class="meetings-time">
                <i class="fas fa-clock"></i> 18:00 - 20:00 
            </div>
            <div></div>
        </div>

    </div>
</div>
</div>
<script>
    const button = document.querySelector(".meetings-button");

    button.addEventListener('click', popup);

    function popup() {
        alert("Your Attendance has been marked!");
    }    
    const date= new Date();
    const timer=document.getElementById("meetingtimer");
    console.log(date.getHours());
    const min = date.getMinutes() <= 30 ? "00" : 30;
    timer.innerHTML=`<i class="fas fa-clock"></i> ${date.getHours()}:${min} - ${date.getHours()+2}:${min}`
    
</script>
<script src="../assets/js/dashboard.js"></script>

</body>
</html>