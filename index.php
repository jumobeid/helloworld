<!DOCTYPE html>
<html>
<head>
<title>intro</title>
<style>
h1{
  text-align: center;
}
img{
  border-radius: 50px 50px 50px 50px;
  text-align: center;
}
</style>
</head>
<body>

  <h1>Jumana Obeid<h1>

  <img src="/images/jumana.jpg" alt="jumana"><br>

  <a href="http://www.w3schools.com/html/">Visit this HTML tutorial</a><br>
  <?php

   //this code is from http://stackoverflow.com/questions/5857033/displaying-random-text

   $messages = array(
       "love is stronger than justice",
       "beauty is in the eyes of the beholder",
       "Every thing you ever wanted is on the other side of fear"
   );

   echo $messages[rand(0, count($messages) - 1)];
  ?>


</body>
</html>
