<!DOCTYPE html>
<html>
<body>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") { //Safety check to make sure php wasn't manually opened
    $n = $_POST["size"];// variable n from the html input for size of table

    echo "<h2>Multiplication Table up to $n</h2>"; //echo sends text back into html file
    echo "<table border='1'>"; //table border size 1

    echo "<tr>"; //First table row
    echo "<th>*</th>"; //Top left is asterisk
    for ($i = 1; $i <= $n; $i++) { //Loop from 1 to n making table top these numbers
        echo "<th>$i</th>";
    }
    echo "</tr>"; 

    for ($row = 1; $row <= $n; $row++) { //Loop from 1 to entered number
        echo "<tr>"; //For each loop make a row
        echo "<th>$row</th>"; //First entry is loop iteration number, matches number to multiply
        for ($col = 1; $col <= $n; $col++) { //Loop through columns 
            $product = $row * $col; //Only starts on row 2 after header, multiply row by column
            echo "<td>$product</td>";//Resultant product put into table
        }
        echo "</tr>";//end row and restart loop if not yet reached number
    }

    echo "</table>"; //end table after all rows have been made
}
?>

</body>
</html>
