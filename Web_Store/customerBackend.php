<?php

  $email = $_POST["email"];
  $pwd = $_POST["password"];
  $lion_q = $_POST["lion_q"];
  $lion_st = $lion_q * 599.99;
  $tiger_q = $_POST["tiger_q"];
  $tiger_st = $tiger_q * 499.99;
  $horse_q = $_POST["horse_q"];
  $horse_st = $horse_q * 2.99;
  $shipping = $_POST["shipping"];

  if ($shipping == "free7day")
  {
    $shipping = 0.00;
  }
  elseif ($shipping == "50overnight")
  {
    $shipping = 50.00;
  }
  else {
    $shipping = 5.00;
  }


  echo "Welcome, " . $email . "! <br> Your password is: " . $pwd . "!";
  echo "<table>";
  echo "<tr> <th> </th> <th> Quantity </th> <th> Cost Per Item </th> <th> Subtotal </th> </tr>";
  echo "<tr> <td> Lions </td> <td>" . $lion_q . "</td> <td> $599.99 </td> <td>$" . $lion_st . "</td></tr>";
  echo "<tr> <td> Tigers </td> <td>" . $tiger_q . "</td> <td> $499.99 </td> <td>$" . $tiger_st . "</td></tr>";
  echo "<tr> <td> Horses...? </td> <td>" . $horse_q . "</td> <td> $2.99 </td> <td>$" . $horse_st . "</td></tr>";
  echo "<tr> <td> Shipping </td> <td> Express              </td> <td> </td> <td>$" . $shipping . "</td></tr>";



  echo "</table>";

 ?>
