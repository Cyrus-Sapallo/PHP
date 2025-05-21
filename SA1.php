<!DOCTYPE html>
<html>
<head>
    <title>Multiplication Table</title>
    <style>
        table {
            border-collapse: collapse;
            width: 50%;
            margin: 0 auto;
        }
        th, td {
            border: 1px solid black;
            text-align: center;
            padding: 8px;
        }
        .even {
            background-color: #FF0000;
        }
        .odd {
            background-color: #FFFF00;
        }
    </style>
</head>
<body>

<h2 style="text-align:center;">Multiplication Table (1 to 10)</h2>

<table>
    <tr>
        <th>*</th>
        <?php
        for ($i = 1; $i <= 10; $i++) {
            echo "<th>$i</th>";
        }
        ?>
    </tr>
    <?php
    for ($i = 1; $i <= 10; $i++) {
        echo "<tr>";
        echo "<th>$i</th>";
        for ($j = 1; $j <= 10; $j++) {
            // Alternate cell color based on the sum of row and column index
            $class = ($i + $j) % 2 == 0 ? "even" : "odd";
            echo "<td class=\"$class\">" . ($i * $j) . "</td>";
        }
        echo "</tr>";
    }
    ?>
</table>

</body>
</html>
