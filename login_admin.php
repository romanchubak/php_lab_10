<?php
include_once "../configs/config_for_lab10.php";
include "setBio.php";
include "getBio.php";
include "getBioForm.php";
$mysqli = new mysqli($link,$username,$password,$dbname);
$bio = "<p>".getBio($mysqli)."</p>";
if(isset($_POST["login"]))
{
  $name = $_POST["n"];
  $pass = $_POST["password"];
  if($name != "" && ctype_alpha($name)&&
      $pass != "")
      {
        $sql = "SELECT id FROM `admiin`
                WHERE Login LIKE '".$name."'
                AND
                Password LIKE '".$pass."'";
        $result = $mysqli->query($sql);
        if($result->num_rows!=0)
        {
          $bio = getBioForm(getBio($mysqli));
        }

      }
}
if(isset($_POST["save"]))
{
  $text = $_POST["biography"];
  setBio($mysqli,$text);
  $bio = "<p>".getBio($mysqli)."</p>";
}
$mysqli->close();
?>
