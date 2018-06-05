<?php
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
?>
<h2 class="text-center">Login</h2>
<form class="form-horizontal" name="login" method="post" action="">
                         
  <div class="form-group">
    <label class="control-label col-sm-4" for="email">USER NAME:</label>
    <div class="col-sm-8">
        <input type="email" class="form-control" id="username" name="username" placeholder="Enter User Name">
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
      <!--<button type="submit" class="btn btn-primary">Login</button>-->
      <a href="manage.php" class="btn btn-primary">LOGIN</a>
      <a href="" class="btn btn-default">Forgot Password</a>
    </div>
  </div>
</form>
                </div>
            </div>
        </div>
    </main>
  <?php include("layout/footer.php");?> 