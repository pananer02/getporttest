<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

    <?php
    $fruit = $_POST['fruits'];
    $size = $_POST['size'];
    $kg = $_POST['kg'];
    echo "<img src='images/$fruit.jpg' width='$size'>";
    if($fruit == 'apple'){
        echo "<h3> ราคาต่อกิโล : 100 บาท <br>";
        echo "จำนวนกิโล : $kg กิโลกรัม <br>";
        $kg *= 100;
        echo "ราคารวม : $kg บาท<br> "; 
    }
    if($fruit == 'banana'){
        echo "<h3> ราคาต่อกิโล : 200 บาท<br> ";
        echo "จำนวนกิโล : $kg กิโลกรัม<br>";
        $kg *= 200;
        echo "ราคารวม : $kg บาท<br> ";
    }
    if($fruit == 'orange'){
        echo "<h3> ราคาต่อกิโล : 300 บาท<br> ";
        echo "จำนวนกิโล : $kg กิโลกรัม<br>";
        $kg *= 300;
        echo "ราคารวม : $kg บาท<br> ";
    }
    ?>
</body>
</html>