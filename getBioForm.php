<?php
function getBioForm($text)
{
  $form = '<form method="post">';
  $form .='<p><textarea name="biography" >';
  $form .= $text;
  $form .= "</textarea></p>";
  $form .= '<p>
    <button class="w3-button w3-light-grey w3-padding-large" type="submit" name="save">
       Save
    </button>
  </p>';
  return $form;
}
 ?>
