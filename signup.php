<?php  include "includes/db.php"; ?>
 <?php  include "includes/header.php"; ?>
 
 
 <?php 
if(isset($_POST['signup'])){
    
    $new_firstname = $_POST['fname'];
    $new_lastname = $_POST['lname'];
    $new_user_email = $_POST['email'];
    $new_password = $_POST['password'];
    $new_user_mobno = $_POST['mobile_no'];
    $new_address = $_POST['address'];
    $new_user_gender = $_POST['gender'];

    // Get image name
$user_image = $_FILES['user_image']['name'];

  // image file directory
$target = "images/".basename($user_image);
  
move_uploaded_file($_FILES['user_image']['tmp_name'], $target);
      
    
    $new_user_email = mysqli_real_escape_string($connection,$new_user_email);
    $new_password = mysqli_real_escape_string($connection,$new_password);
            
    $query="SELECT user_randSalt FROM users ";
    $select_randSalt_query= mysqli_query($connection,$query);
    
    if(!$select_randSalt_query){
        die("Query Failed".mysqli_error($connection));
    }
    
  $row=mysqli_fetch_assoc($select_randSalt_query);
        
   $randSalt=$row['user_randSalt'];
    $new_password=crypt($new_password,$randSalt);


    
    
    if(!empty($new_firstname) && !empty($new_lastname) && !empty($new_user_email) && !empty($new_password) ){
    
    $query= " INSERT INTO users(user_fname,user_lname,user_mob_no,user_email,user_password,user_gender,user_address,user_image) ";

 $query.= " VALUES('{$new_firstname}','{$new_lastname}','{$new_user_mobno}','{$new_user_email}','{$new_password}','{$new_user_gender}','{$new_address}','{$user_image}') ";    

$register_new_user=mysqli_query($connection,$query);
    if(!$register_new_user){
       die("Query Failed".mysqli_error($connection) . ' ' .mysqli_errno($connection));
    }
        
    echo"<script>alert('Thank you. Please login to see your profile.')</script>"; 
        
  
    

    }
    else{
 
    echo"<script>alert('Field Cannot Be Empty.')</script>";
    
    }

    
    
}


?>

<form class="signup" action="" method="post"  autocomplete="off" enctype="multipart/form-data">
  <h1>Create account</h1>
  <h2>Already have an account? <a href="login.php"><span>Sign in</span></a></h2>

  <div class="signup__field">
    <input class="signup__input" type="text" name="fname" id="fname" required />
    <label class="signup__label" for="fname">First Name</label>
  </div>
  <div class="signup__field">
    <input class="signup__input" type="text" name="lname" id="lname" required />
    <label class="signup__label" for="lname">Last Name</label>
  </div>
  <div class="signup__field">
    <input class="signup__input" type="text" name="email" id="email" required />
    <label class="signup__label" for="email">Email</label>
  </div>

  <div class="signup__field">
    <input class="signup__input" type="password" name="password" id="password" required />
    <label class="signup__label" for="password">Password</label>
  </div>
  <div class="signup__field">
    <input class="signup__input" type="text" name="mobile_no" id="mobileno" required />
    <label class="signup__label" for="mobileno">Mobile No</label>
  </div>
  <div class="signup__field">
    <input class="signup__input" type="text" name="address" id="address" required />
    <label class="signup__label" for="address">Address</Address></label>
  </div>
  <div class="signup__field">
  <lebel class="signup__label_image" for="gender">Gender</lebel> 
    <select class="signup__input" name="gender" id="gender" required >
   <option value='Male'>Male</option>     
   <option value='Female'>Female</option>  
   <option value='Do not prefer to say'>Do not prefer to say</option>   
    </select>
    </div>
  <div class="signup__field">  
    <lebel class="signup__label_image" for="user_image">Image</lebel>  
    <input class="signup__input" type="file" name="user_image" > 
  </div>

  <input class="submit_button"type="submit" name="signup" id="btn-login" value="Sign up">
</form>
