<?php
session_start();
if(!isset($_SESSION['username'])){
    ?>
    <script>
        alert("Session Expired");
        </script>
    <?php
    header('location:login.php');
}
include 'connections/connect.php';
$sem = $_SESSION['sem'];
$courseqry = "select * from course where S_id = '$sem'";
$qry = mysqli_query($con, $courseqry);
$cdata = mysqli_fetch_assoc($qry);
?>
<!DOCTYPE html>
<html lang="en">
<head>
<title>OLIB</title>
<link rel="stylesheet" href="Styles/dashboarddesign.css?v=1">
</head>
<body>
    <div class="main">
        <div class="navbar">
            <div class="menu">
                <ul>

                <li><a href="#">Profile</a></li>
                <li><a href="#">Change Department/Semester</a></li>
                <li><a href="about2.php">About/Feedback</a></li>
                <li><a href="logout.php">Logout</a></li>
                </ul>
            </div>
        </div>
        <div class="content1">
        <div class="profile">
                <h1>Welcome <span1><?php echo($_SESSION['username']); ?></span1></h1>
                <h3>Department : <?php echo($_SESSION['dep']); ?> <span>Semester : <?php echo($_SESSION['sem']); ?></span></h3>
            </div>
            <div class="course">
                <ul>
                    <?php if($cdata['c1']!= null){
                        ?>
                        <li><a href="course.php?course=c1" ><img src="Styles/Assets/c1.png"><br><?php echo($cdata['c1']); ?></a></li>
                        <?php
                    }
                    ?>
                    <?php if($cdata['c2']!= null){
                        ?>
                        <li><a href="course.php?course=c2"><img src="Styles/Assets/c2.png"><br><?php echo($cdata['c2']); ?></a></li>
                        <?php
                    }
                    ?><?php if($cdata['c3']!= null){
                        ?>
                        <li><a href="course.php?course=c3"><img src="Styles/Assets/c3.png"><br><?php echo($cdata['c3']); ?></a></li>
                        <?php
                    }
                    ?><?php if($cdata['c4']!= null){
                        ?>
                        <li><a href="course.php?course=c4"><img src="Styles/Assets/c4.png"><br><?php echo($cdata['c4']); ?></a></li>
                        <?php
                    }
                    ?><?php if($cdata['c5']!= null){
                        ?>
                        <li><a href="course.php?course=c"><img src="Styles/Assets/c5.png"><br><?php echo($cdata['c5']); ?></a></li>
                        <?php
                    }
                    ?><?php if($cdata['c6']!= null){
                        ?>
                        <li><a href="course.php?course=c6"><img src="Styles/Assets/c6.png"><br><?php echo($cdata['c6']); ?></a></li>
                        <?php
                    }
                    ?><?php if($cdata['c7']!= null){
                        ?>
                        <li><a href="course.php?course=c7"><img src="Styles/Assets/c7.png"><br><?php echo($cdata['c7']); ?></a></li>
                        <?php
                    }
                    ?><?php if($cdata['c8']!= null){
                        ?>
                        <li><a href="course.php?course=c8"><img src="Styles/Assets/c8.png"><br><?php echo($cdata['c8']); ?></a></li>
                        <?php
                    }
                    ?><?php if($cdata['c9']!= "null"){
                        ?>
                        <li><a href="course.php?course=c9"><img src="Styles/Assets/c9.png"><br><?php echo($cdata['c9']); ?></a></li>
                        <?php
                    }
                    ?>
                    <?php if($cdata['c10']!= null){
                        ?>
                        <li><a href="course.php?course=c10"><img src="Styles/Assets/c10.png"><br><?php echo($cdata['c10']); ?></a></li>
                        <?php
                    }
                    ?><?php if($cdata['c11']!= null){
                        ?>
                        <li><a href="course.php?course=c11"><img src="Styles/Assets/c11.png"><br><?php echo($cdata['c11']); ?></a></li>
                        <?php
                    }
                    ?>
                    <?php if($cdata['c12']!= null){
                        ?>
                        <li><a href="course.php?course=c12"><img src="Styles/Assets/c12.png"><br><?php echo($cdata['c12']); ?></a></li>
                        <?php
                    }
                    ?>
                    <?php if($cdata['c13']!= null){
                        ?>
                        <li><a href="course.php?course=c13"><img src="Styles/Assets/c13.png"><br><?php echo($cdata['c13']); ?></a></li>
                        <?php
                    }
                    ?>
                    <?php if($cdata['c14']!= null){
                        ?>
                        <li><a href="course.php?course=c14"><img src="Styles/Assets/c14.png"><br><?php echo($cdata['c14']); ?></a></li>
                        <?php
                    }
                    ?>
                    <?php if($cdata['c15']!= null){
                        ?>
                        <li><a href="course.php?course=c15"><img src="Styles/Assets/c15.png"><br><?php echo($cdata['c15']); ?></a></li>
                        <?php
                    }
                    ?>
                    
                </ul>
            </div>
        </div>
    </div>
</body>