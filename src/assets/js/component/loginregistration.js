import $ from 'jquery';


/* Registration Ajax */
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

/* Login Customer - Ajax */
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