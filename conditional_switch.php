<?php
$carfrom = "japan";

switch ($carfrom) {
  case "Honda":
    echo "From Japan!";
    break;
  case "Ford":
    echo "From USA!";
    break;
  case "BMW":
    echo "From Germany!";
    break;
  default:
    echo "Your car from?";
}
?>