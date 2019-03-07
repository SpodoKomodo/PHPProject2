<<!--Creating a session variable and assigning it to txtTotal-->

<?php
session_start();
$totalValue = "";
$_SESSION['txtTotal'] = $totalValue;
?>

<!DOCTYPE html>
<html lang="en" xmlns="http.//www.w3.org/1999/xhtml">
<head>
    <link rel="stylesheet" type="text/css" href="eBus.css" />
    <meta charset="utf-8" />
    <title>Ebusiness 1</title>
    <link rel="stylesheet" href="style.css" type="text/css" />
</head>
<body>
    <div class="form">
            <form name="intCalc" method="post" action="eBus2.php">
                <center>
                <h1>Rolexx Calculator</h1>
        <hr />
        
                    <table cellspacing="10">
            <tr>
                            <td><b>Services</b></td>
            </tr>
            <tr>
                            <td>Blockchain</td>
                            <td><input type="radio" id="Blockchain" name="rdoGroup" value="1" /></td>
                        </tr>               
            <tr>
                            <td>Autonomous Robots</td>
                            <td><input type="radio" id="AutonomousRobots" name="rdoGroup" value="5" /></td>
                        </tr>               
            <tr>
                            <td>Immersive Experience</td>
                            <td><input type="radio" id="ImmersiveExperience" name="rdoGroup" value="30" /></td>
                        </tr>   
                    </table>
                </center>
    <br />

        <center>
            <table cellspacing="10">
        <tr>
                    <td><b></b></td>
                    <td><b>Amount</b></td>
        </tr>
        <tr>
                    <td>Sub Total</td>
                    <td><input type="text" id="txtSubTot" name="txtSub" readonly /></td>
        </tr>
        <tr>
                    <td>-Discount @15%</td>
                    <td><input type="text" id="txtDisc" name="txtDisc" readonly /></td>
        </tr>
                <tr>
                    <td>+VAT @21%</td>
                    <td><input type="text" id="txtVat" name="txtVat" readonly /></td>
        </tr>
                <tr>
                    <td>Total</td>
                    <td><input type="text" id="txtTotal" name="txtTotal" value="" readonly /></td>
                </tr>
            </table>
        </center>
   
    <br />
        <center>
                    <input type="button" name="btnCalc" id="btnCalc" onclick="calcSub()" value="Calculate Amount"/>
                    <input type="button" name="btnClear" id="btnClear" onclick="AmountClear()" value="Clear"/>
                    <input type="submit" name="btnProceed" id="btnProceed" onclick="" value="Proceed"/>
        </center>
    </form>
</div>
       
       <script type="text/javascript">
        function calcSub() {
            
            var subAmount = parseFloat(document.getElementById('txtSubTot').value);
            var Blockchain = parseFloat(document.getElementById('Blockchain').value);
            var AutonomousRobots = parseFloat(document.getElementById('AutonomousRobots').value);
            var ImmersiveExperience = parseFloat(document.getElementById('ImmersiveExperience').value);
           
//           
            if (document.getElementById('Blockchain').checked) {
                document.intCalc.txtSubTot.value = Blockchain;
                subAmount = Blockchain;
                calculation(subAmount);
               
            }
        else if (document.getElementById('AutonomousRobots').checked) {
                document.intCalc.txtSubTot.value = AutonomousRobots;
                subAmount = AutonomousRobots;
                 calculation(subAmount);
              
            }
        else if (document.getElementById('ImmersiveExperience').checked) {
                document.intCalc.txtSubTot.value = ImmersiveExperience;
                subAmount = ImmersiveExperience;
                 calculation(subAmount);
            }
        }   
       
        
        function calculation(parmSTotal){
           var subTotal = parseFloat(parmSTotal);
           var discCalc = parseFloat(subTotal * .15);
           var vatCalc = parseFloat(subTotal * .21);
           var total = parseFloat(subTotal - discCalc + vatCalc);
          
         
           document.intCalc.txtDisc.value = discCalc; 
           document.intCalc.txtVat.value = vatCalc;
           document.intCalc.txtTotal.value = total;
         
        }
//     

    </script>
   
    <script>
    function AmountClear(){
        document.getElementById("txtSubTot").value="";
    document.getElementById("txtDisc").value="";
        document.getElementById("txtVat").value="";
    document.getElementById("txtTotal").value="";
}
    </script>
</body>
</html>
