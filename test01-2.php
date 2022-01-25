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
    $names = ["สมบูรณ์ คำดี", "สมมุติ เหตุการณ์", "จิตนาการ จำลองเหตุ","สยาม ไทยแลนด์","เช้าสาย บ่ายเย็น"];
    $nums = [20, 22, 25, 28, 30];
    echo "ชื่อ : ".$names[0]."<br>อายุ : ".$nums[4]." ปี<br><br>";
    echo "ชื่อ : ".$names[1]."<br>อายุ : ".$nums[3]." ปี<br><br>";
    echo "ชื่อ : ".$names[2]."<br>อายุ : ".$nums[2]." ปี<br><br>";
    echo "ชื่อ : ".$names[3]."<br>อายุ : ".$nums[1]." ปี<br><br>";
    echo "ชื่อ : ".$names[4]."<br>อายุ : ".$nums[0]." ปี<br><br>";
    ?>
</body>

</html>