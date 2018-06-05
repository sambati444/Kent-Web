<?php
include("layout/config.php");
include("layout/session.php");
include("layout/header.php");
$insert_message = "";
if(isset($_POST["patient_id"]) && !empty($_POST["patient_id"])) {
    $patient_id = $_POST["patient_id"];
    $first_name = $_POST["first_name"];
    $last_name = $_POST["last_name"];
    $gender = $_POST["gender"];
    $age = $_POST["age"];
    $contact_no = $_POST["contact_no"];
    $insurance_no = $_POST["insurance_no"];
    $reason = $_POST["reason"];
    
    
    
$sql = "INSERT INTO register (patient_id, first_name, last_name, address, gender, contact_number, insurance_number, reason, datetime)
VALUES ('$patient_id', '$first_name', '$last_name', '$gender', '$age', '$contact_no', '$insurance_no', '$reason', now())";

if ($mysqli->query($sql) === TRUE) {
    $insert_message = "New record created successfully";
} else {
    $insert_message = "Error: " . $sql . "<br>" . $mysqli->error;
}
}
?>
    <main class="main-content clearfix two-column">
        <div class="container">
            <div class="row">
                <div class="col-xs-10 col-md-offset-1">
                    <h2 class="text-center">Registration Form</h2>
                    <form class="form-horizontal reg-form" method="post" action="">
          <div class="row">
              <div class="text-center"><?php echo $insert_message;?></div>
              <!--left-->
            <div class="col-sm-12 col-md-8 col-md-offset-1">
                <div class="form-group">
                    <label class="control-label col-xs-12 col-sm-4" for="patient_id">Patient Id:</label>
                    <div class="col-xs-12 col-sm-8">
                        <input type="text" class="form-control" name="patient_id" id="patient_id" placeholder="Patient Id">
                    </div>
                </div>
                <div class="form-group">
                    <label class="control-label col-xs-12 col-sm-4" for="first_name">First Name:</label>
                    <div class="col-xs-12 col-sm-8">
                        <input type="text" class="form-control" name="first_name" id="first_name" placeholder="First Name">
                    </div>
                </div>
            <div class="form-group">
                <label class="control-label col-xs-12 col-sm-4" for="last_name">Last Name:</label>
                <div class="col-xs-12 col-sm-8">
                    <input type="text" class="form-control" name="last_name" id="last_name" placeholder="Last Name">
                </div>
            </div>
                <div class="form-group">
                <label class="control-label col-xs-12 col-sm-4" for="address">Address:</label>
                <div class="col-xs-12 col-sm-8">
                    <input type="text" class="form-control" name="address" id="address" placeholder="Address">
                </div>
              </div>
                <div class="form-group">
                <label class="control-label col-sm-4" for="gender">Gender:</label>
                <div class="col-sm-2">
                    <input type="radio" name="gender" value="Male" > Male
                </div>
                <div class="col-sm-2">
                    <input type="radio" name="gender" value="Female"> Female
                </div>
            </div>
               <div class="form-group">
                <label class="control-label col-xs-12 col-sm-4" for="age">Age:</label>
                <div class="col-xs-12 col-sm-8">
                    <input type="text" class="form-control" id="age" name="age" placeholder="Age">
                </div>
              </div>
              <!--<div class="form-group">
                <label class="control-label col-xs-12 col-sm-4" for="patientID">DOB:</label>
                <div class="col-xs-12 col-sm-8">
                    <div class="input-append date" id="dp_dob" data-date="12-02-2012" data-date-format="dd-mm-yyyy">
                        <input class="date-field form-control" size="16" type="text" value="12-02-2012" readonly="" width="90%">
				<span class="add-on"><span class="glyphicon glyphicon-th"></span><i class="icon-th"></i></span>
                              
			  </div>                    
                </div>
              </div>-->
                
                 <div class="form-group">
                <label class="control-label col-xs-12 col-sm-4" for="contact_no">Contact No:</label>
                <div class="col-xs-12 col-sm-8">
                    <input type="text" class="form-control" id="contact_no" name="contact_no" placeholder="Contact No">
                </div>
              </div>
                 <div class="form-group">
                <label class="control-label col-xs-12 col-sm-4" for="insurance_no">Primary Insurance Number:</label>
                <div class="col-xs-12 col-sm-8">
                    <input type="text" class="form-control" id="insurance_no" name="insurance_no" placeholder="Primary Insurance Number">
                </div>
              </div>
                <div class="form-group">
                <label class="control-label col-xs-12 col-sm-4" for="reason">Reasons for Visit:</label>
                <div class="col-xs-12 col-sm-8">
                    <input type="text" class="form-control" id="reason" name="reason" placeholder="Reasons for Visit">
                </div>
              </div>
                
               <!-- <div class="form-group">
                <label class="control-label col-xs-12 col-sm-4" for="patientID">Gender:</label>
                <div class="col-xs-12 col-sm-8">
                  <label class="radio-inline"><input type="radio" name="optradio">Male</label>
<label class="radio-inline"><input type="radio" name="optradio">Female</label>
                </div>
              </div>-->
            
               
            </div>
              <!--middle-->

              <!--right-->
            <div class="col-sm-12 col-md-2">
    <div class="form-group">
        <button type="submit" class="btn btn-primary">Save</button>
        <button type="button" class="btn btn-primary">Edit</button>
        <button type="reset" class="btn btn-primary">Reset</button>
    </div>
            </div>
              
            </div>
                         
                   
  
</form>
                </div>
            </div>
        </div>
    </main>
    <?php include("layout/footer.php");?>    