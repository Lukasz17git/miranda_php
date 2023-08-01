<?php
require_once "utils.php";

$servername = $_ENV["DB_HOST"];
$port = $_ENV["DB_PORT"];
$username = $_ENV["DB_USERNAME"];
$password = $_ENV["DB_PASSWORD"];
$dbname = $_ENV["DB_DATABASE"];

$mysqli = new mysqli($servername, $username, $password, $dbname, $port);

if ($mysqli->connect_error) {
   die("Connection failed: " . $mysqli->connect_error);
}

function fetchRooms($query)
{
   global $mysqli;

   $result = $mysqli->query($query);

   if ($result->num_rows > 0) {
      $rooms = $result->fetch_all(MYSQLI_ASSOC);
   } else {
      $rooms = [];
   }

   return $rooms;
}

function fetchAllRooms()
{
   return fetchRooms("SELECT * FROM rooms");
}

function fetchAllRoomsWithOffer()
{
   return fetchRooms("SELECT * FROM rooms WHERE discount IS NOT NULL AND discount > 0");
}

function fetchRoomById($id)
{
   // aqui habra mysql injection
   return fetchRooms("SELECT * FROM rooms WHERE id = '$id'")['0'];
}

function createNewReview($review)
{
   global $mysqli;

   $sqlData = generateSqlKeysAndValues($review);
   $sqlKeys = $sqlData['sqlKeys'];
   $sqlValues = $sqlData['sqlValues'];

   $stmt = $mysqli->prepare("INSERT INTO reviews $sqlKeys VALUES $sqlValues");

   // Bind values to the prepared statement
   $bindTypes = str_repeat('s', count($review)); // Assuming all values are strings
   $stmt->bind_param($bindTypes, ...array_values($review));

   // Execute the SQL statement
   if ($stmt->execute()) {
      // Insertion was successful
      return true;
   } else {
      // Insertion failed
      return false;
   }
}
