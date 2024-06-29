<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Price Calculator</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="style.css"/>
    <?php include_once('header.php');?>
<?php 
if (isset($_POST['submit'])){
    $buyer=$_POST['buyer'];
    $address=$_POST['address'];
    $prod=$_POST['product'];
    $grade= isset($_POST['grade']) ? $_POST['grade'] : ""; // Check if grade is set
    $quantity=$_POST['qty'];
    $unit=$_POST['unit'];

    // Perform calculations for Cement
    $cement_price = 0;
    $gst = 0;
    $total_cement = 0;
    $steel_price = 0;
    $gst_steel= 0;
    $total_steel = 0; 
    $rsand_price = 0;
    $gst_rsand = 0;
    $total_rsand = 0;
    $psand_price = 0;
    $gst_psand = 0;
    $total_psand = 0;
    $msand_price =0;
    $gst_msand = 0;
    $total_msand = 0;
    $flyash_price = 0;
    $gst_flyash = 0;
    $total_flyash = 0;
    $dust_price = 0;
    $gst_dust = 0;
    $total_dust = 0;
    $agg6812mm_price = 0;
    $gst_agg6812mm = 0;
    $total_agg6812mm= 0;
    $agg20mm_price = 0;
    $gst_agg20mm = 0;
    $total_agg20mm= 0;
    $solid4_price = 0;
    $gst_solid4 = 0;
    $total_solid4 = 0;
    $solid6_price = 0;
    $gst_solid6 = 0;
    $total_solid6 = 0;
    $solid8_price = 0;
    $gst_solid8 = 0;
    $total_solid8 =0;
    $brick_price = 0;
    $gst_brick = 0;
    $total_brick = 0; 
    $paver_price = 0;
    $gst_paver = 0;
    $total_paver = 0;
    $rmc_price = 0;
    $gst_rmc = 0;
    $total_rmc = 0;
    if($prod == "Cement"){
        $cement_price = $quantity * 380; // Assuming 365 is the price per unit
        $gst = $cement_price * 28 / 100;
        $total_cement = $cement_price + $gst;
    }
    
    elseif($prod == "River Sand"){
        $rsand_price = $quantity * 150;
        $gst_rsand = $rsand_price * 5/100;
        $total_rsand = $rsand_price + $gst_rsand;
    }
    elseif($prod == "P-Sand"){
        $psand_price = $quantity * 1300 ;
        $gst_psand = $psand_price * 5/100;
        $total_psand = $psand_price + $gst_psand;
    }
    elseif($prod == "M-Sand"){
        $msand_price = $quantity * 1100;
        $gst_msand = $msand_price *5/100;
        $total_msand = $msand_price + $gst_msand;
    }
    elseif($prod == "Flyash"){
        $flyash_price = $quantity * 650 ;
        $gst_flyash = $flyash_price * 5/100;
        $total_flyash = $flyash_price + $gst_flyash;
    }
    elseif($prod == "Dust"){
        $dust_price = $quantity * 650;
        $gst_dust = $dust_price * 5/100;
        $total_dust = $dust_price + $gst_dust;
    }
    elseif($prod == "6mm Aggregate" || $prod == "8mm Aggregate" || $prod == "12mm Aggregate" || $prod == "20mm Aggregate"){
        $agg6812mm_price = $quantity * 950;
        $gst_agg6812mm = $agg6812mm_price *5/100;
        $total_agg6812mm= $agg6812mm_price + $gst_agg6812mm;
        
        $agg20mm_price = $quantity * 950;
        $gst_agg20mm = $agg20mm_price * 5/100;
        $total_agg20mm= $agg20mm_price + $gst_agg20mm;
    }

     elseif($prod == "4 inch Solid Block"){
         $solid4_price = $quantity * 35.15625;
         $gst_solid4 = $solid4_price * 28/100;
         $total_solid4 = $solid4_price + $gst_solid4;
        
    }
     elseif($prod == "6 inch Solid Block"){
         $solid6_price = $quantity * 52;
         $gst_solid6 = $solid6_price * 28/100;
         $total_solid6 = $solid6_price + $gst_solid6;
    }
     elseif($prod == "8 inch Solid Block"){
         $solid8_price = $quantity * 62;
         $gst_solid8 = $solid8_price * 28/100;
         $total_solid8 = $solid8_price + $gst_solid8;
    }
    elseif($prod == "Red Brick"){
        $brick_price = $quantity * 9.50;
        $gst_brick = $brick_price * 12/100;
        $total_brick = $brick_price + $gst_brick;        
    }
    elseif($prod == "Paver Block"){
        $paver_price = $quantity * 13.02;
        $gst_paver = $paver_price * 28/100;
        $total_paver = $paver_price + $gst_paver;        
    }
    elseif($prod == "RMC Mix" & $grade== "M5"){
        $rmc_price = $quantity * 3767.65;
        $gst_rmc = $rmc_price * 18/100;
        $total_rmc = $rmc_price + $gst_rmc;        
    }
    elseif($prod == "RMC Mix" & $grade== "M7.5"){
        $rmc_price = $quantity * 4017;
        $gst_rmc = $rmc_price * 18/100;
        $total_rmc = $rmc_price + $gst_rmc;        
    }
    elseif($prod == "RMC Mix" & $grade== "M10"){
        $rmc_price = $quantity * 4381;
        $gst_rmc = $rmc_price * 18/100;
        $total_rmc = $rmc_price + $gst_rmc;        
    }
    elseif($prod == "RMC Mix" & $grade== "M15"){
        $rmc_price = $quantity * 5126;
        $gst_rmc = $rmc_price * 18/100;
        $total_rmc = $rmc_price + $gst_rmc;        
    }
    elseif($prod == "RMC Mix" & $grade== "M20"){
        $rmc_price = $quantity * 5779;
        $gst_rmc = $rmc_price * 18/100;
        $total_rmc = $rmc_price + $gst_rmc;        
    }
    elseif($prod == "RMC Mix" & $grade== "M25"){
        $rmc_price = $quantity * 6911;
        $gst_rmc = $rmc_price * 18/100;
        $total_rmc = $rmc_price + $gst_rmc;        
    }
    elseif($prod == "RMC Mix" & $grade== "M30"){
        $rmc_price = $quantity * 7279;
        $gst_rmc = $rmc_price * 18/100;
        $total_rmc = $rmc_price + $gst_rmc;        
    }
    elseif($prod == "Steel" & $grade== "8"){
        $steel_price = $quantity * 61500;
        $gst_steel=$steel_price * 18/100;
        $total_steel = $steel_price + $gst_steel;
    }
    elseif($prod == "Steel" & $grade== "10"){
        $steel_price = $quantity * 60500;
        $gst_steel=$steel_price * 18/100;
        $total_steel = $steel_price + $gst_steel;
    }
    elseif($prod == "Steel" &  $grade == "12" || $grade == "16" || $grade == "20" || $grade == "25" || $grade == "28" || $grade == "32"  ){
        $steel_price = $quantity * 60000;
        $gst_steel=$steel_price * 18/100;
        $total_steel = $steel_price + $gst_steel;
    }  
        
       
    function convertToINR($number) {
    // Define Indian numbering system separators
    $separator = ',';
    $decimal_separator = '.';
    
    $formatted_number = number_format($number, 0, $decimal_separator, '');
    
    // Split the number into integer and decimal parts
    $parts = explode($decimal_separator, $formatted_number);
    $integer_part = $parts[0];
    $decimal_part = isset($parts[1]) ? $decimal_separator . $parts[1] : '';
    
    // Convert to Indian numbering system
    $indian_format = '';
    
    // Handle crore (10,00,00,000)
    if (strlen($integer_part) > 7) {
        $crore = substr($integer_part, 0, -7);
        $indian_format .= $crore ."" . $separator;
        $integer_part = substr($integer_part, -7);
    }
    
    // Handle lakh (1,00,00,000)
    if (strlen($integer_part) > 5) {
        $lakh = substr($integer_part, 0, -5);
        $indian_format .= $lakh . '' . $separator;
        $integer_part = substr($integer_part, -5);
    }

    // Handle thousand (1,000)
    if (strlen($integer_part) > 3) {
        $thousand = substr($integer_part, 0, -3);
        $indian_format .= $thousand . '' . $separator;
        $integer_part = substr($integer_part, -3);
    }

    // Remaining part (hundreds)
    $indian_format .= $integer_part;

    // Combine the formatted parts
    $formatted_integer_part = rtrim($indian_format, $separator);

    return   $formatted_integer_part . $decimal_part;


}             

?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Price Calculator</title>
    <link rel="stylesheet" href="style.css"/>
    <style>
 /* Styles for the calculation table */
      
    </style>
</head>
<body>
    <div class="container mt-4">
    <div class="calculation-card">
        <div class="table-responsive">
            <table class="table table-bordered">
        <tr>
            <td><strong>Name Of The Buyer</strong></td>
            <td><?php echo $buyer;?></td>
        </tr>
        <tr>
            <td><strong>Address Of The Buyer</strong></td>
            <td><?php echo $address; ?></td>
        </tr>
        <tr>
            <td><strong>Product</strong></td>
            <td><?php echo $prod;?></td>
        </tr>
         <tr>
        <?php if($prod== "RMC Mix" && $grade != ""){ ?>
            <td><strong>Grade</strong></td>
            <td><?php echo $grade; ?></td>
        <?php }  elseif($prod=="Steel" && $grade != ""){?>
            <td><strong>Size</strong></td>
            <td><?php echo $grade."mm"; ?></td>
      <?php   } ?>
        </tr>
        <tr>
            <td><strong>Quantity </strong></td>
            <td><?php echo $quantity." ".$unit;?></td>
        </tr>
    </table>
        </div>
        <?php if($prod == "Cement"){ ?>
             <div class="table-responsive">
            <table class="table table-bordered">
                <tr>
                    <td colspan="3" ><strong>Calculation for Cement:</strong></td>
                </tr>
                <tr>
                    <td>Subtotal</td>
                    <td>Rs. <?php echo convertToINR($cement_price); ?></td>
                </tr>
                <tr>
                    <td>GST @ 28%</td>
                    <td>Rs.<?php echo  convertToINR($gst); ?></td>
                </tr>
                <tr>
                    <td><strong>Total Without Transportation and Labour charges</strong></td>
                    <td><strong>Rs.<?php echo  convertToINR(round($total_cement)); ?></strong></td>
                </tr>
<!--                <tr>
                    <td><strong>Transport Charges</strong></td>
                    <td><strong>Rs.30 per km</strong></td>
                </tr>
                 <tr>
                    <td><strong>Labour Charges(Loading & UnLoading)</strong></td>
                    <td><strong>Rs.1000 per load</strong></td>
                </tr>-->
            </table>
            </div>
                <div class="calculation-card1">
                    <h4>Note:</h4>
                     <p class="text-info">* An additional Rs. 30 per km will be charged for transportation.</p>
                     <p class="text-info">* An extra Rs. 1000 per load will be added for labor charges (loading & unloading).</p>
                </div>
        <?php } elseif ($prod =="Steel") { ?>
          <div class="table-responsive">
            <table class="table table-bordered">
            <tr>
                <td colspan="2"><strong>Calculation for Steel:</strong></td>
            </tr>
            <tr>
                <td>Subtotal</td>
                <td>Rs. <?php echo  convertToINR($steel_price); ?></td>
            </tr>
            <tr>
                <td>GST @ 18%</td>
                <td>Rs.<?php echo  convertToINR($gst_steel); ?></td>
            </tr>
            <tr>
               <td><strong>Total without Transportation and Labour Charges</strong></td>
                    <td><strong>Rs.<?php echo  convertToINR(round($total_steel)); ?></strong></td>
            </tr>
        </table>
    </div>            
         <div class="calculation-card1">
                    <h4>Note:</h4>
                     <p class="text-info">* An additional Rs. 30 per km will be charged for transportation.</p>
                     <p class="text-info">* An extra Rs. 1000 per load will be added for labor charges (loading & unloading).</p>
                </div>
        <?php } elseif ($prod =="River Sand") {?>
        
              <div class="table-responsive">
            <table class="table table-bordered">
            <tr>
                <td colspan="2" ><strong>Calculation for River Sand:</strong></td>
            </tr>
            <tr>
                <td>Subtotal</td>
                <td>Rs. <?php echo convertToINR($rsand_price); ?></td>
            </tr>
            <tr>
                <td>GST @ 5%</td>
                <td>Rs.<?php echo convertToINR($gst_rsand); ?></td>
            </tr>
            <tr>
                <td><strong>Total without Transportation and Labour Charges</strong></td>
                <td><strong>Rs.<?php echo convertToINR(round($total_rsand)); ?></strong></td>
            </tr>
        </table>
    </div>
           <div class="calculation-card1">
                    <h4>Note:</h4>
                     <p class="text-info">* An additional Rs. 30 per km will be charged for transportation.</p>
                     <p class="text-info">* An extra Rs. 1000 per load will be added for labor charges (loading & unloading).</p>
                </div>
            
        
        <?php } elseif ($prod =="P-Sand") {?>
        <div class="table-responsive">
            <table class="table table-bordered">
            <tr>
                <td colspan="2" ><strong>Calculation for P-Sand:</strong></td>
            </tr>
            <tr>
                <td>Subtotal</td>
                <td>Rs. <?php echo convertToINR($psand_price); ?></td>
            </tr>
            <tr>
                <td>GST @ 5% </td>
                <td>Rs.<?php echo convertToINR($gst_psand); ?></td>
            </tr>
            <tr>
               <td><strong>Total without Transportation and Labour Charges</strong></td>
                    <td><strong>Rs.<?php echo convertToINR(round($total_psand)); ?></strong></td>
            </tr>
        </table>
    </div>
         <div class="calculation-card1">
                    <h4>Note:</h4>
                     <p class="text-info">* An additional Rs. 30 per km will be charged for transportation.</p>
                     <p class="text-info">* An extra Rs. 1000 per load will be added for labor charges (loading & unloading).</p>
                </div>
        
         <?php } elseif ($prod =="M-Sand") {?>
         <div class="table-responsive">
            <table class="table table-bordered">
            <tr>
                <td colspan="2" ><strong>Calculation for M-Sand:</strong></td>
            </tr>
            <tr>
                <td>Subtotal</td>
                <td>Rs. <?php echo convertToINR($msand_price); ?></td>
            </tr>
            <tr>
                <td>GST @ 5% </td>
                <td>Rs.<?php echo convertToINR($gst_msand); ?></td>
            </tr>
            <tr>
                <td><strong>Total without Transportation and Labour Charges</strong></td>
                <td><strong>Rs.<?php echo convertToINR(round($total_msand)); ?></strong></td>
            </tr>
        </table>
    </div>
         <div class="calculation-card1">
                    <h4>Note:</h4>
                     <p class="text-info">* An additional Rs. 30 per km will be charged for transportation.</p>
                     <p class="text-info">* An extra Rs. 1000 per load will be added for labor charges (loading & unloading).</p>
                </div>
         <?php } elseif ($prod =="Flyash") {?>
       <div class="table-responsive">
            <table class="table table-bordered">
            <tr>
                <td colspan="2" ><strong>Calculation for Flyash:</strong></td>
            </tr>
            <tr>
                <td>Subtotal</td>
                <td>Rs. <?php echo convertToINR($flyash_price); ?></td>
            </tr>
            <tr>
                <td>GST @ 5% </td>
                <td>Rs.<?php echo convertToINR($gst_flyash); ?></td>
            </tr>
            <tr>
               <td><strong>Total without Transportation and Labour Charges</strong></td>
                    <td><strong>Rs.<?php echo convertToINR(round($total_flyash)); ?></strong></td>
            </tr>
        </table>
    </div>
         <div class="calculation-card1">
                    <h4>Note:</h4>
                     <p class="text-info">* An additional Rs. 30 per km will be charged for transportation.</p>
                     <p class="text-info">* An extra Rs. 1000 per load will be added for labor charges (loading & unloading).</p>
                </div>
         <?php } elseif ($prod =="Dust") {?>
      <div class="table-responsive">
            <table class="table table-bordered">
            <tr>
               <td colspan="2" ><strong>Calculation for Dust:</strong></td>
            </tr>
            <tr>
                <td>Subtotal</td>
                <td>Rs. <?php echo convertToINR($dust_price); ?></td>
            </tr>
            <tr>
                <td>GST @ 5%</td>
                <td>Rs.<?php echo convertToINR($gst_dust); ?></td>
            </tr>
            <tr>
                <td><strong>Total without Transportation and Labour Charges</strong></td>
                    <td><strong>Rs.<?php echo convertToINR(round($total_dust)); ?></strong></td>
            </tr>
        </table>
    </div>
         <div class="calculation-card1">
                    <h4>Note:</h4>
                     <p class="text-info">* An additional Rs. 30 per km will be charged for transportation.</p>
                     <p class="text-info">* An extra Rs. 1000 per load will be added for labor charges (loading & unloading).</p>
                </div>
        <?php } elseif ($prod == "6mm Aggregate" || $prod == "8mm Aggregate" || $prod == "12mm Aggregate") {?>
        <div class="table-responsive">
            <table class="table table-bordered">
            <tr>
                <td colspan="2" ><strong>Calculation for Aggregate:</strong></td>
            </tr>
            <tr>
                <td>Subtotal</td>
                <td>Rs. <?php echo convertToINR($agg6812mm_price); ?></td>
            </tr>
            <tr>
                <td>GST @ 5% </td>
                <td>Rs.<?php echo convertToINR($gst_agg6812mm); ?></td>
            </tr>
            <tr>
               <td><strong>Total without Transportation and Labour Charges</strong></td>
                    <td><strong>Rs.<?php echo convertToINR(round($total_agg6812mm)); ?></strong></td>
            </tr>
        </table>
    </div>
         <div class="calculation-card1">
                    <h4>Note:</h4>
                     <p class="text-info">* An additional Rs. 30 per km will be charged for transportation.</p>
                     <p class="text-info">* An extra Rs. 1000 per load will be added for labor charges (loading & unloading).</p>
                </div>
         <?php } elseif ($prod =="20mm Aggregate") {?>
       <div class="table-responsive">
            <table class="table table-bordered">
            <tr>
                <td colspan="2" ><strong>Calculation for 20mm Aggregate:</strong></td>
            </tr>
            <tr>
                <td>Subtotal</td>
                <td>Rs. <?php echo convertToINR($agg20mm_price); ?></td>
            </tr>
            <tr>
                <td>GST @ 5% </td>
                <td>Rs. <?php echo convertToINR($gst_agg20mm); ?></td>
            </tr>
            <tr>
                <td><strong>Total without Transportation and Labour Charges</strong></td>
                    <td><strong>Rs.<?php echo convertToINR(round($total_agg20mm)); ?></strong></td>
            </tr>
        </table>
    </div>
        <div class="calculation-card1">
                    <h4>Note:</h4>
                     <p class="text-info">* An additional Rs. 30 per km will be charged for transportation.</p>
                     <p class="text-info">* An extra Rs. 1000 per load will be added for labor charges (loading & unloading).</p>
                </div>
         <?php } elseif ($prod =="4 inch Solid Block") {?>
      <div class="table-responsive">
            <table class="table table-bordered">
            <tr>
               <td colspan="2" ><strong>Calculation for 4 Inch Solid Block:</strong></td>
            </tr>
            <tr>
                <td>Subtotal</td>
                <td>Rs. <?php echo convertToINR($solid4_price); ?></td>
            </tr>
            <tr>
                <td>GST @ 28%</td>
                <td>Rs. <?php echo convertToINR($gst_solid4); ?></td>
            </tr>
            <tr>
                <td><strong>Total without Transportation and Labour Charges</strong></td>
                    <td><strong>Rs.<?php echo convertToINR(round($total_solid4)); ?></strong></td>
            </tr>
        </table>
    </div>
        <div class="calculation-card1">
                    <h4>Note:</h4>
                    <p class="text-info">* Each load of 4" solid blocks contains 850 units</p>
                    <p class="text-info">* An additional Rs. 70 per km will be charged for transportation.</p>
                    <p class="text-info">* An extra Rs. 1000 per load will be added for labor charges (loading & unloading).</p>
                </div>
        <?php } elseif ($prod =="6 inch Solid Block") {?>
        <div class="table-responsive">
            <table class="table table-bordered">
            <tr>
                <td colspan="2" ><strong>Calculation for 6 Inch Solid Block:</strong></td>
            </tr>
            <tr>
                <td>Subtotal</td>
                <td>Rs. <?php echo convertToINR($solid6_price); ?></td>
            </tr>
            <tr>
                <td>GST @ 28% </td>
                <td>Rs. <?php echo convertToINR($gst_solid6); ?></td>
            </tr>
            <tr>
                <td><strong>Total without Transportation and Labour Charges</strong></td>
                    <td><strong>Rs.<?php echo convertToINR(round($total_solid6)); ?></strong></td>
            </tr>
        </table>
    </div>
        <div class="calculation-card1">
                    <h4>Note:</h4>
                     <p class="text-info">* Each load of 6" solid blocks contains 500 units</p>
                     <p class="text-info">* An additional Rs. 70 per km will be charged for transportation.</p>
                     <p class="text-info">* An extra Rs. 1000 per load will be added for labor charges (loading & unloading).</p>
                </div>
        <?php } elseif ($prod =="8 inch Solid Block") {?>
       <div class="table-responsive">
            <table class="table table-bordered">
            <tr>
               <td colspan="2" ><strong>Calculation for 8 Inch Solid Block:</strong></td>
            </tr>
            <tr>
                <td>Subtotal</td>
                <td>Rs. <?php echo convertToINR($solid8_price); ?></td>
            </tr>
            <tr>
                <td>GST </td>
                <td>Rs. <?php echo convertToINR($gst_solid8); ?></td>
            </tr>
            <tr>
                <td><strong>Total without Transportation and Labour Charges</strong></td>
                    <td><strong>Rs.<?php echo convertToINR(round($total_solid8)); ?></strong></td>
            </tr>
        </table>
    </div>
        <div class="calculation-card1">
                    <h4>Note:</h4>
                     <p class="text-info">* Each load of 8" solid blocks contains 450 units</p>
                     <p class="text-info">* An additional Rs. 70 per km will be charged for transportation.</p>
                     <p class="text-info">* An extra Rs. 1000 per load will be added for labor charges (loading & unloading).</p>
        </div>
        <?php } elseif ($prod =="Red Brick") {?>
            <div class="table-responsive">
            <table class="table table-bordered">
            <tr>
               <td colspan="2" ><strong>Calculation for Red Bricks:</strong></td>
            </tr>
            <tr>
                <td>Subtotal</td>
                <td>Rs. <?php echo convertToINR($brick_price); ?></td>
            </tr>
            <tr>
                <td>GST </td>
                <td>Rs. <?php echo convertToINR($gst_brick); ?></td>
            </tr>
            <tr>
                <td><strong>Total without Transportation and Labour Charges</strong></td>
                <td><strong>Rs.<?php echo convertToINR(round($total_brick)); ?></strong></td>
            </tr>
        </table>
    </div>
        <div class="calculation-card1">
                    <h4>Note:</h4>
                     <p class="text-info">* Each load of Red Brick contains 3000 units</p>
                     <p class="text-info">* An additional Rs. 36 per km will be charged for transportation.</p>
                     <p class="text-info">* An extra Rs. 1500 per load will be added for labor charges (loading & unloading).</p>
                </div>
        <?php } elseif ($prod =="Paver Block") {?>
            <div class="table-responsive">
            <table class="table table-bordered">
            <tr>
               <td colspan="2" ><strong>Calculation for Paver Block:</strong></td>
            </tr>
            <tr>
                <td>Subtotal</td>
                <td>Rs. <?php echo convertToINR($paver_price); ?></td>
            </tr>
            <tr>
                <td>GST </td>
                <td>Rs. <?php echo convertToINR($gst_paver); ?></td>
            </tr>
            <tr>
                <td><strong>Total without Transportation and Labour Charges</strong></td>
                    <td><strong>Rs.<?php echo convertToINR(round($total_paver)); ?></strong></td>
            </tr>
        </table>
    </div>
         <div class="calculation-card1">
                    <h4>Note:</h4>
                     <p class="text-info">* Each load of Paver Block contains 1500 units</p>
                     <p class="text-info">* An additional Rs. 30 per km will be charged for transportation.</p>
                     <p class="text-info">* An extra Rs. 1000 per load will be added for labor charges (loading & unloading).</p>
                </div>
        
         <?php } elseif ($prod =="RMC Mix") {?>
            <div class="table-responsive">
            <table class="table table-bordered">
            <tr>
                <td colspan="2" ><strong>Calculation for RMC Mix:</strong></td>
            </tr>
            <tr>
                <td>Subtotal</td>
                <td>Rs. <?php echo convertToINR($rmc_price); ?></td>
            </tr>
            <tr>
                <td>GST </td>
                <td>Rs. <?php echo convertToINR($gst_rmc); ?></td>
            </tr>
            <tr>
                <td><strong>Total without Transportation and Labour Charges</strong></td>
                    <td><strong>Rs.<?php echo convertToINR(round($total_rmc)); ?></strong></td>
            </tr>
        </table>
    </div>
        <div class="calculation-card1">
                    <h4>Note:</h4>
                     <p class="text-info">* An additional Rs. 117 per km will be charged for transportation.</p>
                     <p class="text-info">* Minimum order quantity 6 metric cube.</p>
                     <p class="text-info">* The price per cubic meter (m3) of custom-designed RMC may vary</p>
                </div>
         <?php } ?>
  
    </div>
    </div>
    
    <?php } ?>
    <button> <a href="index.php">New calculation</a></button>
    <br>
    <footer>
        <?php include_once('footer.php'); ?>
    </footer>
</body>
</html>

