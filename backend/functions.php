<?php
 include 'handles/connection.php';



function check_input($data){
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}

function generate_unique_code(){
  $rand_num1 =rand(1,9);
  $result1 = $rand_num1*3;
  $rand_num2 = rand(10,99);
  $unique_code = sprintf('%02d%02d', $result1, $rand_num2);
  return $unique_code;
}

function sendEmailVerification($username,$to, $from, $verification_code){
  $subject = 'BooksRus - Email verification code';
  $message = 'Hello' . $username . ', you just created an account with BooksRus.\r\n';
  $message .= 'Your confirmation code is: ' . $verification_code;
}




?>