<?php 
  $fullname = $_POST['fname'];
  $email = $_POST['email'];
  $passwd = $_POST['passwd'];
  $enc_pass = md5($passwd);

  echo "your full name: ". $fullname. "<br>";
  echo "your full email: ". $email. "<br>";
  echo "your full password: ". $passwd. "<br>";
  echo "your password enc: ". $enc_pass. "<br>";
?>