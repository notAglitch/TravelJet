function signUpUser(){
    var myUserName = document.forms["RegForm"]["Uname"]; 
    var myFullName = document.forms["RegForm"]["Fname"]; 
    var myEmail    = document.forms["RegForm"]["Email"]; 
    var dateOfBirth =document.forms["RegForm"]["dateOfB"]; 
    var phone = document.forms["RegForm"]["Telephone"];
    var mypass = document.forms["RegForm"]["pass"]; 
    var myConfrom = document.forms["RegForm"]["ComfromPass"]; 
    var checkBox = document.forms["RegForm"]["agrees"];
   
       
    if (myUserName.value == "")                                  
    { 
        window.alert("Please enter your User name."); 
        myUserName.focus(); 
        return false; 
    } 
    
    if (myFullName.value == "" && myFullName.value >=10)                                  
    { 
        window.alert("Please enter your Full name."); 
        myFullName.focus(); 
        return false; 
    } 
		if (myEmail.value == "")                                   
    { 
        window.alert("Please enter a valid e-mail address."); 
        myEmail.focus(); 
        return false; 
    } 
    if (dateOfBirth.value == "")                                   
    { 
        window.alert("Date of birth Error"); 
        dateOfBirth.focus(); 
        return false; 
    } 
    if (phone.value == "")                           
    { 
        window.alert("Please enter your telephone number."); 
        phone.focus(); 
        return false; 
    } 
    
    
		if(mypass.value < 8 || mypass.value == null){
        window.alert("Invalid Password !"); 
        mypass.focus(); 
        return false;
    }
		if(myConfrom.value != mypass.value)
      {
        window.alert("Doesn't match password and comfrom password !"); 
        myConfrom.focus(); 
        return false;
      }
      
      
      if (checkBox.checked == false){
        alert("Please tick with agree team of service ");
      }
       
}