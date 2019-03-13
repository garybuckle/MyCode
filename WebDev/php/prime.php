<?php
// $_GET['number'] = 0;
$number = $_GET['number'];
if(is_numeric($_GET['number']) && $_GET['number'] > 0 && $_GET['number'] == round($_GET['number'], 0)){
  $i=2;
  $isPrime= true;
      while ($i < $number) {
        if ($_GET['number'] % $i == 0) {
          // echo "Not Prime";
          $isPrime = false;
        }


        $i++;
      }
      if ($isPrime) {
        echo "<p>".$i. " is a prime number </p>";
      }
      else {
        echo "<p>".$i." is NOT a prime number </p>";
        }
  }

  else if ($_GET) {
    echo "<p>Please enter a positive whole number?</p>";
}



?>


<form>
<h1>Enter a  whole  number</h1>
  <input name="number">
  <input type="submit">
</form>
