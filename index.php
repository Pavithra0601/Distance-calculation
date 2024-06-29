<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Price Calculator</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="style.css"/>
    <?php include_once('header.php');?>
    <style>
        .cont{
            max-width: 90%;
            /*max-width: 100%;*/
            text-align: center;
            margin: 0 auto;
            
        }
        .card-header{
             background:url('image/back.jpg');
            
        }
        .card-header h2{
          color: navy;
        }
        .card-footer{
            background-color: navy;
        }
        .card{
           box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
           /*max-width: 80%;*/
        }
    </style>
</head>
<body>
          
    <div class="cont mt-4">
        <form action="process.php" method="post">
            <div class="card" id="calculatorCard">
                <div class="card-header text-center">
                    <h2>Price Calculator</h2>
                </div>
                <div class="card-body">
                    <table class="table">
                        <tr>
                            <td>Name of the Buyer</td>
                            <td><input type='text' name="buyer" id='buyer' required></td>
                            <td>Address</td>
                            <td><input type="text" id="address" name="address" required></td>
                        </tr>
                        <tr>
                            <td>Select Product</td>
                            <td>
                                <select name="product" id="product" onchange="gradeup(); unitup();" required>
                                    <option value="">Select</option>
                                    <option value="6mm Aggregate">6mm Aggregate(Chips)</option>
                                    <option value="8mm Aggregate">8mm Aggregate </option>
                                    <option value="12mm Aggregate">12mm Aggregate </option>
                                    <option value="20mm Aggregate">20mm Aggregate </option>
                                    <option value="Cement">Cement</option>
                                    <option value="Dust">Dust</option>
                                    <option value="Flyash">Flyash</option>
                                    <option value="M-Sand">M-Sand</option>
                                    <option value="P-Sand">P-Sand</option>
                                    <option value="River Sand">River Sand</option>
                                    <option value="Steel">Steel</option>
                                    <option value="4 inch Solid Block">4" Solid Block</option>
                                    <option value="6 inch Solid Block">6" Solid Block</option>
                                    <option value="8 inch Solid Block">8" Solid Block</option>
                                    <option value="Red Brick">Red Brick</option>
                                    <option value="Paver Block">Paver Block</option>
                                    <option value="RMC Mix">RMC Mix</option>
                                </select>
                            </td>
                           <td>Quantity</td>
                    <td><input type="text" name="qty" id="qty" required></td>
                </tr>
                <tr>
                    <td>Units</td>
                    <td><input type="text" name="unit" id="unit" required readonly></td>
                    
                    
                    <td id="gradeLabel" style="display: none;">Grade :</td>
                                    <td><select name="grade" id="grade" style="display: none;" >
                                            <option value=""></option>
                                </select></td>
                </tr>
                </table>
                </div>
                 <div class="card-footer text-muted text-center">
                
                        <input type="submit" name="submit" value="Calculate" class="btn"></td>
                    </div>
            </div>
            </form>
        </div>
        <script>
           function gradeup() {
        var product = document.getElementById('product').value;
        var gradeLabel = document.getElementById('gradeLabel');
        var grade = document.getElementById('grade');

        if (product === 'RMC Mix') {
            gradeLabel.style.display = 'table-cell';
            grade.style.display = 'block';
            grade.innerHTML = "";

            // Populate grade options if RMC Mix is selected
            grade.add(new Option("Select", ""));
            grade.add(new Option("M5", "M5"));
            grade.add(new Option("M7.5", "M7.5"));
            grade.add(new Option("M10", "M10"));
            grade.add(new Option("M15", "M15"));
            grade.add(new Option("M20", "M20"));
            grade.add(new Option("M25", "M25"));
            grade.add(new Option("M30", "M30"));
        }
        else if (product === 'Steel') {
            gradeLabel.style.display = 'table-cell';
            gradeLabel.innerHTML= 'Size';
            grade.style.display = 'block';
            grade.innerHTML = "";

            // Populate grade options if RMC Mix is selected
            grade.add(new Option("Select", ""));
            grade.add(new Option("8mm", "8"));
            grade.add(new Option("10mm", "10"));
            grade.add(new Option("12mm", "12"));
            grade.add(new Option("16mm", "16"));
            grade.add(new Option("20mm", "20"));
            grade.add(new Option("25mm", "25"));
            grade.add(new Option("28mm", "28"));
            grade.add(new Option("32mm", "32"));
        }
        
        else {
            gradeLabel.style.display = 'none';
            grade.style.display = 'none';
        }
    }
          function unitup(){
                var prod=document.getElementById('product').value;
                
                if(prod ==='Cement'){
                document.getElementById('unit').value="Bags"
                }
                else if(prod === "Red Brick" || prod === "Paver Block" ||  prod === "4 inch Solid Block" || prod === "6 inch Solid Block" ||  prod === "8 inch Solid Block"){
                 document.getElementById('unit').value="No";
            }
            else if(prod ===  "M-Sand" || prod === "P-Sand" || prod === "Flyash" || prod === "Dust" || prod === "6mm Aggregate" || prod === "8mm Aggregate" ||
            prod === "12mm Aggregate" || prod === "20mm Aggregate"|| prod=== "Steel"){
                    document.getElementById('unit').value="Tons";
            }
             else if(prod ==="River Sand"){
                document.getElementById('unit').value="Cft";
            }
            else if(prod ==="RMC Mix"){
                document.getElementById('unit').value="Metric Cube";
            }
           
            else{
                document.getElementById('unit').value="";
        }
        }
            </script>
            <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <script>
    function hideCardOnMobile() {
        var calculatorCard = document.getElementById('calculatorCard');
        if (window.innerWidth <= 767) {
            calculatorCard.style.display = 'none';
        }
    }

    // Call the hideCardOnMobile function after form submission
    <?php if (isset($_POST['submit'])) { ?>
        window.onload = function() {
            hideCardOnMobile();
        };
    <?php } ?>
</script>
         <br>
    <footer>
        <?php include_once('footer.php'); ?>
    </footer>
    </body>
    
</html>
