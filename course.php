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
$_SESSION['course'] =$cdata[$_GET['course']];
$cid=$_SESSION['course'] ;

$topicqry="select * from topic where course = '$cid' ";
$qry2 = mysqli_query($con, $topicqry);
$tdata = mysqli_fetch_assoc($qry2);
$cname = $tdata['name'];
$t1 = $tdata['topic1'];
$t2 = $tdata['topic2'];
$t3 = $tdata['topic3'];
$t4 = $tdata['topic4'];
$t5 = $tdata['topic5'];
$t6 = $tdata['topic6'];



?>
<!DOCTYPE html>
<html lang="en">
<head>
<title>OLIB</title>
<link rel="stylesheet" href="Styles/coursedesign.css?v=2">
</head>
<body>
    <div class="main">
        <div class="navbar">
            <div class="box">
            <h1><?php echo($_SESSION['course']); ?> - <?php echo($cname); ?></h1>
                <div class="menu">
                    <ul>
                        <li><a href="#">Change Department/Semester</a></li>
                        <li><a href="about2.php">About/Feedback</a></li>
                        <li><a href="logout.php">Logout</a></li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="sidebar">
            <ul>
            <li><h1><?php echo($t1); ?></h1></li>
            <li><h1><?php echo($t2); ?></h1></li>
            <li><h1><?php echo($t3); ?></h1></li>
            <li><h1><?php echo($t4); ?></h1></li>
            <li><h1><?php echo($t5); ?></h1></li> 
            <li><h1><?php echo($t6); ?></h1></li>   
            </ul> 
        </div>
        <div class="content1">
            <div class="course">
                <ul>
                    <li>
                        <h1><?php echo($t1); ?></h1>
                        <ul>
                            <?php
                            $linkqry="select * from links where topic = '$t1' ";
                            $qry = mysqli_query($con, $linkqry);
                            $count = mysqli_num_rows($qry);
                            while($ldata = mysqli_fetch_array($qry)){
                                ?>
                                <li>
                                <h2><?php echo($ldata['info'])?></h2>
                                <button class="dbtn"><?php echo("<a href='".$ldata['link']."'>Download</a>");?></button>
                            </li>
                                <?php
                            }
                            ?>
                        </ul>
                    </li>
                    <li>
                        <h1><?php echo($t2); ?></h1>
                        <ul>
                        <?php
                            $linkqry="select * from links where topic = '$t2' ";
                            $qry = mysqli_query($con, $linkqry);
                            $count = mysqli_num_rows($qry);
                            while($ldata = mysqli_fetch_array($qry)){
                                ?>
                                <li>
                                <h2><?php echo($ldata['info'])?></h2>
                                <button class="dbtn"><?php echo("<a href='".$ldata['link']."'>Download</a>");?></button>
                            </li>
                                <?php
                            }
                            ?>
                        </ul>
                    </li>
                    <li>
                        <h1><?php echo($t3); ?></h1>
                        <ul>
                        <?php
                            $linkqry="select * from links where topic = '$t3' ";
                            $qry = mysqli_query($con, $linkqry);
                            $count = mysqli_num_rows($qry);
                            while($ldata = mysqli_fetch_array($qry)){
                                ?>
                                <li>
                                <h2><?php echo($ldata['info'])?></h2>
                                <button class="dbtn"><?php echo("<a href='".$ldata['link']."'>Download</a>");?></button>
                            </li>
                                <?php
                            }
                            ?>
                        </ul>
                    </li>
                    <li>
                        <h1><?php echo($t4); ?></h1>
                        <ul>
                        <?php
                            $linkqry="select * from links where topic = '$t4' ";
                            $qry = mysqli_query($con, $linkqry);
                            $count = mysqli_num_rows($qry);
                            while($ldata = mysqli_fetch_array($qry)){
                                ?>
                                <li>
                                <h2><?php echo($ldata['info'])?></h2>
                                <button class="dbtn"><?php echo("<a href='".$ldata['link']."'>Download</a>");?></button>
                            </li>
                                <?php
                            }
                            ?>
                        </ul>
                    </li>
                    <li>
                        <h1><?php echo($t5); ?></h1>
                        <ul>
                        <?php
                            $linkqry="select * from links where topic = '$t5' ";
                            $qry = mysqli_query($con, $linkqry);
                            $count = mysqli_num_rows($qry);
                            while($ldata = mysqli_fetch_array($qry)){
                                ?>
                                <li>
                                <h2><?php echo($ldata['info'])?></h2>
                                <button class="dbtn"><?php echo("<a href='".$ldata['link']."'>Download</a>");?></button>
                            </li>
                                <?php
                            }
                            ?>
                        </ul>
                    </li>
                    <li>
                        <h1><?php echo($t6); ?></h1>
                        <ul>
                        <?php
                            $linkqry="select * from links where topic = '$t6' ";
                            $qry = mysqli_query($con, $linkqry);
                            $count = mysqli_num_rows($qry);
                            while($ldata = mysqli_fetch_array($qry)){
                                ?>
                                <li>
                                <h2><?php echo($ldata['info'])?></h2>
                                <button class="dbtn"><?php echo("<a href='".$ldata['link']."'>Download</a>");?></button>
                            </li>
                                <?php
                            }
                            ?>
                        </ul>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</body>