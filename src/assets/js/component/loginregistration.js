


import $ from 'jquery';

// $.noConflict();
// var items = $(".list-wrapper .list-item");
// var numItems = items.length;
// var perPage = 4;

// items.slice(perPage).hide();
// var pageContainer = $('#pagination-container');

// pageContainer.pagination({
//     items: numItems,
//     itemsOnPage: perPage,
//     prevText: "&laquo;",
//     nextText: "&raquo;",
//     onPageClick: function (pageNumber) {
//         var showFrom = perPage * (pageNumber - 1);
//         var showTo = showFrom + perPage;
//         items.hide().slice(showFrom, showTo).show();
//     }
// });



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

jQuery('.chooseEnterprise').on('click',function(e){
    var type = $(this).attr('servertype');
    
    if(type=='enterprise'){
        jQuery("#enterprise-server-tab" ).trigger( "click" );
    }else if(type=='pro'){
        jQuery("#pro-server-tab" ).trigger( "click" );
    }else{
        jQuery("#budget-server-tab" ).trigger( "click" );
    }
    
});


/**
 *  Pagination of Dedicated Server page
 * 
 */

 var items = $("#budget-server tbody tr");
 var numItems = items.length;
 var perPage = 10;

 items.slice(perPage).hide();

 $('#budget-server-pagination').pagination({
     items: numItems,
     itemsOnPage: perPage,
     prevText: "&laquo;",
     nextText: "&raquo;",
     cssStyle:'light-theme',
     onPageClick: function (pageNumber) {
         var showFrom = perPage * (pageNumber - 1);
         var showTo = showFrom + perPage;
         items.hide().slice(showFrom, showTo).show();
     }
 });


 var items_pro = $("#pro-server tbody tr");
 var numItems_pro = items_pro.length;
 var perPage_pro = 10;

 items_pro.slice(perPage_pro).hide();

 $('#pro-server-pagination').pagination({
     items: numItems_pro,
     itemsOnPage: perPage_pro,
     prevText: "&laquo;",
     nextText: "&raquo;",
     cssStyle:'light-theme',
     onPageClick: function (pageNumber) {
         var showFrom = perPage_pro * (pageNumber - 1);
         var showTo = showFrom + perPage_pro;
         items_pro.hide().slice(showFrom, showTo).show();
     }
 });


 var items_ent = $("#enterprise-server tbody tr");
 var numItems_ent = items_ent.length;
 var perPage_ent = 10;

 items_ent.slice(perPage_ent).hide();

 $('#enterprise-server-pagination').pagination({
     items: numItems_ent,
     itemsOnPage: perPage_ent,
     prevText: "&laquo;",
     nextText: "&raquo;",
     cssStyle:'light-theme',
     onPageClick: function (pageNumber) {
         var showFrom = perPage_ent * (pageNumber - 1);
         var showTo = showFrom + perPage_ent;
         items_ent.hide().slice(showFrom, showTo).show();
     }
 });



 jQuery('#requestCallback').on('click',function(e){
    // var type = $(this).attr('servertype');
    // alert("Clicked button");
    jQuery('#container-contact-form').hide();

    jQuery('#container-request-form').show();
    window.location.hash = '#section2';


    // if(type=='enterprise'){
    //     jQuery("#enterprise-server-tab" ).trigger( "click" );
    // }else if(type=='pro'){
    //     jQuery("#pro-server-tab" ).trigger( "click" );
    // }else{
    //     jQuery("#budget-server-tab" ).trigger( "click" );
    // }
    
});









 




// var items = jQuery(".budget-server-page tbody tr");
// var numItems = items.length;
// var perPage = 5;

// items.slice(perPage).hide();

// jQuery('#dedi-pagination-container').pagination({
//     items: numItems,
//     itemsOnPage: perPage,
//     prevText: "&laquo;",
//     nextText: "&raquo;",
//     onPageClick: function (pageNumber) {
//         var showFrom = perPage * (pageNumber - 1);
//         var showTo = showFrom + perPage;
//         items.hide().slice(showFrom, showTo).show();
//     }
// });





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