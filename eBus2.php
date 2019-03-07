<html>
    <?php
    session_start();
    $fullNameValue = "";
    $totalValue2 = "";
    /*
     * Create a session variable for the mobile number
     */
    $totalValue = $_POST['txtTotal'];
    $_SESSION['txtName'] = $fullNameValue;
    $_SESSION['txtTotal'] = $totalValue2;

    /**
     * Allocate the mobile number session variable to a text box
     */
    ?>

    <!DOCTYPE html>
    <html>
        <head>
            <link rel="stylesheet" type="text/css" href="eBus.css" />
            <title>eBusiness 2</title>
        </head>
        <body>
        <center>
            <div class="form">
                <form name="Details" method="post" action="eBus3.php"
                      <center>
                        <table cellspacing="10">
                            <tr>
                                <td><b></b></td>
                                <td><b>Enter in your details below</b></td>
                            </tr>
                            <tr>
                                <td>Name</td>
                                <td><input type="text" id="txtName" name="txtName" value="" /></td> 
                            </tr>
                            <tr>
                                <td>Phone number</td>
                                <td><input type="text" id="txtNum" name="txtNum" value="" /></td>
                            </tr>

                            <tr>
                                <td>PIN</td>
                                <td><input type="text" id="txtPIN" name="txtPIN" value="" /></td>
                            </tr>
                            <tr>

                                <td><input type="hidden" id="txtTotal" name="txtTotal" value="<?php echo $totalValue; ?>"/></td>
                            </tr>
                        </table>
                    </center>

                    <center>


                        <input type="submit" name="btnContinue" id="btnContinue" onclick="" value="Continue"/>
                    </center>                    
            </div>
        </center>
        </form>                    
    </body>
</html>
