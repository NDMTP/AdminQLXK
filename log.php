<?php

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "qlbanvexe";
$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) {
die("Connection failed: " . $conn->connect_error);
}
                if(isset($_POST["sb"])){
                    
                    $sql="SELECT * FROM nhanvien where email='".$_POST["name"]."' AND password='".md5($_POST["psw"])."'";
                    $result1 = $conn->query($sql);
                    if($result1->num_rows>0){
                        $row = $result1->fetch_assoc();

                        session_start();
                        $_SESSION["name"] = $row["HOTEN"];
                        $_SESSION["ngaysinh"]=$row["NAMSINH"];
                        $_SESSION["email"]=$row["EMAIL"];
                        $_SESSION["sdt"]=$row["SDT"];
                        $_SESSION["diachi"]=$row["DIACHI"];
                        $_SESSION["matkhau"]=$row["password"];
                        $_SESSION["CCCD"]=$row["CCCD"];
                   
                        header('Location: index.php');              
        $_SESSION['ngaybd']=date('Y-m-d', strtotime('-1 month'));
        $_SESSION['ngaykt']= date('Y-m-d');
                     
                    }
                    else{
                 
                        echo '<script language="javascript">
                    alert("Nhập sai email hoặc mật khẩu.");
                    history.back();
                     </script>';
                      
                    }
                   
                    }
                
                ?>