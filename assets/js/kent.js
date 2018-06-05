jQuery("document").ready(function(){
    jQuery("#dp_dob").datepicker();
    jQuery("body").click(function(){
        if(jQuery(".navbar-collapse").is(":visible")){
            jQuery('.navbar-collapse').collapse('hide');
        }
    })        
});