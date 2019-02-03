
function Validatefun() {
  
  if( document.getElementById('mob_error').innerHTML != "ok" || document.getElementById('name_error').innerHTML != "ok"||
  document.getElementById('reg_error').innerHTML != "ok" || document.getElementById('per_error').innerHTML != "ok" || document.getElementById('to_error').innerHTML != "ok" || document.getElementById('from_error').innerHTML != "ok"
  || document.getElementById('email_error').innerHTML!= "ok" || document.getElementById('cor_error').innerHTML != "OK")
  
 
	   {
        alert("Required fields must be filled out");
        return false;
    }
}

function ValidateNam() {
	var letters = /^[A-Za-z ]+$/;
var nam=document.getElementById('Name').value;  
   
    
   if(nam.match(letters))
   {
		 document.getElementById('name_error').innerHTML = "ok";
		 
   }
   else if (nam=="") 
      document.getElementById('name_error').innerHTML = "Username is required";
   else
	   document.getElementById('name_error').innerHTML = "Name can not be number ";
 }
 
 function Validatereg() {
	var letters = /^[0-9a-zA-Z]+$/;
   var nam=document.getElementById('registration').value;  
   
    
   if(nam.match(letters)  && nam.length==8)
   {
		 document.getElementById('reg_error').innerHTML = "ok";
		
   }
   else if (nam=="") 
      document.getElementById('reg_error').innerHTML = "Registration number  is required";
   else
    document.getElementById('reg_error').innerHTML = "Invalid Registration Number ";
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
   {
		 document.getElementById('to_error').innerHTML = "ok";
		
   }
   else if (nam=="") 
      document.getElementById('to_error').innerHTML = "Date is required";
   else
	   document.getElementById('to_error').innerHTML = "Invalid Date ";
 }
  function Validatefrom() {
	  Validatecourse();
	  Validatesem();
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
   {
	   
		 document.getElementById('email_error').innerHTML = "ok";
		
   }
   else if (nam=="") 
      document.getElementById('email_error').innerHTML = "Email is required";
   else
	   document.getElementById('email_error').innerHTML = "Invalid Email ";
 }


 function Validatemob() {
	var letters = "[0-9]{10}"
   var nam=document.getElementById('Mobileno').value;  
   
    
   if(nam.match(letters))
   {
		 document.getElementById('mob_error').innerHTML = "ok";

   }
   else if (nam=="") 
      document.getElementById('mob_error').innerHTML = "mobile numberis required";
   else
	   document.getElementById('mob_error').innerHTML = "Invalid Number ";
 }
 
 function Validatecourse() {
	var letters = "-1"
   var nam=document.getElementById('Course').value;  
   
    
   if(nam.match(letters))
		 document.getElementById('cor_error').innerHTML = "select any one";
   
   else
   {
	   document.getElementById('cor_error').innerHTML = "OK";
	   
   }
 }
 
  function Validatesem() {
	var letters = "-1"
   var nam=document.getElementById('Semester').value;  
   
    
   if(nam.match(letters))
		 document.getElementById('sem_error').innerHTML = "select any one";
   
   else
	   document.getElementById('sem_error').innerHTML = "OK";
	   
   
 }
 
 
/* function Validatesel() {
	var letters = "-1"
   var nam=document.getElementById('1').value;  
   
    
   if(nam.match(letters))
		 document.getElementById('sel_error').innerHTML = "select any one";
   
   else
	   document.getElementById('sel_error').innerHTML = "OK";
 }*/
 
  function Validatereason() {
   var res=document.getElementById('Reason').value;  
   if (res=="") 
      document.getElementById('reas_error').innerHTML = "Reason is required";
   else
     document.getElementById('reas_error').innerHTML = "OK ";
 }

function Validater() {
  var letters = "-1"
   var nam=document.getElementById('1').value;  
   
    
   if(nam.match(letters))
     document.getElementById('c_error').innerHTML = "select any one";
   
   else
   {
     document.getElementById('c_error').innerHTML = "OK";
     
   }
 }