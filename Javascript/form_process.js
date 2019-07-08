
function Logout() {
	var txt;
  var yes=confirm("Logout First!");
  if(yes==true)
	{
    location.href = "session_components/logout.php";
   	txt="logout successfull";
	
	 }else
	 {
		 txt="Cancelled";
	
	 }
 		alert(txt);
		}
	
        function Logout1() {
            var txt;
          var yes=confirm("ARE U SURE YOU WANT TO LOG OUT!");
          if(yes==true)
            {
              location.href = "session_components/logout.php";
               txt="logout successfull";
               return true;
            
             }else
             {
                 txt="sure!";
                 return false;
            
             }
                 
                }


                function validateForm() {
                  var x = document.forms["feedback"]["name"].value;
                  var y = document.forms["feedback"]["email"].value;
                  var z = document.forms["feedback"]["message"].value;
                  if (x == "") {
                    alert("Name must be filled out");
                    return false;
                  }else if(y==""){
                    alert("Email must be filled out");
                    return false;
                  }else if(z==""){
                    alert("Message must be filled out");
                    return false;
                  }
                  else{
                    alert("Feedback sent successfull");
                    return true;
                    
                    
                  }
                }

    function validateForm2() {
                  var x = document.forms["updateprofile"]["name"].value;
                  var y = document.forms["updateprofile"]["email"].value;
                  var z = document.forms["updateprofile"]["pass1"].value;
                 
                  if (x == "") {
                    alert("Name must be filled out");
                    return false;
                  }else if(y==""){
                    alert("Email must be filled out");
                    return false;
                  }else if(z==""){
                    alert("Password must be filled out");
                    return false;
                  }
                
                  else{
                    alert("Feedback sent successfull");
                    return true;
                    
                    
                  }
                }
                function checkfile() {
                      var file=document.getElementById('files').value;
                      if (!file) {
                        alert("Um, couldn't find the fileinput element.");
                        return false;
                      }else{
                        return true;
                      }
            
                }


         
                function drop()
                {
                  var txt;
                  var  confirms=confirm("Are you sure u want to delete your account?")
                
                
                  if(confirms==true)
                  {
                    location.href = "index.php";
                     txt="Account has been deleted";
                  
                   }else
                   {
                     txt="Cancelled";
                  
                   }
                     alert(txt);
                  }