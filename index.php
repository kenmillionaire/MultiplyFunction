<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Multiply Function</title>
</head>
<body>
  
<?php
include 'header.php';
  ?>
  <p>Welcome!</p>

  <?php
 function multiply($num1, $num2, $num3 = 5) {
    $answer = $num1 * $num2 * $num3;
    return $answer;
  }
  echo multiply(9,4);
  echo "<br>";
  echo "<br>";



 
// if ($db_connect) {
//   echo "Connected";
// } else {
//   echo "Not Connected";
// }

  $insert_data = mysqli_query($db_connect, "INSERT INTO subscribers(name,age,gender) VALUES('Gideon', '23', 'M')");

if ($insert_data) {
  echo "Data saved succesfully";

}
  ?>


</body>
</html>