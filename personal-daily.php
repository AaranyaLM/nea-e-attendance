<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>E-Attendance | Personal Daily Report</title>
    <script src="https://kit.fontawesome.com/1ae1db6a1d.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="style.css">
    <link rel="shortcut icon" type="image/png" href="nea.png"/>
</head>
<body>
    <div class="container">
         
            <div class="side-bar">
                <div class="logo">
                    <img src="nea.png" alt="">
                </div>  
            
                <div class="menu">
                    <div class="menu-item">
                        <a href="">Dashboard</a>
                    </div>
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
                       
                            <a href="calender.php">Calender</a>
                       
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
                    <h2>Personal Daily Report</h2>
                </div>
            </div>

            <div class="employee-data">
                <div class="data-item">
                    <span class="data-label">Employee Name:</span>
                    <span class="data-value">Aniv</span>
                </div>
                <div class="data-item">
                    <span class="data-label">Office:</span>
                    <span class="data-value">NEA Central Office</span>
                </div>
                <div class="data-item">
                    <span class="data-label">Designation:</span>
                    <span class="data-value">Senior Manager</span>
                </div>
                <div class="data-item">
                    <span class="data-label">Employment Type:</span>
                    <span class="data-value">Full-time</span>
                </div>
                <div class="data-item">
                    <span class="data-label">Employee Personal Code:</span>
                    <span class="data-value">EMP123456</span>
                </div>
            </div>
            

            <div class="table">
                <table>
                    <tr>
                        <th>S.N</th>
                        <th>Date</th>
                        <th>In</th>
                        <th>Out</th>
                        <th>Work Duration</th>
                        <th>Status</th>
                        <th>Month Status</th>
                        <th>Remarks</th>
                    </tr>
                    <tr>
                        <td>1</td>
                        <td>2023-07-01</td>
                      
                        <td>10:00 AM</td>
                        <td>05:00 PM</td>
                        <td>07:00</td>
                        <td>Present</td>
                    </tr>
                    <tr>
                        <td>2</td>
                        <td>2023-07-02</td>
                   
                        <td>10:00 AM</td>
                        <td>05:00 PM</td>
                        <td>07:00</td>
                        <td>Present</td>
                    </tr>
                    <tr>
                        <td>3</td>
                        <td>2023-07-03</td>
                  
                        <td>10:00 AM</td>
                        <td>05:00 PM</td>
                        <td>07:00</td>
                        <td>Present</td>
                    </tr>
                    
                </table>
            </div>
            
        </div>
    </div>
</body>
</html>