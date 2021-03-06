<?php
include("dbconfig.php");
session_start();

if(!isset($_SESSION['email']))
{
  header("location:register.html");
}
  $name=$_SESSION['fname'];
  $profile=$_SESSION['profile'];

  $q="
    SELECT * FROM titlepost
    ";
  $r=$conn->query($q);

?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">

    <link rel="stylesheet" type="text/css" href="newsfeed_main.css">
    <link rel="stylesheet" type="text/css" href="timeline.css">
    <!-- <link rel="stylesheet" type="text/css" href="tabs.css"> -->
    <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css?family=Roboto+Slab" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Merienda" rel="stylesheet">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css">

    <style type="text/css">

    </style>


    <title>NEWSFEED</title>
  </head>
  <body>
    <div class="parallax">
    </div>

    <span id="profile-pic" > <img src="<?php echo htmlspecialchars($profile)?>" alt=""> </span>

    <div class="welcome">
      <p>Welcome <?php echo $name ?>.</p>
    </div>

    <div class="create_post">

      <div class="something">
        Something on your mind?
      </div>

      <form method="post" action="post1.php">
        <textarea name="title" rows="10" cols="10" placeholder="Title" style="width: 300px; height: 90px; margin-right: 10px; font-size: 25px;"></textarea>
        <textarea name="post" rows="10" cols="40" placeholder="Post" style="width: 300px; height: 90px;font-size: 25px;"></textarea>
        <!--<button class="btn btn-primary" id="attach_btn" >Attach</button>-->
        <button type="submit" class="btn btn-primary" id="post_btn" name="submit" style="top: -10px; left: -300px; width: 150px; height: 75px; font-size: 20px;">POST</button>
      </form>

    </div>


    <div class="flex-container">

      <div style="flex-basis:20%" id="one" >
        <a href="logout.php"> <h5>Logout!</h5> </a>
        <a href="moodle.html"> <h5>Moodle</h5> </a>
      </div>

      <div style="flex-basis:70%" id="two" >
        <div id="content">

          <ul class="timeline">
            <?php
            //echo "HELLO";
              $q="
              SELECT * FROM titlepost
              ";
              $r=$conn->query($q);
              $count=1;
            while($row=mysqli_fetch_array($r,MYSQLI_ASSOC))
            {
              //echo "HELLO";
              //echo $row['postid'];?>

            <li class="event">
              <h3> POST <?php echo $count; ?></h3>
              <h3><?php echo $row['title']; ?></h3>
              <p><?php echo $row['post']; ?></p>
              <h5>Comments</h5>
              <!--<h6 style="font-style:italic" >Your comments:</h6>-->
              <?php
              //echo "HELLO";
              $te=$row['postid'];
              //echo $te;
              $q1="
              SELECT * FROM comments
              WHERE post_id='$te'
              ";
              $r1=$conn->query($q1);
              $count1=1;
            while($row1=mysqli_fetch_array($r1,MYSQLI_ASSOC))
            {
              //echo "HELLO";
              //echo $row1['comment_id'];?>
              <h6>Comment <?php echo $count1;  ?>
              <?php echo $row1['comment']  ?></h6>
              <?php
            }
            ?>
            </li>
            <form action="comment1.php" method="post">
              <input type="text" name="postid" value="<?= $row['postid'] ?>" hidden>
              <textarea name="comment" placeholder="Type your comment here." rows="4" cols="1000" style="width: 750px; float: left; left: 0; transform: translate(0, -20px);font-size: 20px; color: black;">            </textarea>
              <button type="submit" class="btn btn-primary" name="submit" style="left: 0; top: 0; transform: translate(50px, -20px); width: 130px; ">POST</button>
              <!--<button class="btn btn-primary" >POST</button>-->
            </form>
            <hr>
            <?php
            $count++;
            }

            ?>

          </ul>

        </div>

      </div>




  </body>
</html>
