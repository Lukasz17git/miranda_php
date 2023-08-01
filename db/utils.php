<?php

function generateSqlKeysAndValues($data)
{
   $keys = implode(', ', array_keys($data));
   $values = implode(', ', array_fill(0, count($data), '?'));

   return [
      'sqlKeys' => "($keys)",
      'sqlValues' => "($values)",
   ];
}
