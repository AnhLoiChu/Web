<?php
include 'db_connect.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $mssv = $_POST['mssv'];
    $name = $_POST['name'];

    
    $stmt = $conn->prepare("INSERT INTO students (mssv, fullname) VALUES (:mssv, :name)");
    $stmt->bindParam(':mssv', $mssv);
    $stmt->bindParam(':name', $name);

   
    $stmt->execute();

    echo "Thêm sinh viên thành công!";
}
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Thêm Sinh Viên</title>
</head>
<body>
    <h2>Nhập Thông Tin Sinh Viên</h2>
    <form method="POST" action="">
        <label for="mssv">MSSV:</label>
        <input type="text" id="mssv" name="mssv" required><br><br>
        <label for="name">Họ Tên:</label>
        <input type="text" id="name" name="name" required><br><br>
        <input type="submit" value="Thêm Sinh Viên">
    </form>
    <br>
    <a href="list_students.php">Xem Danh Sách Sinh Viên</a>
</body>
</html>
