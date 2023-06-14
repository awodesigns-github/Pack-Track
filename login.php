<?php
    session_start();
?>
<!--html  code -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="CSS/style.css">
    <title>Login Portal</title>
</head>
<body>
    <div class="container-form">
        <form action="" method="post">
            <Legend><h1>Login Portal</h1></Legend>
            <div class="contacts">
                <label for="email"><h2>Email</h2></label>
                <input type="text" name="email" id="email">
            </div>
            <div class="password">
                <label for="password"><h2>Password</h2></label>
                <input type="password" name="pwd" id="pwd">
            </div>
            <div class="submit-btn">
                <button type="submit" name="submit"><h3>Login</h3></button>
            </div>
            <small>Haven't Joined Us Yet? <a href="registration.php" class="danger">Register Here...</a></small>
        </form>
    </div>

    <!--validation with php-->
    <?php
        if (isset($_POST['submit'])) {
            //capture login details
            $username = $_POST['email'];
            $password = $_POST['pwd'];

            $link = mysqli_connect("127.0.0.1","root","","packtrack");

            if ($username != "" && $password != "") {

                $query = "SELECT * FROM users WHERE email='$username' AND password='$password'";

                try {
                    $result=mysqli_query($link,$query);
                } catch (Exception $e) {
                    echo $e;
                }

                if (mysqli_num_rows($result) == 1) {
                    //capture session variables
                    $_SESSION['email'] = $username;
                    $_SESSION['pwd'] = $password;

                    while ($row = mysqli_fetch_array($result)) {
                        if($row['role'] == 'admin'){
                            header("location:admindashboard.php");
                        } else if($row['role'] == 'normal'){
                            header("location:usersdashboards.php");
                        } else {
                            header("location:usersdashboards.php");
                        }
                    }
                } else {
                    echo "Incorrect Username or Password!";
                }
            } else {
                echo "Please enter login details to login...";
            }
            
        }
    ?>
</body>
</html>