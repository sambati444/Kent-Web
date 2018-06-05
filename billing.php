<?php
include("layout/config.php");
include("layout/session.php");
include("layout/header.php");?>
    <main class="main-content clearfix two-column">
        <div class="container">
            <div class="row">
                <div class="col-xs-12">
                    <h2 class="text-center">Patient Billing</h2>
         <form class="form-horizontal reg-form no-border">
          <!--<div class="row">
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
             </div>-->
          <div class="row">
          <div class="has-border">
              <!--left-->
              <div class="row">
              <div class="col-xs-12 col-sm-4">
                <div class="form-group">
                <label class="control-label col-xs-12 col-sm-4" for="patientID">Registration Number:</label>
                <div class="col-xs-12 col-sm-8">
                  <input type="text" class="form-control" id="patientID" placeholder="Patient ID">
                </div>
              </div>
              </div> 
              <div class="col-xs-12 col-sm-4">
                <div class="form-group">
                <label class="control-label col-xs-12 col-sm-4" for="patientID"><button type="button" class="btn btn-primary">Submit</button></label>
                
              </div>
              </div>
              <div class="col-xs-12 col-sm-4">
                
              </div> 
              </div>
              <div class="row">
                 <div class="col-xs-12 col-sm-4">
                <div class="form-group">
                <label class="control-label col-xs-12 col-sm-4" for="patientID">Name:</label>
                <div class="col-xs-12 col-sm-8">
                  <input type="text" class="form-control" id="patientID" placeholder="Text">
                </div>
              </div>
              </div>
                  <div class="col-xs-12 col-sm-4">
                <div class="form-group">
                <label class="control-label col-xs-12 col-sm-4" for="patientID">Gender:</label>
                <div class="col-xs-12 col-sm-8">
                  <input type="text" class="form-control" id="patientID" placeholder="Text">
                </div>
              </div>
              </div> 
                  <div class="col-xs-12 col-sm-4">
                <div class="form-group">
                <label class="control-label col-xs-12 col-sm-4" for="patientID">Age:</label>
                <div class="col-xs-12 col-sm-8">
                  <input type="text" class="form-control" id="patientID" placeholder="Text">
                </div>
              </div>
              </div> 
              </div>
               
              <!--middle-->
            
             </div>
              </div>
             <div class="row">
                 <div class="col-xs-12 col-md-12">
                     <div class="has-border">
                <div class="col-xs-12 col-sm-6">
                <div class="form-group">
                <label class="control-label col-xs-12 col-sm-5" for="patientID">Consultation Fee:</label>
                <div class="col-xs-12 col-sm-7">
                  <input type="text" class="form-control" id="patientID" placeholder="Consultation Fee">
                </div>
              </div>
                <div class="form-group">
                <label class="control-label col-xs-12 col-sm-5" for="patientID">Test Fees:</label>
                <div class="col-xs-12 col-sm-7">
                  <input type="text" class="form-control" id="patientID" placeholder="Test Fees">
                </div>
              </div>
                <div class="form-group">
                <label class="control-label col-xs-12 col-sm-5" for="patientID">Medicine Fee:</label>
                <div class="col-xs-12 col-sm-7">
                  <input type="text" class="form-control" id="patientID" placeholder="Medicine Fee">
                </div>
              </div>
              <div class="form-group">
                <label class="control-label col-xs-12 col-sm-5" for="patientID">Room Fee:</label>
                <div class="col-xs-12 col-sm-7">
                  <input type="text" class="form-control" id="patientID" placeholder="Room Fee">
                </div>
              </div>      
              <div class="form-group">
                <label class="control-label col-xs-12 col-sm-5" for="patientID">Miscellaneous Fee:</label>
                <div class="col-xs-12 col-sm-7">
                  <input type="text" class="form-control" id="patientID" placeholder="Meseclinous Fee">
                </div>
              </div>  
         
            </div>
                <div class="col-xs-12 col-sm-6">
                <div class="form-group">
                <label class="control-label col-xs-12 col-sm-5" for="patientID">Total:</label>
                <div class="col-xs-12 col-sm-7">
                  <input type="text" class="form-control" id="patientID" placeholder="Text Fee">
                </div>
              </div>
              </div>
                         </div>
                 </div>
           
               <!--right-->
           <div class="row">    
            <div class="col-sm-12 col-md-3">
                <div class="form-group">
    <button type="button" class="btn btn-primary">Save</button>
                </div>
            </div>
               <div class="col-sm-12 col-md-3">
                <div class="form-group">
    <button type="button" class="btn btn-primary">Edit</button>
                </div>
               </div>
               
               <div class="col-sm-12 col-md-3">
                <div class="form-group">
    <button type="button" class="btn btn-primary">Print</button>
 
  </div>
            </div>
            </div>
            </div>       
  
</form>
                </div>
            </div>
        </div>
    </main>
   <?php include("layout/footer.php");?>   