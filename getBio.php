<?php
function getBio($mysqli)
{
  $result = $mysqli->query("SELECT word from biography");
  $assoc = [];
  $text = "";
  while($row = $result->fetch_assoc())
  {
    $text .= " ".$row["word"];
  }
  return $text;
}

 ?>
