<!DOCTYPE html>

<html>

<head>
  <title>PHP_PrionJanGab</title>
  <style>
body {
  background-image: url("https://st3.depositphotos.com/1184748/15131/i/600/depositphotos_151311046-stock-photo-colorful-background-realistic-flickering-analog.jpg");
  background-repeat: repeat;
  background-color: #cccccc;
    }
    </style>
</head>

<body>

               <h2 style="color:#FFF"> My First PHP Webpage</h2>
<?php
echo ("<p> <font color=white>PrionJanGab MI202<br>");
echo "<p> <font color=white> Welcome to my webpage</font> ";
EcHo "<p> <font color=white> Enjoy all the content that will be posted as of ". date("Y/m/d") ."<br>";
echo '<span style="color:#AFA;">☦ ☦ ☦ </span>';
echo "<p> <font color=#93908E>Submit your email address so I can contact you</font> </p>";
?>


<?php
 $tomorrow  = mktime (0,0,0,date("m"), date("d")+1, date("Y"));
 $lastmonth = mktime (0,0,0,date("m")-1, date("d"), date("Y"));
 $nextyear  = mktime (0,0,0,date("m"), date("d"), date("Y")+1);

 // Now you can use date values with date() function
 echo "Tomorrow is " . date("m/d/Y", $tomorrow) . "</br>";
 echo "Before one month it was " . date("m/d/Y", $lastmonth) . "</br>";
 echo "After a year it will be " . date("m/d/Y", $nextyear) . "</br>";

 $random = rand(0, 100);
 echo $random
   ?>

 <?php
 // Get image dimensions
 $myimg = "https://azizaizmargari.files.wordpress.com/2011/01/black-in-white-big.jpg"; // your image file
 list($width, $height, $type, $attr) = getimagesize($myimg);
 echo "Image size: $width x $height";
 echo "<br /><img src=\"$myimg\" $attr />";
?>

</body>
</html>