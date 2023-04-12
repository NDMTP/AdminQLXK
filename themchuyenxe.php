<?php

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "qlbanvexe";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

$id_chuyenxe = $_POST["idchuyenxe"];
$bienso = $_POST["bienso"];
$id_tuyen = $_POST["idtuyen"];
$tenchuyenxe = $_POST["tenchuyenxe"];
$thoidiemditt = $_POST["thoidiemdithucte"];
$thoidiemdentt = $_POST["thoidiemdenthucte"];
$tgdukienkhoihanh = $_POST["thoigiandukienkhoihanh"];
$tgdukien_den = $_POST["thoigiandukienden"];
$gia = $_POST["gia"];

$sql = "SELECT * FROM chuyenxe WHERE ID_CHUYENXE = '$id_chuyenxe'";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // Nếu ID_CHUYENXE đã tồn tại, thông báo lỗi và reload lại trang
    echo '<script language="javascript">
    alert("ID_CHUYENXE đã tồn tại rồi kìa!");
    history.back();
     </script>';
    exit();
}
if (!is_numeric($gia)) {
    echo '<script language="javascript">
    alert("Giá phải là một số");
    history.back();
     </script>';
    exit();
}

// Kiểm tra THOIDIEMDENTT không nhỏ hơn THOIDIEMDITT
if ($thoidiemdentt < $thoidiemditt) {
    // Nếu THOIDIEMDENTT nhỏ hơn THOIDIEMDITT, thông báo lỗi và reload lại trang
    echo '<script language="javascript">
    alert("Chời ơi, cái thời điểm đến nhỏ hơn thời điểm đi sao mà chạy!");
    history.back();
     </script>';
    exit();
} 
if ($tgdukienkhoihanh > $tgdukien_den) {
    // Nếu tgdukienkhoihanh nhỏ hơn tgdukien_den, thông báo lỗi và reload lại trang
    echo '<script language="javascript">
    alert("Chời ơi, thời gian dự kiến đến nhỏ hơn thời gian dự kiến khởi hành kìa!");
    history.back();
     </script>';
    exit();
} 

// Thêm chuyến xe mới vào bảng chuyenxe
$sql = "INSERT INTO chuyenxe (ID_CHUYENXE ,BIENSO, ID_TUYEN, TENCHUYENXE, THOIDIEMDITT, THOIDIEMDENTT, TGDUKIENDEN, TGDUKIENKHOIHANH, GIA)
VALUES ('$id_chuyenxe','$bienso', '$id_tuyen', '$tenchuyenxe', '$thoidiemditt', '$thoidiemdentt', '$tgdukien_den', '$tgdukienkhoihanh', '$gia')";

if ($conn->query($sql) == TRUE) {
    echo '<script language="javascript">
    alert("Thêm chuyến xe thành công!");
    history.back();
     </script>';
} else {
    echo "Thêm chuyến xe thất bại: " . $conn->error;
}
// Đóng kết nối
$conn->close();
?>