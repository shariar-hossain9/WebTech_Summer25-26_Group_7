document.querySelector("form").addEventListener("submit",function(e){
var email=valueOf(this,"email"),password=this.elements["password"].value;
if(!validEmail(email)){e.preventDefault();errorMessage("Enter a valid email address");}
else if(password.length<6){e.preventDefault();errorMessage("Password must be at least 6 characters");}
});