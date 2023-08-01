<?php


function textCheck($text, $errorNameField, $maxLength = 500, $required = true)
{
   $newError = $errorNameField . ' ';

   if (!$text && !$required) {
      return;
   }

   if (!$text) {
      throw new Exception($newError . 'missing');
   }

   if (!is_string($text)) {
      throw new Exception($newError . 'invalid');
   }

   $regex = '/^[a-zA-Z0-9\s.,!?()\-\'"]*$/u';
   if (!preg_match($regex, $text)) {
      throw new Exception($newError . 'invalid');
   }

   if (strlen($text) > $maxLength) {
      throw new Exception($newError . 'too long');
   }
}
