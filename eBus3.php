<!DOCTYPE html>
<html>

<head>
        <link rel="stylesheet" type="text/css" href="eBus.css" />
<h1>Receipt</h1>
<hr>
</head>
    
<body>    
<!--   //Starting the session to get the session variable from last page-->
<?php

session_start();
$totalValue2 = $_POST['txtTotal'];
$fullNameValue = $_POST['txtName'];
echo "The name is : ".$fullNameValue.".";
echo "<br></br>";
echo "The total value is: £".$totalValue2.".";
?>
</body>
</html>




