<?php

// // to remove my custom param
// if (strpos($page, '?') !== false) {
//    $page = substr($page, 0, strpos($page, '?') - 1);
// }

function parseUrl($url)
{
   $parsedUrl = parse_url($url);
   $path = isset($parsedUrl['path']) ? $parsedUrl['path'] : '';

   $segments = explode('/', trim($path, '/'));

   $path = $segments[0];
   $id = $segments[1];

   return [
      'path' => $path,
      'id' => $id,
   ];
}
