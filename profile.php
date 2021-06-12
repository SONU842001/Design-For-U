<?php  include "includes/db.php"; ?>
<?php ob_start(); ?>
<?php session_start(); ?>
<?php if(isset($_SESSION['user_email'])){
$query="SELECT * FROM users WHERE user_id = '{$_SESSION['user_id']}' ";
$selct_profile_query = mysqli_query($connection,$query);
while($row=mysqli_fetch_assoc($selct_profile_query)){
        $user_id = $row['user_id'];
        $user_firstname = $row['user_fname'];
        $user_lastname = $row['user_lname'];
        $user_email = $row['user_email'];
        $user_image = $row['user_image'];
        $user_mobno = $row['user_mob_no'];
        $user_address = $row['user_address'];
        $user_gender = $row['user_gender'];
        $user_name=$user_firstname." ".$user_lastname;
}
}
?>


<!DOCTYPE html>
<HTML>
<HEAD>
<TITLE>Profile Page</TITLE>
</HEAD>
<BODY>
<div style="overflow: hidden;">
<h1 style="float: left;" ><b>My Profile</b></h1>
<h1 style="float: right;"><a href='includes/logout.php'>Logout</a></h1>
</div>

<hr style="height:5px;background-color:yellow">
<center><img src="images/<?php echo $user_image ?>" alt="Picture" border="5px"
width="10%" height="10%" align="middle"></center>
<h3 style="text-align:center"><?php echo $user_name ?></h3>
<BR>
<p style="margin-left:10%"><I>About me:</I></p>
<H3 style="margin-left:10%">Name: <?php echo $user_name  ?></h3>
<H3 style="margin-left:10%">Gender: <?php echo $user_gender ?></h3>
<H3 style="margin-left:10%">Mobile Number: <?php echo $user_mobno ?></h3>
<H3 style="margin-left:10%">Email: <?php echo $user_email ?></h3>
<H3 style="margin-left:10%">Address: <?php echo $user_address ?>
</BODY>
</HTML>