<?php

try {
$db = new PDO("sqlite:".__DIR__."/database.db");
  $db -> setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (Exception $e) {
  echo "Unable to connect";
  echo $e -> getMessage();
  exit;
}

try {
  $results = $db -> query("SELECT title, category FROM Media");
  echo "Retrieved Results";
} catch (Exception $e) {
  echo "Unable to connect to database";
  exit;
}