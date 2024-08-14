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
        <form action="opt.php" method="POST" class="py-5 my-3">
        <h1 class="text-center">แบบบันทึกข้อมูล</h1>
        <div class="mb-3">
            <label class="form-label"><b>ชื่อ</b></label>
            <input type="text" class="form-control" name="name" value="นายวรชัย เจนจบวิทยา">
        </div>
        <div class="mb-3">
            <label class="form-label"><b>ชั้น</b></label>
            <input type="text" class="form-control" name="class" value="ม.6/10">
        </div>
        <div class="mb-3">
            <label class="form-label"><b>เลขที่</b></label>
            <input type="text" class="form-control" name="num" value="10">
        </div>
        <div class="mb-3">
            <label class="form-label"><b>เพศ</b></label>
            <select class="form-select" name="gen">
                <option selected value="1">ชาย</option>
                <option value="2">หญิง</option>
                <option value="3">อื่นๆ</option>
            </select>
        </div>

        <button type="submit" class="btn btn-danger px-5"><b>ส่งข้อมูล</b></button>
        </form>
    </div>
</body>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</html>