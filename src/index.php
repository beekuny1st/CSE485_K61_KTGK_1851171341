<?php 
include('config/connect.php');
include('link/header.php'); 
?>

<div class="row nani">
    <div class="col-md-12">
        <a href="add.php" class="btn bg-success text-white  btn-web">Thêm bệnh nhân</a>
    </div>
</div>

<div class="row">
    <div class="col-md-12 bg-info">
        <table class="table table-striped">
            <thead>
                <tr>
                    <th scope="col" class = "text-center" >Mã BN</th>
                    <th scope="col">Tên</th>
                    <th scope="col">Họ đệm</th>
                    <th scope="col">Ngày sinh</th>
                    <th scope="col">Giới tính</th>
                    <th scope="col">Số điện thoại</th>
                    <th scope="col">Email</th>
                    <th scope="col">Chiều cao</th>
                    <th scope="col">Cân nặng</th>
                    <th scope="col">Nhóm máu</th>
                    <th scope="col"> Ngày lập  sổ</th>
                    <th scope="col">Ngày cập  nhật</th>
                    <th scope="col">Tùy chọn</th>
                </tr>
            </thead>

            <?php

                $sql = "SELECT * FROM PATIENT";

                $res = mysqli_query($conn, $sql);

                if(mysqli_num_rows($res)>0)
                {
                    while($row = mysqli_fetch_assoc($res)){
                        $ma = $row['patientid'];
                        $ten = $row['firstname'];
                        $ho = $row['lastname'];
                        $date = $row['dateofbirth'];
                        $gt = $row['gender'];
                        $phone = $row['mobile'];
                        $email = $row['email'];
                        $hei = $row['height'];
                        $wei = $row['weight'];
                        $mau = $row['blood_type'];
                        $tao = $row['created_on'];
                        $capnhat = $row['modified_on'];
            ?>

            <tr>
                <td class = "text-center"><?php echo $ma; ?></td>
                <td><?php echo $ten; ?></td>
                <td><?php echo $ho; ?></td>
                <td><?php echo $date; ?></td>
                <td><?php echo $gt; ?></td>
                <td><?php echo $phone; ?></td>
                <td><?php echo $email; ?></td>
                <td><?php echo $hei; ?></td>
                <td><?php echo $wei; ?></td>
                <td><?php echo $mau; ?></td>
                <td><?php echo $tao; ?></td>
                <td><?php echo $capnhat; ?></td>
                <td>
                    <a href="edit.php?patientid=<?php echo $ma; ?>" class="icon edit"><i class="fa fa-edit"></i></a>
                    <a href="delete.php?patientid=<?php echo $ma; ?>" class="icon delete"><i class="fa fa-backspace"></i></a>
                </td>
            </tr>

            <?php  
            }
        
    } 
    ?>
        </table>
    </div>
</div>

<?php include('link/footer.php'); ?>