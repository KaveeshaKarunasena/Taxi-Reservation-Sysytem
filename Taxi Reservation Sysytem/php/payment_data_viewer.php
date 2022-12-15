<?php
// connection
require 'dbdata.php';

//  exexuter string goes here
$execute_string = "SELECT pay_id,pay_method,pay_account,pay_tour_fee,offer_id FROM payment";
$result = mysqli_query($conn,$execute_string);
//code goes here
if ($result -> num_rows > 0){
  //fetching data to the tabel

  while ($row = $result ->fetch_assoc()) {
    echo "<tr><td>".$row["pay_id"]."</td><td>".$row["pay_method"]
      ."</td><td>".$row["pay_account"] ."</td><td class='a_fee'>".$row["pay_tour_fee"]
       ."</td><td>".$row["offer_id"]."</td></tr>";

        }

      }else{
        echo '<script>alert("NO DATA FOUND IN THE PAYMENT")</script>';

      }
      $conn -> close();
      ?>
