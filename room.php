<?php
include("layout/config.php");
include("layout/session.php");
include("layout/header.php");?>
<main class="main-content clearfix two-column">
        <div class="container">
            <div class="row">
                <div class="col-sm-12 col-md-4">
                    <figure class="thumbnail">
                        <img src="assets/images/stethoscope.jpg" alt="stethoscope">
                    </figure>
                </div>
                <div class="col-sm-12 col-md-6 col-md-offset-2 form-right">
                    <h2 class="text-center">Room Info</h2>
                    <form class="form-horizontal" action="manage.php">
                         
  <div class="form-group">
    <label class="control-label col-sm-4" for="roomNo">Room No:</label>
    <div class="col-sm-8">
      <input type="text" class="form-control" id="roomNo" placeholder="Room No">
    </div>
  </div>
  <div class="form-group">
    <label class="control-label col-sm-4" for="roomType">Room Type:</label>
    <div class="col-sm-8">
  <select class="form-control" id="roomType">
    <option>Type</option>
    <option>AC</option>
    <option>General</option>
  </select>
    </div>
  </div>
  
  <div class="form-group">
    <div class="col-sm-offset-4 col-sm-8">
      <button type="submit" class="btn btn-primary">Search</button>
        <button type="reset" class="btn btn-default">Clear</button>
    </div>
  </div>
</form>
                </div>
            </div>
        </div>
    </main>
     <?php include("layout/footer.php");?>   