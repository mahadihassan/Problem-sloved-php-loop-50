<!DOCTYPE html>
<html>
<style>
table, th, td {
    border:1px solid black;
}
</style>
<body>
    <h2>A basic HTML table</h2>
    <table style="width:100%">
        <?php
            for($i=1; $i<=6; $i++){
                echo "<tr>";
                    for ($j=1;$j<=5;$j++)  
                    {
                      echo "<td>$i * $j = ".$i*$j."</td>";
                    }
                echo "</tr>";
            }
        ?>
    </table>
</body>
</html>