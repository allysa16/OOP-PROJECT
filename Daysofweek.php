<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
  if (isset($_POST['day'])) {
    $day = $_POST['day'];
    echo "<h1>Skwela sa  $day</h1>";
  }
?>

<form method="post">
  <input type="submit" name="day" value="Monday">
  <input type="submit" name="day" value="Tuesday">
  <input type="submit" name="day" value="Wednesday">
  <input type="submit" name="day" value="Thursday">
  <input type="submit" name="day" value="Friday">
</form>
</body>
</html>
