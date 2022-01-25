<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome Sir.</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Prompt:ital,wght@1,400&display=swap" rel="stylesheet">
    <style>
        body {
            font-family: 'Prompt', sans-serif;
        }
    </style>
</head>

<body>
    <?php
    $salary = 123000;
    if($salary>=10000){
        $bonus = $salary*(300/100);
        $total = $salary+$bonus;
        echo"ได้รับเงินเดือน : ".$salary." บาท<br>";
        echo"ได้รับโบนัส : ".$bonus." บาท<br>";
        echo"รวมยอด : ".$total." บาท";
    }
    else if($salary = 50000){
        $bonus = $salary * (200/100);
        $total = $salary + $bonus;
        echo "ได้รับเงินเดือน : " . $salary . " บาท<br>";
        echo "ได้รับโบนัส : " . $bonus . " บาท<br>";
        echo "รวมยอด : " . $total . " บาท";
    }
    else if($salary = 100000){
        $bonus = $salary * (100/100);
        $total = $salary + $bonus;
        echo "ได้รับเงินเดือน : " . $salary . " บาท<br>";
        echo "ได้รับโบนัส : " . $bonus . " บาท<br>";
        echo "รวมยอด : " . $total . " บาท";
    }
    ?>
</body>

</html>