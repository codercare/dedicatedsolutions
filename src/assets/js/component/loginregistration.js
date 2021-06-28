import $ from 'jquery';


var $form = $("#wp_signup_form"),
    $successMsg = $("#message");
    $.validator.addMethod("letters", function (value, element) {
    return this.optional(element) || value == value.match(/^[a-zA-Z\s]*$/);
});

$form.validate({
  errorElement: "span",
  rules: {
    firstName: {
      required: true,
      minlength: 3,
      letters: true
    },
    lastName: {
        required: true,
        minlength: 3,
        letters: true
    },
    email: {
      required: true,
      email: true
    },
    userpassword:{
        required:true,
        minlength:4
    },
    confirmPassword:{
        required:true,
        equalTo: "#userpassword"
    }
  },
  messages: {
    firstName: "First name required",
    lastName: "Last name required",
    userpassword:"Password required",
    confirmPassword: "Confirm password same as password",
    email:{required:"Email address required",email:"Please specify a valid email address"},
  },
  submitHandler: function () {

    var action = 'register_action';
    
    var formfirstName = jQuery("#firstName").val();
    var formlastName = jQuery("#lastName").val();
    var formemail = jQuery("#email").val();
    var formaltEmail = jQuery("#altEmail").val();
    var formphone = jQuery("#phone").val();
    var formaltPhone = jQuery("#altPhone").val();

    var formcountry = jQuery("#country").val();
    var formstate = jQuery("#state").val();
    var formaddress = jQuery("#address").val();
    var formcity = jQuery("#city").val();
    var formzipCode = jQuery("#zipCode").val();
    var formcompanyName = jQuery("#companyName").val();
    var formcompanyUrl = jQuery("#companyUrl").val();

    var formpassword = jQuery("#userpassword").val();
    var formconfirmPassword = jQuery("#confirmPassword").val();
   
    var ajaxdata = {    
        action: action,
        firstName: formfirstName,
        lastName: formlastName,
        email: formemail,
        altEmail: formaltEmail,
        phone: formphone,
        altPhone: formaltPhone,
        country: formcountry,
        state: formstate,
        address: formaddress,
        city: formcity,
        zipCode: formzipCode,
        companyName: formcompanyName,
        companyUrl: formcompanyUrl,
        password: formpassword,
        confirmPassword: formconfirmPassword
    };
    

    jQuery.ajax({
        type : "post",
        dataType : "json",
        url : ajaxurl,
        data : ajaxdata,
        success: function(response) {
            if(response.success =="1") {
                
                jQuery("#message").removeClass('alert-danger').addClass('alert-success');
                jQuery("#msg").html(response.message);
                jQuery("#message").show();
                setTimeout(function(){
                    jQuery('#wp_signup_form').trigger("reset");                    
                    window.location.href = response.redirect_url;
                    jQuery("#message").hide();
                }, 5000);               
            }
            else{
                jQuery("#message").removeClass('alert-success').addClass('alert-danger');
                jQuery("#msg").html(response.message_data); 
            }            
        }
    });	
  }
});



var $loginform = $("#wp_login_form"),
    $loginMsg = $("#message");
    $.validator.addMethod("letters", function (value, element) {
    return this.optional(element) || value == value.match(/^[a-zA-Z\s]*$/);
});



$loginform.validate({
    errorElement: "span",
    rules: {
      userEmail: {
        required: true,
        email: true
      },
      password:{
          required:true,
          minlength:4
      }
    },
    messages: {
      userEmail: {required:"Login email required",email:"Please Valid email required"},
      password:{required:"Password required",minlength:"Password must be more then 4 digit"}
    },
    submitHandler: function () {
  
        var action = 'login_action';
    
        var userEmail = jQuery("#userEmail").val();
        var password = jQuery("#password").val();
        var remember = jQuery("#remember").val();
       
        var ajaxdata = {    
            action: action,
            userLogin: userEmail,
            password: password,
            remember: remember
        };
        
    
        jQuery.ajax({
            type : "post",
            dataType : "json",
            url : ajaxurl,
            data : ajaxdata,
            success: function(response) {
                if(response.success =="1") {    
                    // $loginMsg.show();    
                    jQuery("#message").removeClass('alert-danger').addClass('alert-success');
                    jQuery("#msg").html(response.message+' '+response.message_data);
                    jQuery("#message").show();
                    setTimeout(function(){
                        jQuery('#wp_login_form').trigger("reset");                    
                        window.location.href = response.redirect_url;
                        jQuery("#message").hide();
                    }, 3000);                     
                }
                else{
                    jQuery("#message").removeClass('alert-success').addClass('alert-danger');
                    jQuery("#msg").html(response.message_data); 
                    jQuery("#message").show();
                }            
            }
        });	
    }
  });
  
  
//jQuery(".showLocation").click(function(){
jQuery('.showLocation').on('click',function(e){
    var recent = $(this).val();
    if ($(this).is(":checked")){
        $("."+recent).show();
    }else{
        $("."+recent).hide();
    }
});
/* Registration Ajax */
/*
$('#register').on('click',function(e){
    e.preventDefault();
    var action = 'register_action';
    
    var formfirstName = jQuery("#firstName").val();
    var formlastName = jQuery("#lastName").val();
    var formemail = jQuery("#email").val();
    var formaltEmail = jQuery("#altEmail").val();
    var formphone = jQuery("#phone").val();
    var formaltPhone = jQuery("#altPhone").val();

    var formcountry = jQuery("#country").val();
    var formstate = jQuery("#state").val();
    var formaddress = jQuery("#address").val();
    var formcity = jQuery("#city").val();
    var formzipCode = jQuery("#zipCode").val();
    var formcompanyName = jQuery("#companyName").val();
    var formcompanyUrl = jQuery("#companyUrl").val();

    var formpassword = jQuery("#userpassword").val();
    var formconfirmPassword = jQuery("#confirmPassword").val();
   
    var ajaxdata = {    
        action: 'register_action',
        firstName: formfirstName,
        lastName: formlastName,
        email: formemail,
        altEmail: formaltEmail,
        phone: formphone,
        altPhone: formaltPhone,
        country: formcountry,
        state: formstate,
        address: formaddress,
        city: formcity,
        zipCode: formzipCode,
        companyName: formcompanyName,
        companyUrl: formcompanyUrl,
        password: formpassword,
        confirmPassword: formconfirmPassword
    };
    

    jQuery.ajax({
        type : "post",
        dataType : "json",
        url : ajaxurl,
        data : ajaxdata,
        success: function(response) {
            if(response.success =="1") {   
                jQuery("#message").removeClass('error_message').addClass('success_message');
                jQuery("#message").html(response.message);
                setTimeout(function(){
                    jQuery('#wp_signup_form').trigger("reset");
                    window.location.href = response.redirect_url;
                }, 3000);               
            }
            else{
                jQuery("#message").removeClass('success_message').addClass('error_message');
                jQuery("#message").html(response.message_data); 
            }            
        }
    });			
});   


// Login Customer - Ajax 
$('#login').on('click',function(e){
    e.preventDefault();
    var action = 'login_action';
    
    var userEmail = jQuery("#userEmail").val();
    var password = jQuery("#password").val();
    var remember = jQuery("#remember").val();
   
    var ajaxdata = {    
        action: action,
        userLogin: userEmail,
        password: password,
        remember: remember
    };
    

    jQuery.ajax({
        type : "post",
        dataType : "json",
        url : ajaxurl,
        data : ajaxdata,
        success: function(response) {
            if(response.success =="1") {                  
                jQuery("#message").removeClass('error_message').addClass('success_message');
                jQuery("#message").html(response.message+' '+response.message_data);               
                setTimeout(function(){
                    jQuery('#wp_login_form').trigger("reset"); 
                    window.location.href = response.redirect_url;
                }, 2000);

                
            }
            else{
                jQuery("#message").removeClass('success_message').addClass('error_message');
                jQuery("#message").html(response.message_data); 
            }            
        }
    });			
});   
*/