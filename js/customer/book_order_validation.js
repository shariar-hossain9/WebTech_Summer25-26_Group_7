document.querySelector("form").addEventListener("submit",function(e){
var a=valueOf(this,"pickup_address"),b=valueOf(this,"delivery_address"),n=valueOf(this,"receiver_name"),p=valueOf(this,"receiver_phone"),d=valueOf(this,"product_details");
if(a.length<5||b.length<5){e.preventDefault();errorMessage("Enter complete pickup and delivery addresses");}
else if(n.length<3){e.preventDefault();errorMessage("Receiver name must be at least 3 characters");}
else if(!validPhone(p)){e.preventDefault();errorMessage("Enter a valid receiver phone number");}
else if(d.length<3){e.preventDefault();errorMessage("Enter product details");}
});