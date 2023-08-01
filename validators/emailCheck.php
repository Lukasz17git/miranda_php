<?php

function emailCheck($email, $errorNameField)
{
   $newError = $errorNameField . ' ';

   if (!$email) {
      throw new Exception($newError . 'missing');
   }

   if (!is_string($email)) {
      throw new Exception($newError . 'invalid');
   }

   //php built-in validator for email
   if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
      throw new Exception($newError . 'invalid');
   }

   if (strlen($email) < 5) {
      throw new Exception($newError . 'too short');
   }

   if (strlen($email) > 60) {
      throw new Exception($newError . 'too long');
   }
}
