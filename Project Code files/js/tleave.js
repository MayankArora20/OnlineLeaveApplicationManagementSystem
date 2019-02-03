function Validatefun() {
  
  if( document.getElementById('mob_error').innerHTML != "ok" || document.getElementById('name_error').innerHTML != "ok" || document.getElementById('to_error').innerHTML != "ok" || document.getElementById('from_error').innerHTML != "ok"
  || document.getElementById('email_error').innerHTML!= "ok"||document.getElementById('reas_error').innerHTML != "ok"||document.getElementById('per_error').innerHTML != "ok")
  
 
	   {
        alert("All required fields must be filled out");
        return false;
    }
}

function ValidateNam() {
	var letters = /^[A-Za-z ]+$/;
var nam=document.getElementById('Name').value;  
   
    
   if(nam.match(letters))
		 document.getElementById('name_error').innerHTML = "ok";
   else if (nam=="") 
      document.getElementById('name_error').innerHTML = "Username is required";
   else
	   document.getElementById('name_error').innerHTML = "Name can not be number ";
 }

function ValidateTeach()
{
  var nam=document.getElementById('Course').value;
  if(nam=="")
    document.getElementById('cor_error').innerHTML="Field Cannot be Left Blank";
  else
    document.getElementById('cor_error').innerHTML="ok";
}

function subs()
{
  var nam=document.getElementById('substitute').value;
  if(nam=='1')
    document.getElementById('subst').style.visibility="visible";
  else
    document.getElementById('subst').style.visibility="hidden";
}

function ValidateSubs()
{
   var nam=document.getElementById('subst').value;
  if(nam=="")
    document.getElementById('sub_error').innerHTML="Field Cannot be Left Blank";
  else
    document.getElementById('sub_error').innerHTML="ok";
}

 function Validateper() {
  var letters = /^[0-9a-zA-Z ]+$/;
   var nam=document.getElementById('personaladdress').value;  
   
    
   if(nam.match(letters))
   {
     document.getElementById('per_error').innerHTML = "ok";
    
   }
   else if (nam=="") 
      document.getElementById('per_error').innerHTML = "Address is required";
   else
     document.getElementById('per_error').innerHTML = "Invalid Adress ";
 }
 
 function Validateto() {
	var letters = /^\d{4}\-(0[1-9]|1[012])\-(0[1-9]|[12][0-9]|3[01])$/;
   var nam=document.getElementById('To').value;  
   
    
   if(nam.match(letters))
		 document.getElementById('to_error').innerHTML = "ok";
   else if (nam=="") 
      document.getElementById('to_error').innerHTML = "Date is required";
   else
	   document.getElementById('to_error').innerHTML = "Invalid Date ";
 }
  function Validatefrom() {
	var letters = /^\d{4}\-(0[1-9]|1[012])\-(0[1-9]|[12][0-9]|3[01])$/;
   var nam=document.getElementById('From').value;  
   
    
   if(nam.match(letters))
		 document.getElementById('from_error').innerHTML = "ok";
   else if (nam=="") 
      document.getElementById('from_error').innerHTML = "Date is required";
   else
	   document.getElementById('from_error').innerHTML = "Invalid Date ";
 }
 
 
 
   function Validateemail() {
	
	var letters = /^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/;
   var nam=document.getElementById('emailid').value;  
   
    
   if(nam.match(letters))
		 document.getElementById('email_error').innerHTML = "ok";
   else if (nam=="") 
      document.getElementById('email_error').innerHTML = "Email is required";
   else
	   document.getElementById('email_error').innerHTML = "Invalid Email ";
 }


 function Validatemob() {
	var letters = "[0-9]{10}"
   var nam=document.getElementById('Mobileno').value;  
   
    
   if(nam.match(letters))
		 document.getElementById('mob_error').innerHTML = "ok";
   else if (nam=="") 
      document.getElementById('mob_error').innerHTML = "mobile numberis required";
   else
	   document.getElementById('mob_error').innerHTML = "Invalid Number ";
 }
 

  function Validatereason() {
  var letters = /^[A-Za-z ]+$/;
var nam=document.getElementById('Reason').value;  
   
    
   if(nam.match(letters))
     document.getElementById('reas_error').innerHTML = "ok";
   else if (nam=="") 
      document.getElementById('reas_error').innerHTML = "Username is required";
   else
     document.getElementById('reas_error').innerHTML = "Name can not be number ";
 }
