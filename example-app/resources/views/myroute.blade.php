<html>
<div class = "multitable">
<head>
    <meta charset="utf-8">
</head>
<link rel="stylesheet" href="mystyle.css">
<body>
    <h1><?php echo $multi_x ; ?>x</h1>
    <h1>ตารางสูตรคูณแม่ <?php echo $multi_x ?></h1>
    <div class = "box">
    <table>
        <tbody>
            <?php for($i = 1;$i < 25;$i++){
                $sum = $multi_x * $i;
                echo "
                <tr>
                    <td>$multi_x</td>
                    <td>x</td>
                    <td>$i</td>
                    <td>=</td>
                    <td>$sum</td>
                </tr>
                ";
            }
            ?>
        </tbody>
    </table>
        </div>
    <style>
    </style>
</body>
</div>
</html>