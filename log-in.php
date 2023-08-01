<?php
include 'connection.php'; 
if($_SERVER['REQUEST_METHOD'] == "POST")
{
    //something was posted
    $user_name = $_POST['username'];
    $password = $_POST['password'];

    if(!empty($user_name) && !empty($password) && !is_numeric($user_name))
    {

        //read from database
        $query = "select * from users where username = '$user_name' limit 1";
        $result = mysqli_query($conn, $query);

        if($result)
        {
            if($result && mysqli_num_rows($result) > 0)
            {

                $user_data = mysqli_fetch_assoc($result);
                
                if($user_data['password'] === $password)
                {

                    $_SESSION['user_id'] = $user_data['user_id'];
                    header("Location: personal-daily.php");
                    die;
                }
            }
        }
        
        $error_msg = "Wrong username or password!";
    }else
    {
        $error_msg = "Wrong username or password!";
    }
    
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Page</title>
    <link rel="stylesheet" href="styles.css">
    <link rel="shortcut icon" type="image/png" href="nea.png"/>
</head>

<body>
    <div class="login-box">
        <div class="content">

            <div class="header">
                <div class="image">
                    <img src="nea.png" alt="">
                </div>
                <div class="title">
                    Centralized E-Attendance
                </div>
            </div>
            <div class="error">
                        <?php
                        if (isset($error_msg) && !empty($error_msg)) {
                            echo '<div class="error-message" id="error-message">' . $error_msg . '</div>';
                        } 
                        ?>
               
            </div>
            <form method="POST" action="log-in.php">
         
                <div class="field">
                    <input type="text" name="username" required>
                    <span></span>
                    <label>Employee ID or E-mail</label>
                </div>
                <div class="field">
                    <input type="password" name="password" required>
                    <span></span>
                    <label>Password</label>
                </div>
                <div class="forgot-pass">
                    I forgot my password
                </div>
                <input type="submit" value="Log In">
            </form>
        </div>

    </div>
    <script src="login.js"></script>
</body>

