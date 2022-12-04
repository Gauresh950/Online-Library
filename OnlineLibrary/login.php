<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
<title>OLIB</title>
<link rel="stylesheet" href="Styles/logindesign.css?v=1">
</head>
<body>
    
<?php
include 'connections/connect.php';
if(isset($_POST['submit'])){
$email = mysqli_real_escape_string($con,$_POST['email']);
$password = mysqli_real_escape_string($con,$_POST['password']);
$emailqry = "select * from user where email = '$email'";
$qry = mysqli_query($con, $emailqry);
$emailcount = mysqli_num_rows($qry);


if($emailcount>0){

    $email_pass = mysqli_fetch_assoc($qry);
    $dbpass = $email_pass['password'];
    $_SESSION['username'] = $email_pass['name'];
    $_SESSION['sem'] = $email_pass['sem'];
    $_SESSION['dep'] = $email_pass['dep'];
    $password_ck = password_verify($password,$dbpass);
    if($password_ck){
        ?>
    
    <script>
        window.location.assign("dashboard.php");
    </script>
    <?php
    }else{
        ?>
    
        <script>
            alert("Invalid Password");
        </script>
        <?php 
    }

    
}else{
    ?>
    
    <script>
        alert("Invalid Email")
    </script>
    <?php
}
}
?>

    <div class="main">
        <div class="image1">
            <img src="Styles/Assets/loginbg.png" width="1200px" height="600px">
        </div>
        <div class="navbar">
            <div class="menu">
                <ul>
                    <li><a href="about.php">About</a></li>
                    <li><a href="index.php">Home</a></li>
                </ul>
            </div>
        </div>
        
        <div class="content1">
            <h1>Login</h1>
            <h2>Email<br><br><br>Password</h2>
            <form action="" name="login" method="post">
            <input class="input1" type="email" name="email" placeholder="Enter Email . . . .">
            <input class="input2" type="password" name="password" placeholder="Enter Password . . . .">
            <input type="submit"name="submit" class="login" value="Login"></button>
            
            </form>
            <a class="Signup" href="signin.php">Dont have a Account?</a>
            <a class="FP" href="#">Forgot Password?</a>
        </div>
        
    </div>
</body>   