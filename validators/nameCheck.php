<?php

function nameCheck($name, $errorNameField, $maxLength = 60, $required = true)
{
   $newError = $errorNameField . ' ';

   if (!$name && !$required) {
      return;
   }

   if (!$name) {
      throw new Exception($newError . 'missing');
   }

   if (!is_string($name)) {
      throw new Exception($newError . 'invalid');
   }

   $regex = '/^[a-zA-Z\s]+$/';
   if (!preg_match($regex, $name)) {
      throw new Exception($newError . 'invalid');
   }

   if (strlen($name) > $maxLength) {
      throw new Exception($newError . 'too long');
   }
}
