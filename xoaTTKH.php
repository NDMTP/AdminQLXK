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

if(isset($_POST["xoakh"])){

  $sql = "DELETE FROM  khachhang where email='".$_POST['email']."'";
  if (mysqli_query($conn, $sql)) {
    echo '<script language="javascript">
      alert("Xóa khách hàng thành công!");
      history.back();
       </script>';
  } else {
    echo "Lỗi khi xóa khách hàng: " . mysqli_error($conn);
  }
  
}


?>