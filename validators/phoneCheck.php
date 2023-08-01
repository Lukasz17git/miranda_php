<?php

function phoneCheck($phone, $errorNameField)
{
   $newError = $errorNameField . ' ';

   if (!$phone) {
      throw new Exception($newError . 'missing');
   }

   if (!is_string($phone)) {
      throw new Exception($newError . 'invalid');
   }

   $regex = '/^[0-9 -]+$/i';
   if (!preg_match($regex, $phone)) {
      throw new Exception($newError . 'invalid');
   }

   if (strlen($phone) < 5) {
      throw new Exception($newError . 'too short');
   }

   if (strlen($phone) > 20) {
      throw new Exception($newError . 'too long');
   }
}
