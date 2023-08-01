<?php
require_once 'validators/emailCheck.php';
require_once 'validators/phoneCheck.php';
require_once 'validators/textCheck.php';
require_once 'validators/nameCheck.php';

use Ramsey\Uuid\Uuid;

function contactFormController()
{

   $fullname = $_POST['fullname'];
   $phone = $_POST['phone'];
   $email = $_POST['email'];
   $subject = $_POST['subject'];
   $description = $_POST['description'];

   try {
      emailCheck($email, 'email');
      nameCheck($fullname, 'fullname');
      phoneCheck($phone, 'phone');
      textCheck($subject, 'subject');
      textCheck($description, 'description');
   } catch (Exception $e) {
      http_response_code(400);
      echo $e->getMessage();
      return;
   }

   $fullnameParts = explode(' ', $fullname, 2);
   $sentAt = (new DateTime())->format('Y-m-d\TH:i:s.v\Z');
   $reviewData = [
      'id' => Uuid::uuid4()->toString(),
      'personName' => $fullnameParts[0],
      'personLastname' => $fullnameParts[1] ?? '',
      'personPhone' => $_POST['phone'],
      'personEmail' => $_POST['email'],
      'subject' => "Subject A",
      'comment' => $_POST['description'],
      'sentAt' => $sentAt
   ];

   // Call the createReviewInDB function
   if (createNewReview($reviewData)) {
      echo 'Review inserted successfully!';
   } else {
      http_response_code(400);
      echo 'Failed to insert review.';
   }
}
