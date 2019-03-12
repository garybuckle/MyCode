<?php

$family = array("gazza","heike","colleen","alicia");

foreach ($family as $key => $value) {
    echo "Array item ".$key." is ".$value."<br>";

    $family[$key] = $value."buckle";
    }

    for ($i=0; $i < sizeof($family); $i++) {
      echo "Family names ".$family[$i]."<br>";
    }
 ?>
