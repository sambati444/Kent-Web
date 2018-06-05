<?php
include("layout/config.php");
include("layout/session.php");
include("layout/header.php");?>
    <main class="main-content clearfix two-column">
        <div class="container">
            <div class="row">
                <div class="col-xs-12">
                    <h2 class="text-center">Out Patient Billing</h2>
         <form class="form-horizontal reg-form no-border">
          <div class="row">
              <div class="form-group col-xs-12 col-sm-4 ">
                <label class="control-label col-xs-4" for="patientID">Bill No:</label>
                <div class="col-xs-8">
                  <input type="text" class="form-control" id="patientID" placeholder="Bill No">
                </div>
              </div>
              <div class="form-group col-xs-12 col-sm-4 pull-right">
                <label class="control-label col-xs-4" for="patientID">Date:</label>
                <div class="col-xs-8">
                  <input type="date" class="form-control" id="patientID" placeholder="1/1/16">
                </div>
              </div>
             </div>
          <div class="row">
          <div class="has-border">
              <!--left-->
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
                
         
            </div>
              <!--middle-->
            <div class="col-xs-12 col-sm-6">
                <div class="row">
                    
                    <div class="form-group">
                <label class="control-label col-xs-12 col-sm-4" for="patientID">Gender:</label>
                <div class="col-xs-12 col-sm-8">
                  <label class="radio-inline"><input type="radio" name="optradio">Male</label>
<label class="radio-inline"><input type="radio" name="optradio">Female</label>
                </div>
              </div>
               
                </div>
                 <div class="row">
                <div class="form-group">
                <label class="control-label col-xs-4" for="patientID">Date of Consultation:</label>
                <div class="col-xs-4">
                  <input type="date" class="form-control" id="patientID" placeholder="1/1/16">
                </div>
              </div>
              </div>
                
                
</div>

             </div>
              </div>
             <div class="row">
                 <div class="col-xs-12 col-md-9">
                     <div class="has-border">
                <div class="col-xs-12 col-sm-6 col-sm-offset-3">
                
                <div class="form-group">
                <label class="control-label col-xs-12 col-sm-5" for="patientID">Doctor Fees:</label>
                <div class="col-xs-12 col-sm-7">
                  <input type="text" class="form-control" id="patientID" placeholder="Doctor Fees">
                </div>
              </div>
                <div class="form-group">
                <label class="control-label col-xs-12 col-sm-5" for="patientID">Lab Charges:</label>
                <div class="col-xs-12 col-sm-7">
                  <input type="text" class="form-control" id="patientID" placeholder="Lab Charges">
                </div>
              </div>
                <div class="form-group">
                <label class="control-label col-xs-12 col-sm-5" for="patientID">Miscellaneous:</label>
                <div class="col-xs-12 col-sm-7">
                  <input type="text" class="form-control" id="patientID" placeholder="Miscellaneous Charges">
                </div>
              </div>
         
            </div>
                
                         </div>
                 </div>
           
               <!--right-->
            <div class="col-sm-12 col-md-3">
                <div class="form-group">
    <button type="button" class="btn btn-primary">Add</button>
    <button type="button" class="btn btn-primary">Save</button>
    <button type="button" class="btn btn-primary">Total</button>
 
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
        <th>Date Of Consultation</th>
        <th>Total Amout Due</th>
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
</form>
                </div>
            </div>
        </div>
    </main>
    <?php include("layout/footer.php");?>    