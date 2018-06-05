<?php
include("layout/config.php");
include("layout/session.php");
include("layout/header.php");?>
<main class="main-content clearfix two-column">
    <div class="container">
        <div class="row">
            <h2 class="text-center">Value added services</h2>
            
            <div class="col-sm-12 col-md-12">
                <div class="row">

                    <div class="tabs_section">
                        <form class="form-horizontal">
                            <ul class="nav nav-tabs">
                                <li class="active"><a data-toggle="tab" href="#home">Doctor Appointment</a></li>
                                <li><a data-toggle="tab" href="#menu1">Specialist</a></li>                                 
                            </ul>

                            <div class="tab-content">
                                <div id="home" class="tab-pane fade in active">
                                    <div class="col-xs-12 col-sm-12">
                                        <div class="row">
                                            <div class="col-xs-12 col-sm-6">
                                                <div class="form-group">
                                                    <label class="control-label col-sm-4" for="Name">Patient Id</label>
                                                    <div class="col-sm-8">
                                                        <input type="text" class="form-control" id="Name" placeholder="Patient Id">
                                                    </div>
                                                </div>
                                                 <div class="form-group">
                                                    <label class="control-label col-sm-4" for="Name">Doctor Id</label>
                                                    <div class="col-sm-8">
                                                        <input type="text" class="form-control" id="Name" placeholder="Doctor Id">
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label class="control-label col-sm-4" for="Name">Gender</label>
                                                    <div class="col-sm-4">
                                                        <input type="radio" > Male
                                                    </div>
                                                    <div class="col-sm-4">
                                                        <input type="radio"> Female
                                                    </div>
                                                </div>
                                                 <div class="form-group">
                                                    <label class="control-label col-sm-4" for="Name">Contact No</label>
                                                    <div class="col-sm-8">
                                                        <input type="text" class="form-control" id="Name" placeholder="Contact Number">
                                                    </div>
                                                </div> 
                                            </div>
                                            <div class="col-xs-12 col-sm-6">
                                                <div class="form-group">
                                                    <label class="control-label col-sm-4" for="Name">Doctor Name:</label>                                 
                                                    <div class="col-sm-8">                                                                  
                                                        <input type="text" class="form-control" id="Name" placeholder="Doctor Name">                               
                                                    </div>
                                                </div>                      
                                            </div>
                                            <div class="col-xs-12 col-sm-6">
                                                <div class="form-group">
                                                    <label class="control-label col-sm-4" for="Name">Appointment Date:</label>                                 
                                                    <div class="col-sm-8">                                                                  
                                                        <div class="input-append date" id="dp_dob" data-date="12-02-2012" data-date-format="dd-mm-yyyy">
                                                            <input class="date-field form-control" size="16" type="text" value="12-02-2012" readonly="" style="width: 90%">
				<span class="add-on"><span class="glyphicon glyphicon-th"></span><i class="icon-th"></i></span>
                              
			  </div>                               
                                                    </div>
                                                </div>                      
                                            </div>
                                        </div>
                                        
                                    </div>
                                </div>
                                <div id="menu1" class="tab-pane fade">      
                                    <div class="row">
                                            <div class="col-xs-12 col-sm-6">
                                                <div class="form-group">
                                                    <label class="control-label col-sm-4" for="Name">Type</label>
                                                    <div class="col-sm-8">
                                                        <select name="test" class="form-control">
                                                            <option>List of specialities</option>
                                                            <option>option1</option>
                                                            <option>option2</option>
                                                        </select>
                                                    </div>
                                                </div>
                                                 
                                                <div class="form-group">
                                                    <label class="control-label col-sm-4" for="Name">Gender Preference</label>
                                                    <div class="col-sm-4">
                                                        <input type="radio" > Male
                                                    </div>
                                                    <div class="col-sm-4">
                                                        <input type="radio"> Female
                                                    </div>
                                                </div>
                                                 <div class="form-group">
                                                    <label class="control-label col-sm-4" for="Name">Doctor Available</label>
                                                    <div class="col-sm-8">
                                                        <select name="test" class="form-control">
                                                            <option>List of Doctors</option>
                                                            <option>option1</option>
                                                            <option>option2</option>
                                                        </select>
                                                    </div>
                                                </div> 
                                            </div>
                                            <div class="col-xs-12 col-sm-6">
                                                <div class="form-group">
                                                    <label class="control-label col-sm-4" for="Name">Consultation Fees:</label>                                 
                                                    <div class="col-sm-8">                                                                  
                                                        <input type="text" class="form-control" id="Name" placeholder="USD">                               
                                                    </div>
                                                </div>                      
                                            </div>
                                            <div class="col-xs-12 col-sm-6">
                                                <div class="form-group">
                                                    <label class="control-label col-sm-4" for="Name">Available Date:</label>                                 
                                                    <div class="col-sm-8">                                                                  
                                                        <div class="input-append date" id="dp_dob" data-date="12-02-2012" data-date-format="dd-mm-yyyy">
                                                            <input class="date-field form-control" size="16" type="text" value="12-02-2012" readonly="" style="width: 90%">
				<span class="add-on"><span class="glyphicon glyphicon-th"></span><i class="icon-th"></i></span>
                              
			  </div>                               
                                                    </div>
                                                </div>                      
                                            </div>
                                        </div>
                                </div>                                 
                            </div>    
                        </form>
                    </div> 


                </div>

            </div>
        <div class="col-sm-12 col-md-12">
        <p>&nbsp;</p>
            <div class="row">
            <div class="form-group">
                <label class="control-label col-sm-2" for="Name">
                    <button type="submit" class="btn btn-primary btn-block">Save</button>
                </label>                                
                <label class="control-label col-sm-2" for="Name">
                        <button type="submit" class="btn btn-primary btn-block">Edit</button>                                   
                    </label>
                    <label class="control-label col-sm-2" for="Name">
                        <button type="submit" class="btn btn-primary btn-block">Search</button>                                   
                    </label>

            </div>
            </div>
        </div>
        </div>
    </div>
</main>
   <?php include("layout/footer.php");?>   