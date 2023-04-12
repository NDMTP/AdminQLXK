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

// Lấy ID nhân viên cần xóa từ form

// Xóa dữ liệu từ CSDL dựa trên ID

$sql = "DELETE FROM nhanvien WHERE email='" . $_POST['IDDD'] . "'";
$result = mysqli_query($conn, $sql);

if (mysqli_affected_rows($conn) == 0) {
    echo '<script language="javascript">
    alert("Không tìm thấy email để xóa!");
    history.back();
    </script>';
} else if ($result) {
    echo '<script language="javascript">
    alert("Xóa nhân viên thành công!");
    history.back();
    </script>';
} else {
    echo "Lỗi khi xóa nhân viên: " . mysqli_error($conn);
}

?>