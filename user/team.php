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
    <title> OWASP | Team </title>

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
                    
                    <a href="#" class="current"><i class="fas fa-users"></i>Team</a>
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
        <div class="heading"> OWASP Team </div>


        <div class="team">
            <div class="team-in">
                <div></div>
                <div class="team-photo">
                    <img src="../assets/logo/img-team.png" class="img-team">
                </div>
                <div class="team-member">
                    Arnav Gupta <br>
                    <small>EXBO</small>
                </div>
                <div class="team-position">
                    3rd Year
                </div>
                <div class="team-button">
                    <a href="home.html" title="Click to see Arnav's Profile"><i class="fas fa-id-badge fa-2x"></i></a>
                </div>
                <div></div>
            </div>

            <div class="team-in">
                <div></div>
                <div class="team-photo">
                    <img src="../assets/logo/img-team.png" class="img-team">
                </div>
                <div class="team-member">
                    Akshit Miglani <br>
                    <small>EXBO</small>
                </div>
                <div class="team-position">
                    3rd Year
                </div>
                <div class="team-button">
                    <a href="#" title="Click to see Akshit's Profile"><i class="fas fa-id-badge fa-2x"></i></a>
                </div>
                <div></div>
            </div>

            <div class="team-in">
                <div></div>
                <div class="team-photo">
                    <img src="../assets/logo/img-team.png" class="img-team">
                </div>
                <div class="team-member">
                    Kartikeya Kumar <br>
                    <small>EXBO</small>
                </div>
                <div class="team-position">
                    3rd Year
                </div>
                <div class="team-button">
                    <a href="#" title="Click to see Kartikeya's Profile"><i class="fas fa-id-badge fa-2x"></i></a>
                </div>
                <div></div>
            </div>

            <div class="team-in">
                <div></div>
                <div class="team-photo">
                    <img src="../assets/logo/img-team.png" class="img-team">
                </div>
                <div class="team-member">
                    Prateek Rustagi <br>
                    <small>EXBO</small>
                </div>
                <div class="team-position">
                    3rd Year
                </div>
                <div class="team-button">
                    <a href="#" title="Click to see Prateek's Profile"><i class="fas fa-id-badge fa-2x"></i></a>
                </div>
                <div></div>
            </div>

        </div>


    </div>

<script src="../assets/js/dashboard.js"></script>

</body>
</html>