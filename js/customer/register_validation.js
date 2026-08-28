document.querySelector("form").addEventListener("submit",function(e){
var n=valueOf(this,"name"),m=valueOf(this,"email"),p=valueOf(this,"phone"),w=this.elements["password"].value;
if(n.length<3){e.preventDefault();errorMessage("Name must be at least 3 characters");}
else if(!validEmail(m)){e.preventDefault();errorMessage("Enter a valid email address");}
else if(!validPhone(p)){e.preventDefault();errorMessage("Enter a valid 11 digit Bangladeshi phone number");}
else if(w.length<6){e.preventDefault();errorMessage("Password must be at least 6 characters");}
});