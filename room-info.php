    <main class="main-content clearfix two-column">
        <div class="container">
            <div class="row">
                <div class="col-xs-12 col-sm-4">
                    <figure class="thumbnail">
                    <img src="<?php echo base_url('assets/images/stethoscope.jpg'); ?>" alt="stethoscope">
                    </figure>
                </div>
                <div class="col-xs-12 col-sm-6 col-sm-offset-2 form-right">
                    <h2 class="text-center">Room Info</h2>
                     <form class="form-horizontal">
                         
  <div class="form-group">
    <label class="control-label col-sm-4" for="roomNo">Room No:</label>
    <div class="col-sm-8">
      <input type="text" class="form-control" id="roomNo" placeholder="Room No">
    </div>
  </div>
  <div class="form-group">
    <label class="control-label col-sm-4" for="pwd">Password:</label>
    <div class="col-sm-8">
         <label for="roomType">Room Type:</label>
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
   