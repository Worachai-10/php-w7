<?php
    $name = $_POST['name'];
    $class = $_POST['class'];
    $num = $_POST['num'];
    $gen = $_POST['gen'];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Worachai</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body>
    <div class="container bg-light rounded-3">
        <form class="py-5 my-3">
            <h3>ผลลัพธ์ของคุณ</h3>
                <p class="mb-3"><b>ชื่อ:</b> <?php echo $name;?></p>
                <p class="mb-3"><b>ชั้น:</b> <?php echo $class;?></p>
                <p class="mb-3"><b>เลขที่:</b> <?php echo $num;?></p>
                <p class="mb-3">
                    <b>เพศ:</b>
                    <?php
                        switch ($gen) {
                            case 1:
                                echo "ชาย";
                            break;
                            case 2:
                                echo "หญิง";
                            break;
                            default:
                                echo "อื่นๆ";
                        }
                    ?>
                </p>
            <a href="index.php" class="btn btn-secondary px-5"><b>กลับหน้าแรก</b></a>
        </form>
    </div>
</body>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</html>