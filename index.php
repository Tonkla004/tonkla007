<?php

if(isset($_POST['summit'])) {
$police1 = $_POST['police1'];
$police2 = $_POST['police2'];
$police3 = $_POST['police3'];
$police4 = $_POST['police4'];
$police5 = $_POST['police5'];
$police6 = $_POST['police6'];
$police7 = $_POST['police7'];
$police8 = $_POST['police8'];
$police9 = $_POST['police9'];
$police10 = $_POST['police10'];


$police11 = $_POST['police11'];
$police22 = $_POST['police22'];
$police33 = $_POST['police33'];
$police44 = $_POST['police44'];
$police55 = $_POST['police55'];
$police66 = $_POST['police66'];
$police77 = $_POST['police77'];
$police88 = $_POST['police88'];
$police99 = $_POST['police99'];
$police100 = $_POST['police100'];
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>เเสดงข้อมูลผู้ส่ง-ผู้รับ</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #ff4c4c; /* พื้นหลังสีแดง */
            color: #0066ff; /* ตัวหนังสือสีฟ้า */
            margin: 20px;
            position: relative; 
            height: 600px;
        }

        .con, .recipient {
            border: 2px solid #333;
            border-radius: 8px;
            background-color: #fff;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
            padding: 20px;
            width: 400px; 
            color: #0066ff; /* ตัวหนังสือสีฟ้าในกล่อง */
        }

        .con {
            position: absolute; 
            top: 0;
            left: 0; 
        }

        .recipient {
            position: absolute; 
            bottom: 0; 
            right: 0; 
        }

        h2 {
            text-align: center;
            margin: 10px 0;
        }

        .address {
            padding: 10px;
            border: 1px solid #ccc;
            margin-bottom: 10px;
        }

        p {
            margin: 5px 0; 
        }
    </style>
</head>
<body>

<div class="con">
    <h2>ข้อมูลผู้ส่ง</h2>
    <div class="address">
        <p><?php echo $police1; ?></p>
        <p><?php echo $police2; ?></p>
        <p><?php echo $police3; ?></p>
        <p><?php echo $police4; ?></p>
        <p><?php echo $police5; ?></p>
        <p><?php echo $police6; ?></p>
        <p><?php echo $police7; ?></p>
        <p><?php echo $police8; ?></p>
        <p><?php echo $police9; ?></p>
        <p><?php echo $police10; ?></p>
    </div>
</div>

<div class="recipient">
    <h2>ช้อมูลผู้รับ</h2>
    <div class="address">
        <p><?php echo $police11; ?></p>
        <p><?php echo $police22; ?></p>
        <p><?php echo $police33; ?></p>
        <p><?php echo $police44; ?></p>
        <p><?php echo $police55; ?></p>
        <p><?php echo $police66; ?></p>
        <p><?php echo $police77; ?></p>
        <p><?php echo $police88; ?></p>
        <p><?php echo $police99; ?></p>
        <p><?php echo $police100; ?></p>
    </div>
</div>

<center> <img src=787.jpg>

</body>
</html>
