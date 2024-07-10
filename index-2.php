<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Panitad24</title>
</head>
<body>
    <form method="GET">
        เดือน: <input type="text" name="inmonth"></br>
        <input type="submit" value="ตกลง">
    </form>
    <?php
        $inmonth = $_GET['inmonth'];
        switch ($inmonth) {
            case ("มกราคม"):case ("มีนาคม"):case ("พฤษภาคม"):case ("กรกฎาคม"):case ("สิงหาคม"):case ("ตุลาคม"):case ("ธันวาคม"):
                echo "เดือน $inmonth | มี 31 วัน";
                break;
            case ("เมษายน"):case ("มิถุนายน"):case ("กันยายน"):case ("พฤศจิกายน"):
                echo "เดือน $inmonth | มี 30 วัน";
                break;
            default:
                echo "ไม่พบเดือนที่ท่านใส่";
        }
    ?>
</body>
</html>
