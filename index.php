<?php
require 'db.php';
$sql = 'SELECT * FROM member';
$statement = $connection->prepare($sql);
$statement->execute();
$member = $statement->fetchAll(PDO::FETCH_OBJ);
 ?>
 
<?php require 'header.php'; ?>
<div class="container">
  <div class="card mt-5">
    <div class="card-header">
      <h2>ข้อมูลสมาชิก</h2>
    </div>
    <div class="card-body">
      <table class="table table-bordered">
        <tr>
            <!-- ชื่อที่จะเเสดงในตาราง -->
          <th>Name</th>
          <th>Lastname</th>
          <th>Email</th>
          <th>Action</th>
        </tr>
        <?php foreach($member as $person): ?>
          <tr>
            
             <!-- สร้างใชื่อห้เหมือนในฐานข้อมูล -->
            <td><?= $person->member_name; ?></td> 
            <td><?= $person->member_lastname; ?></td> 
            <td><?= $person->email; ?></td>
            <td>
              <a href="edit.php?id=<?= $person->id ?>" class="btn btn-info">Edit</a>
              <a onclick="return confirm('ต้องการลบหรือไม่?')" 
              href="delete.php?id=<?= $person->id ?>" class='btn btn-danger'>Delete</a>
            </td>
          </tr>
        <?php endforeach; ?>
      </table>
    </div>
  </div>
</div>
<?php require 'footer.php'; ?>