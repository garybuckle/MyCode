<?php
// $_GET['number'] = 0;

if ($_GET) {
  $i=2;
  $isPrime= true;
  $number = $_GET['number'];
      while ($i < $number) {
        if ($number % $i == 0) {
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

  echo $isPrime;
?>


<form>
<h1>Enter a  whole  number</h1>
  <input name="number">
  <input type="submit">
</form>
