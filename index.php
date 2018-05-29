<?php
  if($_GET) {
    $i = 2;
    while($i < $_GET["number"]) {
      if($_GET["number"] % $i == 0) {
        echo $_GET["number"]." is divisible by $i";
      }
      $i++;
    }
  }
?>

<p>Please enter a whole number</p>

<form>
  <input name="number" type="number"/>
  <input type="submit" value="Go!" />
</form>