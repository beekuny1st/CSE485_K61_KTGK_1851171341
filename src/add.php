<?php 
include('config/connect.php');
include('link/header.php'); 
?>

<div class="row">
    <div class="col-md-12 bg-info gr-form">

        <h2 class="text-center">Thêm bệnh nhân</h2>

        <form class="form-txt" method="post">

            <div class="mb-3 row">
                <label for="name" class="col-sm-2 col-form-label">Tên</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" id="ten" name="ten">
                </div>
            </div>

            <div class="mb-3 row">
                <label for="name" class="col-sm-2 col-form-label">Họ</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" id="ho" name="ho">
                </div>
            </div>

            <div class="mb-3 row">
                <label for="name" class="col-sm-2 col-form-label">Ngày sinh</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" id="date" name="date">
                </div>
            </div>

            <div class="mb-3 row">
                <label for="name" class="col-sm-2 col-form-label">Giới tính</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" id="gt" name="gt">
                </div>
            </div>

            <div class="mb-3 row">
                <label for="name" class="col-sm-2 col-form-label">Email</label>
                <div class="col-sm-10">
                    <input type="email" class="form-control" id="email" name="email">
                </div>
            </div>

            <div class="mb-3 row">
                <label for="phone" class="col-sm-2 col-form-label">Số điện thoại</label>
                <div class="col-sm-10">
                    <input type="tel" class="form-control" id="phone" name="phone">
                </div>
            </div>

            <div class="mb-3 row">
                <label for="addr" class="col-sm-2 col-form-label">Chiều cao</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" id="hei" name="hei">
                </div>
            </div>

            <div class="mb-3 row">
                <label for="name" class="col-sm-2 col-form-label">Cân nặng</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" id="wei" name="wei">
                </div>
            </div>

            <div class="mb-3 row">
                <label for="name" class="col-sm-2 col-form-label">Nhóm máu</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" id="mau" name="mau">
                </div>
            </div>

            <div class="mb-3 row">
                <label for="name" class="col-sm-2 col-form-label">Ngày lập sổ</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" id="tao" name="tao">
                </div>
            </div>

            <div class="mb-3 row">
                <label for="name" class="col-sm-2 col-form-label">Ngày cập nhật</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" id="capnhat" name="capnhat">
                </div>
            </div>

            <div class="text-center">
                <button type="submit" name="submit" class="btn bg-success text-white bt-web">Thêm</button>
            </div>

        </form>
    </div>
</div>


<?php include('link/footer.php');

if(isset($_POST['submit'])){

    $ten   = $_POST['ten'];
    $ho    = $_POST['ho'];
    $date  = $_POST['date'];
    $gt    = $_POST['gt'];
    $phone = $_POST['phone'];
    $email = $_POST['email'];
    $hei   = $_POST['hei'];
    $wei   = $_POST['wei'];
    $mau   = $_POST['mau'];
    $tao   = $_POST['tao'];
    $capnhat = $_POST['capnhat'];
    
    $sql = " INSERT INTO PATIENT
    VALUES (Null, '$ten','$ho','$date','$gt','$phone','$email','$hei','$wei','$mau','$tao','$capnhat')";
    
    $res = mysqli_query($conn, $sql);

    if($res>0){
        header("Location:index.php");
    }
    
    mysqli_close($conn);
    }

?>

