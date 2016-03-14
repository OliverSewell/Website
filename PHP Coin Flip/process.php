<?php


if(isset($_POST["headsortails"]) && isset($_POST['submit'])) {
$guess = $_POST['headsortails'];

  $rand = rand(1,2);

  if($rand%2==0) {
    $result = "heads";
  } else {
    $result = "tails";
 }
  echo 'Toss Result : <b>'.$result.'</b> </br>';


  if($result == $guess) {
    echo "you guessed correct";
  } else {
    echo "wrong";
  }

} else {
  echo "please select a value";
}


 ?>
 <!DOCTYPE html>
 <html>
     <head>
         <meta charset="utf-8">
         <title>Result</title>
     </head>
     <body>

       <a href="index.php"> Back </a>


    </body>
