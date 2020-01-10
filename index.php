<!DOCTYPE html>
<html>
<head>
  <link rel="stylesheet" type="text/css" href="asset/css/style.css">
</head>
<body>



<div class="container">
  <form action="">
    <div class="row">
      <div class="col-md-8">
        <h2>Car Insurance Calculator</h2>
        <div class="row">
          <div class="col-md">
            <label for="value">Value</label>
            <input type="text" name="value" placeholder="Estimated value of the car">
          </div>
        </div>
        <div class="row">
          <div class="col-md">
             <label for="value">Tax percentage%</label>
            <input type="number" name="tax_percentage" placeholder="Tax percentage">
          </div>
        </div>
         <div class="row">
          <div class="col-md">
             <label for="value">Number of Instalments</label>
             <select name="numberOfIntalment">
               <?php
                for ($i=1; $i < 13; $i++) { 
                  
                  if ($i == 1) {
                       echo '<option value="'.$i.'">'.$i.' Instalment</option>';
                  }else{
                     echo '<option value="'.$i.'">'.$i.' Instalments</option>';
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
      </div>
    </div>
  </form>
</div>

</body>