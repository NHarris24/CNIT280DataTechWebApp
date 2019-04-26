<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>


<table>
  <tr>
    <th>ID</th>
    <th>Product</th>
    <th>Stock Level</th>
  </tr>

    <?php

    $conn = mysqli_connect("localhost:33060", "root", ,"datatech")
    if ($conn-> connect_error) {
      die("connection failed:". $conn-> connect_error);
    }
    $sql = "SELECT inventory_id, product_name, current_stock FROM inventory";
    $result = $conn-> query($sql);

    if ($result-> num_rows > 0) {
      while ($row - $result-> fetch_assoc()){
        echo "<tr><td>".$row["product_id"].</td><td>.$row["product_name"]."</td><td>".$row["current_stock"]."</td></tr>";
      }
      echo "</table>";
    }
    else {
      echo "0 result";
    }

    $conn-> close(); 
     ?>
</table>
  </body>
</html>
