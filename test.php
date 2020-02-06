<?php
require 'db.php';
$message = '';
if (isset($_POST['name']) && isset($_POST['email'])){
    $email = $_POST['email'];
    $password = $_POST['password'];
    $citizen_id = $_POST['citizen_id'];
    $name = $_POST['name'];
    $lastname = $_POST['lastname']; 
    $sql = 'INSERT INFO people(email, password, citizen_id, name, lastname) VALUES(:name, :email, :password, :citizen_id, :name , :lastname)';
    $statement = $connection->member($sql);
    if($statement->execute([':email' => $email, 'password' => $password, 'citizen_id' => $citizen_id, 'name' => $name, 'lastname' => $lastname])){
        $message = 'สมัครสำเร็จ';
    }

}
?>
    <?php require 'header.php'; ?>
    <div class = "continer">
    <div class = "card mt-3">
    <div class = "card-header">
        <h2>Rigister</h2>
    </div>
    <div class = "card-body"></div>
    <?php if(!empty($message)): ?>
        <div class = "alert alert-success">
            <?= $messge; ?>
        </div>
    <?php endif; ?>
        <form method = "post">
            <div class = "form-group">    
                <input type = "email" name ="email" class = "form-control"name = 'email' placeholder = 'Email' > 
            </div>
            <div class = "form-group">     
                <input type = "password" name ="password" class = "form-control"name = 'password' placeholder = 'Password'> 
            </div>
            <div class = "form-group">    
                <input type = "citizen_id" name ="citizen_id" class = "form-control"name = 'vitizen_id' placeholder = 'Citizen_id'> 
            </div>
            <div class = "form-group">     
                <input type = "name" name ="name" class = "form-control" name = 'name' placeholder = 'Name'> 
            </div>
            <div class = "form-group">      
                <input type = "lastname" name ="lastname" class = "form-control"name = 'lastname' placeholder = 'Lastname'> 
            </div>
            <div class = "form-group">
                <button type = "submit" class = "btn btn-info ">Sign up</button>
            </div>
              
        </form>
    </div>
    </div>
    </div>


    <?php require 'footer.php'; ?>