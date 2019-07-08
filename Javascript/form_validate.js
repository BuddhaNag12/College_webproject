$(document).ready(function(){
    $("input#username").keyup(function(){
  
      var emailVal = $("#username").val(); 
  
     console.log("email is "+emailVal);
  
      $.post('checkemail.php', {email : emailVal}, function(data) {
  
        if(data==1) {
          
           $('#infedusername').addClass("invalid-feedback");
           $('#infedusername').html(emailVal+" is not Available").show();
           $("input#username").addClass("is-invalid");
           $('#btnSubmit').prop('disabled', true);
           $('#btnfeed').prop('title', 'Chose unique email');
     
        }else{
           $('#btnfeed').prop('title', '');
           $('#btnSubmit').prop('disabled', false);
           $("input#username").removeClass("is-invalid");
           $("input#username").addClass("is-valid");
           $('#infedusername').hide();
          
        }
      });
    });
  });
  
  $(document).ready(function(){
    $("input#username1").keyup(function(){
      var emailVal = $("#username1").val(); 
  
     console.log("email is "+emailVal);
  
      $.post('checkemail.php', {email1 : emailVal}, function(data) {
  
        if(data==1) {
           $('#btnSubmit1').prop('disabled', false);
           $('#infedusername1').addClass("invalid-feedback");
           $('#infedusername1').html(emailVal+" is not Available").show();
           $("input#username1").addClass("is-invalid");
           $('#btnSubmit1').prop('disabled', true);
           $('#btnfeed1').prop('title', 'Chose unique email');
        }else{
           $('#btnfeed1').prop('title', '');
           $('#btnSubmit1').prop('disabled', false);
           $("input#username1").removeClass("is-invalid");
           $("input#username1").addClass("is-valid");
           $('#infedusername1').hide();
          
        }
      });
    });
  });
  
  function displayForm(c) {
    if (c.value == "2") {    
        jQuery('#student').show();
       
        jQuery('#teacher').hide();
        jQuery('#s').show();
        jQuery('#t').hide();
       
       // $('div.r2').hide();
    }
        if (c.value == "1") {
         
         jQuery('#teacher').show();
         jQuery('#student').hide();
         jQuery('#t').show();
         jQuery('#s').hide();
     
        // $('div.r1').hide();
    }
};