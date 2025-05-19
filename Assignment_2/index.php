<!DOCTYPE html>
<html>
    <head>
        <title>Assignment #2</title>
        <style>
            h1 {
                color: rgb(0, 164, 0);
            }
            body {
                background-color: blanchedalmond;
            }
        </style>
    </head>
    <body>
        <h1>Assignment #2</h1>
        <h2>Leonardo Padilla</h2>

        <?php
        if (isset($_GET['a']) && isset($_GET['b']) && isset($_GET['c'])) { 
            $a = $_GET['a']; 
            $b = $_GET['b'];
            $c = $_GET['c'];

            $command = escapeshellcmd("python3 /var/www/html/calculate.py $b $a $c"); 
            $output = shell_exec($command); 

            echo "<pre>" . nl2br($output) . "</pre>"; 
        } else {
        ?>
            <form method="get">
                A: <input type="text" name="a"><br> 
                B: <input type="text" name="b"><br>
                C: <input type="text" name="c"><br>
                <input type="submit" value="Calculate">
            </form>
        <?php
            date_default_timezone_set("UTC");
            $timestamp = date("Y-m-d H:i:s");

            echo '<div class="output">';
            echo "===========================================<br>";
            echo "<span class='highlight'>Assignment #2</span><br>";
            echo "<span style='color: red;'>Your_Lastname</span><br><br>";
            echo "<i>Calculation completed at $timestamp</i><br>";
            echo "===========================================<br>";
            echo '</div>';
        }
        ?>
    </body>
</html>
