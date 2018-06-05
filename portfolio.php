<?php
include("layout/config.php");
include("layout/session.php");
include("layout/header.php");?>
<main class="main-content clearfix two-column">
    <div class="container">
        <div class="row">
            <h2 class="text-center">Patient Portfolio</h2>
            <div class="col-sm-12 col-md-12">
                <div class="row">
                    <form class="form-horizontal">
                        <div class="col-xs-12 col-sm-6">
                            <div class="form-group">
                                <label class="control-label col-sm-4" for="roomNo">Registration Number:</label>
                                <div class="col-sm-8">                                   
                                    <input type="text" class="form-control" id="roomNo" placeholder="Registration Number">
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="control-label col-sm-4" for="Name">Name:</label>                                 <div class="col-sm-8">                                                                  
                                    <input type="text" class="form-control" id="Name" placeholder="Name">                               
                                </div>
                            </div>
                        </div>
                        <div class="col-xs-12 col-sm-6">
                            <div class="form-group">
                                <div class="col-sm-8">
                                    <button type="submit" class="btn btn-primary">Submit</button>                                   
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>

            <div class="col-sm-12 col-md-12">
                <div class="row">

                    <div class="tabs_section">
                        <form class="form-horizontal">
                            <ul class="nav nav-tabs">
                                <li class="active"><a data-toggle="tab" href="#home">Test</a></li>
                                <li><a data-toggle="tab" href="#menu1">Medicine Prescribed</a></li>
                                <li><a data-toggle="tab" href="#menu2">Diet Advice</a></li>    
                            </ul>

                            <div class="tab-content">
                                <div id="home" class="tab-pane fade in active">
                                    <div class="col-xs-12 col-sm-12">
                                        <div class="row">
                                            <div class="col-xs-12 col-sm-4">
                                                <div class="form-group">
                                                    <label class="control-label col-sm-4" for="Name">&nbsp;</label>
                                                    <div class="col-sm-8">
                                                        <div class="checkbox">
                                                            <label><input type="checkbox" value="">Blood Test</label>
                                                        </div>
                                                        <div class="checkbox">
                                                            <label><input type="checkbox" value="">X-Ray</label>
                                                        </div>
                                                        <!--<div class="checkbox disabled">
                                                            <label><input type="checkbox" value="" disabled>ECG</label>
                                                        </div>-->
                                                    </div>
                                                </div>                      
                                            </div>
                                            <div class="col-xs-12 col-sm-6">
                                                <div class="form-group">
                                                    <label class="control-label col-sm-4" for="Name">Other Test:</label>                                 
                                                    <div class="col-sm-8">                                                                  
                                                        <input type="text" class="form-control" id="Name" placeholder="Text">                               
                                                    </div>
                                                </div>                      
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-xs-12 col-sm-12">
                                                <div class="form-group">
                                                    <label class="control-label col-sm-2" for="Name">Remark:</label>                                 <div class="col-sm-8">                                                                  
                                                        <input type="text" class="form-control" id="Name" placeholder="Remark">                               
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div id="menu1" class="tab-pane fade">      
                                    <div class="row">
                                            <div class="col-xs-12 col-sm-12">
                                                <div class="form-group">
                                                                                  
                                                    <div class="col-sm-8">                                                                  
                                                        <textarea name="textarea" style="width:600px; height: 150px">Lorem Ipsum is simply dummy text of the printing and typesetting industry.</textarea>                             
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                </div>
                                <div id="menu2" class="tab-pane fade">      
                                    <div class="form-group">
                                                                                  
                                                    <div class="col-sm-8">                                                                  
                                                        <textarea name="textarea" style="width:600px; height: 150px">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s</textarea>                             
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
                <div class="form-group">
                    <div class="col-sm-2">
                        <button type="submit" class="btn btn-primary btn-block">Edit</button>                                   
                    </div>
                </div>
            </div>
            </div>
        </div>
        </div>
    </div>
</main>
   <?php include("layout/footer.php");?>   