<!DOCTYPE html>
<html lang="en" >
  <head>
    <meta charset="utf-8">
    <title>E-Attendance | Calender</title>
    <link rel="stylesheet" href="style.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Rounded:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200">
    <script src="calenderscript.js" defer></script>
    <script src="https://kit.fontawesome.com/1ae1db6a1d.js" crossorigin="anonymous"></script>

  </head>
  <body>
    <div class="container">
         
        <div class="side-bar">
            <div class="logo">
                <img src="nea.png" alt="">
            </div>  
        
            <div class="menu">
                 <!-- Drop-down menu -->
                 <div class="menu-item">
                    <div class="dropdown">
                        <button class="dropbtn"><a href="">Reports</a> <i class="fas fa-caret-down"></i></button>
                        <div class="dropdown-content">
                            <a href="personal-daily.php">Personal Daily Report</a>
                            <a href="leave.php">Leave Report</a>
                            <a href="late.php">Late Report</a>
                            <a href="log.php">Log Report</a>
                        </div>
                    </div>
                 </div>
                <div class="menu-item">
                    <div class="calender">
                        <a href="calender.php">Calender</a>
                    </div>
                </div>
                
            </div>
           
            <div class="log-out">
                <a href="log-in.php">Log Out <i class="fa-solid fa-right-from-bracket" style="color: #ffffff;"></i></a>
            </div>                   
        
    </div>
    
    <div class="main-body">
        <div class="header">
            <div class="title">
                <h1>NEA Centralized E-Attendance</h1>
            </div>
            <div class="sub-title">
                <h2>Calender</h2>
            </div>
        </div>

        <div class="wrapper">
            <header>
              <p class="current-date"></p>
              <div class="icons">
                <span id="prev" class="material-symbols-rounded">chevron_left</span>
                <span id="next" class="material-symbols-rounded">chevron_right</span>
              </div>
            </header>
            <div class="calendar">
              <ul class="weeks">
                <li>Sun</li>
                <li>Mon</li>
                <li>Tue</li>
                <li>Wed</li>
                <li>Thu</li>
                <li>Fri</li>
                <li>Sat</li>
              </ul>
              <ul class="days">

              </ul>
            </div>
          </div>

       
        
    </div>
</div>
    
  </body>
</html>


