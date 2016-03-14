<?php
if(isset($_POST['submit'])) {


  $answer1 = $_POST['answerOne'];
  $answer2 = $_POST['answerTwo'];
  $answer3 = $_POST['answerThree'];

  $score = 0;


  if ($answer1 == 'a') {
    $score++;
  }

 if ($answer2 == 'c') {
   $score++;
 }

 if ($answer3 == 'c') {
   $score++;
 }




  echo "You Scored  $score Out of 3";
}
?>
