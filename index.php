<?php
include("layout/config.php");
session_start();
if(isset($msg) && $msg == 2){
    session_destroy();
    $error_message = "Please login.";
}
if(isset($_SESSION['user_data'])&& !empty($_SESSION['user_data'])) {
	header("location: manage.php");	exit;
}
if(isset($username) && isset($password)) {
    $message_display=''; 
    if(trim($username)=='')
        $message_display .='User Name cannot be empty<br/>';
    if($password=='')
        $message_display .='Password cannot be empty<br/>';
    if($message_display == "") { 
    $enc_password=base64_encode($password);
    $sql="SELECT * FROM ".ADMIN_TABLE." WHERE username = '".$username."' AND password = '".$enc_password."'";
    if(!$result = $mysqli->query($sql)){
        die('There was an error running the query [' . $mysqli->error . ']');
    } else if($result->num_rows == 1){
        session_start();
        $row = $result->fetch_assoc();
        $_SESSION['user_data']["username"] = $row['username'];
        $_SESSION['user_data']["email_address"] = $row['email_address'];
        $_SESSION['user_data']["first_name"] = $row['first_name'];
        $_SESSION['user_data']["last_name"] = $row['last_name']; 
        header('Location:manage.php');exit;        
    }else {        
       $message_display.= "Login faild. Please try again.";
    }
    }
}

/*if (isset($logout_message)) {
echo "<div class='message'>";
echo $logout_message;
echo "</div>";
}
?>
<?php
if (isset($message_display)) {
echo "<div class='message'>";
echo $message_display;
echo "</div>";
}*/
include("layout/header.php");
?>
    <main class="main-content clearfix two-column">
        <div class="container">
            <div class="row">
                <div class="col-sm-12 col-md-4">
                    <figure class="thumbnail">
                    <img src="assets/images/stethoscope.jpg" alt="stethoscope">
                    </figure>
                </div>
                <div class="col-sm-12 col-md-6 col-md-offset-2 form-right">
<?php
echo "<div class='error_msg'>";
if (isset($error_message)) {
echo $error_message;
}
//echo validation_errors();
echo "</div>";
if (isset($message_display)) {
echo "<div class='message'>";
echo $message_display;
echo "</div>";
}
?>
<h2 class="text-center">Login</h2>
<form class="form-horizontal" name="login" method="post" action="index.php">
                         
  <div class="form-group">
    <label class="control-label col-sm-4" for="email">USER NAME:</label>
    <div class="col-sm-8">
        <input type="text" class="form-control" id="username" name="username" placeholder="Enter User Name">
    </div>
  </div>
  <div class="form-group">
    <label class="control-label col-sm-4" for="pwd">PASSWORD:</label>
    <div class="col-sm-8">
      <input type="password" class="form-control" id="password" name="password" placeholder="Enter Password">
    </div>
  </div>
  
  <div class="form-group">
    <div class="col-sm-offset-4 col-sm-8">
      <button type="submit" class="btn btn-primary">LOGIN</button>      
      <a href="" class="btn btn-default">Forgot Password</a>
    </div>
  </div>
</form>
                </div>
            </div>
        </div>
    </main>
  <?php include("layout/footer.php");?> 