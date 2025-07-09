<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);

include 'db.php';
?>

<html>
    <head>
        <title>Currency Converter</title>
    </head>
    <body>
        <h1>Currency Converter App</h1>

        <!-- Currency to convert -->
         <form action="submit_currency.php" method="post">
            <input type="number" step="0.01" name="dollar_amount" required>
            <select name="target_currency" id="target_currency">
                <option value="afghanistan">AFN</option>
                <option value="albania">ALL</option>
                <option value="algeria">DZD</option>
            </select>
         </form>
    </body>
</html>