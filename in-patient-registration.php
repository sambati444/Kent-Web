<?php
include("layout/config.php");
include("layout/session.php");
include("layout/header.php");?>
    <main class="main-content clearfix two-column">
        <div class="container">
            <div class="row">
                <div class="col-xs-12">
                    <h2 class="text-center">In Patient Registration</h2>
         <form class="form-horizontal reg-form">
          <div class="row">
              <!--left-->
            <div class="col-sm-12 col-md-4">
                <div class="form-group">
                <label class="control-label col-xs-12 col-sm-4" for="patientID">Patient ID:</label>
                <div class="col-xs-12 col-sm-8">
                  <input type="text" class="form-control" id="patientID" placeholder="Patient ID">
                </div>
              </div>
                <div class="form-group">
                <label class="control-label col-xs-12 col-sm-4" for="patientID">Name:</label>
                <div class="col-xs-12 col-sm-8">
                  <input type="text" class="form-control" id="patientID" placeholder="Name">
                </div>
              </div>
                <div class="form-group">
                <label class="control-label col-xs-12 col-sm-4" for="patientID">Age:</label>
                <div class="col-xs-12 col-sm-8">
                  <input type="text" class="form-control" id="patientID" placeholder="Age">
                </div>
              </div>
                <div class="form-group">
                <label class="control-label col-xs-12 col-sm-4" for="patientID">Gender:</label>
                <div class="col-xs-12 col-sm-8">
                  <label class="radio-inline"><input type="radio" name="optradio">Male</label>
<label class="radio-inline"><input type="radio" name="optradio">Female</label>
                </div>
              </div>
            <div class="form-group">
                <label class="control-label col-xs-12 col-sm-4" for="patientID">Address:</label>
                <div class="col-xs-12 col-sm-8">
                  <input type="text" class="form-control" id="patientID" placeholder="Address">
                </div>
              </div>
                <div class="form-group">
                <label class="control-label col-xs-12 col-sm-4" for="patientID">Contact No:</label>
                <div class="col-xs-12 col-sm-8">
                  <input type="text" class="form-control" id="patientID" placeholder="Contact No">
                </div>
              </div>
            </div>
              <!--middle-->
            <div class="col-sm-12 col-md-6">
                <div class="row">
                    <div class="form-group">
                <label class="control-label col-xs-4" for="patientID">Room No:</label>
                <div class="col-xs-4">
                  <input type="text" class="form-control" id="patientID" placeholder="Room No">
                </div>
              </div>
               
                </div>
                 <div class="row">
                <div class="form-group">
                <label class="control-label col-xs-4" for="patientID">Registration Date:</label>
                <div class="col-xs-4">
                  <input type="date" class="form-control" id="patientID" placeholder="1/1/16">
                </div>
              </div>
                </div>
                <div class="table-responsive">          
  <table class="table table-striped">
    <thead>
      <tr>
        <th>Patient ID</th>
        <th>Name</th>
        <th>Age</th>
        <th>Gender</th>
        <th>Contact No</th>
        <th>Registration Date</th>
        <th>Room No</th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
      </tr>
        <tr>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
      </tr>
        <tr>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
      </tr>
        <tr>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
      </tr>
        <tr>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
      </tr>
        <tr>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
      </tr>
        <tr>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
      </tr>
        <tr>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
      </tr>
    </tbody>
  </table>
  </div>
</div>

              <!--right-->
            <div class="col-sm-12 col-md-2">
                <div class="form-group">
    <button type="button" class="btn btn-primary">Add</button>
    <button type="button" class="btn btn-primary">Save</button>
    <button type="button" class="btn btn-primary">Delete</button>
    <button type="button" class="btn btn-primary">Search</button>
    <button type="button" class="btn btn-primary">Close</button>
    <button type="button" class="btn btn-primary">Main Form</button>
  </div>
            </div>
              
            </div>
                         
                   
  
</form>
                </div>
            </div>
        </div>
    </main>
    <?php include("layout/footer.php");?>    