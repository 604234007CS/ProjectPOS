<?php
require 'db.php';
$message = '';
if (isset($_POST['name']) && isset($_POST['email'])){
    $birthday = $_POST['birthday'];
    $gender = $_POST['gender'];
    $address = $_POST['address'];
    $districts_id = $_POST['districts_id'];
    $business = $_POST['business'];
    $sql = "INSERT INTO member(member_birthday,gender,address,districts_id,member_business)
    VALUES('$birthday',' $gender','$address','$districts_id' ,'$business')";
    $statement = $connection->prepare($sql);
    echo $sql;
    if($statement->execute())   {
        $message = 'บันทึกสำเร็จ';
    }

}
?>
    <?php require 'header.php'; ?>
    <div class = "continer">
    <div class = "card mt-3">
    <div class = "card-header">
        <h2>ข้อมูลผู้ใช้</h2>
    </div>
    <div class = "card-body"></div>
    <?php if(!empty($message)): ?>
        <div class = "alert alert-success">
            <?= $message; ?>
        </div>
    <?php endif; ?>
        
        <form method="post">
        
        <div class="form-group">  
          <input type="Date" name="birthday" id="birthday" class="form-control" placeholder = 'วัน/เดือน/ปีเกิด'></div>
        <div class="form-group"> 
          <input type="text" name="address" id="address" class="form-control" placeholder = 'บ้านเลขที่ ถนน อาคาร หมู่บ้าน'></div>
          <div class="form-group">
          <input type="text" name="business" id="business" class="form-control" placeholder = 'ชื่อธุรกิจ'></div>   
        <div class="form-group">
          <button type="submit" class="btn btn-info">บันทึก</button></div>
      </form>
    </div>
    </div>
    </div>


    <?php require 'footer.php'; ?>