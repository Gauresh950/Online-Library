<!DOCTYPE html>

<html lang="en">
<head>
<title>OLIB</title>
<link rel="stylesheet" href="Styles/signindesign.css?v=1">
</head>
<body>

<?php
include 'connections/connect.php';

if(isset($_POST['submit'])){
$username = mysqli_real_escape_string($con, $_POST['name']);
$email = mysqli_real_escape_string($con,$_POST['email']);
$mobile = mysqli_real_escape_string($con, $_POST['mobile']);
$dep = mysqli_real_escape_string($con,$_POST['dep']);
$sem = mysqli_real_escape_string($con,$_POST['sem']);
$password = mysqli_real_escape_string($con,$_POST['password']);

$emailqry = "select * from user where email = '$email'";
$qry = mysqli_query($con, $emailqry);
$emailcount = mysqli_num_rows($qry);
$pass = password_hash($password, PASSWORD_BCRYPT);

if($emailcount>0){
    ?>
    <script>
        alert("Email already Exist");
    </script>
    <?php
}else{
    $insertqry= "insert into User(name, email, mobile, dep, sem,password) values('$username','$email','$mobile','$dep','$sem','$pass')";
    $iqry = mysqli_query($con , $insertqry);
    if($qry){
        ?>
    <script>
        alert("Signin Successfull")
        window.location.assign("login.php");
    </script>
    <?php
    }
}


}
?>

    <div class="main">
        <div class="navbar">
            <div class="menu">
                <ul>
                    <li><a href="login.php">Login</a></li>
                    <li><a href="index.php">Home</a></li>
                    <li><a href="about.php">About</a></li>
                </ul>
            </div>
        </div>
        <div class="image1">
            <img src="Styles/Assets/signinblackbox.png" width="875" height="600px">
        </div>
        <div class="content1">
            <h1>Create an <span>OLIB</span> account</h1>
            <h2>Name<br><br>Email<br><br>Mobile No<br><br>Department<br><br>Semester<br><br>Password<br><br>Confirm Password</h2>
            <form action="" name="Signin" onsubmit="return validate()" method="post">
                <div class="forminputs" id="input1">
                    <input class="input1" type="text" name="name" placeholder="First  Middle  Last"><br><span class="Error"></span><br>
                </div>
                <div class="forminputs" id="input2">
                    <input class="input2" type="email" name="email" placeholder="xyz@gmail.com"><br><span class="Error"></span><br>
                </div>
                <div class="forminputs" id="input3">
                    <input class="input3" type="text" name="mobile" inputmode="numeric"  placeholder="10-Digit No" ><br><span class="Error"></span><br>
                </div>
                <div class="forminputs" id="input4">
                    <select name="dep" class="input4">
                        <option value="0">--Select Department--</option>
                        <option value="CSE">CSE</option>
                        <option value="MECH">MECH</option>
                        <option value="ENTC">ENTC</option>
                        <option value="ELE">ELE</option>
                        <option value="BIO">BIO</option>
                        <option value="CIVIL">CIVIL</option>
                        <option value="ENV">ENV</option>
                    </select><br><span class="Error"></span><br>
                </div>
                <div class="forminputs" id="input5">
                <select name="sem" class="input5">
                        <option value="0">--Select Semester--</option>
                        <option value="1">1</option>
                        <option value="2">2</option>
                        <option value="3">3</option>
                        <option value="4">4</option>
                        <option value="5">5</option>
                        <option value="6">6</option>
                        <option value="7">7</option>
                        <option value="8">8</option>
                    </select><br><span class="Error"></span><br>
                </div>
                <div class="forminputs" id="input6">
                    <input class="input6" type="password" name="password" placeholder="Password"><br><span class="Error"></span><br>
                </div>
                <div class="forminputs" id="input7">
                    <input class="input7" type="password" name="cpassword" placeholder="Confirm Password"><br><span class="Error"></span><br>
                </div>
                <div class="forminputs" id="input8">
                    <input class="signup" type="submit" name="submit" value="Signin">
                </div>
            </form>
            </div>
    </div>
</body>
<script src="Javascript/validation.js"></script>
</html>