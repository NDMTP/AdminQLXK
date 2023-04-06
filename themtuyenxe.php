<?php
// Lấy dữ liệu từ form và kiểm tra tính hợp lệ của dữ liệu nhập vào

$id_tuyen = $_POST['idtuyen'];
$mabx = $_POST['mabx'];
$ben_mabx = $_POST['ben_mabx'];
$tentuyen = $_POST['tentuyen'];
$songaytrongtuan = $_POST['songaytrongtuanchay'];
$sochuyentrongngay = $_POST['sochuyentrongngay'];
$tgdichuyen = $_POST['thoigiandichuyentrungbinh'];
$gia = $_POST['giahienhanh'];
$quangduong = $_POST['quangduong'];

// Kiểm tra tính hợp lệ của giá
if (!is_numeric($gia)) {
    echo '<script language="javascript">
    alert("Giá phải là một số");
    history.back();
     </script>';
    exit();
}

// Kết nối đến cơ sở dữ liệu
$conn = mysqli_connect("localhost", "root", "", "qlbanvexe");

// Kiểm tra kết nối
if (!$conn) {
  die("Kết nối không thành công: " . mysqli_connect_error());
}

// Kiểm tra sự tồn tại của ID_TUYEN
$sql_check = "SELECT * FROM tuyenxe WHERE ID_TUYEN = '$id_tuyen'";
$result_check = mysqli_query($conn, $sql_check);
if (mysqli_num_rows($result_check) > 0) {
    echo '<script language="javascript">
    alert("ID Tuyến xe đã tồn tại rồi kìa!");
    history.back();
     </script>';
    exit();
}
if ($songaytrongtuan > 7) {
    echo '<script language="javascript">
    alert("Số ngày trong tuần chạy phải nhỏ hơn hoặc bằng 7!");
    history.back();
     </script>';
    exit();
  }
if ($songaytrongtuan < 1) {
    echo '<script language="javascript">
    alert("Số ngày trong tuần chạy phải lớn hơn 0!");
    history.back();
     </script>';
    exit();
  }
// Thêm tuyến xe vào cơ sở dữ liệu
$sql_insert = "INSERT INTO tuyenxe (ID_TUYEN, MABX, BEN_MABX, TENTUYEN, SONGAYTRONGTUANCHAY, SOCHUYENTRONGNGAY, TGDICHUYENTB, GIAHIENHANH, QUANGDUONG) 
               VALUES ('$id_tuyen', '$mabx', '$ben_mabx', '$tentuyen', '$songaytrongtuan', '$sochuyentrongngay', '$tgdichuyen', '$gia', '$quangduong')
               ";
$result_insert = mysqli_query($conn, $sql_insert);

// Kiểm tra kết quả
if (!$result_insert) {
    echo "Thêm chuyến xe thất bại: " . $conn->error;
} else {
    echo '<script language="javascript">
    alert("Thêm chuyến xe thành công!");
    history.back();
     </script>';
}

// Đóng kết nối
mysqli_close($conn);
?>
