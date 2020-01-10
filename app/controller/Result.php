<div class="tablerow">

<table>
    <tr>
      <th></th>
      <th>Policy</th>
      <?php
        for ($i=0; $i < $instalments;) { 
          
          $i += 1;
          echo "<th>".$i." Instalment</th>";
        }
      ?>
    </tr>
    <tr>
      <td>Value</td>
      <td><?php echo number_format($estimated_value,2); ?></td>
      <?php
        for ($i=0; $i < $instalments;) { 
          
          $i += 1;
          echo "<td></td>";
        }
      ?>
    </tr> 
    <tr>
      <td>Base Premium (11%)</td>
      <td><?php echo number_format($base_price,2); ?></td>

      <?php
        $new_base_price =  $base_price / $instalments;
        for ($i=0; $i < $instalments;) { 
          
          $i += 1;

          echo "<td>".number_format($new_base_price,2)."</td>";
        }

        $total_cost_instalment += $new_base_price;
      ?>
    </tr>
    <tr>
      <td>Commission (17%)</td>
      <td><?php echo number_format($commission,2); ?></td>
      <?php

        $new_commission = $result->percentage($new_base_price,$_comiss);

        for ($i=0; $i < $instalments;) { 
          
          $i += 1;
          echo "<td>".number_format($new_commission,2)."</td>";
        }

        $total_cost_instalment += $new_commission;
      ?>
    </tr>
    <tr>
      <td>Tax</td>
      <td><?php echo number_format($get_tax,2); ?></td>
      <?php
        $new_tax = $result->percentage($new_base_price,$_tax);
        for ($i=0; $i < $instalments;) { 
          
          $i += 1;
          echo "<td>".number_format($new_tax,2)."</td>";
        }

        $total_cost_instalment += $new_tax;
      ?>
    </tr>
    <tr>
      <td>Total Cost</td>
      <td><?php echo number_format($total_cost,2); ?></td>
      <?php
        for ($i=0; $i < $instalments;) { 
          
          $i += 1;
          echo "<td>".number_format($total_cost_instalment,2)."</td>";
        }
      ?>
    </tr>
  </table>

<hr>
  <a href="index.php">Refresh</a>


</div>