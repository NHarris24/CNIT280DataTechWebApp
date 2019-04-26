<?php
  include_once 'includes/includes.php';
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta http-equiv="refresh" content="3">
    <meta charset="utf-8">
      <link rel="stylesheet" href="Stylesheet.css">
    <title></title>
  </head>

  <body>
<?php
$sql = "SELECT * FROM inventory;";
$result = mysqli_query($conn, $sql);
$resutlCheck = mysqli_num_rows($result);

if ($resutlCheck > 0) {
  while ($row = mysqli_fetch_assoc()) {
    echo $row['4']."<br>"
  }
}
?>
  </body>
</html>
