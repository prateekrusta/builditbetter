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
    <title> OWASP | Home </title>

    <link rel="icon" href="./assets/logo/favicon.png" type="image/png" sizes="16x16">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css">

    <link rel="stylesheet" href="../assets/css/dashboard.css">
    <link rel="stylesheet" href="../assets/css/login.css">
    <link rel="stylesheet" href="../assets/css/timeline.css">

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
                    <i class="fas fa-user"></i>
                    <a href="#">Home</a>
                </li>
                <li>
                    <i class="far fa-calendar-check"></i>
                    <a href="meeting.php">Meetings</a>
                </li>
                <li>
                    <i class="fas fa-laptop-code"></i>
                    <a href="workshop.php">Workshops</a>
                </li>
                <li>
                    
                    <a href="./calendar.php"><i class="fas fa-envelope-open-text"></i>Calendar</a>
                </li>
                <li>
                    <i class="fas fa-users"></i>
                    <a href="team.php">Team</a>
                </li>
                <li>
                    <i class="fas fa-envelope-open-text"></i>
                    <a href="suggestion.php">Suggestions</a>
                </li>
                <li>
                    <i class="fas fa-sign-out-alt"></i>
                    <a href="../auth/logout.php">Sign Out</a>
                </li>

            </ul>
        </div>
    </nav>
    <!-- Content panel -->

    <div id="content">
      <div class="content-in">
        <div class="menu-trigger"></div>
        <div class="heading"> Home </div>
        <img src="./assets/logo/underline1.png" alt="" class="underline">


        <section class="about-user">
            <h1 class="about-subheading">About <?php echo $_SESSION['username']?></h1>
            <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Fugit eveniet optio quos ea minima in perspiciatis laboriosam recusandae temporibus molestias debitis, eaque culpa neque consequatur exercitationem nulla dignissimos iste ut dolor odio iusto autem ratione! Iusto corrupti accusamus unde ipsum dicta culpa officia, quia quam cupiditate consequuntur quae eum iste facere explicabo quo adipisci illo harum dolor reiciendis ea labore corporis ex quidem. Velit, voluptas perferendis, mollitia quis vero atque quam qui cum voluptate excepturi odio veniam optio cumque dolores suscipit saepe ea voluptates. Nulla ex architecto tempora, cumque, praesentium eos beatae aliquam facilis incidunt perspiciatis quia blanditiis culpa laborum?</p>
          </section>


        <section id="timeline">
            <h1 class="about-subheading"><?php echo $_SESSION['username']?>'s Timeline in Owasp</h1>
            <ul>
              <li>
                <div>
                  <h3><i class="fas fa-chevron-right"></i> 2020 : Executive Member</h3>
                  <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Vitae, distinctio. Mollitia reprehenderit veritatis officia perferendis dicta obcaecati sapiente, rem quia?</p>
                </div>
              </li>
              <li>
                <div>
                  <h3>
                    <i class="fas fa-chevron-right"></i> 2021 : Core Member
                  </h3>
                  <p>
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Ea aut
                    eum assumenda architecto, perspiciatis itaque maiores ex rerum
                    libero provident!
                  </p>
                </div>
              </li>
              <li>
                <div>
                  <h3><i class="fas fa-chevron-right"></i> 2022 : Marketing Secretary</h3>
                  <p>
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Ea aut
                    eum assumenda architecto, perspiciatis itaque maiores ex rerum
                    libero provident!
                  </p>
                </div>
            </li>
              </ul>
            </section>
            </div>
          <div class="social-handles">
            <ul class="social-media-buttons" align="center">
              <li class="social-in">
                <a href="tel:+919910545503"><i class="fas fa-phone-square-alt fa-2x"></i></a>
              </li>
              <li class="social-in">
                <a href="https://www.instagram.com/protick.exe/" target="_blank"><i class="fab fa-instagram fa-2x"></i></a>
              </li>
              <li class="social-in">
                <a href="https://www.linkedin.com/in/prateek-rustagi-37a3a616b/" target="_blank"><i class="fab fa-linkedin fa-2x" style="margin-right: 35px;"></i></a>
              </li>
            </ul>
          </div>
          </div>


<script src="../assets/js/dashboard.js"></script>
<script src="../assets/js/timeline.js"></script>
</body>
</html>