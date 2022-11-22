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
    <title> OWASP | Suggestions </title>

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
                    
                    <a href="meeting.php"><i class="far fa-calendar-check"></i>Meetings</a>
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
                    
                    <a href="#" class="current"><i class="fas fa-envelope-open-text"></i>Suggestions</a>
                </li>
                <li>
                    
                    <a href="../auth/logout.php"><i class="fas fa-sign-out-alt"></i>Sign Out</a>
                </li>

            </ul>
        </div>
    </nav>
    <!-- Content panel -->

    <form action="./feedback.php" method="POST">
    <div id="content">
        <div class="menu-trigger"></div>
        <div class="suggestions-out" style="margin-top:6%">
            <div class="heading"> Suggestions / Feedback </div>

            <div class="subheading"><i>Your suggestions will be submitted anonymously. Feel free to share!</i></div>

                <div class="suggestions-in" align="center" style="padding-left: 200px; padding-right: 200px;">
                    <form>
                        <div class="subject-box">
                            <input type="text" placeholder="Subject" name="subjectss" id="subjectss" required>
                        </div>
                        <div class="suggestions-box">
                            <textarea placeholder="Your Suggestions here" class="suggestions-box" name="messagess" id="messagess" required></textarea>
                        </div>
                        <div class="submit-btn-prat">
                            <button class="submit-prat">Send Message</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </form>
    </div>

<script src="../assets/js/dashboard.js"></script>

</body>
</html>