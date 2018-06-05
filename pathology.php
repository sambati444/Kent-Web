<?php
include("layout/config.php");
include("layout/session.php");
include("layout/header.php");?>
    <main class="main-content clearfix two-column">
        <div class="container">
            <div class="row">
                <div class="col-xs-12 col-sm-4">
                    <figure class="thumbnail">
                    <img src="assets/images/pathology.jpg" alt="stethoscope">
                    </figure>
                </div>
                <div class="col-xs-12 col-sm-8 col-sm-offset form-right">
                    <h2 class="text-center">Pathology</h2>
                     <form class="form-horizontal">
                       <div class="row">
                        <div class="col-xs-12 col-sm-6">
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
                <label class="control-label col-xs-12 col-sm-4" for="gender">Gender:</label>
                <div class="col-xs-12 col-sm-8">
                 <select id="gender">
                     <option>Male</option>
                     <option>Female</option>
                 </select>
                  
                </div>
              </div>
         
            </div>
              <!--middle-->
            <div class="col-xs-12 col-sm-6">
                 <div class="form-group">
                <label class="control-label col-xs-12 col-sm-5" for="testname">Test Name:</label>
                <div class="col-xs-12 col-sm-7">
                 <select id="testname">
                     <option>Test 1</option>
                     <option>Test 2</option>
                     <option>Test 3</option>
                     <option>Test 4</option>
                 </select>
                  
                </div>
              </div>
                <div class="form-group">
                <label class="control-label col-xs-12 col-sm-5" for="description">Description:</label>
                <div class="col-xs-12 col-sm-7">
                    <textarea type="date" class="form-control" id="description" placeholder="Enter the test descripton here.."></textarea>
                </div>
              </div>
              </div>
                
                
                       </div>  
                 <div class="col-xs-12">
                <div class="form-group text-right">
    <button type="button" class="btn btn-primary">Search</button>
    <button type="button" class="btn btn-primary">Save</button>
 
  </div>
  </div>
</form>
                </div>
            </div>
        </div>
    </main>
    <?php include("layout/footer.php");?>   