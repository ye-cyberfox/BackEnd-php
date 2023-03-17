<?php
$subject = 'Person';
$firstName = 'Alexandra';
$text1 = "firstName : {$firstName}";
$message = $text1;
echo $message;
$headers = 'From: olsss0809@gmail.com';
mail('a.o.yelinson@student.khai.edu', $subject, $message, $headers);







