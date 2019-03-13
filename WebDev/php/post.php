<?php
// print_r($_POST);
$userList = array ("Gary","Heike","Colleen","Alicia");
// print_r($userList);

if ($_POST) {
  // print_r ($_POST);
  foreach ($userList as $key => $value) {
    if ($value == $_POST['userName']) {
      echo "<h3>Bingo! You are on the guest list</h3>";
    }
  }
  echo "<h3>Enter A valid User</h3> ";
}




?>

<form  type ="text" method="post">
    <input name ="userName" type="text">
    <input type="submit">
</form>
