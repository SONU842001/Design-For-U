<?php  include "includes/db.php"; ?>
 <?php  include "includes/header.php"; ?>


<?php 
if(isset($_POST['login'])){
$user_email =$_POST['email']; 
$password =$_POST['password'];

$user_email =mysqli_real_escape_string($connection,$user_email);
$password =mysqli_real_escape_string($connection,$password);    
    
$query= "SELECT * FROM users WHERE user_email = '{$user_email}' " ;
$select_user_query = mysqli_query($connection,$query);
    if(!$select_user_query){
        die("Query Failed" .mysqli_error($connection));
    }
    
    
    while($row=mysqli_fetch_assoc($select_user_query)){
        $db_user_id = $row['user_id'];
        $db_user_password = $row['user_password'];
        $db_user_firstname = $row['user_fname'];
        $db_user_lastname = $row['user_lname'];
        $db_user_email = $row['user_email'];
        $db_user_mob_no = $row['user_mob_no'];
        $db_user_address = $row['user_address'];
        $db_user_image = $row['user_image'];
        $db_user_gender = $row['user_gender'];
    }
    
       $password = crypt($password,$db_user_password);
    
    if($username === $db_username && $password === $db_user_password){
        $_SESSION['user_id']=$db_user_id;
        $_SESSION['user_email']=$db_user_email;

        
        header("Location: index.php");
    }
    else{
        header("Location: login.php");
    }
    
    
}

?>






<form class="signup" action="" method="post" autocomplete="off"enctype="multipart/form-data">
  <h1>Login</h1>
  

  <div class="signup__field">
    <input class="signup__input" type="text" name="email" id="email" required />
    <label class="signup__label" for="email">Email</label>
  </div>
  <div class="signup__field">
    <input class="signup__input" type="password" name="password" id="password" required />
    <label class="signup__label" for="password">Password</label>
  </div>

  <input class="submit_button"type="submit" name="login" id="btn-login" value="Login">
  <h2 style="margin-top:40px">Don't have an account? <a href="signup.php"><span>Register</span></a></h2>
</form>



