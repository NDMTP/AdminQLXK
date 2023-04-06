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


$quyen = $_POST['phanquyen'];
$sql= "Select * FROM  nhanvien where email='".$_POST["IDD"]."'";

if(mysqli_query($conn, $sql)){

$capnhat_sql = "UPDATE khachhang SET  MaQuyen='$quyen' where email='".$_POST["IDD"]."'";
// echo $capnhat_sql; exit;

if (mysqli_query($conn, $capnhat_sql)) {
    echo "Chỉnh sửa nhân viên thành công";
} else {

    echo "Lỗi khi sửa nhân viên: " . mysqli_error($conn);
}
}
else {
  echo"Không tìm thấy email";
}
echo '<script language="javascript">
    alert("Cập Nhật thành công!");
    history.back();
     </script>';
?>