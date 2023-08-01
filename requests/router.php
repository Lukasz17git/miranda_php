<?php
require 'vendor/autoload.php';
require 'db/db.php';
require 'parser.php';

function handleGetRequest($url)
{
   global $blade;

   ['path' => $path, 'id' => $id] = parseUrl($url);

   switch ($path) {
      case '':
         $rooms = fetchAllRooms();
         echo $blade->run('index', ['rooms' => $rooms]);
         break;
      case 'about':
         echo $blade->run('about');
         break;
      case 'contact':
         echo $blade->run('contact');
         break;
      case 'details':
         $room = fetchRoomById($id);
         if ($room) {
            echo $blade->run('offersdetails', ['room' => $room]);
            break;
         }
         //here move to default
      case 'offers':
         $roomsWithOffers = fetchAllRoomsWithOffer();
         echo $blade->run('offers', ['offerRooms' => $roomsWithOffers]);
         break;
      case 'offersdetails':
         $room = fetchRoomById($id);
         if ($room) {
            echo $blade->run('offersdetails', ['room' => $room]);
            break;
         }
         //here move to default
      case 'rooms':
         $rooms = fetchAllRooms();
         echo $blade->run('rooms', ['rooms' => $rooms]);
         break;
      case 'roomslist':
         $rooms = fetchAllRooms();
         echo $blade->run('roomslist', ['rooms' => $rooms]);
         break;
      default:
         $rooms = fetchAllRooms();
         echo $blade->run('index', ['rooms' => $rooms]);
   }
}
