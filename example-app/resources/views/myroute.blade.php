<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Easy Multiple Table</title>
    <style>
        .container {             
            flex-direction: column;             
            display: flex;            
            align-items: center;             
            width: 100%;             
            height: 100vh;             
            margin: 0px;             
            padding: 0px;             
            overflow: auto;         
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>x<?php echo $myinput; ?></h1>
        <?php
        $value = 0;
        for ($i=1; $i <= 24; $i++) {
            $value = $myinput * $i;
            echo "
                    <table>
                        <tbody>
                            <tr>
                                <td>$myinput</td>
                                <td>x</td>
                                <td>$i</td>
                                <td>=</td>
                                <td>$value</td>
                            </tr>
                        </tbody>
                    </table>";
        }
        ?>
    </div>
</body>
</html>