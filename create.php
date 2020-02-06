<?php
require 'db.php';
$message = '';
if (isset($_POST['name']) && isset($_POST['email'])){
    $email = $_POST['email'];
    $password = $_POST['password'];
    $name = $_POST['name'];
    $lastname = $_POST['lastname']; 
    $sql = "INSERT INTO member(email, password, member_name, member_lastname)
    VALUES('$email', '$password', '$name' , '$lastname')";
    $statement = $connection->prepare($sql);
    echo $sql;
    if($statement->execute())   {
        $message = 'สมัครสำเร็จ';
    }

}
?>
    <?php require 'header.php'; ?>
    <div class = "continer">
    <div class = "card mt-3">
    <div class = "card-header">
        <h2>สมัครบันชีผู้ใช้</h2>
    </div>
    <div class = "card-body"></div>
    <?php if(!empty($message)): ?>
        <div class = "alert alert-success">
             <?= $message; ?>
        </div>
    <?php endif; ?>

        <form method="post">
        
        <div class="form-group">  
          <input type="email" name="email" id="email" class="form-control" placeholder = 'อีเมล'></div>
        <div class="form-group">
          <input type="password" name="password" id="password" class="form-control" placeholder = 'รหัสผ่าน'></div>
        <div class="form-group"> 
          <input type="text" name="name" id="name" class="form-control" placeholder = 'ชื่อ'></div>
          <div class="form-group">
          <input type="text" name="lastname" id="lastname" class="form-control" placeholder = 'นามสกุล'></div>   
        <div class="form-group">
          <button type="submit" class="btn btn-info">สมัคร</button></div>
      </form>
        
      


    </div>
    </div>
    </div>


    <?php require 'footer.php'; ?>