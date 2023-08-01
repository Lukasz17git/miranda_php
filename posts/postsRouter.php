<?php
require_once 'contactForm.php';

function handlePostRequest($url)
{
   switch ($url) {
      case '/contact_form':
         contactFormController();
         break;
      case '/booking':
         echo 'received new booking';
         break;
      default:
         echo 'error';
         break;
   }
}
