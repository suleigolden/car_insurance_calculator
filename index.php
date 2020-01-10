<?php
//use app\controller\CarInsurance;
require 'app\controller\CarInsurance.php';


if (isset($_GET["value"]) && isset($_GET["tax_percentage"]) && isset($_GET["numberOfIntalment"])) {

//assigning values to variables
$estimated_value = $_GET["value"];
$_tax = $_GET["tax_percentage"];
$instalments = $_GET["numberOfIntalment"];

$base = 11; //Base price of policy is 11% from entered car value, except every Friday 15-20 o’clock (user time) when it is 13%
$_comiss = 17; //Commission is added to base price (17%)

$result = new CarInsurance();

$base_price = $result->percentage($estimated_value,$base);

$commission = $result->percentage($base_price,$_comiss);

$get_tax = $result->percentage($base_price,$_tax);

$total_cost = $base_price + $commission + $get_tax;
$total_cost_instalment = 0;

 
}
  
?>
<!DOCTYPE html>
<html>
<head>
  <link rel="stylesheet" type="text/css" href="asset/css/style.css">
</head>
<body>



<div class="container">
  <form action="" name="calculateForm" onsubmit="return validateForm()">
    <div class="row">
      <div class="col-md-8">
        <h2>Car Insurance Calculator</h2>
        <div class="row">
          <div class="col-md">
            <label for="value">Estimated Value (EUR)</label>
            <input type="text" name="value" placeholder="Estimated value of the car" required>
          </div>
        </div>
        <div class="row">
          <div class="col-md">
             <label for="value">Tax percentage%</label>
            <input type="number" name="tax_percentage" placeholder="Tax percentage" required>
          </div>
        </div>
         <div class="row">
          <div class="col-md">
             <label for="value">Number of Instalments</label>
             <select name="numberOfIntalment" required>
               <?php

                    $max_instalment = 13;
                    $min_instalment  = 1;
                for ($min_instalment=1; $min_instalment < $max_instalment; $min_instalment++) { 
                  
                  if ($min_instalment == 1) {
                       echo '<option value="'.$min_instalment.'">'.$min_instalment.' Instalment</option>';
                  }else{
                     echo '<option value="'.$min_instalment.'">'.$min_instalment.' Instalments</option>';
                   }
                   
                }
               ?>
                  }
             </select>
          </div>
        </div>
        <div class="row">
          <div class="col-md">
            <input type="submit" value="Submit">
          </div>
        </div>
        <label id="errorMessage"></label>
      </div>
    </div>
  </form>

    <?php

      if (isset($_GET["value"]) && isset($_GET["tax_percentage"]) && isset($_GET["numberOfIntalment"])) {
          require 'app\controller\Result.php';
      }

    ?>

</div>

<script src="asset/js/app.js"></script>
</body>