<?php
  function setBio($mysqli,$text)
  {
    $mysqli->query("TRUNCATE biography");
    $words = explode(" ",$text);
    foreach ($words as $word) {
      $sql = "INSERT INTO `biography`(`word`) VALUES ('".$word."')";
      $mysqli->query($sql);
    }
  }


 ?>
