<?php
$t = date("Exam");

if ($t > "60") {
  echo "Passed!";
}
?>

<?php
$t = date("Exam");

if ($t > "60") {
  echo "Passed!";
} else {
  echo "Not Passed!";
}
?>


<?php
$t = date("Exam");

if ($t < "50") {
  echo "Not Passed!";
} elseif ($t > "50") {
  echo "Passed!";
} else {
  echo "Passed!";
}
?>