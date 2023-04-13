<!DOCTYPE html>
<html lang="en">
<?php
    include("header.php");
?>

<<<<<<< HEAD
<body>


=======
<head>
    <title>Cập Nhật Chuyến Xe</title>
</head>

<body>
>>>>>>> origin/master
    <div class="page-wrapper">
        <!-- ============================================================== -->
        <!-- dieu huong-->
        <!-- ============================================================== -->
        <div class="page-breadcrumb">
            <div class="row">
                <div class="col-7 align-self-center">
                    <h4 class="page-title text-truncate text-dark font-weight-medium mb-1">Cập Nhật </h4>
                    <div class="d-flex align-items-center">
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb m-0 p-0">
                                <li class="breadcrumb-item"><a href="index.php" class="text-muted">Trang Chủ</a></li>
                                <li class="breadcrumb-item text-muted active" aria-current="page">Cập Nhật chuyến xe
                                </li>
                            </ol>
                        </nav>
                    </div>
                </div>

            </div>
        </div>

        <!-- CAP NHAT TUYEN XE-->
        <div class="container capnhat">
            <div class="row m-6">
                <!--  sua / xoa nguoi dung   -->
                <form enctype="multipart/form-data" action="themchuyenxe.php" method="post" class="row g-3 needs-validation" required>

                    <div class="col-md-3">
                        <label for="validationCustom01" class="form-label">ID Chuyến Xe</label>
                        <input type="text" name="idchuyenxe" class="form-control" id="validationCustom01"  required>

                    </div>
                    <div class="col-md-4">
                    <label for="validationCustom04" class="form-label">ID Tuyến</label>
                    <?php
              include('mucchonidtuyen.php');
              ?>

                    </div>
                    <div class="col-md-5">
                        <label for="validationCustom01" class="form-label">Tên Chuyến Xe</label>
                        <input type="text" name="tenchuyenxe" class="form-control" id="validationCustom01"  required>

                    </div>
                    <div class="col-md-6">
                        <label for="validationCustom03"  class="form-label">Thời điểm đi thực tế</label>
                        <input type="datetime-local" name="thoidiemdithucte" class="form-control" id="validationCustom03" required>
                        <div class="invalid-feedback">
                            Vui lòng nhập thời điểm đi thực tế
                        </div>
                    </div>
                    <div class="col-md-6">
                    <label for="validationCustom03"  class="form-label">Thời điểm đến thực tế</label>
                        <input type="datetime-local" class="form-control" name="thoidiemdenthucte" id="validationCustom03" required>
                        <div class="invalid-feedback">
                            Vui lòng nhập thời điểm đến thực tế
                        </div>
                    </div>
                    <div class="col-md-6">
                    <label for="validationCustom03" class="form-label">Thời gian dự kiến đến</label>
                        <input type="datetime-local" class="form-control" id="validationCustom03" name="thoigiandukienden"  required>
                        <div class="invalid-feedback">
                            Vui lòng nhập thời gian dự kiến đến 
                        </div>
                        <div class="invalid-feedback">
                            Please select a valid state.
                        </div>
                    </div>
                    <div class="col-md-6">
                    <label for="validationCustom03"  class="form-label">Thời gian dự kiến khởi hành</label>
                        <input type="datetime-local" class="form-control" name="thoigiandukienkhoihanh" id="validationCustom03" required>
                        <div class="invalid-feedback">
                            Vui lòng nhập thời gian cụ thể
                        </div>
                    </div>

                    <div class="col-md-6">
                    <label for="validationCustom03"  class="form-label">Giá </label>
                        <input type="text" class="form-control" name="gia" id="validationCustom03" required>
                        <div class="invalid-feedback">
                            Vui lòng nhập giá cụ thể
                        </div>
                    </div>

                    <div class="col-12">
                        <br></br>
                        <button class="btn btn-primary" type="submit">Thêm chuyến xe</button>
                    </div>
                </form>
                
                

            </div>
        </div>
        <!-- ket thuc  CAP NHAT NGUOI DUNG  -->
        <!-- ============================================================== -->

        <!-- footer -->
        <!-- ============================================================== -->
        <footer class="footer text-center text-muted">
        Hệ Thống Xe ABC <a href="capnhatchuyenxe.php">Nhóm 2 - PTHTW</a>.
        </footer>
        <!-- ============================================================== -->
        <!-- End footer -->
        <!-- ============================================================== -->
    </div>
    <!-- ============================================================== -->
    <!-- End Page wrapper  -->
    <!-- ============================================================== -->
    </div>

    <script src="assets/libs/jquery/dist/jquery.min.js"></script>
    <!-- Bootstrap tether Core JavaScript -->
    <script src="assets/libs/popper.js/dist/umd/popper.min.js"></script>
    <script src="assets/libs/bootstrap/dist/js/bootstrap.min.js"></script>
    <!-- apps -->
    <!-- apps -->
    <script src="dist/js/app-style-switcher.js"></script>
    <script src="dist/js/feather.min.js"></script>
    <!-- slimscrollbar scrollbar JavaScript -->
    <script src="assets/libs/perfect-scrollbar/dist/perfect-scrollbar.jquery.min.js"></script>
    <script src="assets/extra-libs/sparkline/sparkline.js"></script>
    <!--Wave Effects -->
    <!-- themejs -->
    <!--Menu sidebar -->
    <script src="dist/js/sidebarmenu.js"></script>
    <!--Custom JavaScript -->
    <script src="dist/js/custom.min.js"></script>
    <script src="assets/extra-libs/knob/jquery.knob.min.js"></script>
    <script>
    $(function() {
        $('[data-plugin="knob"]').knob();
    });
    </script>

</body>

</html>