<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Panitad24</title>
</head>
<body>
    <form method="GET">
        ทีม 1:<input type="text" name="tee1"></br>
        ทีม 2:<input type="text" name="tee2"></br>
        <input type="submit" value="ตกลง">
    </form>
    <?php
        $tee1 = $_GET['tee1'];
        $tee2 = $_GET['tee2'];
        if ($tee1 > $tee2) {
            echo "ทีม 1 ชนะ!";
        }
        if ($tee2 > $tee1) {
            echo "ทีม 2 ชนะ!";
        }
        if ($tee1 == $tee2) {
            echo "เสมอทั้งคู่!";
        }
    ?>
</body>
</html>
